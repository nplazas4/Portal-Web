<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indicator Entity
 *
 * @property int $id
 * @property float $CPI
 * @property float $SPI_EXTERNO
 * @property float $TOTAL_PRES
 * @property float $TOTAL_EJEC_USD
 * @property float $PRES_ANUAL
 * @property float $EJECT_ANUAL
 */
class Indicator extends Entity
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
        'CPI' => true,
        'SPI_EXTERNO' => true,
        'TOTAL_PRES' => true,
        'TOTAL_EJEC_USD' => true,
        'PRES_ANUAL' => true,
        'EJECT_ANUAL' => true
    ];
}
