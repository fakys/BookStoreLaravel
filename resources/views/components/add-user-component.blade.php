<div>
    <form method="post">
        @csrf
        <div class="form-group">
            <label>Логин</label>
            <input type="text" name="name" class="form-control" placeholder="Логин">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Аватар</label>
            <input type="file" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Группа</label>
            <select class="form-control" name="group">
                @foreach($groups as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Повторите пароль</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit">
    </form>
</div>
