@include('layout.header')


<section class="py-5 text-center container">
    <img src="{{ $book->picture }}" width="25%" height="25%">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">{{$book->name}}</h1>
            <p class="lead text-muted">{{$book->shot_description}}</p>
            <a>Автор: {{$book->author}}</a>
            <br>
            <a>Дата публикации: {{$book->create}}</a>
        </div>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <form action="/books/{{ $book->id }}/edit" method="POST">
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                </form>
                <form action="/books/{{ $book->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-secondary">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
