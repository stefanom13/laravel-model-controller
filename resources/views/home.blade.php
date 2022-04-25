<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-model-controller</title>
</head>
<body>
    <h1>Film</h1>

    @foreach ($movies as $movie)
    <div class="">
        <ul>
          <li>
            <h2 class="">{{$movie['title']}}</h2>
            <h4 class=""> {{$movie['original_title']}} </h4>
            <p>date: {{$movie['date']}}</p>
            <p>vote: {{$movie['vote']}} </p>
          </li>
        </ul>
      </div>
        
    @endforeach
</body>
</html>