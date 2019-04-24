@extends('nav.menus')

@section('header')
  
@endsection

@section('content')
  <div class="wrapper wrapper-content">
    <div class="row">
      <div class="col-md-5">
        <div class="product-images">
          <div>
            <tr>
              @if($detail->video ==NULL)
                <td><img src="{{$detail->image}}" class="img-rounded" width="420" height="420"></td>
              @else
                <video width="320" height="240" autoplay loop>
                  <source src={{$detail->video}} type="video/mp4">
                  <!-- <source src="movie.ogg" type="video/ogg"> -->
                </video>
              @endif
            </tr>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <h2 class="font-bold m-b-xs">
            {{$detail->title}}
        </h2>
        {{-- <small>Many desktop publishing packages and web page editors now.</small> --}}
        <dl class="m-t-md">
          <dt>เลขลำดับ (Serial Number)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->serial_number}}</dd>
          <dt>เลขวัตถุ (Registration Number)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->registration}}</dd>
          <dt>เลขอื่นที่เคยใช้ (Site of Reference Number)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->sor_number}}</dd>
          <dt>ชื่อทางวัฒนธรรม (CulturalContext)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->cultural_context}}</dd>
          <dt>อายุสมัย (Style Period)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->style_period}}</dd>
          <dt>รายละเอียดเกี่ยวกับวัตถุ (Description)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->desc}}</dd>
          <dt>สภาพ (Condition)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->condition}}</dd>
          <dt>ขนาด (Measurement)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->measurement}}</dd>
          <dt>ชนิดวัตถุ (Material)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->material}}</dd>
          <dt>ประวัติที่มา (Provenance)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->provenance}}</dd>
          <dt>สถานที่เก็บ (Location)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->location}}</dd>
          <dt>คำหรือวลี ที่ใช้แทนเนื้อหาลักษณะของวัตถุ (Descriptor)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->descriptor}}</dd>
          <dt>ชื่อของเอกสารอ้างอิงที่เกี่ยวข้อง (Textref)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->text_ref}}</dd>
          <dt>เทคนิคและวิธีการผลิต (Technique)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->technique}}</dd>
          <dt>ลิขสิทธิ์ (Rights)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->right}}</dd>
          <dt>หมายเหตุ (Remarks)</dt>
          <dd>&nbsp;&nbsp;&nbsp;&nbsp;{{$detail->remarks}}</dd>
        </dl>

      </div>
    </div>
  </div>
@endsection

@section('footer')

@endsection
