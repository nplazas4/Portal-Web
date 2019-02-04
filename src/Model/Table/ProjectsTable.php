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
            ->notEmpty('ID_PROJECT');

        $validator
            ->scalar('PROJECT_NAME')
            ->maxLength('PROJECT_NAME', 500)
            ->requirePresence('PROJECT_NAME', 'create')
            ->notEmpty('PROJECT_NAME');

        $validator
            ->scalar('Proj_Obj')
            ->maxLength('Proj_Obj', 200)
            ->requirePresence('Proj_Obj', 'create')
            ->notEmpty('Proj_Obj');

        $validator
            ->scalar('DESCRIPTION')
            ->maxLength('DESCRIPTION', 500)
            ->requirePresence('DESCRIPTION', 'create')
            ->notEmpty('DESCRIPTION');

        $validator
            ->decimal('PLANNED')
            ->requirePresence('PLANNED', 'create')
            ->notEmpty('PLANNED');

        $validator
            ->decimal('EXECUTED')
            ->requirePresence('EXECUTED', 'create')
            ->notEmpty('EXECUTED');

        $validator
            ->decimal('AC')
            ->requirePresence('AC', 'create')
            ->notEmpty('AC');

        $validator
            ->decimal('PV')
            ->requirePresence('PV', 'create')
            ->notEmpty('PV');

        $validator
            ->decimal('CAPEX_PLANNED')
            ->requirePresence('CAPEX_PLANNED', 'create')
            ->notEmpty('CAPEX_PLANNED');

        $validator
            ->decimal('CAPEX_EXECUTED')
            ->requirePresence('CAPEX_EXECUTED', 'create')
            ->notEmpty('CAPEX_EXECUTED');

        $validator
            ->scalar('FASE')
            ->requirePresence('FASE', 'create')
            ->notEmpty('FASE');

        $validator
            ->scalar('REGIONAL')
            ->requirePresence('REGIONAL', 'create')
            ->notEmpty('REGIONAL');

        $validator
            ->scalar('ALCANCE')
            ->maxLength('ALCANCE', 500)
            ->requirePresence('ALCANCE', 'create')
            ->notEmpty('ALCANCE');

        $validator
            ->scalar('SOLICITUD')
            ->maxLength('SOLICITUD', 500)
            ->requirePresence('SOLICITUD', 'create')
            ->notEmpty('SOLICITUD');

        $validator
            ->integer('DISTANCIA')
            ->requirePresence('DISTANCIA', 'create')
            ->notEmpty('DISTANCIA');

        $validator
            ->integer('LINEA_TRANS')
            ->requirePresence('LINEA_TRANS', 'create')
            ->notEmpty('LINEA_TRANS');

        $validator
            ->date('FOPO')
            ->requirePresence('FOPO', 'create')
            ->notEmpty('FOPO');

        $validator
            ->date('FEPO')
            ->requirePresence('FEPO', 'create')
            ->notEmpty('FEPO');

        $validator
            ->date('ADJUDICACION')
            ->requirePresence('ADJUDICACION', 'create')
            ->notEmpty('ADJUDICACION');

        $validator
            ->date('APROBACION')
            ->requirePresence('APROBACION', 'create')
            ->notEmpty('APROBACION');

        $validator
            ->integer('TORRE')
            ->requirePresence('TORRE', 'create')
            ->notEmpty('TORRE');

        $validator
            ->integer('NUM_SUBESTACION')
            ->requirePresence('NUM_SUBESTACION', 'create')
            ->notEmpty('NUM_SUBESTACION');

        $validator
            ->decimal('CPI_ANUAL')
            ->requirePresence('CPI_ANUAL', 'create')
            ->notEmpty('CPI_ANUAL');

        $validator
            ->decimal('AC_BAC')
            ->requirePresence('AC_BAC', 'create')
            ->notEmpty('AC_BAC');

        $validator
            ->decimal('AC_PPTO')
            ->requirePresence('AC_PPTO', 'create')
            ->notEmpty('AC_PPTO');

        $validator
            ->decimal('PROJ_TOTAL_PRES')
            ->requirePresence('PROJ_TOTAL_PRES', 'create')
            ->notEmpty('PROJ_TOTAL_PRES');

        $validator
            ->decimal('TOTAL_FORECAST')
            ->requirePresence('TOTAL_FORECAST', 'create')
            ->notEmpty('TOTAL_FORECAST');

        $validator
            ->decimal('PROJ_AC')
            ->requirePresence('PROJ_AC', 'create')
            ->notEmpty('PROJ_AC');

        $validator
            ->decimal('PRES_PROJ')
            ->requirePresence('PRES_PROJ', 'create')
            ->notEmpty('PRES_PROJ');

        $validator
            ->decimal('FORECAST_PROJ')
            ->requirePresence('FORECAST_PROJ', 'create')
            ->notEmpty('FORECAST_PROJ');

        return $validator;
    }
}
