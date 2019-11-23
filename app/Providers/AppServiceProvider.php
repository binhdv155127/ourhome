<?php

namespace App\Providers;

use App\Districts;
use App\RoomType;
use App\Wards;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $Type_room = RoomType::get();
        view()->share('Type_room', $Type_room);
        $district_share = Districts::get();
        view()->share('district_share', $district_share);
        $ward_share = Wards::get();
        view()->share('ward_share', $ward_share);
    }
}
