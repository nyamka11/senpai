<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visa Entity
 *
 * @property int $id
 * @property int|null $authorId
 * @property string|null $authorName
 * @property string|null $type
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $createDate
 * @property \Cake\I18n\FrozenTime|null $updateDate
 */
class Visa extends Entity
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
        'authorId' => true,
        'authorName' => true,
        'type' => true,
        'body' => true,
        'createDate' => true,
        'updateDate' => true,
    ];
}
