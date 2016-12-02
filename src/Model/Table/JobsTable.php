<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ActivityAreas
 * @property \Cake\ORM\Association\BelongsTo $Professions
 * @property \Cake\ORM\Association\BelongsTo $EmploymentStatuses
 * @property \Cake\ORM\Association\BelongsTo $Statuses
 * @property \Cake\ORM\Association\BelongsTo $EducationLevels
 * @property \Cake\ORM\Association\BelongsTo $SkillLevels
 * @property \Cake\ORM\Association\BelongsTo $JobTypes
 * @property \Cake\ORM\Association\BelongsTo $Enterprises
 * @property \Cake\ORM\Association\HasMany $Applys
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null)
 */
class JobsTable extends Table
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

        $this->table('jobs');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('ActivityAreas', [
            'foreignKey' => 'activity_area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Professions', [
            'foreignKey' => 'profession_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EmploymentStatuses', [
            'foreignKey' => 'employment_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EducationLevels', [
            'foreignKey' => 'education_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SkillLevels', [
            'foreignKey' => 'skill_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('JobTypes', [
            'foreignKey' => 'job_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Enterprises', [
            'foreignKey' => 'enterprise_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Applys', [
            'foreignKey' => 'job_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('responsibility', 'create')
            ->notEmpty('responsibility');

        $validator
            ->requirePresence('aptitude', 'create')
            ->notEmpty('aptitude');

        $validator
            ->requirePresence('requirement', 'create')
            ->notEmpty('requirement');

        $validator
            ->requirePresence('asset', 'create')
            ->notEmpty('asset');

        $validator
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->dateTime('start_date_publication')
            ->allowEmpty('start_date_publication');

        $validator
            ->dateTime('end_date_publication')
            ->allowEmpty('end_date_publication');

        $validator
            ->dateTime('created_date')
            ->allowEmpty('created_date');

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
        $rules->add($rules->existsIn(['activity_area_id'], 'ActivityAreas'));
        $rules->add($rules->existsIn(['profession_id'], 'Professions'));
        $rules->add($rules->existsIn(['employment_status_id'], 'EmploymentStatuses'));
        $rules->add($rules->existsIn(['status_id'], 'Statuses'));
        $rules->add($rules->existsIn(['education_level_id'], 'EducationLevels'));
        $rules->add($rules->existsIn(['skill_level_id'], 'SkillLevels'));
        $rules->add($rules->existsIn(['job_type_id'], 'JobTypes'));
        $rules->add($rules->existsIn(['enterprise_id'], 'Enterprises'));

        return $rules;
    }
}
