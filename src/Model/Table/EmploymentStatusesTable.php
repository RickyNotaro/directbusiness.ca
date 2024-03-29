<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmploymentStatuses Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 * @property \Cake\ORM\Association\HasMany $Jobs
 *
 * @method \App\Model\Entity\EmploymentStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmploymentStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmploymentStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmploymentStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmploymentStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmploymentStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmploymentStatus findOrCreate($search, callable $callback = null)
 */
class EmploymentStatusesTable extends Table
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

        $this->table('employment_statuses');
        $this->displayField('employmentStatus');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'employment_status_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'employment_status_id'
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
            ->requirePresence('employmentStatus', 'create')
            ->notEmpty('employmentStatus')
            ->add('employmentStatus', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['employmentStatus']));

        return $rules;
    }
}
