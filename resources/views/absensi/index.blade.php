
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ABSENSI</title>
        @include('backend.head')
    </head>

<body class="g-sidenav-show  bg-gray-100">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  @include('backend.leftbar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @include('backend.navbar')


  <div class="container-fluid py-4">
<div class="row">
<div class="col-12">
<div class="card mb-4">
<div class="card-header pb-0">
<h6>Tabel Absensi</h6>
<a class="btn bg-gradient-dark mb-0" href="{{ route('siswa.create') }}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah siswa </a>
</div>
<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-0">
<table class="table align-items-center mb-0">
<thead>
<tr>
<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIS</th>
<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
<th class="text-secondary opacity-7">aksi</th>
</tr>
</thead>
<tbody>
    @foreach ($siswa as $data)
<tr>
<td>
<div class="d-flex px-2 py-1">
<div>
<img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
</div>
<div class="d-flex flex-column justify-content-center">
    <h6 class="mb-0 text-sm">{{ $data->nis }}</h6>
</div>
</div>
</td>
<td>
    <p class="text-xs font-weight-bold mb-0">{{ $data->nama }}</p>
</td>
<td class="align-middle text-center">
    <span class="text-secondary text-xs font-weight-bold">{{ $data->kelas }}</span>
</td>
<td class="align-middle text-center text-sm">
    <span class="badge badge-sm bg-gradient-success">{{ $data->keterangan }}</span>
</td>
<td class="align-middle">
<form action="{{ route('siswa.destroy',$data->id) }}" method="POST">
    <a href="{{ route('siswa.edit',$data->id) }}" class="badge badge-sm bg-gradient-primary" data-toggle="tooltip" data-original-title="Edit user">
        Edit
    </a>
    @csrf
    @method('DELETE')
    <button type="submit" class="badge badge-sm bg-gradient-danger">Hapus</button>
    </form>
    
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>



<!-- footer -->
@include('backend.footer')
<!-- footer -->

</body>
</html>