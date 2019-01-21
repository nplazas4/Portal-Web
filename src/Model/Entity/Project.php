<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $ID_PROJECT
 * @property string $PROJECT_NAME
 * @property string $DESCRIPTION
 * @property float $SPI
 * @property int $PLANNED
 * @property int $EXECUTED
 * @property int $ACPV
 * @property float $AC
 * @property float $PV
 * @property int $CAPEX_PLANNED
 * @property int $CAPEX_EXECUTED
 * @property int $FASE
 * @property string $REGIONAL
 * @property string $ALCANCE
 * @property string $SOLICITUD
 * @property int $DISTANCIA
 * @property int $LINEA_TRANS
 * @property \Cake\I18n\FrozenDate $FOPO
 * @property \Cake\I18n\FrozenDate $FEPO
 * @property \Cake\I18n\FrozenDate $ADJUDICACION
 * @property \Cake\I18n\FrozenDate $APROBACION
 * @property int $TORRE
 * @property int $NUM_SUBESTACION
 */
class Project extends Entity
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
        'ID_PROJECT' => true,
        'PROJECT_NAME' => true,
        'DESCRIPTION' => true,
        'SPI' => true,
        'PLANNED' => true,
        'EXECUTED' => true,
        'ACPV' => true,
        'AC' => true,
        'PV' => true,
        'CAPEX_PLANNED' => true,
        'CAPEX_EXECUTED' => true,
        'FASE' => true,
        'REGIONAL' => true,
        'ALCANCE' => true,
        'SOLICITUD' => true,
        'DISTANCIA' => true,
        'LINEA_TRANS' => true,
        'FOPO' => true,
        'FEPO' => true,
        'ADJUDICACION' => true,
        'APROBACION' => true,
        'TORRE' => true,
        'NUM_SUBESTACION' => true
    ];
}
