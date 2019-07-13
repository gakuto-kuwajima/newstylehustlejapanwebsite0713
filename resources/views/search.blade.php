@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row">
                <div class="posts col-md-10 mx-auto mt-3">
                    @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="caption mx-auto">
                                    <div class="image">
                                        @if ($post->eyecatch_path)
                                            <img src="{{ asset('storage/image/' . $post->eyecatch_path) }}">
                                        @endif
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="title">
                                        @if ($post->name)
                                        <p class="name mx-auto">{{ str_limit($post->name, 100) }}</p>
                                        @endif
                                        @if ($post->pref)
                                        <p class="name mx-auto">{{ str_limit($post->pref, 100) }}</p>
                                        @endif
                                    </div>
                                    <div class="date">
                                        {{ $post->updated_at->format('Y年m月d日') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                    @endforeach
                </div>
            </div>
      </div>
@endsection
