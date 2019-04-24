@extends('nav.menus')

@section('header')

@endsection

@section('content')
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-content">
            <h2>
                 พบรายการที่ค้นหา {{$count}} รายการ : จากข้อความที่ค้นหาคือ <span class="text-navy">{{$kw}}</span>
            </h2>

            <div class="search-form">
              {!!Form::open(['url' => 'search_results', 'method' => 'POST'])!!}
                <div class="input-group">
                  {!!Form::text('search', null, ['class' => 'form-control input-lg', 'placeholder' => 'ค้นหาเครื่องดินเผา'])!!}
                  <div class="input-group-btn">
                    <button class="btn btn-lg btn-primary" type="submit">
                        ค้นหา
                    </button>
                  </div>
                </div>
              {!!Form::close()!!}
             </div>
             <div class="list-group">
             @if($count > 0)
                 @foreach ($details as $item)
                <div class="row">
                   <div class="col-md-12 hr-line-dashed"></div>
                   <div class="col-md-2">
                     <a href="{{url('item_detail/'.$item->id)}}">
                       <img alt="image" class="img-responsive" src={{$item->image}}>
                     </a>
                   </div>
                   <div class="col-md-10">
                    <h3><a href="{{url('item_detail/'.$item->id)}}">{{$item->title}}</a></h3>
                    {{$item->descriptor}}<br>
                    {{$item->desc}}
                  </div>
                 </div>
                 @endforeach
              @else
                <div class="col-md-12">
                  <br>
                  <h3>ไม่พบรายการที่ค้นหา</h3>
                </div>
              @endif
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('footer')
  <script>
    $('li#Home').addClass('active');
  </script>
@endsection
