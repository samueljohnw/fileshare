<!doctype html>
<html class="no-js" lang="en">
  <head>
    @include('templates.partials.head')
    @yield('header-scripts')
  </head>
  <body>
    @include('templates.partials.header')
    <hr>
    <div class="grid-x">
      <div class="small-1 cell">
      </div>
      <div class="small-10 cell">
        @yield('content')
      </div>
      <div class="small-1 cell">
      </div>
    </div>
    <script src="/js/app.js"></script>
    @yield('footer-scripts')
    <script> $(document).foundation();</script>
  </body>
</html>
