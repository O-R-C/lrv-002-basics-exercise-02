@extends('layouts.main')

@section('title', $group->title)

@section('content')
<div class="group-container">
  <h1>{{ $group->title }}</h1>
  <p>Дата начала: {{ $group->start_from }}</p>
  <p>Активна: {{ $group->is_active ? 'Да' : 'Нет' }}</p>

  <form action={{ route('groups.destroy', $group->id) }} method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" name="delete" value={{ $group->id }}>Удалить группу</button>
  </form>
</div>

<div class="group-students">
  <h2>Студенты</h2>
  <ul>
    @foreach ($group->students as $student)
    <li>
      <a href={{ route('students.show', [$student, $group->title]) }}>{{ $student->name }} {{ $student->surname }}</a>
    </li>
    @endforeach
  </ul>
  <a href="/groups/{{ $group->id }}/students/create">Добавить студента</a>
</div>
@endsection
