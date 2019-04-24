<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Banchiang Musium</title>

  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">

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
    td {
           /*font-family: 'Tangerine', serif;*/
           font-size: 14px;
           font-family: 'Kanit', sans-serif;
         }
   p {
          /*font-family: 'Tangerine', serif;*/
          font-size: 14px;
          font-family: 'Kanit', sans-serif;
        }
     small {
            /*font-family: 'Tangerine', serif;*/
            font-size: 12px;
            font-family: 'Kanit', sans-serif;
          }
  </style>
  @yield('header')


</head>


<body>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
          <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
              <div class="dropdown profile-element"> <span>
                <img alt="image" class="img-circle" src="/img/bc.jpg" />
                </span>
              </div>
              <div class="logo-element">
                BC
              </div>
            </li>
            <li id="Home">
             <a href="{{url('/')}}">
               <i class="fa fa-th-large"></i>
               <span class="nav-label">หน้าหลัก</span>
             </a>
            </li>
            <li id="About">
             <a href="{{url('about')}}">
               <i class="fa fa fa-trophy"></i>
               <span class="nav-label">เกี่ยวกับบ้านเชียง</span>
             </a>
            </li>
            <li id="Unity">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span class="nav-label">พิพิธภัณฑ์เสมือนจริง</span>
                <span class="fa arrow"></span>
                <ul class="nav nav-second-level">
                  <li id="VirtualMuseum">
                    <a href="{{url('virtual_museum')}}">
                      <i class="fa fa-video-camera"></i>
                      <span class="nav-label">นำชมพิพิธภัณฑ์<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เสมือนจริง</span>
                    </a>
                  </li>
                  <li id="Manual">
                    <a href="{{url('/')}}">
                      <i class="fa fa-book"></i>
                      <span class="nav-label">คู่มือการใช้งาน</span>
                    </a>
                  </li>
                </ul>
              </a>
              </li>
              <li id="Timeline">
               <a href="{{url('timeline')}}">
                 <i class="fa fa-indent"></i>
                 <span class="nav-label">ลำดับเวลาเครื่องดินเผา<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บ้านเชียง</span>
               </a>
              </li>
              <li id="Collection">
                  <a href="{{url('era_timeline')}}">
                    <i class="fa fa-diamond"></i>
                    <span class="nav-label">Digital Collection</span>
                    <span class="fa arrow"></span>
                  </a>
                  <ul class="nav nav-second-level">
                    <li id="MPEarly">
                      <a href="#">
                        <i class="fa fa-star-o"></i>
                        <span class="nav-label">เครื่องดินเผา<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชิ้นเอกสมัยต้น</span>
                        <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-third-level">
                        <li id="EarlyFeature">
                          <a href="{{url('early_feature')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ลักษณะเครื่องดินเผา<br>บ้านเชียงสมัยต้น
                          </a>
                        </li>
                        <li id="EarlyStructural">
                          <a href="{{url('early_structural')}}">
                            {{-- <span class="nav-label"></span> --}}
                              มิติทางศิลปะสังคม<br>และวัฒนธรรม
                          </a>
                        </li>
                        <li id="EarlyDetail">
                          <a href="{{url('early_details')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ข้อมูลเครื่องดินเผา<br>บ้านเชียงสมัยต้น
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li id="MPMiddle">
                      <a href="#">
                        <i class="fa fa-star-half-full"></i>
                        <span class="nav-label">เครื่องดินเผา<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชิ้นเอกสมัยกลาง</span>
                        <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-third-level">
                        <li id="MiddleFeature">
                          <a href="{{url('middle_feature')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ลักษณะเครื่องดินเผา<br>บ้านเชียงสมัยกลาง
                          </a>
                        </li>
                        <li id="MiddleStructural">
                          <a href="{{url('middle_structural')}}">
                            {{-- <span class="nav-label"></span> --}}
                              มิติทางศิลปะสังคม<br>และวัฒนธรรม
                          </a>
                        </li>
                        <li id="MiddleDetail">
                          <a href="{{url('middle_details')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ข้อมูลเครื่องดินเผา<br>บ้านเชียงสมัยกลาง
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li id="MPLate">
                      <a href="#">
                        <i class="fa fa-star"></i>
                        <span class="nav-label">เครื่องดินเผา<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชิ้นเอกสมัยปลาย</span>
                        <span class="fa arrow"></span>
                      </a>
                      <ul class="nav nav-third-level">
                        <li id="LateFeature">
                          <a href="{{url('late_feature')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ลักษณะเครื่องดินเผา<br>บ้านเชียงสมัยปลาย
                          </a>
                        </li>
                        <li id="LateStructural">
                          <a href="{{url('late_structural')}}">
                            {{-- <span class="nav-label"></span> --}}
                              มิติทางศิลปะสังคม<br>และวัฒนธรรม
                          </a>
                        </li>
                        <li id="LateDetail">
                          <a href="{{url('late_details')}}">
                            {{-- <span class="nav-label"></span> --}}
                            ข้อมูลเครื่องดินเผา<br>บ้านเชียงสมัยปลาย
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </li>
           </ul>
         </div>
       </nav>
     </div>
     <div id="page-wrapper" class="gray-bg">
       <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>
            {!!Form::open(['url' => 'search_results', 'method' => 'POST', 'class' => "navbar-form-custom", 'role' => 'search'])!!}
              <div class="form-group">
                {!!Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'ค้นหาเครื่องดินเผา'])!!}
              </div>
            {!!Form::close()!!}
          </div>
          <span class="pull-right"><h2>พิพิธภัณฑ์เสมือนจริงสามมิติเครื่องดินเผาชิ้นเอกบ้านเชียง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></span>
        </nav>
      </div>
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
