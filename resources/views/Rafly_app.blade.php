
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .bold {
            font-color: black;
            font-weight: bold;
        }
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 1rem;
            color: black;
            text-align: center;
        }
    </style>
    <title>Rafly Yogaswara Modul 5 | {{ $title }}</title>
</head>
<body>
    @include('partial.navbar')
    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partial.footer')
</body>
</html>