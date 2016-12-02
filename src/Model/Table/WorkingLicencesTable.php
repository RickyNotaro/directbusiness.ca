<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkingLicences Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Cvs
 *
 * @method \App\Model\Entity\WorkingLicence get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkingLicence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WorkingLicence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkingLicence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkingLicence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingLicence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingLicence findOrCreate($search, callable $callback = null)
 */
class WorkingLicencesTable extends Table
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

        $this->table('working_licences');
        $this->displayField('workingLicence');
        $this->primaryKey('id');

        $this->belongsToMany('Cvs', [
            'foreignKey' => 'working_licence_id',
            'targetForeignKey' => 'cv_id',
            'joinTable' => 'cvs_working_licences'
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
            ->requirePresence('workingLicence', 'create')
            ->notEmpty('workingLicence')
            ->add('workingLicence', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['workingLicence']));

        return $rules;
    }
}
