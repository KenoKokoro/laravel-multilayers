<?php


namespace App\Modules;


use App\Modules\FriendApi\FriendApiImpl;
use App\Modules\FriendApi\FriendApiInterface;
use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(FriendApiInterface::class, FriendApiImpl::class);
    }
}