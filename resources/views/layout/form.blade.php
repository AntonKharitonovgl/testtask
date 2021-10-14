<div class="mb-3">
    <label for="inputTitle" class="form-label">Название книги</label>
    <input type="text" class="form-control" id="inputTitle" placeholder="Введите название книги" name="name"
           @if(isset($book))
           value="{{ old('name', $book->name) }}">
           @endif>
</div>
<div class="mb-3">
    <label for="inputDescription" class="form-label">Краткое описание книги</label>
    <input type="text" class="form-control" id="inputDescription" placeholder="Введите краткое описание книги" name="shot_description"
           @if(isset($book))
           value="{{ old('shot_description', $book->shot_description) }}">
           @endif>
</div>
<div class="mb-3">
    <label for="inputBody" class="form-label">Автор</label>
    <input type="text" class="form-control" id="inputBody" placeholder="Введите имя автора" name="author"
        @if(isset($book))
        value="{{ old('author', $book->author) }}">
        @endif>
</div>
<div class="mb-3">
    <label for="inputBody" class="form-label">Дата публикации</label>
    <input type="text" class="form-control" id="inputBody" placeholder="Введите дату в формате YYYY-MM-DD" name="create"
       @if(isset($book))
       value="{{ old('create', $book->create) }}">
       @endif>
</div>
<div class="mb-3">
    <label for="inputBody" class="form-label">Ссылка на изображение</label>
    <input type="text" class="form-control" id="inputBody" placeholder="Ссылка на изображение" name="picture"
        @if(isset($book))
        value="{{ old('picture', $book->picture) }}">
        @endif>
</div>

