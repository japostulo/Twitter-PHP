@extends('home.app')

@section('content')
    <div class="h-full">
        
        @component('components.tweetMessage')

        @endcomponent
        
        @component('components.tweet')
            
        @endcomponent
    </div>
@endsection