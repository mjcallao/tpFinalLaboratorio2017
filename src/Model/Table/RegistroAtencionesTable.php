<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistroAtenciones Model
 *
 * @method \App\Model\Entity\RegistroAtencione get($primaryKey, $options = [])
 * @method \App\Model\Entity\RegistroAtencione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RegistroAtencione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RegistroAtencione|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RegistroAtencione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroAtencione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RegistroAtencione findOrCreate($search, callable $callback = null, $options = [])
 */
class RegistroAtencionesTable extends Table
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

        $this->setTable('registro_atenciones');
        $this->setDisplayField('id_reg_atencion');
        $this->setPrimaryKey('id_reg_atencion');
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
            ->allowEmpty('id_reg_atencion', 'create');

        $validator
            ->scalar('id_mascota')
            ->requirePresence('id_mascota', 'create')
            ->notEmpty('id_mascota');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        return $validator;
    }
}
