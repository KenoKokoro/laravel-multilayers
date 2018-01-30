<?php


namespace App\Http\Controllers\Api;


use BaseTree\Controllers\RestfulJsonController;
use App\BLL\StudentResource;
use Illuminate\Http\Request;

class StudentsController extends RestfulJsonController
{
    public function __construct(StudentResource $resource)
    {
        parent::__construct($resource);
    }
}
