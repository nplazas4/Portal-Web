<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Charts Model
 *
 * @method \App\Model\Entity\Chart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Chart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chart|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chart|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chart findOrCreate($search, callable $callback = null, $options = [])
 */
class ChartsTable extends Table
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

        $this->setTable('charts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
        'EXCEL_CHART' => [
            'path' => 'webroot{DS}img{DS}maps{DS}{field-value:PROJECT_CODE}'
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
            ->allowEmpty('EXCEL_CHART');
            // ->maxLength('EXCEL_CHART', 255)
            // ->requirePresence('EXCEL_CHART', 'create')
            // ->notEmpty('EXCEL_CHART');

        $validator
            ->integer('PROJECT_CODE')
            ->requirePresence('PROJECT_CODE', 'create')
            ->notEmpty('PROJECT_CODE');

        return $validator;
    }
}
