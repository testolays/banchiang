<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Banchiang Musium</title>

  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

  <!-- FooTable -->
  <link href="/css/plugins/footable/footable.core.css" rel="stylesheet">

  <link href="/css/animate.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">

  <link href="/css/plugins/select2/select2.min.css" rel="stylesheet">
  <style>
  h2 {
         /*font-family: 'Tangerine', serif;*/
         /*font-size: 48px;*/
         font-family: 'Kanit', sans-serif;
       }
   h4 {
          /*font-family: 'Tangerine', serif;*/
          /*font-size: 48px;*/
          font-family: 'Kanit', sans-serif;
        }
   dt {
         /*font-family: 'Tangerine', serif;*/
         /*font-size: 48px;*/
         font-family: 'Kanit', sans-serif;
       }
   dd {
          /*font-family: 'Tangerine', serif;*/
          /*font-size: 48px;*/
          font-family: 'Kanit', sans-serif;
        }
  </style>
  @yield('header')


</head>


<body>
  <div id="wrapper white-bg">
      {{-- <div class="row border-bottom">
       <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">

       </nav>
     </div> --}}
   <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
     <span class="text-center white-bg">
       <h2>พิพิธภัณฑ์เสมือนจริงสามมิติเครื่องดินเผาชิ้นเอกบ้านเชียง</h2>
     </span>
   </nav>
      @yield('content')
  </div>
  <!-- Mainly scripts -->
  <script src="/js/jquery-2.1.1.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

  <!-- FooTable -->
  <script src="/js/plugins/footable/footable.all.min.js"></script>

  <!--select2-->
  <script src="/js/plugins/select2/select2.full.min.js"></script>
  <!-- Custom and plugin javascript -->
  <script src="/js/inspinia.js"></script>
  <script src="/js/plugins/pace/pace.min.js"></script>

  <!-- TouchSpin -->
  <script src="/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>


  @yield('footer')

  </body>

  </html>
