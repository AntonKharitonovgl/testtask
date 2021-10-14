@include('layout.header')

<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Задание для теста</h1>
                <p class="lead text-muted">Сайт выполнен в качестве выполнения тестового задания</p>
                <a href="/books/create" style="text-decoration: none; color: #000 !important;">Создать статью для книги</a>
            </div>
        </div>
        <form method="GET" action="/books/">
            <div class="form-row align-items-center">
                <div class="col-auto my-1">

                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Сортировать по...</option>
                        <option value="sortASCauthor">Автору от А до Я</option>
                        <option value="sortASCname">Названию от А до Я</option>
                        <option value="sortASCcreate">Дате публикации по возрастанию</option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Сортировать</button>
                </div>
            </div>
        </form>
    </section>



    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach($books as $book)
                    @include('books.item')
                @endforeach

            </div>
        </div>
    </div>

</main>

@include('layout.footer')
