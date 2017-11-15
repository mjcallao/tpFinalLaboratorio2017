<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistroVacunas Model
 *
 * @method \App\Model\Entity\RegistroVacuna get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistroVacuna newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegistroVacuna[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistroVacuna|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistroVacuna patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroVacuna[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroVacuna findOrCreate($search, callable $callback = null, $options = [])
 */
class RegistroVacunasTable extends Table
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

        $this->setTable('registro_vacunas');
        $this->setDisplayField('id_reg_vacuna');
        $this->setPrimaryKey('id_reg_vacuna');
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
            ->allowEmpty('id_reg_vacuna', 'create');

        $validator
            ->requirePresence('id_mascota', 'create')
            ->notEmpty('id_mascota');

        $validator
            ->integer('id_vacuna')
            ->requirePresence('id_vacuna', 'create')
            ->notEmpty('id_vacuna');

        $validator
            ->date('fecha_vacuna')
            ->requirePresence('fecha_vacuna', 'create')
            ->notEmpty('fecha_vacuna');

        $validator
            ->date('valida_hasta')
            ->requirePresence('valida_hasta', 'create')
            ->notEmpty('valida_hasta');

        return $validator;
    }
}
