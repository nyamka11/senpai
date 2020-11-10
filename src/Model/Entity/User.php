<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property string|null $lastname
 * @property string|null $firstname
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property string|null $country
 * @property string|null $postal
 * @property string|null $address
 * @property string|null $address1
 * @property string|null $phone
 * @property string|null $phone1
 * @property string $email
 * @property string|null $email1
 * @property string|null $role
 * @property string|null $gender
 * @property string|resource|null $profile_photo
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $ins_date
 * @property string|null $ins_user_name
 * @property \Cake\I18n\FrozenTime|null $upd_date
 * @property string|null $upd_user_name
 * @property string|null $operation
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'lastname' => true,
        'firstname' => true,
        'birthday' => true,
        'country' => true,
        'postal' => true,
        'address' => true,
        'address1' => true,
        'phone' => true,
        'phone1' => true,
        'email' => true,
        'email1' => true,
        'role' => true,
        'gender' => true,
        'profile_photo' => true,
        'status' => true,
        'ins_date' => true,
        'ins_user_name' => true,
        'upd_date' => true,
        'upd_user_name' => true,
        'operation' => true,
        'token' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
