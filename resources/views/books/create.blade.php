@include('layout.header')

<section class="py-5 text-center container">
    <div class="margin-top:-10px margin-left:-10px">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Создание страницы</h1>
                <p class="lead text-muted">{{$book->name}}</p>
            </div>
        </div>

       @include('layout.errors')

        <form method="post" action="/books">
            @csrf
            @include('layout.form', compact('book'))
            <button type="submit" class="btn btn-primary">Создать статью</button>
        </form>
    </div>
</section>
@include('layout.footer')
