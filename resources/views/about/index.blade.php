@extends('nav.menus')

@section('header')

@endsection

@section('content')
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox">
        <div class="ibox-title">
          <h2>ประวัติและที่ตั้งของบ้านเชียง</h2>
        </div>
        <div class="ibox-content">
          <div class="row">
            <div class="col-md-6">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แหล่งโบราณคดี
                บ้านเชียงเป็นหมู่บ้านที่อยู่ในเขตการปกครองของตำบลบ้านเชียง อำเภอหนองหาน จังหวัดอุดรธานี
                 อยู่ห่างจากตัวจังหวัดไปทางทิศตะวันออกประมาณ 60 กิโลเมตร แหล่งโบราณคดีบ้านเชียง เป็นแหล่งโบราณคดีสมัยก่อนประวัติศาสตร์ที่สำคัญแห่งหนึ่งของประเทศไทย
                 ตั้งอยู่บนเนินดินสูง รูปยาวรี ตามแนวตะวันออก - ตะวันตก ครอบคลุมพื้นที่ประมาณ 400 ไร่ กลางเนินสูงกว่าพื้นที่รอบๆราว 8 เมตร
                 ราษฎรชาวบ้านเชียงในปัจจุบันมีเชื้อสายลาวพวนที่อพยพเคลื่อนย้ายชุมชนมาจากแขวงเชียงขวางประเทศลาว เมื่อ 200 ปีมาแล้ว
                 ทั้งนี้ประวัติการศึกษาค้นคว้าทางวิชาการโบราณคดีที่บ้านเชียงนั้นสามารถสรุปความเป็นมาเรียงตามลำดับเหตุการณ์ได้ (กองโบราณคดี, 2534) ดังนี้</p>
            </div>
            <div class="col-md-6">
              <img class="img-responsive" src="/img/collection/cover.jpg" alt="Chania" width="100%" height="250">
            </div>
            <div class="col-md-12">
              <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon navy-bg">
                    <i class="fa fa-binoculars"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>เริ่มต้นสำรวจบ้านเชียง</h2>
                      <p>พ.ศ. 2503 นายเจริญ พลเตชา ซึ่งขณะนั้นดำรงตำแหน่งหัวหน้าหน่วยศิลปากรที่ 7 จังหวัดขอนแก่น ได้ไปสำรวจที่บ้านเชียงจึงได้ทราบเรื่องการพบโบราณวัตถุในเขตหมู่บ้าน
                      </p>
                      <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#his1">รายละเอียด</a>
                      <div class="modal inmodal" id="his1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">เริ่มต้นสำรวจบ้านเชียง</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2503 นายเจริญ พลเตชา ซึ่งขณะนั้นดำรงตำแหน่งหัวหน้าหน่วยศิลปากรที่ 7 จังหวัดขอนแก่น ได้ไปสำรวจที่บ้านเชียงจึงได้ทราบเรื่องการพบโบราณวัตถุในเขตหมู่บ้าน และได้รับมอบเศษภาชนะดินเผาลายเขียนสีที่พบในบริเวณบ้านเชียงจากนายพรหมี ศรีสุนาครัว ซึ่งในขณะนั้นเป็นครูใหญ่โรงเรียนบ้านเชียง (ประชาเชียงเชิด) แต่เนื่องจากคงเป็นเพราะในระยะเวลานั้นเรื่องโบราณคดีสมัยก่อนประวัติศาสตร์ยังไม่เป็นที่รู้จักกันนักในประเทศไทยจึงไม่ปรากฏการดำเนินการใดๆกับแหล่งโบราณคดีนี้</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <span class="vertical-date">
                        นายเจริญ พลเตชา<br/>
                        <small>พ.ศ. 2503</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon blue-bg">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>ตรวจสอบครั้งแรก</h2>
                      <p>พ.ศ. 2509 นายสตีฟ ยัง บุตรชายอดีตเอกอัครราชทูตสหรัฐอเมริกาประจำประเทศไทย เดินทางไปที่บ้านเชียงเพื่อรวบรวมข้อมูลในการทำวิทยานิพนธ์ และได้พบเห็นภาชนะดินเผา
                      </p>
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#his2">รายละเอียด</a>
                      <div class="modal inmodal" id="his2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">ตรวจสอบครั้งแรก</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2509 นายสตีฟ ยัง บุตรชายอดีตเอกอัครราชทูตสหรัฐอเมริกาประจำประเทศไทย เดินทางไปที่บ้านเชียงเพื่อรวบรวมข้อมูลในการทำวิทยานิพนธ์ และได้พบเห็นภาชนะดินเผาตามผิวดินและถนนในหมู่บ้านจึงได้นำตัวอย่างภาชนะดินเผาลายเขียนสีจำนวนหนึ่งมาให้ศาสตราจารย์ชิน อยู่ดีตรวจสอบที่พิพิธภัณฑสถานแห่งชาติพระนคร ซึ่งท่านก็ได้ลงความเห็นว่าเป็นโบราณวัตถุของยุคโลหะที่มีความสำคัญอย่างยิ่ง</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        นายสตีฟ ยัง<br/>
                        <small>พ.ศ. 2509</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon lazur-bg">
                    <i class="fa fa-briefcase"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>ขุดค้นโบราณวัตถุ</h2>
                      <p>พ.ศ. 2510 นายประยูร ไพบูลย์สุวรรณ หัวหน้าหน่วยศิลปากรที่ 7 พร้อมด้วยนายวิรัช คุณมาศ ได้เดินทางไปสำรวจที่บ้านเชียง
                      </p>
                      <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#his3">รายละเอียด</a>
                      <div class="modal inmodal" id="his3" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">ขุดค้นโบราณวัตถุ</h4>
                              <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2510 นายประยูร ไพบูลย์สุวรรณ หัวหน้าหน่วยศิลปากรที่ 7 พร้อมด้วยนายวิรัช คุณมาศ ได้เดินทางไปสำรวจที่บ้านเชียง และในปีเดียวกันนี้เอง นายวิทยา อินทโกศัย นักโบราณคดีกองโบราณคดีก็ได้ทำการขุดค้นที่บ้านเชียงในบริเวณที่ดินของนายสิทธา ราชโหดี
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        นายประยูร ไพบูลย์สุวรรณ <br/>
                        <small>พ.ศ. 2510</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon yellow-bg">
                    <i class="fa fa-pencil-square-o"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>วิเคราะห์อายุโบราณวัตถุ</h2>
                      <p>พ.ศ. 2512 นายวิลเลียม โคห์เลอร์ ได้แจ้งข่าวให้ทราบว่าเศษภาชนะดินเผาที่ได้จากการขุดค้นโดยนายวิทยา อินทโกศัย ใน พ.ศ. 2510 นั้น กำหนดอายุโดยวิธีเทอร์โมลูมิเนสเซนต์ (Thermoluminescence: TLD)
                      </p>
                      <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#his4">รายละเอียด</a>
                      <div class="modal inmodal" id="his4" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">วิเคราะห์อายุโบราณวัตถุ</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2512 นายวิลเลียม โคห์เลอร์ ได้แจ้งข่าวให้ทราบว่าเศษภาชนะดินเผาที่ได้จากการขุดค้นโดยนายวิทยา อินทโกศัย ใน พ.ศ. 2510 นั้น กำหนดอายุโดยวิธีเทอร์โมลูมิเนสเซนต์ (Thermoluminescence: TLD) ได้ราวระหว่าง 6,933-5,793 ปีมาแล้ว นอกจากนี้ผลการขุดค้นยังพบโครงกระดูกราว 130 โครง ซึ่งผู้เชี่ยวชาญได้นำไปศึกษาวิเคราะห์จำนวน 127 โครง ผลการวิเคราะห์พบว่าโครงกระดูกจำนวนดังกล่าวสามารถแยกเพศได้ชัดเจนเพียง 93 โครง โดยมีโครงกระดูกของผู้ชาย 54 โครงและของผู้หญิง 39 โครง โครงกระดูกเหล่านี้สะท้อนถึงชุมชนก่อนประวัติศาสตร์ที่เป็นเจ้าของวัฒนธรรมบ้านเชียง ซึ่งจากการวิเคราะห์พบว่าคนสมัยก่อนประวัติศาสตร์บ้านเชียงนั้นมีอายุเมื่อตายโดยเฉลี่ยเพียง 31 ปี และโครงกระดูกส่วนใหญ่ไม่มีร่องรอยแสดงถึงการสิ้นชีวิตเนื่องจากบาดแผลร้ายแรงซึ่งชี้ให้เห็นว่าประชากรสมัยก่อนประวัติศาสตร์ที่บ้านเชียงน่าจะมีชีวิตและสังคมที่สงบสุข
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        นายวิลเลียม โคห์เลอร์<br/>
                        <small>พ.ศ. 2512</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon red-bg">
                    <i class="fa fa-home"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>สำรวจเพิ่มเติม</h2>
                      <p>พ.ศ. 2515 เจ้าหน้าที่กรมศิลปากรประกอบด้วยนายพจน์ เกื้อกูล และนายนิคม สุทธิรักษ์ ได้ทำการขุดค้นที่บ้านเชียงอีกครั้งหนึ่ง
                      </p>
                      <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#his5">รายละเอียด</a>
                      <div class="modal inmodal" id="his5" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">สำรวจเพิ่มเติม</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2515 เจ้าหน้าที่กรมศิลปากรประกอบด้วยนายพจน์ เกื้อกูล และนายนิคม สุทธิรักษ์ ได้ทำการขุดค้นที่บ้านเชียงอีกครั้งหนึ่ง และในวันที่ 20 มีนาคม 2515 พระบาทสมเด็จพระเจ้าอยู่หัวและสมเด็จพระบรมราชินีนารถได้เสด็จพระราชดำเนินไปบ้านเชียงและทอดพระเนตรการขุดค้นครั้งนี้</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        เจ้าหน้าที่กรมศิลปากร<br/>
                        <small>พ.ศ. 2515</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon blue-bg">
                    <i class="fa fa-exclamation-circle"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>ประกาศห้ามขุดสำรวจ</h2>
                      <p>พ.ศ. 2515 ในปีเดียวกันที่คณะปฏิวัติได้ออกประกาศฉบับที่ 189 ห้ามขุดค้นหรือลักลอบทำลายแหล่งโบราณคดีวัฒนธรรมบ้านเชียง
                      </p>
                      <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#his6">รายละเอียด</a>
                      <div class="modal inmodal" id="his6" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">ประกาศห้ามขุดสำรวจ</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2515 ในปีเดียวกันที่คณะปฏิวัติได้ออกประกาศฉบับที่ 189 ห้ามขุดค้นหรือลักลอบทำลายแหล่งโบราณคดีวัฒนธรรมบ้านเชียงในเขต 9 ตำบล ได้แก่ ตำบลบ้านเชียง ตำบลบ้านธาตุ ตำบลบ้านดุง ตำบลศรี สุทโธ ตำบลบ้านชัย และตำบลอ้อมกอ ของจังหวัดอุดรธานี รวมทั้งตำบลม่วงไข่ ตำบลแวง และตำบลพันนา ของจังหวัดสกลนคร</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        ประกาศฉบับที่ 189<br/>
                        <small>พ.ศ. 2515</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon lazur-bg">
                    <i class="fa fa-graduation-cap"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>ดำเนินการขุดค้นบ้านเชียง</h2>
                      <p>พ.ศ. 2517-2518 กรมศิลปากรร่วมกับพิพิธภัณฑ์มหาวิทยาลัยเพนซิลเวเนียจัดตั้งโครงการโบราณคดีภาคตะวันออกเฉียงเหนือ เพื่อดำเนินการขุดค้นบ้านเชียง
                      </p>
                      <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#his7">รายละเอียด</a>
                      <div class="modal inmodal" id="his7" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">ดำเนินการขุดค้นบ้านเชียง</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2517-2518 กรมศิลปากรร่วมกับพิพิธภัณฑ์มหาวิทยาลัยเพนซิลเวเนียจัดตั้งโครงการโบราณคดีภาคตะวันออกเฉียงเหนือ เพื่อดำเนินการขุดค้นบ้านเชียง โดยมีนายพิสิฐ เจริญวงศ์ เป็นผู้อำนวยการโครงการฝ่ายไทย และดร.เซสเตอร์ กอร์แมน เป็นผู้อำนวยการโครงการฝ่ายสหรัฐ โครงการขุดค้นโบราณคดีบ้านเชียงฯ ในระหว่าง พ.ศ. 2517-2518 นี้จัดทำเป็นโครงการระยะยาว และมีลักษณะสหวิทยาการ (Multidisciplinary) หลักฐานที่ขุดค้นพบซึ่งมีจำนวนมากมายและหลายประเภทได้รับความร่วมมือในการศึกษาวิเคราะห์โดยผู้เชี่ยวชาญในสาขาวิชาต่างๆ จากนานาประเทศ ผลการวิเคราะห์หลักฐานหลายประเภทโดยผู้เชี่ยวชาญเหล่านี้ได้ปรากฏเป็นบทความและเอกสารทางวิชาการหลายฉบับซึ่งช่วยสร้างความรู้ความเข้าใจเกี่ยวกับวัฒนธรรมสมัยก่อนประวัติศาสตร์ของบ้านเชียงในมิติต่างๆ เช่น เรื่องอายุสมัย ลักษณะของประชากร เศรษฐกิจ สังคมและเทคโนโลยี เป็นต้น
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        มหาวิทยาลัยเพนซิลเวเนีย<br/>
                        <small>พ.ศ. 2517</small>
                      </span>
                  </div>
                </div>
                <div class="vertical-timeline-block">
                  <div class="vertical-timeline-icon navy-bg">
                    <i class="fa fa-bank"></i>
                  </div>
                  <div class="vertical-timeline-content">
                      <h2>มรดกโลกบ้านเชียง</h2>
                      <p>พ.ศ. 2535 ยูเนสโก (UNESCO) ได้ประชุมกัน ณ เมืองซานตาฟ รัฐนิวแม็กซิโก ประเทศสหรัฐอเมริกา และได้มีมติประกาศยกย่องแหล่งโบราณคดีบ้างเชียงให้เป็นมรดกโลก
                      </p>
                      <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#his8">รายละเอียด</a>
                      <div class="modal inmodal" id="his8" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content animated flipInY">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">มรดกโลกบ้านเชียง</h4>
                            </div>
                            <div class="modal-body">
                              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พ.ศ. 2535 คณะกรรมการมรดกโลกในองค์การการศึกษา วิทยาศาสตร์ และวัฒนธรรมแห่งสหประชาชาติ (อังกฤษ: United Nations Educational, Scientific and Cultural Organization) หรือ ยูเนสโก (UNESCO) ได้ประชุมกัน ณ เมืองซานตาฟ รัฐนิวแม็กซิโก ประเทศสหรัฐอเมริกา และได้มีมติประกาศยกย่องแหล่งโบราณคดีบ้างเชียงให้เป็นมรดกโลก
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="vertical-date">
                        ยูเนสโก<br/>
                        <small>พ.ศ. 2535</small>
                      </span>
                  </div>
                </div>
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
    $(document).ready(function() {
    //  $('li#Home').addClass('active');
      // $('li#Purchase_head').addClass('active');
      // $('li#Purchase').closest('ul').toggleClass('collapse');
    });
  </script>
  <script>
    $('li#About').addClass('active');
  </script>
@endsection
