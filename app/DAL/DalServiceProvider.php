<?php


namespace App\DAL;


use App\DAL\Friend\EloquentFriend;
use App\DAL\Friend\FriendRepository;
use App\DAL\School\EloquentSchool;
use App\DAL\School\SchoolRepository;
use App\DAL\Student\EloquentStudent;
use App\DAL\Student\StudentRepository;
use App\DAL\User\EloquentUser;
use App\DAL\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class DalServiceProvider extends ServiceProvider
{
    public function register()
    {
        $toBind = [
            UserRepository::class => EloquentUser::class,
            SchoolRepository::class => EloquentSchool::class,
            StudentRepository::class => EloquentStudent::class,
            FriendRepository::class => EloquentFriend::class,
        ];

        foreach ($toBind as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}