<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Role Entity
 *
 * @property int $id
 * @property string $roleName
 *
 * @property \App\Model\Entity\User[] $users
 */
class Role extends Entity
{
	const ROLE_ADMIN = "1";
	const ROLE_CANDIDATE = "2";
	const ROLE_ENTERPRISE = "3";
	
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
        '*' => true,
        'id' => false
    ];
}
