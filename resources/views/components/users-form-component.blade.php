<div class="form-body">
    <div>
        <div class="form-group">
            <label>Логин</label>
            <input type="text" class="form-control" name="name" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Введите email">
        </div>
        <div class="form-group">
            <label>Аватар</label>
            <input type="file" class="form-control" name="avatar">
        </div>
        <div class="form-group">
            <label>Группа пользователя</label>
            <select class="form-control" name="user_group_id">
                <option value="">Не выбранно</option>
                @foreach($group as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" class="form-control" placeholder="Введите пароль">
        </div>
        <div class="form-group">
            <label>Повторите пароль</label>
            <input type="password" class="form-control" placeholder="Повторите пароль">
        </div>
    </div>
</div>
