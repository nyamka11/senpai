<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property string|null $body
 * @property string|null $category
 * @property string|null $placeoforigin
 * @property string|null $author
 * @property \Cake\I18n\FrozenTime|null $date
 */
class News extends Entity  {
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
        'title' => true,
        'body' => true,
        'newsImg' => true,
        'category' => true,
        'placeoforigin' => true,
        'author_id' => true,
        'author_name' => true,
        'date' => true,
        'read_count' => true
    ];
}
