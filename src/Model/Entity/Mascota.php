<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mascota Entity
 *
 * @property int $id_mascota
 * @property int $id_cliente
 * @property int $id_especie
 * @property \Cake\I18n\FrozenDate $fecha_nac_mascota
 * @property string $sexo
 * @property string $comentario
 */
class Mascota extends Entity
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
        'id_cliente' => true,
        'id_especie' => true,
        'fecha_nac_mascota' => true,
        'sexo' => true,
        'comentario' => true
    ];
}
