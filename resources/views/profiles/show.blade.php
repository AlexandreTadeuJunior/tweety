@extends('layouts.app')

@section('content')
    
    <header class="mb-6 relative">
        <img src="/image/default-profile-banner.jpg" alt="" class="mb-2">
    </header>

    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Criado em {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
            <a href="" class="rounded-full shadow py-2 px-4 text-black text-xs mr-2" >Editar Perfil</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs" >Seguir</a>
        </div>
    </div>    
    
    <!-- COMO não tem imagem de bunner não ficou legal adicionar essa imagem na tela
    <img 
        src="https://i.pravatar.cc/40" 
        alt="" 
        class="rounded-full mr-2 absolute"
        style="width:150px; left: calc(50% - 75px); top:47%"
    >
    -->

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
