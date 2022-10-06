<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap');

    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    ul, ol, menu {
      list-style: none;
    }

    body {
      font-family: 'Sora', sans-serif;
    }

    h1, h2 {
      color: #0F172A;
    }

    .container {
      max-width: 1200px;
      padding: 2rem 1.5rem;
      margin: 0 auto;
    }

    .header {
      text-align: center
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -1rem;
    }

    .col {
      width: calc(100% / 3);
      padding: 0 1rem;
      margin-top: 2rem;
    }

    .card {
      padding: 1.5rem;
      border-radius: 0.5rem;
      background-color: #F7FAFC;

      font-size: 1rem;
      line-height: 1.5rem;
      color: #334155;
    }
  </style>
</head>
<body>
  <div class="container header">
    <h1>Hello World</h1>
  </div>

  <div class="container">
    <h2>Studenti:</h2>
    <ul class="row">
      @foreach ($students as $student)
        <li class="col">
          <div class="card">
            {{ $student }}
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</body>
</html>