<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-hero">It is simple, just do it!</div>
            <div class="header-add"><input id="header-add-button" class="buttons" type="button" value="+" ></div>
        </div>
        <div class="add-section">
            <form class="add-section-form" action="/" method="POST">
            @csrf
                <input autofocus id="add-section-textbox" name="content" type="text" placeholder="I need to do...">
                <input id="add-section-submit" type="submit" value="ADD">
            </form>
        </div>
        <div class="to-do">
            @if(isset($toDos))
                @foreach ($toDos as $todo)
                    <div class="to-do-single"><p>{{$todo->content}}</p>
                        <form class="to-do-single-form" action="/delete/{{$todo->id}}" method="POST">
                        @csrf
                            <div ><input class="buttons" type="submit" name="{{$todo->id}}" value="Done"></div>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


    <script src="javascript.js"></script>

</body>
</html>
