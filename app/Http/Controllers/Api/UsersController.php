<?php


namespace App\Http\Controllers\Api;


use BaseTree\Controllers\RestfulJsonController;
use App\BLL\UserResource;

class UsersController extends RestfulJsonController
{
    public function __construct(UserResource $resource)
    {
        parent::__construct($resource);
    }
}
