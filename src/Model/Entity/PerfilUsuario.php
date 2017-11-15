<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PerfilUsuario Entity
 *
 * @property int $id_perfil
 * @property string $nombre_perfil
 * @property string $descripcion_perfil
 */
class PerfilUsuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre_perfil' => true,
        'descripcion_perfil' => true
    ];
}
