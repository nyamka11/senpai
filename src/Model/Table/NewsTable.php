<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * News Model
 *
 * @method \App\Model\Entity\News get($primaryKey, $options = [])
 * @method \App\Model\Entity\News newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\News[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\News|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\News saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\News patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\News[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\News findOrCreate($search, callable $callback = null, $options = [])
 */
class NewsTable extends Table
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

        $this->hasMany('cmmt')
        ->setForeignKey('itemid_')  //id taaruulj bgaa heseg ON gsn vg
        ->setConditions(['cmmt.modulName' => 'News'])  //Nohtsol
        ->setDependent(true);

        $this->setTable('news');
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
            ->scalar('title')
            ->allowEmptyString('title')
            ->notEmptyString('title');

        $validator
            ->scalar('body')
            ->allowEmptyString('body');

        $validator
            ->scalar('newsImg')
            ->allowEmptyString('newsImg');

        $validator
            ->scalar('placeoforigin')
            ->maxLength('placeoforigin', 255)
            ->notEmptyString('placeoforigin');

        $validator
            ->scalar('category')
            ->maxLength('category', 45)
            ->allowEmptyString('category');

        $validator
            ->scalar('author_id')
            ->maxLength('author_id', 45)
            ->allowEmptyString('author_id');

        $validator
            ->scalar('author_name')
            ->maxLength('author_name', 100)
            ->allowEmptyString('author_name');

        $validator
            ->dateTime('date')
            ->allowEmptyDateTime('date');

        $validator
            ->integer('read_count')
            ->allowEmptyString('read_count');

        return $validator;
    }
}
