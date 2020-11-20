<!DOCTYPE html>
<html lang="en">

@include('website.includes.head')

@include('website.includes.nav')


<body>

<div class="container">
  @yield('content')
</div>
  <!-- /.container -->
  @include('website.includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('ui/website/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('ui/website/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
