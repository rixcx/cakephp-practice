<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Movie Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $slug
 * @property string $name
 * @property string $comment
 * @property string $url
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\List[] $lists
 * @property \App\Model\Entity\Tag[] $tags
 */
class Movie extends Entity
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
        'user_id' => true,
        'slug' => true,
        'name' => true,
        'comment' => true,
        'url' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'lists' => true,
        'tags' => true,
    ];
}
