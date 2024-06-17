<?php declare(strict_types=1);

@extends('layouts.app')

@section('content')
 {{-- BEGIN (write your solution here) --}}
    @if ($errors->any())
        <div>
            <ul>
@foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
@endforeach
            </ul>
        </div>
@endif

{{ html()->modelForm($article, 'POST', route('articles.store'))->open()}}
{{  html()->label('Имя', 'name')}}
{{  html()->input('text', 'name')}}
{{  html()->label('Содержание', 'body')}}
{{  html()->textarea('body')}}
{{ html()->submit('Создать')}}
{{ html()->closeModelForm()}}
@endsection
