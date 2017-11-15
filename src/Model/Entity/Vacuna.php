<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vacuna Entity
 *
 * @property int $id_vacunas
 * @property string $nombre_vacuna
 * @property string $dosis_vacuna
 * @property string $descripcion_vacuna
 */
class Vacuna extends Entity
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
        'nombre_vacuna' => true,
        'dosis_vacuna' => true,
        'descripcion_vacuna' => true
    ];
}
