{{-- <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                  Pengeluaran
                </div>
                <div class="card-body">
                    <form action="pengeluaran" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal</label>
                            <input type="number" class="form-control" placeholder="input nominal" name="nominal" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="teks" class="form-control" placeholder="input keterangan" name="keterangan" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" placeholder="input tanggal" name="tanggal" required>
                        </div>
                        <div class="row mb-4 col-5 m-auto">
                           <a href="/pengeluaran"><button class="btn btn-success" type="submit">Submit</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Pengeluaran
                    </div>
                    <div class="card-body">
                        <form action="pengeluaran" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input type="number" class="form-control" placeholder="input nominal" name="nominal"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="teks" class="form-control" placeholder="input keterangan"
                                    name="keterangan" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" placeholder="input tanggal" name="tanggal"
                                    required>
                            </div>
                            <div class="row mb-4 col-5 m-auto">
                                <a href="/pengeluaran"><button class="btn btn-success"
                                        type="submit">Submit</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
