<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PhoneTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Phones
 *
 * @method \App\Model\Entity\PhoneType get($primaryKey, $options = [])
 * @method \App\Model\Entity\PhoneType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PhoneType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PhoneType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PhoneType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PhoneType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PhoneType findOrCreate($search, callable $callback = null)
 */
class PhoneTypesTable extends Table
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

        $this->table('phone_types');
        $this->displayField('phoneType');
        $this->primaryKey('id');

        $this->hasMany('Phones', [
            'foreignKey' => 'phone_type_id'
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
            ->requirePresence('phoneType', 'create')
            ->notEmpty('phoneType')
            ->add('phoneType', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['phoneType']));

        return $rules;
    }
}
