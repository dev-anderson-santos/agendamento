<?php

namespace App\Providers;

use App\Models\ScheduleModel;
use App\Models\SchedulesNextMonthModel;
use App\Models\User;
use App\Observers\ScheduleObserver;
use App\Observers\SchedulesNextMonthObserver;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Necessário pois foi selecionada a codificação utf8 mbstring 
        Schema::defaultStringLength(191);

        User::observe(UserObserver::class);
        ScheduleModel::observe(ScheduleObserver::class);
        SchedulesNextMonthModel::observe((SchedulesNextMonthObserver::class));
    }
}
