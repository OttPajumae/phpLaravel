@extends('Partials.layout')
@section('title', 'Articles')
@section('content')
    <a class="btn btn-primary mb-3" href="{{route('articles.create')}}">New Article</a>
    {{ $articles->links() }}
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->created_at}}</td>
                            <td>{{$article->updated_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-active">View</a>
                                    <a class="btn btn-warning" href="{{route('articles.edit',['article'=>$article])}}">Edit</a>
                                    <button form="delete-{{$article->id}}" class="btn btn-error">Delete</button>
                                </div>
                                <form id="delete-{{$article->id}}" action="{{route('articles.destroy',['article' => $article])}}" method="POST">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


@endsection
