<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function authenticated(Request $request, $user)
{
    if ($user->role == 'teacher') {
        return redirect('/teacher/dashboard');
    }

    return redirect('/student/dashboard');
}

}
