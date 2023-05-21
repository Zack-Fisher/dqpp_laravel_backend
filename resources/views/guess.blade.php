<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Guess the number</h1> 

    @if(session("message"))
        <p>{{session('message')}}</p>
    @endif

    <form method="POST" action="{{route('guess.makeGuess')}}">
        @csrf
        <input type="number" name="guess" min="1" max="100" required>
        <button type="submit">Guess</button>
    </form>
</body>
</html>