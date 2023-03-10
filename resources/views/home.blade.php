
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
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
<h6>Authors table</h6>
</div>
<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-0">
<table class="table align-items-center mb-0">
<thead>
<tr>
<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
<th class="text-secondary opacity-7"></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="d-flex px-2 py-1">
<div>
<img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
</div>
<div class="d-flex flex-column justify-content-center">
<h6 class="mb-0 text-sm">John Michael</h6>
<p class="text-xs text-secondary mb-0"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f79d989f99b794859296839e8192da839e9ad994989a">[email&#160;protected]</a></p>
</div>
</div>
</td>
<td>
<p class="text-xs font-weight-bold mb-0">Manager</p>
<p class="text-xs text-secondary mb-0">Organization</p>
</td>
<td class="align-middle text-center text-sm">
<span class="badge badge-sm bg-gradient-success">Online</span>
</td>
<td class="align-middle text-center">
<span class="text-secondary text-xs font-weight-bold">23/04/18</span>
</td>
<td class="align-middle">
<a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
Edit
</a>
</td>
</tr>
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