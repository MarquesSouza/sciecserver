<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
        'App\Repositories\UserRepository','App\Repositories\UserRepositoryEloquent'
    );
        $this->app->bind(
            'App\Repositories\ActivityRepository','App\Repositories\ActivityRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\ActivityUserRepository','App\Repositories\ActivityUserRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\ArticleRepository','App\Repositories\ArticleRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\CourseEventRepository','App\Repositories\CourseEventRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\CourseRepository','App\Repositories\CourseRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\CourseEventRepository','App\Repositories\CourseEventRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\EventRepository','App\Repositories\EventRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\InstutionRepository','App\Repositories\InstutionRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\ParticipationRepository','App\Repositories\ParticipationRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\TypeActivityRepository','App\Repositories\TypeActivityRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\TypeActivityUserRepository','App\Repositories\TypeActivityUserRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\TypeUserRepository','App\Repositories\TypeUserRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\UserEventRepository','App\Repositories\UserEventRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\UserTypeUserRepository','App\Repositories\UserTypeUserRepositoryEloquent'
        );

    }
}
