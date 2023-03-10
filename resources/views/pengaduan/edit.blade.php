<!doctype html>
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
         <title>UBAH PENGADUAN</title> 
        </head> 
        <body> 
            <div class="container">
                 <div class="card mt-5"> 
                    <div class="card-header text-center"> 
                        EDIT DATA NYA DISINI!!
                     </div> 
                     <div class="card-body"> 
                        <a href="/pengaduan" class="btn btn-primary">Kembali</a> 
                        <br/> 
                        <br/> 
                        
                        <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}"> 
                            {{ csrf_field() }} 
                            {{ method_field('GET') }}

                            <div class="form-group"> 
                                <label>Tanggal</label> 
                                <input type="text" name="tgl_pengaduan" class="form-control" placeholder="tgl_pengaduan" value=" {{ $pengaduan->tgl_pengaduan }}"> 
                               
                                @if($errors->has('tgl_pengaduan')) 
                                <div class="text-danger"> 
                                    {{ $errors->first('tgl_pengaduan')}} 
                                </div> 
                                @endif 
                            
                            </div>

                            <div class="form-group"> 
                                <label>Nik</label> 
                                <input type="text" name="nik" class="form-control" placeholder="nik" value=" {{ $pengaduan->nik }}"> 
                               
                                @if($errors->has('nik')) 
                                <div class="text-danger"> 
                                    {{ $errors->first('nik')}} 
                                </div> 
                                @endif 
                            
                            </div>

                            <div class="form-group"> 
                                <label>Isi Laporan</label> 
                                <input type="text" name="isi_laporan" class="form-control" placeholder="isi_laporan" value=" {{ $pengaduan->isi_laporan }}"> 
                               
                                @if($errors->has('isi_laporan')) 
                                <div class="text-danger"> 
                                    {{ $errors->first('isi_laporan')}} 
                                </div> 
                                @endif 
                            
                            </div>

                            <div class="form-group"> 
                                <label>Foto</label> 
                                <input type="file" name="foto" class="form-control" placeholder="foto" value=" {{ $pengaduan->foto }}"> 
                               
                                @if($errors->has('foto')) 
                                <div class="file-danger"> 
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
                                <!-- <input type="text" name="status" class="form-control" placeholder="status" value=" {{ $pengaduan->status }}"> 
                               
                                @if($errors->has('status')) 
                                <div class="text-danger"> 
                                    {{ $errors->first('status')}} 
                                </div> 
                                @endif  -->
                            
                            </div>

                            <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary" value="edit">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>