<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My first laravel homepage</title>
</head>

<body>

  <header>
    <nav>
      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('shops')}}">Shops</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>{{$title}}</h1>
    <ul>
      @foreach ( $shops as $shop)
        <li>{{$shop}}</li>
      @endforeach
    </ul>
  </main>
  
</body>

</html>