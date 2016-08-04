<?php 
/* Copyright © 2016 Ido Shoshani */


/* This program is released under the "GPL license".
   Please see the file LICENSE in this distribution for
   license terms. */
/* based on intermediate task list from the laravel documenation*/
namespace App\Modules;

//ModulesServiceProvider
// based on guide by Kamran Ahmed
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider{
// For each of the registered modules, include their routes and Views
public function boot()
    {
        // For each of the registered modules, include their routes and Views
        $modules = config("module.modules");
 
           while (list(,$module) = each($modules)) {
            // Load the routes for each of the modules
            if(file_exists(__DIR__.'/'.$module.'/routes.php')) {
                include __DIR__.'/'.$module.'/routes.php';
            }
            // Load the views
            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
            //

        }
    }
public function register() {}
}
