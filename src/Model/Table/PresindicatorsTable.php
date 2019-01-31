<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Presindicators Model
 *
 * @method \App\Model\Entity\Presindicator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Presindicator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Presindicator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Presindicator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Presindicator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Presindicator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Presindicator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Presindicator findOrCreate($search, callable $callback = null, $options = [])
 */
class PresindicatorsTable extends Table
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

        $this->setTable('presindicators');
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
            ->integer('AC_ID')
            ->requirePresence('AC_ID', 'create')
            ->notEmpty('AC_ID');

        $validator
            ->integer('ID_PARENT')
            ->allowEmpty('ID_PARENT');

        $validator
            ->scalar('Indicator_Desc')
            ->maxLength('Indicator_Desc', 80)
            ->requirePresence('Indicator_Desc', 'create')
            ->notEmpty('Indicator_Desc');

        $validator
            ->integer('Monto_COP')
            ->requirePresence('Monto_COP', 'create')
            ->notEmpty('Monto_COP');

        $validator
            ->integer('Monto_USD')
            ->requirePresence('Monto_USD', 'create')
            ->notEmpty('Monto_USD');

        $validator
            ->integer('PROJ_CODE')
            ->requirePresence('PROJ_CODE', 'create')
            ->notEmpty('PROJ_CODE');

        return $validator;
    }
}
