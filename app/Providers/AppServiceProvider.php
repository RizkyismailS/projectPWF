<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
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

public function boot()
{
    View::composer('*', function ($view) {
        $cartCount = 0;
        if (Auth::check()) {
            $userId = Auth::id();
            $cartCount = \App\Models\Cart::where('user_id', $userId)
                ->select('product_id')
                ->distinct()
                ->count();
        }
        $view->with('cartCount', $cartCount);
    });
}

}
