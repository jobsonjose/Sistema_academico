<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $subject_id
 * @property string $half
 *
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\Subject $subject
 */
class Turma extends Entity
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
        'teacher_id' => true,
        'subject_id' => true,
        'half' => true,
        'teacher' => true,
        'subject' => true
    ];
}
