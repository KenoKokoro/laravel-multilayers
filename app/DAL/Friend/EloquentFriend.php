<?php


namespace App\DAL\Friend;


use App\Models\Friend;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\Friend\FriendRepository;

class EloquentFriend extends BaseEloquent implements FriendRepository
{
    public function __construct(Friend $model)
    {
        parent::__construct($model);
    }
}
