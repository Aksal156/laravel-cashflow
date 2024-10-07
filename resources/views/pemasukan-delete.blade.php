{{-- @extends('layouts.mainlayout')

@section('style')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content') --}}
{{-- <div class="mt-5">
        <h2>APAKAH KAMU YAKIN UNTUK MENGHAPUS DATA : {{ $item->id }}</h2>
        <form action="/pemasukan-destroy/{{ $item->id }}" style="display: inline-block" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">delete</button>
        </form>
        <a href="/pemasukan"><button>cancel </button></a>
    </div> --}}
{{-- @endsection --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $halaman }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="mt-5">
        <h2>APAKAH KAMU YAKIN UNTUK MENGHAPUS DATA : {{ $item->id }}</h2>
        <form action="/pemasukan-destroy/{{ $item->id }}" style="display: inline-block" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">delete</button>
        </form>
        <a href="/pemasukan"><button class="btn btn-primary">cancel </button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
