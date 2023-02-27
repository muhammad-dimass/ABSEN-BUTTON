
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT SISWA</title>
        @include('backend.head')
    </head>

<body class="g-sidenav-show  bg-gray-100">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  @include('backend.leftbar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @include('backend.navbar')


  <div class="p-4 bg-secondary rounded mx-5">
  <form  method="POST" action="{{ route('siswa.update',$siswa->id) }}">
    @csrf
    @method('PUT')
  <div class="row">
  <div class="col-md-6">
    <div class="form-group">
        <label for="nis">Nis</label>
      <input type="text" value="{{ $siswa->nis }}" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Masukan nis" name="nis">
    </div>  
    <div class="form-group">
        <label for="nama">Nama</label>
      <input type="text" value="{{ $siswa->nama }}" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Masukan nama" name="nama">
    </div>
    <div class="form-group">
        <label for="jenis kelamin">jenis kelamin</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
      <option>{{ $siswa->jenis_kelamin   }}</option>
      <option>laki-laki</option>
      <option>perempuan</option>
    </select>
    </div>
     <div class="form-group">
        <label for="kelas">kelas</label>
        <select class="form-control" id="exampleFormControlSelect1" name="kelas">
      <option>{{ $siswa->kelas }}</option>
      <option>XII RPL 1</option>
      <option>XII RPL 2</option>
    </select>
    </div>  <div class="form-group">
        <label for="nama">keterangan</label>
     <select class="form-control" id="exampleFormControlSelect1" name="keterangan">
      <option>{{ $siswa->keterangan }}</option>
      <option>hadir</option>
      <option>izin</option>
      <option>sakit</option>
      <option>alpa</option>
    </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="badge badge-sm bg-gradient-primary">Simpan</button>
        </div>
  </div>
  </div>
  </form>
</div>





<!-- footer -->
@include('backend.footer')
<!-- footer -->

</body>
</html>