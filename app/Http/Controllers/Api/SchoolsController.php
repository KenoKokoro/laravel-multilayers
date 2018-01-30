<?php


namespace App\Http\Controllers\Api;


use BaseTree\Controllers\RestfulJsonController;
use App\BLL\SchoolResource;

class SchoolsController extends RestfulJsonController
{
    public function __construct(SchoolResource $resource)
    {
        parent::__construct($resource);
    }
}
