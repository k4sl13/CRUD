<html>
    <head>
        <title>Document</title>
        <h1><strong>Добавить заметку</strong></h1>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <form action="{{ route('note.store') }}" method="post">
            @csrf
            <div class="word">
                <p>Название замтеки<input type="text" placeholder="" class="@error('title') is-invalid @enderror" name="title" id="title"></input> </p> 
            </div>
            
            <div class="work">
                <p>Описание замтки</p>
                <textarea class="@error('description') is-invalid @enderror" name="description" for="description" id="description"></textarea>
            </div>

            <button class="styled2" type="submit">Добавить</button>
        </form>
    </body>
</html>