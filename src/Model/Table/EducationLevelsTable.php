<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EducationLevels Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 * @property \Cake\ORM\Association\HasMany $Jobs
 *
 * @method \App\Model\Entity\EducationLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\EducationLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EducationLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EducationLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel findOrCreate($search, callable $callback = null)
 */
class EducationLevelsTable extends Table
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

        $this->table('education_levels');
        $this->displayField('educationLevel');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'education_level_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'education_level_id'
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
            ->requirePresence('educationLevel', 'create')
            ->notEmpty('educationLevel')
            ->add('educationLevel', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['educationLevel']));

        return $rules;
    }
}
