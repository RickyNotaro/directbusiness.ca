<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CanWorkFors Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 *
 * @method \App\Model\Entity\CanWorkFor get($primaryKey, $options = [])
 * @method \App\Model\Entity\CanWorkFor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CanWorkFor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CanWorkFor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CanWorkFor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CanWorkFor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CanWorkFor findOrCreate($search, callable $callback = null)
 */
class CanWorkForsTable extends Table
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

        $this->table('can_work_fors');
        $this->displayField('description');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'can_work_for_id'
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
            ->requirePresence('description', 'create')
            ->notEmpty('description')
            ->add('description', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['description']));

        return $rules;
    }
}
