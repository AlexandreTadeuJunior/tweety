@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="w-32">
            @include ('_sidebar-links')
        </div>
        <div class="flex-1 mx-10">
            @include('_publish-tweet-panel')
            
            <div class="border border-gray-300 rounded-lg">
            @foreach($tweets as $tweet)
                @include('_tweet')
            @endforeach
            </div>
        </div>
        <div class="w-1/6 bg-blue-100 rounded-lg p-4">
            @include ('_friends-list')
        </div>
    </div>
@endsection
