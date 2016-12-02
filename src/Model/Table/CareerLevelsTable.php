<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CareerLevels Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 *
 * @method \App\Model\Entity\CareerLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\CareerLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CareerLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CareerLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CareerLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CareerLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CareerLevel findOrCreate($search, callable $callback = null)
 */
class CareerLevelsTable extends Table
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

        $this->table('career_levels');
        $this->displayField('careerLevel');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'career_level_id'
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
            ->requirePresence('careerLevel', 'create')
            ->notEmpty('careerLevel')
            ->add('careerLevel', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['careerLevel']));

        return $rules;
    }
}
