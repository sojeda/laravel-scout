<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Busqueda en la tabla post.
     *
     * @param  Request $request
     * @return mixed
     */
public function search(Request $request)
{
    // En primer lugar definimos el mensaje de error que vamos a mostrar 
    // si no existieran palabras clave o si no hay resultados.
    $error = ['error' => 'Sin resultados, ingrese otros campos para la búsqueda.'];

    // Si el usuario hizo una peticion e ingreso texto
    if($request->has('text')) {

        // Usando Laravel Scout para buscar en la tabla post.
        $posts = Post::search($request->get('text'))->get();

        // Si hay resultados se devuelven, sino va a mostrar el mensaje de error
        return $posts->count() ? $posts : $error;

    }
    
    // Retorna un mensaje de error si no existe
    return $error;
}
}
