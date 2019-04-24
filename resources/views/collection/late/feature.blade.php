@extends('nav.menus')

@section('header')

@endsection

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox">
        <div class="ibox-title">
          <h2>ลักษณะเด่นภาชนะดินเผาบ้านเชียงสมัยปลาย (Late Period)</h2>
          <small>(สำนักพิพิธภัณฑสถานแห่งชาติ, 2550)</small>
        </div>
        <div class="ibox-content">
          <div class="row">
            <div class="col-md-6">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <span class="label label-danger">1</span>
                    </td>
                    <td>
                      ภาชนะดินเผาตกแต่งด้วยลายเขียนสีแดงบนผิวสีนวล
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-danger">2</span>
                    </td>
                    <td>
                      ภาชนะดินเผาตกแต่งด้วยลายเขียนสีแดงบนผิวสีแดง
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="label label-danger">3</span>
                    </td>
                    <td>
                      ภาชนะดินเผาตกแต่งด้วยการทาน้ำโคลนสีแดงและขัดมัน
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class=col-md-6>
              <img class="img-responsive" src="/img/collection/late_era.jpg" alt="Chania" width="100%" height="250">
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
  $('li#LateFeature').addClass('active');
  $('li#MPLate').addClass('active');
  $('li#Collection').addClass('active');
  $('li#LateFeature').closest('ul').toggleClass('collapse');
</script>
@endsection
