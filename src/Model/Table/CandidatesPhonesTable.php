<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CandidatesPhones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Phones
 * @property \Cake\ORM\Association\BelongsTo $Candidates
 *
 * @method \App\Model\Entity\CandidatesPhone get($primaryKey, $options = [])
 * @method \App\Model\Entity\CandidatesPhone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CandidatesPhone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CandidatesPhone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CandidatesPhone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CandidatesPhone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CandidatesPhone findOrCreate($search, callable $callback = null)
 */
class CandidatesPhonesTable extends Table
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

        $this->table('candidates_phones');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Phones', [
            'foreignKey' => 'phone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
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
        $rules->add($rules->existsIn(['phone_id'], 'Phones'));
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'));

        return $rules;
    }
}
