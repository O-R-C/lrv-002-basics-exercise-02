@extends('layouts.main')

@section('title', 'Добавление студента')

@section('content')
<div class="student-container">
  <h1>Добавить студента</h1>
  <form class="student-form" action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="field">
      <label for="name">Имя</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>
    <div class="field">
      <label for="surname">Фамилия</label>
      <input type="text" name="surname" id="surname" value="{{ old('surname') }}">
    </div>
    <div class="field">
      <input type="text" name="group_id" id="group_id" value="{{ $group->id }}" hidden>
    </div>
    <div class="field">
      <button type="submit">Добавить</button>
    </div>
  </form>
</div>
@endsection
