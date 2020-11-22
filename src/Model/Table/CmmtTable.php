<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cmmt Model
 *
 * @method \App\Model\Entity\Cmmt get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cmmt newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cmmt[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cmmt|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cmmt saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cmmt patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cmmt[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cmmt findOrCreate($search, callable $callback = null, $options = [])
 */
class CmmtTable extends Table
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

        $this->setTable('cmmt');
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
            ->integer('itemid_')
            ->allowEmptyString('itemid_');

        $validator
            ->scalar('modulName')
            ->maxLength('modulName', 45)
            ->allowEmptyString('modulName');

        $validator
            ->scalar('authorName')
            ->maxLength('authorName', 45)
            ->allowEmptyString('authorName');

        $validator
            ->scalar('commentBody')
            ->maxLength('commentBody', 255)
            ->allowEmptyString('commentBody');

        $validator
            ->dateTime('createDate')
            ->allowEmptyDateTime('createDate');

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
        $rules->add($rules->isUnique(['createDate']));

        return $rules;
    }
}
