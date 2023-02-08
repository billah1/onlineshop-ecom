
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LrCom | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('backend.layouts.inc.style')
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 @include('backend.layouts.inc.header')

   @include('backend.layouts.inc.Sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
      <div class="container mt-5">
        @yield('admin_content')
      </div>
    </div><!-- End Page Title -->



  </main><!-- End #main -->

   @include('backend.layouts.inc.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('backend.layouts.inc.script')

</body>

</html>
