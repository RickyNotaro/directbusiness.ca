<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StateProvinces Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CountryRegions
 * @property \Cake\ORM\Association\HasMany $Addresses
 *
 * @method \App\Model\Entity\StateProvince get($primaryKey, $options = [])
 * @method \App\Model\Entity\StateProvince newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StateProvince[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StateProvince|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateProvince patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StateProvince[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StateProvince findOrCreate($search, callable $callback = null)
 */
class StateProvincesTable extends Table
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

        $this->table('state_provinces');
        $this->displayField('stateProvince');
        $this->primaryKey('id');

        $this->belongsTo('CountryRegions', [
            'foreignKey' => 'country_region_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'state_province_id'
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
            ->requirePresence('stateProvince', 'create')
            ->notEmpty('stateProvince');

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
        $rules->add($rules->existsIn(['country_region_id'], 'CountryRegions'));

        return $rules;
    }
}
