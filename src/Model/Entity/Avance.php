<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Avance Entity
 *
 * @property int $id
 * @property string $descripcion
 * @property string $imagen
 * @property string $imagen_dir
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $proyecto_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 * @property \App\Model\Entity\User $user
 */
class Avance extends Entity
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
        'descripcion' => true,
        'imagen' => true,
        'imagen_dir' => true,
        'created' => true,
        'modified' => true,
        'proyecto_id' => true,
        'user_id' => true,
        'proyecto' => true,
        'user' => true,
    ];
}
