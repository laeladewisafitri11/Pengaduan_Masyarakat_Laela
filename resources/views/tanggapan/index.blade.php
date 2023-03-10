<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>pengaduan masyarakat </title>
    </head>
    <body>
        <!-- <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pengaduan - <a href="https://www.malasngoding.com/category/laravel" target="_blank">tanggapan</a>
                </div> -->
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">masukan tanggapan anda</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id pengaduan</th>
                                <th>Tgl tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Nik</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $p)
                            <tr>
                                <td>{{ $p->id_pengaduan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/destroy/{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>