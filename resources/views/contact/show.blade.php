@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Детали контакта
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Ф.И.О.: </strong> {{ $contact->surname }} {{ $contact->name }} {{ $contact->patronymic }}</li>
    <li class="list-group-item"><strong>Организация: </strong> {{ $contact->organization }}</li>
    <li class="list-group-item"><strong>ИНН: </strong> {{ $contact->INN }}</li>
    <li class="list-group-item"><strong>Отдел: </strong> {{ $contact->department }}</li>
    <li class="list-group-item"><strong>Должность: </strong> {{ $contact->position }}</li>
    <li class="list-group-item"><strong>Телефон (рабочий): </strong> {{ $contact->phone_work }}</li>
    <li class="list-group-item"><strong>Телефон (мобильный): </strong> {{ $contact->phone_mobile }}</li>
    <li class="list-group-item"><strong>Электронная почта: </strong> {{ $contact->email }}</li>
    <li class="list-group-item"><strong>Дата создания: </strong> {{ $contact->created_at }}</li>
    <li class="list-group-item"><strong>Дата редактирования: </strong> {{ $contact->updated_at }}</li>
  </ul>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('contacts.edit', $contact->id) }}">
        Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('contacts.index') }}">
        Отмена
      </a>
  </div>
</div>

@endsection
