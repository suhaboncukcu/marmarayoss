<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organs Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\RequestsTable|\Cake\ORM\Association\HasMany $Requests
 *
 * @method \App\Model\Entity\Organ get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organ newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Organ[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organ|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organ patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organ[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organ findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrgansTable extends Table
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

        $this->setTable('organs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Requests', [
            'foreignKey' => 'organ_id'
        ]);
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->numeric('volume')
            ->requirePresence('volume', 'create')
            ->notEmpty('volume');

        $validator
            ->scalar('dna_map')
            ->maxLength('dna_map', 255)
            ->allowEmpty('dna_map');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmpty('image');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->dateTime('expire_date')
            ->requirePresence('expire_date', 'create')
            ->notEmpty('expire_date');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
