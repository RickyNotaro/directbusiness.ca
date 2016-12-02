<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReadyToTravels Model
 *
 * @property \Cake\ORM\Association\HasMany $Cvs
 *
 * @method \App\Model\Entity\ReadyToTravel get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReadyToTravel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReadyToTravel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReadyToTravel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReadyToTravel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReadyToTravel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReadyToTravel findOrCreate($search, callable $callback = null)
 */
class ReadyToTravelsTable extends Table
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

        $this->table('ready_to_travels');
        $this->displayField('description');
        $this->primaryKey('id');

        $this->hasMany('Cvs', [
            'foreignKey' => 'ready_to_travel_id'
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
