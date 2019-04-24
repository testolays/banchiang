@extends('nav.menus')

@section('header')

@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
  <a href="{{url('virtual_museum')}}">
    <img class="" src="/img/collection/post.jpg" alt="Chania" width="100%" height="200">
  </a>

</div>
<div class="ibox">
  <div class="ibox-title">
    <h2>การควบคุมคีย์บอร์ดและเมาส์ในการเข้าชมพิพิธภัณฑ์เสมือนจริง</h2>
  </div>
  <div class="ibox-content">
    <img class="img-responsive" src="/img/collection/controller.jpg" alt="Chania" width="100%" height="250">
  </div>
</div>
<div class="footer">
  <div class="pull-right">
    <strong>Banchaing</strong> virtual museum
  </div>
</div>
@endsection

@section('footer')
  <script>
    $('li#Home').addClass('active');
  </script>
@endsection
