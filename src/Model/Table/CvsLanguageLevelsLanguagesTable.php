<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CvsLanguageLevelsLanguages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cvs
 * @property \Cake\ORM\Association\BelongsTo $LanguageLevels
 * @property \Cake\ORM\Association\BelongsTo $Languages
 *
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage get($primaryKey, $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CvsLanguageLevelsLanguage findOrCreate($search, callable $callback = null)
 */
class CvsLanguageLevelsLanguagesTable extends Table
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

        $this->table('cvs_language_levels_languages');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cvs', [
            'foreignKey' => 'cv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LanguageLevels', [
            'foreignKey' => 'language_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Languages', [
            'foreignKey' => 'langage_id',
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
            ->notEmpty('cv_id');
        
        $validator
            ->notEmpty('language_level_id');
        
        $validator
            ->notEmpty('langage_id');
        

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
        $rules->add($rules->existsIn(['cv_id'], 'Cvs'));
        $rules->add($rules->existsIn(['language_level_id'], 'LanguageLevels'));
        $rules->add($rules->existsIn(['langage_id'], 'Languages'));

        return $rules;
    }
}
