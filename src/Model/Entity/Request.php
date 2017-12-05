<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property int $amount
 * @property int $user_id
 * @property int $organ_id
 * @property int $status_id
 * @property int $payment_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Organ $organ
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Payment[] $payments
 */
class Request extends Entity
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
        'amount' => true,
        'user_id' => true,
        'organ_id' => true,
        'status_id' => true,
        'payment_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'organ' => true,
        'status' => true,
        'payments' => true
    ];
}
