<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projectcodes Model
 *
 * @method \App\Model\Entity\Projectcode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projectcode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Projectcode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projectcode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projectcode|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projectcode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projectcode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projectcode findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectcodesTable extends Table
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

        $this->setTable('projectcodes');
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
            ->scalar('CODE_NAME')
            ->maxLength('CODE_NAME', 100)
            ->requirePresence('CODE_NAME', 'create')
            ->notEmpty('CODE_NAME');

        $validator
            ->scalar('CODE_DESCRIPTION')
            ->maxLength('CODE_DESCRIPTION', 500)
            ->requirePresence('CODE_DESCRIPTION', 'create')
            ->notEmpty('CODE_DESCRIPTION');

        return $validator;
    }
}
