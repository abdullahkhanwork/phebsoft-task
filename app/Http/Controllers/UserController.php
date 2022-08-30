<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserDepartmentResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $row = User::all();
//        $resource = UserResource::collection($row);
        $resource = UserDepartmentResource::collection($row);

        return response($resource, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        $row = User::factory(1)->create()->first();
//        $resource = UserResource::make($row);
        $resource = UserDepartmentResource::make($row);

        return response($resource, 200);
    }
}
