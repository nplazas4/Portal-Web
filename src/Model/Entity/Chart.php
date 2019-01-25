<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chart Entity
 *
 * @property int $id
 * @property int $PROJ_ID
 * @property \Cake\I18n\FrozenDate $START_DATE
 * @property \Cake\I18n\FrozenDate $FINISH_DATE
 * @property int $BL_CHART
 * @property int $EJEC
 * @property int $EAC
 */
class Chart extends Entity
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
        'PROJ_ID' => true,
        'START_DATE' => true,
        'FINISH_DATE' => true,
        'BL_CHART' => true,
        'EJEC' => true,
        'EAC' => true
    ];
}
