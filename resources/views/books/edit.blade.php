@include('layout.header')


<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Редактирование страницы</h1>
            <p class="lead text-muted">{{$book->name}}</p>
        </div>
    </div>
    @include('layout.errors')
    {{$book->id}}
    <form method="POST" action="/books/{{ $book->id }}">
        @csrf
        @method('PATCH')
        @include('layout.form')
        <button type="submit" class="btn btn-primary">Редактировать страницу</button>
    </form>
</section>


@include('layout.footer')
