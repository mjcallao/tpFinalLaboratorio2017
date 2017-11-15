<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id_cliente');
        $this->setPrimaryKey('id_cliente');
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
            ->allowEmpty('id_cliente', 'create');

        $validator
            ->scalar('dni')
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->scalar('nombre_cliente')
            ->requirePresence('nombre_cliente', 'create')
            ->notEmpty('nombre_cliente');

        $validator
            ->scalar('apellido_cliente')
            ->requirePresence('apellido_cliente', 'create')
            ->notEmpty('apellido_cliente');

        $validator
            ->scalar('email_cliente')
            ->requirePresence('email_cliente', 'create')
            ->notEmpty('email_cliente');

        $validator
            ->scalar('telefono_cliente')
            ->requirePresence('telefono_cliente', 'create')
            ->notEmpty('telefono_cliente');

        $validator
            ->scalar('direccion_cliente')
            ->requirePresence('direccion_cliente', 'create')
            ->notEmpty('direccion_cliente');

        $validator
            ->date('fecha_nacimiento_cliente')
            ->requirePresence('fecha_nacimiento_cliente', 'create')
            ->notEmpty('fecha_nacimiento_cliente');

        return $validator;
    }
}
