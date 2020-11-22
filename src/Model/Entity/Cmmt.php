<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cmmt Entity
 *
 * @property int $id
 * @property string|null $itemid_
 * @property string|null $modulName
 * @property string|null $authorName
 * @property string|null $commentBody
 * @property \Cake\I18n\FrozenTime|null $createDate
 */
class Cmmt extends Entity
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
        'itemid_' => true,
        'modulName' => true,
        'authorName' => true,
        'commentBody' => true,
        'createDate' => true,
    ];
}
