@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
            <p>{{ $post['content'] }}!</p>
            <p><a href="{{ route('blog.post' ,[ 'id'=> 13"])}} ">Read more...</a></p>
            <!-- <h1 class="post-title">{{ $post['title'] }}</h1>
            <p>{{ $post['content'] }}!</p>
            <p><a href="{{ route('blog.post' ,[ 'id'=> array_search($post, $posts)]) }}">Read more...</a></p> -->
        </div>
    </div>
    <hr>
    @endforeach
@endsection