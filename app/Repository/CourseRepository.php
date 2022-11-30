<?php

namespace App\Repository;

use App\Models\Course;

class CourseRepository
{
    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;
    }

    public function getAllCourses()
    {

        return $this->entity->get();
    }

    public function getCourse(string $identify)
    {
        return $this->entity->findOrFail($identify);
    }
}
