<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projectcode Entity
 *
 * @property int $id
 * @property string $CODE_NAME
 * @property string $CODE_DESCRIPTION
 */
class Projectcode extends Entity
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
        'CODE_NAME' => true,
        'CODE_DESCRIPTION' => true
    ];
}
