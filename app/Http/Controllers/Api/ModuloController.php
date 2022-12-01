<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModulesResources;
use App\Repository\ModuloRepository;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    protected $repository;

    public function __construct(ModuloRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }

    public function index($courseId)
    {
        // dd($this->repository->getAllCourses());
        return ModulesResources::collection($this->repository->getModulesCoursesBy($courseId));
    }
}
