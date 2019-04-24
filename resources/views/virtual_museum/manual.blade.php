@extends('nav.menus')

@section('header')

@endsection

@section('content')
  <div class="wrapper wrapper-content">
    Manual Contents
  </div>
  <div class="footer">
    <div class="pull-right">
      <strong>Banchaing</strong> virtual museum
    </div>
  </div>
@endsection

@section('footer')
<script>
  $('li#Manual').addClass('active');
  $('li#Unity').addClass('active');
  $('li#Manual').closest('ul').toggleClass('collapse');
</script>
@endsection
