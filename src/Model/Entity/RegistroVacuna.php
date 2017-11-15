<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegistroVacuna Entity
 *
 * @property int $id_reg_vacuna
 * @property int $id_mascota
 * @property int $id_vacuna
 * @property \Cake\I18n\FrozenDate $fecha_vacuna
 * @property \Cake\I18n\FrozenDate $valida_hasta
 */
class RegistroVacuna extends Entity
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
        'id_vacuna' => true,
        'fecha_vacuna' => true,
        'valida_hasta' => true
    ];
}
