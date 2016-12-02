<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applys Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Files
 * @property \Cake\ORM\Association\BelongsTo $Cvs
 * @property \Cake\ORM\Association\BelongsTo $Jobs
 * @property \Cake\ORM\Association\BelongsTo $Candidates
 * @property \Cake\ORM\Association\BelongsTo $CoverLetters
 *
 * @method \App\Model\Entity\Apply get($primaryKey, $options = [])
 * @method \App\Model\Entity\Apply newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Apply[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Apply|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Apply patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Apply[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Apply findOrCreate($search, callable $callback = null)
 */
class ApplysTable extends Table
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

        $this->table('applys');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Files', [
            'foreignKey' => 'file_id'
        ]);
        $this->belongsTo('Cvs', [
            'foreignKey' => 'cv_id'
        ]);
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CoverLetters', [
            'foreignKey' => 'cover_letter_id',
            'joinType' => 'INNER'
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
            ->notEmpty('job_id');
            
        $validator
            ->notEmpty('cover_letter_id');

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
        $rules->add($rules->existsIn(['file_id'], 'Files'));
        $rules->add($rules->existsIn(['cv_id'], 'Cvs'));
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'));
        $rules->add($rules->existsIn(['cover_letter_id'], 'CoverLetters'));

        return $rules;
    }
}
