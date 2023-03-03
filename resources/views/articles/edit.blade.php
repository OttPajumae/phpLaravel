@extends('Partials.layout')
@section('title', 'Articles')
@section('content')

    <form action="{{route('articles.update', ['article'=>$article])}}" method="POST">
        @csrf
        <div class="form-control w-full max-w-xs">
            <label class="label" for="title">
                <span class="label-text">Title</span>
            </label>
            <input type="text" id="title" placeholder="Title" class="input input-bordered w-full max-w-xs" name="title" value="{{old('title') ?? $article->title}}"/>
            @error('title')
            <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
            </label>
            @enderror
        </div>
        <div class="form-control">
            <label class="label" for="body">
                <span class="label-text">Content</span>
            </label>
            <textarea class="textarea textarea-bordered h-24" placeholder="Content..." name="body">{{old('body') ?? $article->body}}</textarea>
            @error('body')
            <label class="label">
                <span class="label-text-alt text-error">{{$message}}</span>
            </label>
            @enderror
        </div>
        <input type="submit" value="Create" class="btn btn-primary mt-3">
    </form>


@endsection
