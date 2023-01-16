<?php namespace Notsoweb\Author;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use Illuminate\Support\ServiceProvider;

/**
 * Proveedor de servicio del Autor
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class AuthorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Rutas
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        // Vistas
        $this->loadViewsFrom(__DIR__.'/views', 'nsw-author');
    }
}
