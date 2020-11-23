<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visa Model
 *
 * @method \App\Model\Entity\Visa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Visa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visa findOrCreate($search, callable $callback = null, $options = [])
 */
class VisaTable extends Table
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

        $this->setTable('visa');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('authorId')
            ->allowEmptyString('authorId');

        $validator
            ->scalar('authorName')
            ->maxLength('authorName', 45)
            ->allowEmptyString('authorName');

        $validator
            ->scalar('type')
            ->maxLength('type', 45)
            ->allowEmptyString('type');

        $validator
            ->scalar('body')
            ->maxLength('body', 4294967295)
            ->allowEmptyString('body');

        $validator
            ->dateTime('createDate')
            ->allowEmptyDateTime('createDate');

        $validator
            ->dateTime('updateDate')
            ->allowEmptyDateTime('updateDate');

        return $validator;
    }
}
