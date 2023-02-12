
<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
     <!-- Site title -->
 <title>Galio - @yield('frontendtitle')</title>
   @include('frontend.layouts.inc.style')

</head>

<body>

   @include('frontend.layouts.inc.color')

    <div class="wrapper">

      @include('frontend.layouts.inc.header')

      @include('frontend.layouts.inc.her')

         @yield('frontend_content')

     @include('frontend.layouts.inc.footer')

    </div>


  @include('frontend.layouts.inc.modal')

  @include('frontend.layouts.inc.scroll')



  @include('frontend.layouts.inc.script')
</body>



</html>
