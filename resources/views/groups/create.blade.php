@extends('layouts.main')

@section('title', 'Добавление группы')

@section('content')
<div class="group-container">
  <h1>Добавить группу</h1>
  <form class="group-form" action="{{ route('groups.store') }}" method="POST">
    @csrf
    <div class="field">
      <label for="title">Название группы</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="field">
      <label for="start_from">Дата начала</label>
      <input type="date" name="start_from" id="start_from" value="{{ old('start_from') }}">
    </div>
    <div class="field">
      <label for="is_active">Активна</label>
      <input type="checkbox" name="is_active" id="is_active" value="1">
    </div>
    <div class="field">
      <button type="submit">Добавить</button>
    </div>
  </form>
</div>
@endsection
