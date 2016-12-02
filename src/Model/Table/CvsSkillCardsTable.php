<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CvsSkillCards Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cvs
 * @property \Cake\ORM\Association\BelongsTo $SkillCards
 *
 * @method \App\Model\Entity\CvsSkillCard get($primaryKey, $options = [])
 * @method \App\Model\Entity\CvsSkillCard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CvsSkillCard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CvsSkillCard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CvsSkillCard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CvsSkillCard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CvsSkillCard findOrCreate($search, callable $callback = null)
 */
class CvsSkillCardsTable extends Table
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

        $this->table('cvs_skill_cards');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cvs', [
        		'dependent' => true,
            'foreignKey' => 'cv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SkillCards', [
            'foreignKey' => 'skill_card_id',
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
        $rules->add($rules->existsIn(['cv_id'], 'Cvs'));
        $rules->add($rules->existsIn(['skill_card_id'], 'SkillCards'));

        return $rules;
    }
}
