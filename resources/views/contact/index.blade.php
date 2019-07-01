@extends('layouts.app')

@section('content')
<div class="card">
  <h3 class="card-header">
    Список контактов
    <a class="btn btn-sm btn-success float-right" href="{{ route('contacts.create') }}">
      Добавить контакт
    </a>
  </h3>
  <div class="card-body">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Фамилия</th>
          <th scope="col" class="text-left">Имя</th>
          <th scope="col" class="text-left">Отчество</th>
          <th scope="col" class="text-center">Телефон</th>
          <th scope="col" class="text-right">Действие</th>
        </tr>
      </thead>
      <tbody>
        @forelse($contacts as $contact)
        <tr>
          <td>{{ $contact->surname }}</td>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->patronymic }}</td>
          <td class="text-center">{{ $contact->phone_work }}</td>
          <td class="text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('contacts.show', $contact->id) }}">
              Просмотреть
            </a>
            <a class="btn btn-sm btn-secondary" href="{{ route('contacts.edit', $contact->id) }}">
              Редактировать
            </a>&nbsp;
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" class="float-right">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit">Удалить</a>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3">
            <h3 class="text-center">Контакты отсутствуют</h3>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
