@extends('layouts.main')

@section('title', 'Группы')

@section('content')
<div class="groups">
  <h1>Группы</h1>
  <a href="/groups/create">Добавить группу</a>
  <ul>
    @foreach ($groups as $group)
    <li>
      <a href="/groups/{{ $group->id }}">{{ $group->title }}</a>
    </li>
    @endforeach
  </ul>
</div>
@endsection
