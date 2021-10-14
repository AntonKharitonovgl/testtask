<div class="col">
    <div class="card shadow-sm">
        <img src="{{ $book->picture }}" width="100%" height="100%">
        <div class="card-body">
            <p class="card-text"> {{ $book->shot_description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                    <form action="/books/{{ $book->id }}" method="GET">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Показать</button>
                    </form>

                    <form action="/books/{{ $book->id }}/edit" method="GET">
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
