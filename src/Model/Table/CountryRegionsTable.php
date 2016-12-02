<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CountryRegions Model
 *
 * @property \Cake\ORM\Association\HasMany $StateProvinces
 *
 * @method \App\Model\Entity\CountryRegion get($primaryKey, $options = [])
 * @method \App\Model\Entity\CountryRegion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CountryRegion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CountryRegion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CountryRegion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CountryRegion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CountryRegion findOrCreate($search, callable $callback = null)
 */
class CountryRegionsTable extends Table
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

        $this->table('country_regions');
        $this->displayField('countryRegion');
        $this->primaryKey('id');

        $this->hasMany('StateProvinces', [
            'foreignKey' => 'country_region_id'
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
            ->requirePresence('countryRegion', 'create')
            ->notEmpty('countryRegion');

        return $validator;
    }
}
