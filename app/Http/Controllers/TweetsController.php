<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetsController extends Controller
{
    /**
     * salvando um novo tweet enviado pela view
     */
    public function store() {
        // Validando se o atributo body esta vindo no post
        $attributes = request()->validate(["body" => "required|max:255"]);

        // Salvando no banco de dados o tweet que acabou de enviar para o usuário logado no sistema
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes["body"]
        ]);

        // Retornando para o HOME
        return redirect('/home');
    }
}
