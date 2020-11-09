<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');
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
            ->integer('user_id')
            ->allowEmptyString('user_id', null, 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 20)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 30)
            ->allowEmptyString('lastname');

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 30)
            ->allowEmptyString('firstname');

        $validator
            ->date('birthday')
            ->allowEmptyDate('birthday');

        $validator
            ->scalar('country')
            ->maxLength('country', 20)
            ->allowEmptyString('country');

        $validator
            ->scalar('postal')
            ->maxLength('postal', 10)
            ->allowEmptyString('postal');

        $validator
            ->scalar('address')
            ->maxLength('address', 30)
            ->allowEmptyString('address');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 30)
            ->allowEmptyString('address1');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone');

        $validator
            ->scalar('phone1')
            ->maxLength('phone1', 20)
            ->allowEmptyString('phone1');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('email1')
            ->maxLength('email1', 30)
            ->allowEmptyString('email1');

        $validator
            ->scalar('role')
            ->allowEmptyString('role');

        $validator
            ->scalar('gender')
            ->allowEmptyString('gender');

        $validator
            ->allowEmptyFile('profile_photo');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->dateTime('ins_date')
            ->allowEmptyDateTime('ins_date');

        $validator
            ->scalar('ins_user_name')
            ->maxLength('ins_user_name', 20)
            ->allowEmptyString('ins_user_name');

        $validator
            ->dateTime('upd_date')
            ->allowEmptyDateTime('upd_date');

        $validator
            ->scalar('upd_user_name')
            ->maxLength('upd_user_name', 20)
            ->allowEmptyString('upd_user_name');

        $validator
            ->scalar('operation')
            ->maxLength('operation', 30)
            ->allowEmptyString('operation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)  {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
