<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id_cliente
 * @property string $dni
 * @property string $nombre_cliente
 * @property string $apellido_cliente
 * @property string $email_cliente
 * @property string $telefono_cliente
 * @property string $direccion_cliente
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento_cliente
 */
class Cliente extends Entity
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
        'dni' => true,
        'nombre_cliente' => true,
        'apellido_cliente' => true,
        'email_cliente' => true,
        'telefono_cliente' => true,
        'direccion_cliente' => true,
        'fecha_nacimiento_cliente' => true
    ];
}
