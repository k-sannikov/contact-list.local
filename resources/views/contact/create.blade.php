@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить контакт
  </h3>
      @if ($errors->any())
        @foreach ($errors->all() as $error)
            @component('components.error', [
                'message' => $error,
            ])

            @endcomponent
        @endforeach
    @endif
  <div class="card-body">
    <form action="{{ route('contacts.store') }}" method="post">
      @csrf

      @include('contact.partials.form')
    </form>
  </div>
</div>

@endsection
