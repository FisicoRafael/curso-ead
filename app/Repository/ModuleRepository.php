<?php

namespace App\Repository;


use App\Models\Modulo;

class ModuloRepository
{
    protected $entity;

    public function __construct(Modulo $course)
    {
        $this->entity = $course;
    }

    public function getModulesCoursesBy($courseId)
    {

        return $this->entity->where('course_id', $courseId)->get();
    }


}
