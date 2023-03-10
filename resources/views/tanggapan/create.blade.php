<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tanggapan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH TANGGAPAN ANDA DISINI!!</strong><a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div> 
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/tanggapan/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>id pengaduan</label>
                            <input type="text" name="id_pengaduan" class="form-control" placeholder="id pengaduan..">
 
                            @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tgl tanggapan</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" placeholder="Tgl penanggapan..">
 
                            @if($errors->has('tgl_tanggapan'))
                                <div class="date-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder=" tanggapan .."></textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>nik</label>
                            <textarea name="nik" class="form-control" placeholder="nik pengaduan .."></textarea>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>