<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CvsWorkingLicences Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cvs
 * @property \Cake\ORM\Association\BelongsTo $WorkingLicences
 *
 * @method \App\Model\Entity\CvsWorkingLicence get($primaryKey, $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CvsWorkingLicence findOrCreate($search, callable $callback = null)
 */
class CvsWorkingLicencesTable extends Table
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

        $this->table('cvs_working_licences');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cvs', [
            'foreignKey' => 'cv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('WorkingLicences', [
            'foreignKey' => 'working_licence_id',
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
        $rules->add($rules->existsIn(['working_licence_id'], 'WorkingLicences'));

        return $rules;
    }
}
