<div class="form-body">
    <div>
        <div class="form-group">
            <label>Название</label>
            <input type="text" class="form-control" name="title" placeholder="Введите название">
        </div>
        <div class="form-group">
            <label>Описание</label>
            <textarea class="form-control" name="description" placeholder="Введите описание"></textarea>
        </div>
        <div class="form-group">
            <label>Цена</label>
            <input type="number" class="form-control" name="price" placeholder="Введите цену">
        </div>
        <div class="form-group">
            <label>Главное фото</label>
            <input type="file" class="form-control" name="main_photo">
        </div>
        <div class="form-group">
            <label>Фотографии</label>
            <input type="file" class="form-control" name="photos[]" multiple>
        </div>
        <div class="form-group">
            <label>Жанр</label>
            <select class="form-control" name="genre_id">
                <option value="">Не выбранно</option>
                @foreach($genres as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Автор</label>
            <select class="form-control" name="author_id">
                <option value="">Не выбранно</option>
                @foreach($authors as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Теги</label>
            <select class="form-control" name="tags_id" multiple>
                @foreach($tags as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
