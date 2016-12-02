<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoverLetters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CoverLetterModels
 * @property \Cake\ORM\Association\BelongsTo $Candidates
 * @property \Cake\ORM\Association\HasMany $Applys
 *
 * @method \App\Model\Entity\CoverLetter get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoverLetter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoverLetter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoverLetter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetter findOrCreate($search, callable $callback = null)
 */
class CoverLettersTable extends Table
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

        $this->table('cover_letters');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('CoverLetterModels', [
            'foreignKey' => 'cover_letter_model_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Applys', [
            'foreignKey' => 'cover_letter_id'
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
            ->requirePresence('coverLetterName', 'create')
            ->notEmpty('coverLetterName');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('TEXT', 'create')
            ->notEmpty('TEXT');
        
        $validator
            ->notEmpty('candidate_id');
        
        $validator
            ->notEmpty('cover_letter_model_id');

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
        $rules->add($rules->existsIn(['cover_letter_model_id'], 'CoverLetterModels'));
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'));

        return $rules;
    }
}
