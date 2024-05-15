<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\student;
use App\Models\PostBody;

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
        
             Schema::defaultStringLength(191);

         view()->composer('*',function($view) {

  $view->with('userCount', Auth::user());
  //dd($view->userCount;

             if($view->userCount !=NULL)
             {
               $property_id=Auth::user()->property_id;
             }
             else {
               $property_id=0;
             }

            $view->with('user', Auth::user());
            // $view->with('qnsCountx', User::join('properties','users.property_id','properties.id')
            // ->select('properties.property_name')->first());

            // $view->with('qnsCount', answer::where('answer','!=','Yes')
            // ->where('manager_checklist','!=','Cleared')
            // ->where('property_id',$property_id)
            //  ->where('status','Active')
            // ->get());
            //->select('properties.property_name')->first());
             //$view->with('qnsCount', collect($qnsCount));

       $view->with('students', student::where('session','March 2023')
        ->select('first_name','last_name','photo')
            // ->where('manager_checklist','!=','Cleared')
            // ->where('property_id',$property_id)
            //  ->where('status','Active')
            // select('properties.property_name')
            ->get());

             $view->with('contact', PostBody::where('category','Contact')->first());
              // $view->with('students', student::where('category','Contact')->first());
        });
    }
}
