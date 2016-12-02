<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cvs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CareerLevels
 * @property \Cake\ORM\Association\BelongsTo $EmploymentStatuses
 * @property \Cake\ORM\Association\BelongsTo $ActivityAreas
 * @property \Cake\ORM\Association\BelongsTo $Professions
 * @property \Cake\ORM\Association\BelongsTo $EducationLevels
 * @property \Cake\ORM\Association\BelongsTo $ReadyToTravels
 * @property \Cake\ORM\Association\BelongsTo $CanWorkFors
 * @property \Cake\ORM\Association\BelongsTo $Candidates
 * @property \Cake\ORM\Association\BelongsTo $CvVisibilities
 * @property \Cake\ORM\Association\HasMany $Applys
 * @property \Cake\ORM\Association\HasMany $CvsLanguageLevelsLanguages
 * @property \Cake\ORM\Association\BelongsToMany $SkillCards
 * @property \Cake\ORM\Association\BelongsToMany $WorkingLicences
 *
 * @method \App\Model\Entity\Cv get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cv findOrCreate($search, callable $callback = null)
 */
class CvsTable extends Table
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

        $this->table('cvs');
        $this->displayField('cvName');
        $this->primaryKey('id');

        $this->belongsTo('CareerLevels', [
            'foreignKey' => 'career_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EmploymentStatuses', [
            'foreignKey' => 'employment_status_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ActivityAreas', [
            'foreignKey' => 'activity_area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Professions', [
            'foreignKey' => 'profession_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EducationLevels', [
            'foreignKey' => 'education_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ReadyToTravels', [
            'foreignKey' => 'ready_to_travel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CanWorkFors', [
            'foreignKey' => 'can_work_for_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CvVisibilities', [
            'foreignKey' => 'cv_visibility_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Applys', [
            'foreignKey' => 'cv_id'
        ]);
        $this->hasMany('CvsLanguageLevelsLanguages', [
            'foreignKey' => 'cv_id'
        ]);
        $this->belongsToMany('SkillCards', [
            'foreignKey' => 'cv_id',
            'targetForeignKey' => 'skill_card_id',
            'joinTable' => 'cvs_skill_cards'
        ]);
        $this->belongsToMany('WorkingLicences', [
            'foreignKey' => 'cv_id',
            'targetForeignKey' => 'working_licence_id',
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
            ->requirePresence('cvName', 'create')
            ->notEmpty('cvName');

        $validator
            ->requirePresence('position_sought', 'create')
            ->notEmpty('position_sought');

        $validator
            ->decimal('minimum_wage')
            ->requirePresence('minimum_wage', 'create')
            ->notEmpty('minimum_wage');

        $validator
            ->decimal('maximum_wage')
            ->requirePresence('maximum_wage', 'create')
            ->notEmpty('maximum_wage');

        $validator
            ->requirePresence('position_location', 'create')
            ->notEmpty('position_location');

        $validator
            ->requirePresence('current_employer', 'create')
            ->notEmpty('current_employer');

        $validator
            ->boolean('ready_to_relocate')
            ->requirePresence('ready_to_relocate', 'create')
            ->notEmpty('ready_to_relocate');

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->integer('views')
            ->requirePresence('views', 'create')
            ->notEmpty('views');

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
        $rules->add($rules->existsIn(['career_level_id'], 'CareerLevels'));
        $rules->add($rules->existsIn(['employment_status_id'], 'EmploymentStatuses'));
        $rules->add($rules->existsIn(['activity_area_id'], 'ActivityAreas'));
        $rules->add($rules->existsIn(['profession_id'], 'Professions'));
        $rules->add($rules->existsIn(['education_level_id'], 'EducationLevels'));
        $rules->add($rules->existsIn(['ready_to_travel_id'], 'ReadyToTravels'));
        $rules->add($rules->existsIn(['can_work_for_id'], 'CanWorkFors'));
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'));
        $rules->add($rules->existsIn(['cv_visibility_id'], 'CvVisibilities'));

        return $rules;
    }
}
