<?php

namespace App\Providers;

use App\Models\Expense;
use App\Observers\ExpenseObserver;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        Livewire::setUpdateRoute(function ($handle) {
             return Route::post('gestion/public/livewire/update', $handle);
        });
        Expense::observe(ExpenseObserver::class);
    }
}
