
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('template/assets/img/favicon.png')}}">


<link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard" />

<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Soft UI Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, free dashboard, free admin dashboard, free bootstrap 5 admin dashboard">
<meta name="description" content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Soft UI Dashboard by Creative Tim">
<meta name="twitter:description" content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Soft UI Dashboard by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://demos.creative-tim.com/soft-ui-dashboard/examples/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png" />
<meta property="og:description" content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you." />
<meta property="og:site_name" content="Creative Tim" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<link href="{{ asset('template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

<link id="pagestyle" href="{{ asset('template/assets/css/soft-ui-dashboard.min.css?v=1.0.7') }}" rel="stylesheet" />

<style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
<script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>

<script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
      allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
  </script>


<script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>

    </head>

<body class="g-sidenav-show  bg-gray-100">


<div class="m-3 mt-7 p-3">
    <center>
<div class="card col-md-4">
  <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
    <a href="javascript:;" class="d-block">
      <!-- <img src="../assets/img/kit/pro/anastasia.jpg" class="img-fluid border-radius-lg"> -->
    </a>
  </div>

  <div class="card-body pt-2">
    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Ayo </span>
    <a href="javascript:;" class="card-title h5 d-block text-darker">
      Lakukan Absen
    </a>
    <div class="row">
  <div class="col-md-12 mt-3">
  <form  method="POST" action="{{ route('siswa.updateKeterangan') }}">
    @csrf
    @method('PUT')
    <div class="form-group success">
      <input type="text" placeholder="Masukan NIS" name="nis" class="form-control form-control-alternative is-valid my-3" />
      <input type="text" placeholder="keterangan" name="keterangan" class="form-control form-control-alternative is-valid my-3" value="hadir" />
      <button type="submit" class="btn bg-gradient-success">Absen</button>
    </div>
  </form>


  </div>
    <!-- <p class="card-description mb-4">
      Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
    </p> -->
      </div>
</div>
</center>

</div>





<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <footer class="footer pt-3  ">
<div class="container-fluid">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-12 mb-lg-0 mb-4">
<div class="copyright text-center text-sm text-muted text-lg-start">
    <center>
        <script> //   document.write(new Date().getFullYear())</script>
        made with <i class="fa fa-heart"></i> 
        for a better web.
        </center>
    </div>
</div>

<!-- <div class="col-lg-6">
    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
        <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
        </li>
    </ul>
</div> -->

</div>
</div>
</footer>
</div>
</main>


</body>
</html>