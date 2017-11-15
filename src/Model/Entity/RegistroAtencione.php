<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistroAtencione Entity
 *
 * @property int $id_reg_atencion
 * @property string $id_mascota
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $descripcion
 */
class RegistroAtencione extends Entity
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
        'id_mascota' => true,
        'fecha' => true,
        'descripcion' => true
    ];
}