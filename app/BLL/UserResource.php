<?php


namespace App\BLL;


use App\DAL\User\UserRepository;
use BaseTree\Resources\BaseResource;

class UserResource extends BaseResource
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
}
