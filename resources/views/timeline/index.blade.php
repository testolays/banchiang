@extends('nav.menus')

@section('header')
<style>
.era_img {    /* create a full-height inline block pseudo=element */
  content: " ";
  display: inline-block;
  vertical-align: middle;    /* vertical alignment of the inline element */
  height: 100%;
}
</style>
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <h2>ลำดับเวลาเครื่องดินเผาบ้านเชียง (Timeline)</h2>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="ibox float-e-margins">
    <div class="" id="ibox-content">

      <div id="vertical-timeline" class="vertical-container light-timeline">
          <div class="vertical-timeline-block">
              <div class="vertical-timeline-icon navy-bg">
                  <i class="fa fa-star-o"></i>
              </div>

              <div class="vertical-timeline-content">
                  <h2>เครื่องดินเผาชิ้นเอกสมัยต้น (อายุประมาณ 5,600 - 3,000 ปีมาแล้ว)</h2>
                  <div class="row">
                    <div class="col-md-6 era_img">
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในสมัยต้นพบการตกแต่งลวดลายหลากหลายวิธี ได้แก่ การขูด - ขีด การกดประทับ การสัก การเขียนสี และการผสมผสานหลากหลายวิธีรวมกัน โดยมีวิธีการทำลวดลายจำแนก คือ 1) การขูด - ขีด โดยใช้วัสดุปลายแหลม เส้นคู่ขนาน รูปโค้งงอคล้ายลายก้านขด และมีการกดประทับลงไปภายในเป็นรูปหยักฟันปลา ลายเส้นโค้งต่อกัน ลายเส้นขนานแล้วทำเป็นช่องๆ ต่อกัน การตกแต่งลักษณะนี้ จะทำบนเครื่องดินเผาสีดำ เทา และดำปนเทา รูปแบบลวดลายมีความสลับซับซ้อนมาก กล่าวคือ มีทั้งรูปสี่เหลี่ยม รูปสามเหลี่ยม และลายก้านขดผสมกันไป ส่วนใหญ่จะขีดให้เป็นรูปร่างแล้วใช้วิธีสักและกดประทับ เพื่อตกแต่งลวดลายให้เด่นชัด 2) การกดประทับ คือการนำวัตถุมากดประทับหรือตีลงบนภาชนะให้มีลวดลายที่กดประทับ การตกแต่งด้วยวิธีนี้ในวัฒนธรรมบ้านเชียง มักใช้วัสดุที่หาได้ในท้องถิ่นในสมัยนั้น อย่างเช่น เชือก เสื่อ หรือแม้กระทั่งนิ้วมือหรือเล็บคนเราทำให้เกิดลวดลาย ลวดลายที่ใช้เชือกกดบนภาชนะ จะเรียกว่า “ลายเชือกทาบ” หากเป็นเครื่องจักสานจะเรียกว่า “ลายเสื่อทาบ” จะมีลักษณะซ้อนกันอยู่อย่างไม่เป็นระเบียบ การตกแต่งวิธีนี้จัดเป็นลวดลายเด่นของระยะแรกเริ่มของสมัยต้น โดยจะตกแต่งบริเวณส่วนล่างของภาชนะและส่วนบนตกแต่งด้วยลายเส้นขีดเป็นเส้นโค้งบนผิวภาชนะแบบมีเชิง ฐานเตี้ย (Short ring foot) และภาชนะทรงกระบอก (Beaker) ที่ตกแต่งด้วยลายเชือกทาบทั้งใบในระยะที่ 3 ของสมัยต้น 3) การปั้นแปะ คือ การปั้นดินเป็นเส้นคาดรอบตัวภาชนะแล้วกดเป็นรอยบุ๋มที่เส้น แต่ปลายทั้งสองข้างไม่ชนกัน โดยปลายข้างหนึ่งโค้งขึ้นและอีกข้างหนึ่งโค้งลง ลักษณะเส้นที่คาดจะคล้ายงูหรือเชือกมาพันรอบภาชนะ 4) หลากหลายวิธีรวมกัน ได้แก่ การใช้วิธีการขูด - ขีด การเขียนสี และการกดประทับบนภาชนะใบเดียว พบในระยะสุดท้ายของสมัยต้น เรียกว่าภาชนะแบบ “บ้านอ้อมแก้ว” ซึ่งเป็นภาชนะแบบเด่นอีกประเภทของสมัยต้น มีลักษณะก้นกลม บริเวณไหล่ภาชนะตกแต่งด้วยลายขีดเป็นเส้นโค้งผสมกับการเขียนสีแดง และตกแต่งส่วนที่อยู่ใต้ลงมาด้วยลายเชือกทาบ (พิพิธภัณฑสถานแห่งชาติบ้านเชียง, 2550)
                      </p>
                      <a href="{{url('early_details')}}" class="btn btn-sm btn-outline btn-primary"><i class="fa fa-list"></i>&nbsp;รายละเอียด</a>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/img/collection/early_era.jpg" alt="Chania" width="100%" height="300">
                    </div>
                  </div>
              </div>
          </div>

          <div class="vertical-timeline-block">
              <div class="vertical-timeline-icon blue-bg">
                  <i class="fa fa-star-half-o"></i>
              </div>

              <div class="vertical-timeline-content">
                  <h2>เครื่องดินเผาชิ้นเอกสมัยกลาง (อายุประมาณ 3,000-2,300 ปีมาแล้ว)</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครื่องดินเผาประเภทเด่นของสมัยกลาง คือ ภาชนะผิวนอกสีขาว ทำส่วนไหล่ภาชนะที่เป็นสันหักมุม (Carinated pot) มีทั้งแบบก้นภาชนะกลมและแหลม บางชิ้นมีการตกแต่งด้วยลายขีดผสมกับลายเขียนสีที่บริเวณไหล่ภาชนะ ตอนปลายๆของสมัยกลางเริ่มมีการตกแต่งภาชนะแบบนี้ด้วยการทาสีแดงที่บริเวณปากภาชนะ ทั้งนี้ลักษณะเด่นของรูปแบบของเครื่องดินเผาแบบเด่นสมัยกลาง ประกอบด้วย ภาชนะมีส่วนไหล่หักมุมเป็นสัน ก้นภาชนะแหลมตกแต่งด้วยลายขีดและลายเขียน, ภาชนะสีขาวส่วนไหล่หักมุมเป็นสัน ก้นภาชนะแหลม, ภาชนะส่วนไหล่หักมุม ก้นภาชนะแหลม และภาชนะก้นกลมผายตกแต่งส่วนปากภาชนะด้วยการเคลือบสีน้ำโคลนสีแดง เป็นต้น (พิพิธภัณฑสถานแห่งชาติบ้านเชียง, 2550)
                      </p>
                      <a href="{{url('middle_details')}}" class="btn btn-sm btn-outline btn-success"><i class="fa fa-list"></i>&nbsp;รายละเอียด</a>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/img/collection/middle_era.jpg" alt="Chania" width="100%" height="250">
                    </div>
                  </div>
              </div>
          </div>

          <div class="vertical-timeline-block">
              <div class="vertical-timeline-icon red-bg">
                  <i class="fa fa-star"></i>
              </div>

              <div class="vertical-timeline-content">
                  <h2>เครื่องดินเผาชิ้นเอกสมัยปลาย (อายุประมาณ 2,300-1,800 ปีมาแล้ว)</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วงต้นๆของสมัยปลายมีภาชนะขีดเขียนลายแดงบนพื้นสีนวล (Red–on-buff painted Pottery) เป็นเครื่องดินเผาประเภทเด่นที่เริ่มปรากฏขึ้นมาตอนกลางของสมัย จึงเริ่มมีภาชนะชนิดเขียนลวดลายสีแดงบนผิวสีแดง (Red pot painted with red designs) ระยะสุดท้ายของสมัยจึงมีเครื่องดินเผาฉาบผิวนอกด้วยน้ำโคลนสีแดงแล้วขัดมัน (Red slipped and burnished pot) เพิ่มขึ้นมา ลักษณะเด่นของรูปแบบเครื่องดินเผาสมัยปลาย ประกอบด้วย ภาชนะเขียนสีแดงบนพื้นสีขาวนวล ภาชนะเขียนสีแดงบนพื้นสีแดง ภาชนะทาน้ำโคลนสีแดงและขัดผิวมัน (พิพิธภัณฑสถานแห่งชาติบ้านเชียง, 2550)
                      </p>
                      <a href="{{url('late_details')}}" class="btn btn-sm btn-outline btn-danger"><i class="fa fa-list"></i>&nbsp;รายละเอียด</a>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/img/collection/late_era.jpg" alt="Chania" width="100%" height="250">
                    </div>
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
  $('li#Timeline').addClass('active');
</script>
@endsection
