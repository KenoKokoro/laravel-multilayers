<?php


namespace App\DAL\School;


use App\Models\School;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\School\SchoolRepository;

class EloquentSchool extends BaseEloquent implements SchoolRepository
{
    public function __construct(School $model)
    {
        parent::__construct($model);
    }
}
