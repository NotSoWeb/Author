<?php namespace Notsoweb\Author;
/**
 * @copyright Copyright (c) 2023 Notsoweb (https://notsoweb.com) - All rights reserved.
 */

use App\Http\Controllers\Controller;

/**
 * Controllador de la pagina de autor de a página.
 * 
 * @author Moisés de Jesús Cortés Castellanos <ing.moisesdejesuscortesc@notsoweb.com>
 * 
 * @version 1.0.0
 */
class AuthorController extends Controller
{
    /**
     * Página de Inicio del author de la pagina
     */
    public function index()
    {
        return view('nsw-author::index');
    }
}
