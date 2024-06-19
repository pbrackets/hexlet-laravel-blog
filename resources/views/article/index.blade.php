@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.index') }}"><h2>{{$article->name}}</h2></a>
        <a href="{{ route('articles.edit', $article) }}">Edit</a>

        <a href="..." data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        <input type="submit" value="Сохранить" data-disable-with="Сохраняем">
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
