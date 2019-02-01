<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indicators Model
 *
 * @method \App\Model\Entity\Indicator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indicator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Indicator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indicator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indicator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indicator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indicator findOrCreate($search, callable $callback = null, $options = [])
 */
class IndicatorsTable extends Table
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

        $this->setTable('indicators');
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
            ->decimal('CPI')
            ->requirePresence('CPI', 'create')
            ->notEmpty('CPI');

        $validator
            ->decimal('SPI_EXTERNO')
            ->requirePresence('SPI_EXTERNO', 'create')
            ->notEmpty('SPI_EXTERNO');

        $validator
            ->decimal('TOTAL_PRES')
            ->requirePresence('TOTAL_PRES', 'create')
            ->notEmpty('TOTAL_PRES');

        $validator
            ->decimal('TOTAL_EJEC_USD')
            ->requirePresence('TOTAL_EJEC_USD', 'create')
            ->notEmpty('TOTAL_EJEC_USD');

        $validator
            ->decimal('PRES_ANUAL')
            ->requirePresence('PRES_ANUAL', 'create')
            ->notEmpty('PRES_ANUAL');

        $validator
            ->decimal('EJECT_ANUAL')
            ->requirePresence('EJECT_ANUAL', 'create')
            ->notEmpty('EJECT_ANUAL');

        return $validator;
    }
}
