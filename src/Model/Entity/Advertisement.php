<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Advertisement Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $adsBody
 * @property string|resource|null $photo
 * @property \Cake\I18n\FrozenTime|null $createDate
 */
class Advertisement extends Entity
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
        'name' => true,
        'email' => true,
        'phone' => true,
        'title' => true,
        'adsBody' => true,
        'photo' => true,
        'read_count' => true,
        'createDate' => true,
    ];
}
