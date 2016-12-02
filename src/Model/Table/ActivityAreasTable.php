<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActivityAreas Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 * @property \Cake\ORM\Association\HasMany $Enterprises
 * @property \Cake\ORM\Association\HasMany $Jobs
 *
 * @method \App\Model\Entity\ActivityArea get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActivityArea newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActivityArea[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActivityArea|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActivityArea patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActivityArea[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActivityArea findOrCreate($search, callable $callback = null)
 */
class ActivityAreasTable extends Table
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

        $this->table('activity_areas');
        $this->displayField('activityArea');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'activity_area_id'
        ]);
        $this->hasMany('Enterprises', [
            'foreignKey' => 'activity_area_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'activity_area_id'
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
            ->requirePresence('activityArea', 'create')
            ->notEmpty('activityArea')
            ->add('activityArea', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['activityArea']));

        return $rules;
    }
}
