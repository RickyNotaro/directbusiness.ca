<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoverLetterModels Model
 *
 * @property \Cake\ORM\Association\HasMany $CoverLetters
 *
 * @method \App\Model\Entity\CoverLetterModel get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoverLetterModel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoverLetterModel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetterModel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoverLetterModel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetterModel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoverLetterModel findOrCreate($search, callable $callback = null)
 */
class CoverLetterModelsTable extends Table
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

        $this->table('cover_letter_models');
        $this->displayField('coverLetterModelName');
        $this->primaryKey('id');

        $this->hasMany('CoverLetters', [
            'foreignKey' => 'cover_letter_model_id'
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
            ->requirePresence('coverLetterModelName', 'create')
            ->notEmpty('coverLetterModelName')
            ->add('coverLetterModelName', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('TEXT', 'create')
            ->notEmpty('TEXT');

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
        $rules->add($rules->isUnique(['coverLetterModelName']));

        return $rules;
    }
}
