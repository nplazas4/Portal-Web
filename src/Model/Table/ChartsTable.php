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
            ->integer('PROJ_ID')
            ->requirePresence('PROJ_ID', 'create')
            ->notEmpty('PROJ_ID');

        $validator
            ->date('START_DATE')
            ->requirePresence('START_DATE', 'create')
            ->notEmpty('START_DATE');

        $validator
            ->date('FINISH_DATE')
            ->requirePresence('FINISH_DATE', 'create')
            ->notEmpty('FINISH_DATE');

        $validator
            ->integer('BL_CHART')
            ->requirePresence('BL_CHART', 'create')
            ->notEmpty('BL_CHART');

        $validator
            ->integer('EJEC')
            ->requirePresence('EJEC', 'create')
            ->notEmpty('EJEC');

        $validator
            ->integer('EAC')
            ->requirePresence('EAC', 'create')
            ->notEmpty('EAC');

        return $validator;
    }
}
