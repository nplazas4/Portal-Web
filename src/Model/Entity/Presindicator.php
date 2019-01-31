<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Presindicator Entity
 *
 * @property int $id
 * @property int $AC_ID
 * @property int $ID_PARENT
 * @property string $Indicator_Desc
 * @property int $Monto_COP
 * @property int $Monto_USD
 * @property int $PROJ_CODE
 */
class Presindicator extends Entity
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
        'AC_ID' => true,
        'ID_PARENT' => true,
        'Indicator_Desc' => true,
        'Monto_COP' => true,
        'Monto_USD' => true,
        'PROJ_CODE' => true
    ];
}
