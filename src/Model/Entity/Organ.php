<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organ Entity
 *
 * @property int $id
 * @property string $name
 * @property float $volume
 * @property string $dna_map
 * @property string $image
 * @property int $price
 * @property \Cake\I18n\FrozenTime $expire_date
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Request[] $requests
 */
class Organ extends Entity
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
        'volume' => true,
        'dna_map' => true,
        'image' => true,
        'price' => true,
        'expire_date' => true,
        'category_id' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'requests' => true
    ];
}
