<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     <strong>TAMBAH DATA PENGADUAN ANDA!!</strong>  <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div> 
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pengaduan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Tgl pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="Tgl pengaduan ..">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="date-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nik</label>
                            <textarea name="nik" class="form-control" placeholder="Nik pengaduan .."></textarea>
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Isi laporan</label>
                            <textarea name="isi_laporan" class="form-control" placeholder="Isi laporan pengaduan .."></textarea>
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="Foto pengaduan .."></textarea>
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <label class="radio-inline">
                                <input type="radio" id="proses" name="status" value="proses">proses</label>
                                
                                <label class="radio-inline">
                                    <input type="radio" id="selesai" name="status" value="selesai">selesai</label>
                            <!-- <textarea name="status" class="form-control" placeholder="Status pengaduan .."></textarea>
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
  -->
                        </div>
 
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>


