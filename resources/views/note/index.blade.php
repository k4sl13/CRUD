<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1><strong>Список заметок</strong></h1>
    
    <div class="container">
        <div class="words">
            @foreach ($notes as $note)
                <form action="{{ route('note.delete', ['title' => $note->name, 'description' => $note->description]) }}" class="word" method="post">
                    @csrf
            
                    <p>{{ $note->id }}</p>
                    <p>{{ $note->name }}</p>
                    <p>{{ $note->description }}</p>
                    <button type="submit" input class="styled">Удалить</button>
                    <a href="/note/{{ $note->id }}" class="styled2">Редактировать</a>
                </form>
            @endforeach
        </div>

        <form action="/note/create">
            <input type="submit" class="styled2" value="Добавить" />
        </form>
        
    </div>
</body>   
</html>