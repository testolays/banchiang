@extends('nav.menus')

@section('header')

@endsection

@section('content')
  <div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-12">
     <h2>ข้อมูลเครื่องดินเผาชิ้นเอกบ้านเชียงสมัยกลาง(Middle Period)</h2>
   </div>
 </div>
 <div class="wrapper wrapper-content animated fadeInRight">
   <div class="row">
     @foreach ($details as $detail)
     <div class="col-md-3">
       <div class="ibox">
         <div class="ibox-content product-box">
          {{-- <div class="product-imitation">

          </div> --}}
          <div class="product-desc">
            <img src="{{$detail->image}}" class="img-thumbnail">
            {{-- <span class="product-price">
                {{$detail->id}}
            </span> --}}
            <h4>{{$detail->title}}</h4>
            {{-- <div class="small m-t-xs">
                {{$detail->desc}}
            </div> --}}
            <div class="m-t text-righ">
              <a href="{{url('item_detail/'.$detail->id)}}" class="btn btn-xs btn-outline btn-primary">
                  รายละเอียด
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
         </div>
       </div>
     </div>
      @endforeach
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
  $('li#MiddleDetail').addClass('active');
  $('li#MPMiddle').addClass('active');
  $('li#Collection').addClass('active');
  $('li#MiddleDetail').closest('ul').toggleClass('collapse');
</script>
@endsection
