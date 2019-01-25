<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Risk Entity
 *
 * @property int $id
 * @property int $RISK_NUMBER
 * @property string $RISK_NAME
 * @property string $PROBABILITY
 * @property string $IMPACT
 * @property int $IMPACT_RISK
 * @property string $PLAN_ONE
 * @property string $PLAN_TWO
 * @property string $PLAN_THREE
 * @property string $PLAN_FOUR
 * @property string $PLAN_FIVE
 * @property int $RISK_QUALIFICATION
 * @property string $PLAN_ONE_S
 * @property string $PLAN_TWO_S
 * @property string $PLAN_THREE_S
 * @property string $PLAN_FOUR_S
 * @property string $PLAN_FIVE_S
 * @property int $TOTAL_RISK
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
        'IMPACT_RISK' => true,
        'PLAN_ONE' => true,
        'PLAN_TWO' => true,
        'PLAN_THREE' => true,
        'PLAN_FOUR' => true,
        'PLAN_FIVE' => true,
        'RISK_QUALIFICATION' => true,
        'PLAN_ONE_S' => true,
        'PLAN_TWO_S' => true,
        'PLAN_THREE_S' => true,
        'PLAN_FOUR_S' => true,
        'PLAN_FIVE_S' => true,
        'TOTAL_RISK' => true,
        'PROJECT_CODE' => true
    ];
}
