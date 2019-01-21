<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Risks Model
 *
 * @method \App\Model\Entity\Risk get($primaryKey, $options = [])
 * @method \App\Model\Entity\Risk newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Risk[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Risk|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Risk|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Risk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Risk[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Risk findOrCreate($search, callable $callback = null, $options = [])
 */
class RisksTable extends Table
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

        $this->setTable('risks');
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
            ->integer('RISK_NUMBER')
            ->requirePresence('RISK_NUMBER', 'create')
            ->notEmpty('RISK_NUMBER');

        $validator
            ->scalar('RISK_NAME')
            ->maxLength('RISK_NAME', 100)
            ->requirePresence('RISK_NAME', 'create')
            ->notEmpty('RISK_NAME');

        $validator
            ->scalar('PROBABILITY')
            ->requirePresence('PROBABILITY', 'create')
            ->notEmpty('PROBABILITY');

        $validator
            ->scalar('IMPACT')
            ->requirePresence('IMPACT', 'create')
            ->notEmpty('IMPACT');

        $validator
            ->integer('IMPACT_RISK')
            ->requirePresence('IMPACT_RISK', 'create')
            ->notEmpty('IMPACT_RISK');

        $validator
            ->scalar('PLAN_ONE')
            ->maxLength('PLAN_ONE', 200)
            ->requirePresence('PLAN_ONE', 'create')
            ->notEmpty('PLAN_ONE');

        $validator
            ->scalar('PLAN_TWO')
            ->maxLength('PLAN_TWO', 200)
            ->requirePresence('PLAN_TWO', 'create')
            ->notEmpty('PLAN_TWO');

        $validator
            ->scalar('PLAN_THREE')
            ->maxLength('PLAN_THREE', 200)
            ->requirePresence('PLAN_THREE', 'create')
            ->notEmpty('PLAN_THREE');

        $validator
            ->scalar('PLAN_FOUR')
            ->maxLength('PLAN_FOUR', 200)
            ->requirePresence('PLAN_FOUR', 'create')
            ->notEmpty('PLAN_FOUR');

        $validator
            ->scalar('PLAN_FIVE')
            ->maxLength('PLAN_FIVE', 200)
            ->requirePresence('PLAN_FIVE', 'create')
            ->notEmpty('PLAN_FIVE');

        $validator
            ->integer('RISK_QUALIFICATION')
            ->requirePresence('RISK_QUALIFICATION', 'create')
            ->notEmpty('RISK_QUALIFICATION');

        $validator
            ->scalar('PLAN_ONE_S')
            ->maxLength('PLAN_ONE_S', 200)
            ->requirePresence('PLAN_ONE_S', 'create')
            ->notEmpty('PLAN_ONE_S');

        $validator
            ->scalar('PLAN_TWO_S')
            ->maxLength('PLAN_TWO_S', 200)
            ->requirePresence('PLAN_TWO_S', 'create')
            ->notEmpty('PLAN_TWO_S');

        $validator
            ->scalar('PLAN_THREE_S')
            ->maxLength('PLAN_THREE_S', 200)
            ->requirePresence('PLAN_THREE_S', 'create')
            ->notEmpty('PLAN_THREE_S');

        $validator
            ->scalar('PLAN_FOUR_S')
            ->maxLength('PLAN_FOUR_S', 200)
            ->requirePresence('PLAN_FOUR_S', 'create')
            ->notEmpty('PLAN_FOUR_S');

        $validator
            ->scalar('PLAN_FIVE_S')
            ->maxLength('PLAN_FIVE_S', 200)
            ->requirePresence('PLAN_FIVE_S', 'create')
            ->notEmpty('PLAN_FIVE_S');

        $validator
            ->integer('TOTAL_RISK')
            ->requirePresence('TOTAL_RISK', 'create')
            ->notEmpty('TOTAL_RISK');

        return $validator;
    }
}
