<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('projects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
        'FOTO' => [
            'path' => 'webroot{DS}img{DS}maps{DS}{field-value:ID_PROJECT}'
        ],
        'CHART' => [
            'path' => 'webroot{DS}files{DS}tg{DS}{field-value:ID_PROJECT}'
        ]
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('ID_PROJECT')
            ->maxLength('ID_PROJECT', 100)
            ->requirePresence('ID_PROJECT', 'create')
            ->notEmpty('ID_PROJECT')
            ->add('ID_PROJECT', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('PROJECT_NAME')
            ->maxLength('PROJECT_NAME', 500)
            ->allowEmpty('PROJECT_NAME');

        $validator
            ->scalar('Proj_Obj')
            ->maxLength('Proj_Obj', 200)
            ->allowEmpty('Proj_Obj');

        $validator
            ->scalar('DESCRIPTION')
            ->allowEmpty('DESCRIPTION');

        $validator
            ->numeric('PLANNED')
            ->allowEmpty('PLANNED');

        $validator
            ->numeric('EXECUTED')
            ->allowEmpty('EXECUTED');

        $validator
            ->decimal('AC')
            ->allowEmpty('AC');

        $validator
            ->decimal('PV')
            ->allowEmpty('PV');

        $validator
            ->decimal('CAPEX_PLANNED')
            ->allowEmpty('CAPEX_PLANNED');

        $validator
            ->decimal('CAPEX_EXECUTED')
            ->allowEmpty('CAPEX_EXECUTED');

        $validator
            ->scalar('FASE')
            ->allowEmpty('FASE');

        $validator
            ->scalar('REGIONAL')
            ->allowEmpty('REGIONAL');

        $validator
            ->scalar('ALCANCE')
            // ->maxLength('ALCANCE', 500)
            ->allowEmpty('ALCANCE');

        $validator
            ->scalar('SOLICITUD')
            ->maxLength('SOLICITUD', 500)
            ->allowEmpty('SOLICITUD');

        $validator
            ->decimal('DISTANCIA')
            ->allowEmpty('DISTANCIA');

        $validator
            ->decimal('LINEA_TRANS')
            ->allowEmpty('LINEA_TRANS');

        $validator
            ->date('FOPO')
            ->allowEmpty('FOPO');

        $validator
            ->date('FEPO')
            ->allowEmpty('FEPO');

        $validator
            ->date('ADJUDICACION')
            ->allowEmpty('ADJUDICACION');

        $validator
            ->date('APROBACION')
            ->allowEmpty('APROBACION');

        $validator
            ->decimal('TORRE')
            ->allowEmpty('TORRE');

        $validator
            ->decimal('NUM_SUBESTACION')
            ->allowEmpty('NUM_SUBESTACION');

        $validator
            ->numeric('CPI_ANUAL')
            ->allowEmpty('CPI_ANUAL');

        $validator
            ->decimal('AC_BAC')
            ->allowEmpty('AC_BAC');

        $validator
            ->decimal('AC_PPTO')
            ->allowEmpty('AC_PPTO');

        $validator
            ->decimal('PROJ_TOTAL_PRES')
            ->allowEmpty('PROJ_TOTAL_PRES');

        $validator
            ->decimal('TOTAL_FORECAST')
            ->allowEmpty('TOTAL_FORECAST');

        $validator
            ->decimal('PROJ_AC')
            ->allowEmpty('PROJ_AC');

        $validator
            ->decimal('PRES_PROJ')
            ->allowEmpty('PRES_PROJ');

        $validator
            ->decimal('FORECAST_PROJ')
            ->allowEmpty('FORECAST_PROJ');

        $validator
            ->scalar('CATEGORY')
            ->allowEmpty('CATEGORY');

        $validator
            ->integer('STATUS')
            ->allowEmpty('STATUS');

        $validator
            ->allowEmpty('FOTO');

        $validator
            ->integer('EPS_REL')
            ->allowEmpty('EPS_REL');

        $validator
            ->allowEmpty('CHART');

        $validator
            ->decimal('IGR')
            ->allowEmpty('IGR');

        $validator
            ->date('IGR_DATE')
            ->allowEmpty('IGR_DATE');

        $validator
            ->date('CPI_DATE')
            ->allowEmpty('CPI_DATE');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['ID_PROJECT']));

        return $rules;
    }
}
