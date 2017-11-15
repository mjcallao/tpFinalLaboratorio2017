<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PerfilUsuarios Model
 *
 * @method \App\Model\Entity\PerfilUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\PerfilUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PerfilUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PerfilUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PerfilUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PerfilUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PerfilUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class PerfilUsuariosTable extends Table
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

        $this->setTable('perfil_usuarios');
        $this->setDisplayField('id_perfil');
        $this->setPrimaryKey('id_perfil');
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
            ->allowEmpty('id_perfil', 'create');

        $validator
            ->scalar('nombre_perfil')
            ->requirePresence('nombre_perfil', 'create')
            ->notEmpty('nombre_perfil');

        $validator
            ->scalar('descripcion_perfil')
            ->requirePresence('descripcion_perfil', 'create')
            ->notEmpty('descripcion_perfil');

        return $validator;
    }
}
