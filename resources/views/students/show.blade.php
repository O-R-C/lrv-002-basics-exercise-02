@extends('layouts.main')

@section('title', 'Студент')

@section('content')
<div class="student-container">
  <h1>{{ $student->name }} {{ $student->surname }}</h1>
  <p>Группа: {{ $student->group->title }}</p>
  <form action={{ route('students.destroy', $student) }} method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" name="delete" value={{ $student->id }}>Удалить</button>
  </form>
</div>
@endsection
