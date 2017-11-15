<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vacunas Model
 *
 * @method \App\Model\Entity\Vacuna get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vacuna newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vacuna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vacuna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vacuna findOrCreate($search, callable $callback = null, $options = [])
 */
class VacunasTable extends Table
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

        $this->setTable('vacunas');
        $this->setDisplayField('id_vacunas');
        $this->setPrimaryKey('id_vacunas');
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
            ->integer('id_vacunas')
            ->allowEmpty('id_vacunas', 'create')
            ->add('id_vacunas', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombre_vacuna')
            ->requirePresence('nombre_vacuna', 'create')
            ->notEmpty('nombre_vacuna');

        $validator
            ->scalar('dosis_vacuna')
            ->requirePresence('dosis_vacuna', 'create')
            ->notEmpty('dosis_vacuna');

        $validator
            ->scalar('descripcion_vacuna')
            ->requirePresence('descripcion_vacuna', 'create')
            ->notEmpty('descripcion_vacuna');

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
        $rules->add($rules->isUnique(['id_vacunas']));

        return $rules;
    }
}
