@extends('nav.menus')

@section('header')

@endsection

@section('content')
  <div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox">
          <div class="ibox-title">
            <h2>ลักษณะเด่นภาชนะดินเผาบ้านเชียงสมัยกลาง (Middle Period)</h2>
            <small>(สำนักพิพิธภัณฑสถานแห่งชาติ, 2550)</small>
          </div>
          <div class="ibox-content">
            <div class="row">
              <div class="col-md-6">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <span class="label label-success">1</span>
                      </td>
                      <td>
                        ภาชนะดินเผาสีขาว ส่วนไหล่หักมุมเป็นสัน ก้นภาชนะแหลม บางครั้งมีการตกแต่งที่บริเวณใต้ปากภาชนะด้วยลายเส้นขีด และลายเขียนสีแดง
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="label label-success">2</span>
                      </td>
                      <td>
                        ภาชนะดินเผาสีขาว ส่วนบนคอดเว้าเข้าเล็กน้อย แล้วผายออกเป็นส่วนไหล่โค้ง ก้นภาชนะกลม ตกแต่งบริเวณปากภาชนะด้วยการทาน้ำดินสีแดงหรืออาจจะเป็นการระบายด้วยสีแดง
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=col-md-6>
                <img class="img-responsive" src="/img/collection/middle_era.jpg" alt="Chania" width="100%" height="250">
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
  $('li#MiddleFeature').addClass('active');
  $('li#MPMiddle').addClass('active');
  $('li#Collection').addClass('active');
  $('li#MiddleFeature').closest('ul').toggleClass('collapse');
</script>
@endsection
