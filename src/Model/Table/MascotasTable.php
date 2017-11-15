<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mascotas Model
 *
 * @method \App\Model\Entity\Mascota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mascota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mascota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mascota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mascota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mascota findOrCreate($search, callable $callback = null, $options = [])
 */
class MascotasTable extends Table
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

        $this->setTable('mascotas');
        $this->setDisplayField('id_mascota');
        $this->setPrimaryKey('id_mascota');
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
            ->allowEmpty('id_mascota', 'create');

        $validator
            ->requirePresence('id_cliente', 'create')
            ->notEmpty('id_cliente');

        $validator
            ->requirePresence('id_especie', 'create')
            ->notEmpty('id_especie');

        $validator
            ->date('fecha_nac_mascota')
            ->requirePresence('fecha_nac_mascota', 'create')
            ->notEmpty('fecha_nac_mascota');

        $validator
            ->scalar('sexo')
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->scalar('comentario')
            ->requirePresence('comentario', 'create')
            ->notEmpty('comentario');

        return $validator;
    }
}
