<div class="form-group">
    <div class="form-row">
        <div class="col">
            <label for="surname">Фамилия <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="surname" name="surname"
                value="{{$contact->surname ?? old('surname')}}">
        </div>
        <div class="col">
            <label for="name">Имя <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name"
                value="{{$contact->name ?? old('name')}}">
        </div>
        <div class="col">
            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" id="patronymic" name="patronymic"
                value="{{$contact->patronymic ?? old('patronymic')}}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col-8">
            <label for="organization">Организация</label>
            <input type="text" class="form-control" id="organization" name="organization"
            value="{{$contact->organization ?? old('organization')}}">
        </div>
        <div class="col">
            <label for="INN">ИНН</label>
            <input type="text" class="form-control" id="INN" name="INN"
                value="{{$contact->INN ?? old('INN')}}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col-8">
            <label for="department">Отдел</label>
            <input type="text" class="form-control" id="department" name="department"
                value="{{$contact->department ?? old('department')}}">
        </div>
        <div class="col">
            <label for="position">Должность</label>
            <input type="text" class="form-control" id="position" name="position"
                value="{{$contact->position ?? old('position')}}">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col">
            <label for="phone_work">Телефон (рабочий) <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="phone_work" name="phone_work"
                value="{{$contact->phone_work ?? old('phone_work')}}">
        </div>
        <div class="col">
            <label for="phone_mobile">Телефон (мобильный)</label>
            <input type="text" class="form-control" id="phone_mobile" name="phone_mobile"
                value="{{$contact->phone_mobile ?? old('phone_mobile')}}">
        </div>
        <div class="col">
            <label for="email">Электронная почта</label>
            <input type="text" class="form-control" id="email" name="email"
                value="{{$contact->email ?? old('email')}}">
        </div>
    </div>
</div>
<input type="hidden" name="user_id" value="{{ Auth::id() }}">
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
<a class="btn btn-danger" href="{{ route('contacts.index') }}">Отмена</a>
