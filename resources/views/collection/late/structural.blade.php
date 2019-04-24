@extends('nav.menus')

@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
      <h2>มิติทางศิลปะสังคมและวัฒนธรรมสมัยปลาย</h2>
</div>
<div class="row wrapper border-bottom white-bg">
  <div class="col-md-12">
    <div class="page-heading">
      <h2>มิติทางศิลปะ (ArtAspect)</h2>
    </div>
    <div class="wrapper wrapper-content">
      <div class="row">
        <div class="col-md-6 animated fadeInRight">
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภาชนะดินเผา ลายเขียนสีแดงบนพื้นสีนวลเขียนซึ่งเป็นลักษณะเด่นของยุคปลาย ลวดลายคล้ายสัตว์ซึ่งอาจเป็นการถ่ายทอดสิ่งที่พบเห็นของช่างเขียนลายจากธรรมชาติหรือจากชีวิตประจำวัน รูปสัตว์ที่ปรากฏบนภาชนะดินเผานอกจากรูปงูแล้ว ยังมีรูปสัตว์อื่นๆอีกเช่น รูปควาย กวาง กิ้งก่าหรือแย้หรือแม้แต่รูปคนก็พบเช่นกัน แต่มีเพียงจำนวนน้อย ลวดลายที่พบส่วนใหญ่จะเป็นลายเรขาคณิต</p>
        </div>
        <div class="col-md-6 animated flipInX">
          <img class="img-responsive" src="/img/collection/late_art.jpg" alt="Chania" width="100%" height="300">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="page-heading">
      <h2>มิติทางสังคมและวัฒนธรรม  (Socio-culturalAspect)</h2>
    </div>
    <div class="wrapper wrapper-content">
      <div class="row">
        <div class="col-md-6 animated fadeInRight">
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังคมก่อนประวัติศาสตร์กลุ่มคนบ้านเชียง มีการติดต่อสัมพันธ์กับชุมชนใกล้เคียงและชุมชนที่ห่างออกไปแสดงถึงการค้าขายแลกเปลี่ยนทรัพยากร ตลอดจนการถ่ายทอดทางวัฒนธรรมระหว่างชุมชนในอดีต ข้อสันนิษฐานเกี่ยวกับโบราณวัตถุจากแหล่งอื่นๆ ที่ไม่มีในบ้านเชียง มีคนกลุ่มดึกดำบรรพ์ 5,000 กว่าปี มาแลกเปลี่ยนที่บ้านเชียง มีการเชื่อมโยงหลายชาติพันธุ์ เช่น ศึกษาได้จากการพบโลหะสำริดจำนวนมากแต่ไม่ปรากฏแหล่งแร่ทองแดงและดีบุกอันเป็นส่วนประกอบหลักของสำริดทำให้สันนิษฐานว่าช่างทำสำริดที่บ้านเชียงอาจได้วัตถุดิบมาจากการแลกเปลี่ยนค้าขายมาจากแหล่งอื่น จากประเทศลาวหรือแถบชายแดนไทย-พม่า และพบลูกปัดหิน ลูกปัดแก้ว ได้มาจากการแลกเปลี่ยนกับชุมชนร่วมสมัยในประเทศอินเดีย และเครื่องแก้วที่มีการแลกเปลี่ยนกับชุมชนร่วมสมัยในประเทศจีน
          </p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้านวัฒนธรรม ประเพณีการฝังศพในยุคก่อนประวัติศาสตร์ นอกจากการฝังภาชนะดินเผา และเครื่องประดับ วางบนบ่าหัวไหล่ หน้าอก เพื่ออุทิศให้กับผู้ตาย สะท้อนถึงประเพณีความเชื่อว่าวัตถุชิ้นนั้นได้ตายไปพร้อมกับผู้ตาย อาจเป็นการให้ผู้ตายไปใช้ในภพหน้า อันแสดงถึงความเชื่อหลังความตายในสมัยนั้น อาจพบลูกปัดอยู่ข้างในภาชนะดินเผา เศษผ้ายังติดอยู่ภาชนะดินเผา แสดงให้เห็นว่าคนยุคนั้นมีการแต่งกายด้วยเสื้อผ้าแล้ว มีการปลูกพืช เลี้ยงสัตว์ ซึ่งสิ่งของที่ใช้ฝังรวมกับศพอาจบ่งบอกถึงสถานภาพทางสังคมของเรือนร่าง
          </p>
        </div>
        <div class="col-md-6 animated flipInX">
          <img class="img-responsive" src="/img/collection/late_cul.jpg" alt="Chania" width="100%" height="300">
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
  $('li#LateStructural').addClass('active');
  $('li#MPLate').addClass('active');
  $('li#Collection').addClass('active');
  $('li#LateStructural').closest('ul').toggleClass('collapse');
</script>
@endsection
