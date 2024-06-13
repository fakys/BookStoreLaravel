<div class="form-body">
    <div class="form-group">
        <label>Имя</label>
        <input type="text" class="form-control" name="name" placeholder="Введите имя">
    </div>
    <div class="form-group">
        <label>Пользователь</label>
        <select class="form-control" name="category_id">
            <option value="">Не выбранно</option>
            @foreach($users as $val)
                <option value="{{$val->id}}">{{$val->name}}</option>
            @endforeach
        </select>
    </div>
</div>
