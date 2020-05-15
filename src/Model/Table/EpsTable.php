<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eps Model
 *
 * @method \App\Model\Entity\Ep get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ep newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ep[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ep|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ep|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ep patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ep[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ep findOrCreate($search, callable $callback = null, $options = [])
 */
class EpsTable extends Table
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

        $this->setTable('eps');
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
            ->scalar('EPS_ID')
            ->maxLength('EPS_ID', 100)
            ->requirePresence('EPS_ID', 'create')
            ->notEmpty('EPS_ID')
            ->add('EPS_ID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('EPS_NAME')
            ->maxLength('EPS_NAME', 100)
            ->requirePresence('EPS_NAME', 'create')
            ->notEmpty('EPS_NAME');

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
        $rules->add($rules->isUnique(['EPS_ID']));

        return $rules;
    }
}
