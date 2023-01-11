@extends('layout.app')
@section('content');
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder"> Post {{$post->id}}</h1>
                    <p class="lead mb-0">{{$post->title}}</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-12">
                    <p>{{$post->post_text}}</p>
                </div>
            </div>
        </div>
@endsection
