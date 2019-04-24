@extends('nav.no_menus')

@section('header')

@endsection

@section('content')
<span class="pull-right">
  <a class="btn btn-primary" href="{{url('/')}}">กลับหน้าหลัก&nbsp;&nbsp;<i class="fa fa-reply"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<div class="col-lg-12">
  <div id="unityPlayer">
    <div class="missing">
      <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
        <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
      </a>
    </div>
    <div class="broken">
      <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
        <img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
      </a>
    </div>
  </div>
</div>
@endsection

@section('footer')
  <script src="/js/UnityObject2.js"></script>
  <script type="text/javascript">
  <!--
    var config = {
      width: 1300,
      height: 700,
      params: { enableDebugging:"0" }

    };
    var u = new UnityObject2(config);

    jQuery(function() {

      var $missingScreen = jQuery("#unityPlayer").find(".missing");
      var $brokenScreen = jQuery("#unityPlayer").find(".broken");
      $missingScreen.hide();
      $brokenScreen.hide();

      u.observeProgress(function (progress) {
        switch(progress.pluginStatus) {
          case "broken":
            $brokenScreen.find("a").click(function (e) {
              e.stopPropagation();
              e.preventDefault();
              u.installPlugin();
              return false;
            });
            $brokenScreen.show();
          break;
          case "missing":
            $missingScreen.find("a").click(function (e) {
              e.stopPropagation();
              e.preventDefault();
              u.installPlugin();
              return false;
            });
            $missingScreen.show();
          break;
          case "installed":
            $missingScreen.remove();
          break;
          case "first":
          break;
        }
      });
      u.initPlugin(jQuery("#unityPlayer")[0], "Build.unity3d");
    });
    </script>
    <script>
      $('li#VirtualMuseum').addClass('active');
      $('li#Unity').addClass('active');
      $('li#VirtualMuseum').closest('ul').toggleClass('collapse');
    </script>
@endsection
