<?php

namespace App\Repository;


use App\Models\Modulo;

class ModuloRepository
{
    protected $entity;

    public function __construct(Modulo $modulo)
    {
        $this->entity = $modulo;
    }

    public function getModulesCoursesBy(string $courseId)
    {

        return $this->entity->where('course_id', $courseId)->get();
    }


}
