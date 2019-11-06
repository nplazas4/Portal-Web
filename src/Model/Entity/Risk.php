<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Risk Entity
 *
 * @property int $id
 * @property string $RISK_NUMBER
 * @property string $RISK_NAME
 * @property string $PROBABILITY
 * @property string $IMPACT
 * @property string $PROBABILITY_POST
 * @property string $IMPACT_POST
 * @property float $IMPACT_RISK
 * @property string $PLAN_ONE
 * @property string $PLAN_TWO
 * @property string $PLAN_THREE
 * @property string $PLAN_FOUR
 * @property string $PLAN_FIVE
 * @property string $ACTION_STATE
 * @property string $MATERIALIZACION
 * @property int $PROJECT_CODE
 */
class Risk extends Entity
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
        'RISK_NUMBER' => true,
        'RISK_NAME' => true,
        'PROBABILITY' => true,
        'IMPACT' => true,
        'PROBABILITY_POST' => true,
        'IMPACT_POST' => true,
        'IMPACT_RISK' => true,
        'PLAN_ONE' => true,
        'PLAN_TWO' => true,
        'PLAN_THREE' => true,
        'PLAN_FOUR' => true,
        'PLAN_FIVE' => true,
        'ACTION_STATE' => true,
        'MATERIALIZACION' => true,
        'PROJECT_CODE' => true
    ];
}
