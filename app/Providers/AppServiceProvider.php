<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Folder; // ★ 追加
use App\Policies\FolderPolicy; // ★ 追加

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
        //
    }

    protected $policies = [
        Folder::class => FolderPolicy::class,
    ];
}
