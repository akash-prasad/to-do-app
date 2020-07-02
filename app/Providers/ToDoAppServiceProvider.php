<?php


namespace App\Providers;


use App\ToDoApp\TaskRepository;
use App\ToDoApp\TaskRepositoryInterface;
use App\ToDoApp\Tasks;
use Illuminate\Support\ServiceProvider;

class ToDoAppServiceProvider extends ServiceProvider
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
        //register repository
        $this->app->singleton(TaskRepositoryInterface::class, function (){
            return new TaskRepository(resolve(Tasks::class));
        });
    }
}