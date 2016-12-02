<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CvVisibilities Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 *
 * @method \App\Model\Entity\CvVisibility get($primaryKey, $options = [])
 * @method \App\Model\Entity\CvVisibility newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CvVisibility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CvVisibility|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CvVisibility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CvVisibility[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CvVisibility findOrCreate($search, callable $callback = null)
 */
class CvVisibilitiesTable extends Table
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

        $this->table('cv_visibilities');
        $this->displayField('visibilityName');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'cv_visibility_id'
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
            ->requirePresence('visibilityName', 'create')
            ->notEmpty('visibilityName')
            ->add('visibilityName', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->isUnique(['visibilityName']));

        return $rules;
    }
}
