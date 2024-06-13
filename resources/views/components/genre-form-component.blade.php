<div class="form-body">
    <div class="form-group">
        <label>Назвиние</label>
        <input type="text" class="form-control" name="name" placeholder="Введите назвиние">
    </div>
    <div class="form-group">
        <label>Категория</label>
        <select class="form-control" name="category_id">
            <option value="">Не выбранно</option>
            @foreach($category as $val)
                <option value="{{$val->id}}">{{$val->name}}</option>
            @endforeach
        </select>
    </div>
</div>
