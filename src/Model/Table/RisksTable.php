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
            ->scalar('RISK_NUMBER')
            ->maxLength('RISK_NUMBER', 100)
            ->requirePresence('RISK_NUMBER', 'create')
            ->notEmpty('RISK_NUMBER');

        $validator
            ->scalar('RISK_NAME')
            ->maxLength('RISK_NAME', 300)
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
            ->scalar('PROBABILITY_POST')
            ->requirePresence('PROBABILITY_POST', 'create');

        $validator
             ->scalar('IMPACT_POST')
             ->requirePresence('IMPACT_POST', 'create');

        $validator
            ->decimal('IMPACT_RISK')
            ->requirePresence('IMPACT_RISK', 'create')
            ->notEmpty('IMPACT_RISK');


        $validator
            ->scalar('PLAN_ONE')
            ->maxLength('PLAN_ONE', 600)
            ->requirePresence('PLAN_ONE', 'create')
            ->notEmpty('PLAN_ONE');

        $validator
            ->scalar('PLAN_TWO')
            ->maxLength('PLAN_TWO', 600)
            ->requirePresence('PLAN_TWO', 'create')
            ->notEmpty('PLAN_TWO');

        $validator
            ->scalar('PLAN_THREE')
            ->maxLength('PLAN_THREE', 600)
            ->requirePresence('PLAN_THREE', 'create')
            ->notEmpty('PLAN_THREE');

        $validator
            ->scalar('PLAN_FOUR')
            ->maxLength('PLAN_FOUR', 600)
            ->requirePresence('PLAN_FOUR', 'create')
            ->notEmpty('PLAN_FOUR');

        $validator
            ->scalar('PLAN_FIVE')
            ->maxLength('PLAN_FIVE', 600)
            ->requirePresence('PLAN_FIVE', 'create')
            ->notEmpty('PLAN_FIVE');

        $validator
            ->scalar('ACTION_STATE')
            ->requirePresence('ACTION_STATE', 'create')
            ->notEmpty('ACTION_STATE');

        $validator
            ->scalar('MATERIALIZACION')
            ->requirePresence('MATERIALIZACION', 'create')
            ->notEmpty('MATERIALIZACION');

        $validator
            ->integer('PROJECT_CODE')
            ->requirePresence('PROJECT_CODE', 'create')
            ->notEmpty('PROJECT_CODE');

        return $validator;
    }
}
