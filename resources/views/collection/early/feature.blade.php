@extends('nav.menus')

@section('header')

@endsection

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox">
        <div class="ibox-title">
          <h2>ลักษณะเด่นภาชนะดินเผาบ้านเชียงสมัยต้น(Early Period)</h2>
          <small>(สำนักพิพิธภัณฑสถานแห่งชาติ, 2550)</small>
        </div>
        <div class="ibox-content">
          <div class="row">
            <div class="col-md-6">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <span class="label label-primary">1</span>
                    </td>
                    <td>
                      ภาชนะดินเผามีฐานเตี้ยๆ แต่งด้วยลายเชือกทาบและลายขีดเป็นเส้นคดโค้ง
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-primary">2</span>
                    </td>
                    <td>
                      ภาชนะดินเผาขนาดใหญ่ตกแต่งด้วยลายขีดเป็นเส้นคดโค้ง ผสมกับลายกดประทับเป็นจุดต่อเนื่องที่บริเวณไหล่ภาชนะ
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-primary">3</span>
                    </td>
                    <td>
                      ภาชนะดินเผารูปทรงกระบอก มีด้านข้างตรงเป็นแนวดิ่งหรือเกือบตรงเป็นแนวดิ่ง
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-primary">4</span>
                    </td>
                    <td>
                      ภาชนะดินเผารูปทรงต่างตกแต่งด้วยลายเชือกทาบและมีการปั้นเส้นดินมาแปะประดับเพิ่มเติม เป็นลายนูนคล้ายงูพันรอบที่บริเวณช่วงไหล่ภาชนะ
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-primary">5</span>
                    </td>
                    <td>
                      ภาชนะดินเผาก้นกลม ปากผาย ตัวภาชนะตกแต่งด้วยลายเชือกทาบ ส่วนบริเวณไหล่ตกแต่งด้วยลายเส้นขีดผสมการเขียนสีแดง
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class=col-md-6>
              <img class="img-responsive" src="/img/collection/early_era.jpg" alt="Chania" width="100%" height="250">
            </div>
          </div>
        </div>
      </div>
    </div>
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
  $('li#EarlyFeature').addClass('active');
  $('li#MPEarly').addClass('active');
  $('li#Collection').addClass('active');
  $('li#EarlyFeature').closest('ul').toggleClass('collapse');
</script>
@endsection
