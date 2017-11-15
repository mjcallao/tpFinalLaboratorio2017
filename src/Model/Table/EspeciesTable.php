<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especies Model
 *
 * @method \App\Model\Entity\Especy get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especy newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Especy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especy|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especy[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especy findOrCreate($search, callable $callback = null, $options = [])
 */
class EspeciesTable extends Table
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

        $this->setTable('especies');
        $this->setDisplayField('id_especie');
        $this->setPrimaryKey('id_especie');
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
            ->allowEmpty('id_especie', 'create');

        $validator
            ->scalar('nombre_especie')
            ->requirePresence('nombre_especie', 'create')
            ->notEmpty('nombre_especie');

        $validator
            ->scalar('descripcion_especie')
            ->requirePresence('descripcion_especie', 'create')
            ->notEmpty('descripcion_especie');

        return $validator;
    }
}
