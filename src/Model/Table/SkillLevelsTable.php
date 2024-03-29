<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SkillLevels Model
 *
 * @property \Cake\ORM\Association\HasMany $Jobs
 *
 * @method \App\Model\Entity\SkillLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\SkillLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SkillLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SkillLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SkillLevel findOrCreate($search, callable $callback = null)
 */
class SkillLevelsTable extends Table
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

        $this->table('skill_levels');
        $this->displayField('skillLevel');
        $this->primaryKey('id');

        $this->hasMany('Jobs', [
            'foreignKey' => 'skill_level_id'
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
            ->requirePresence('skillLevel', 'create')
            ->notEmpty('skillLevel')
            ->add('skillLevel', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['skillLevel']));

        return $rules;
    }
}
