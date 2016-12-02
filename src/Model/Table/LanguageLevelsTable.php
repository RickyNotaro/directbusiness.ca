<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LanguageLevels Model
 *
 * @property \Cake\ORM\Association\HasMany $CvsLanguageLevelsLanguages
 *
 * @method \App\Model\Entity\LanguageLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\LanguageLevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LanguageLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel findOrCreate($search, callable $callback = null)
 */
class LanguageLevelsTable extends Table
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

        $this->table('language_levels');
        $this->displayField('languageLevel');
        $this->primaryKey('id');

        $this->hasMany('CvsLanguageLevelsLanguages', [
            'foreignKey' => 'language_level_id'
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
            ->requirePresence('languageLevel', 'create')
            ->notEmpty('languageLevel')
            ->add('languageLevel', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['languageLevel']));

        return $rules;
    }
}
