<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModulesResources;
use App\Models\Modulo;
use App\Repository\ModuloRepository;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    // protected $repository;

    // public function __construct(ModuloRepository $moduloRepository)
    // {
    //     $this->repository = $moduloRepository;
    // }

    public function index($courseId)
    {
        // dd($this->repository->getAllCourses());
        $repo=Modulo::where('course_id', $courseId)->get();
        // return ModulesResources::collection($this->repository->getModulesCoursesBy($courseId));
        return ModulesResources::collection($repo);
    }
}
