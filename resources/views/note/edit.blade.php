<html>
    <head>
        <title>Document</title>
        <h1><strong>Редактирование заметки</strong></h1>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <form action="{{ route('note.update', $note->id, ['id' => $note->id, 'title' => $note->title, 'description' => $note->description]) }}" method="post">
            @csrf
            <input type="hidden" id="id" name="id" value="{{$note->id}}" />
            <div class="word">
                <p>Название замтеки<input type="text" placeholder="" class="@error('title') is-invalid @enderror" name="title" id="title" value="{{$note->name}}"></input> </p> 
            </div>
            
            <div class="work">
                <p>Описание замтки</p>
                <textarea class="@error('description') is-invalid @enderror" name="description" for="description" id="description">{{ $note->description}}</textarea>
            </div>

            <button class="styled2" type="submit">Сохранить</button>
        </form>
    </body>
</html>