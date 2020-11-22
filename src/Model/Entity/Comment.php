<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property string|null $itemid
 * @property string|null $modul_name
 * @property string|null $author_name
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $create_date
 */
class Comment extends Entity
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
        'itemid' => true,
        'modul_name' => true,
        'author_name' => true,
        'body' => true,
        'create_date' => true,
    ];
}
