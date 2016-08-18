
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <LINK rel="Bookmark" href="/favicon.ico" >
  <LINK rel="Shortcut Icon" href="/favicon.ico" />
  <!--[if lt IE 9]>
  <script type="text/javascript" src="lib/html5.js"></script>
  <script type="text/javascript" src="lib/respond.min.js"></script>
  <script type="text/javascript" src="lib/PIE_IE678.js"></script>
  <![endif]-->
  <link href="css/H-ui.min.css" rel="stylesheet" type="text/css" />
  <link href="css/H-ui.admin.css" rel="stylesheet" type="text/css" />
  <link href="skin/default/skin.css" rel="stylesheet" type="text/css" id="skin" />
  <link href="lib/Hui-iconfont/iconfont.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!--[if IE 6]>
  <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
  <script>DD_belatedPNG.fix('*');</script>
  <![endif]-->
  <title>百家利-会员管理后台</title>
</head>
<body>
  <header class="Hui-header cl">
    <a class="Hui-logo l"  href="/">百家利</a>

    <ul class="Hui-userbar">
      <li>会员</li>
      <li class="dropDown dropDown_hover">
        <a href="#" class="dropDown_A">
          王芳 <i class="Hui-iconfont">&#xe6d5;</i>
        </a>
        <ul class="dropDown-menu radius box-shadow">
          <li>
            <a href="/logout.php">退出</a>
          </li>
        </ul>
      </li>
    </ul>
    <a aria-hidden="false" class="Hui-nav-toggle" href="#"> <b><i class="Hui-iconfont Hui-iconfont-fenlei"></i></b> 
    </a>
  </header>
  <aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
      <dl id="menu-article">
        <dt>
          <i class="Hui-iconfont">&#xe616;</i>
          <a href="welcome.html">投资资料</a>
        </dt>
      </dl>
      <dl id="menu-picture">
        <dt>
          <i class="Hui-iconfont">&#xe687;</i>
          <a href="bossmoney.html">入金流程</a>
        </dt>
      </dl>
      <dl id="menu-picture">
        <dt>
          <i class="Hui-iconfont">&#xe61a;</i>
          <a href="bossTransfers2.html">转账记录</a>
        </dt>
      </dl>
      <dl id="menu-picture">
        <dt>
          <i class="Hui-iconfont">&#xe687;</i>
          <a href="bossroll.html" >规则与条款</a>
        </dt>
      </dl>
      <dl id="menu-picture">
        <dt>
          <i class="Hui-iconfont">&#xe6d0;</i>
          <a href="connus.html">联络我们</a>
        </dt>
      </dl>
      <dl id="menu-picture">
        <dt>
          <i class="Hui-iconfont">&#xe67d;</i>
          <a href="/logout.php" >登  出</a>
        </dt>
      </dl>

    </div>
  </aside>
  <div class="dislpayArrow">
    <a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
  </div>
  <section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav">
      <div class="Hui-tabNav-wp">
        <ul id="min_title_list" class="acrossTab cl">
          <li class="active">
            <span title="投资资料" data-href="welcome.php">投资资料</span> <em></em>
          </li>
        </ul>
      </div>
      <div class="Hui-tabNav-more btn-group">
        <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;">
          <i class="Hui-iconfont">&#xe6d4;</i>
        </a>
        <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;">
          <i class="Hui-iconfont">&#xe6d7;</i>
        </a>
      </div>
    </div>
    <div id="iframe_box" class="Hui-article">
      <div class="show_iframe">
        <div style="display:none" class="loading"></div>

        <div class="main-content" >

          <!-- page heading start-->

          <!-- page heading end-->

          <!--body wrapper start-->
          <div class="wrapper">
            <input type='hidden' name='user_id' value='2106' id='user_id'>
            <a class="btn radius btn-primary size-L nian_hongli" href="javascript:void(0)" onclick="Huimodal_alert('对不起，您入金还未满一年',5000)">申请提取年红利</a>
            <!--<a href="tiqu.php" class="btn btn-primary size-L">红利提现/转本</a>
          -->
          <!--<input type='hidden' name='user_id' value='2106' id='user_id'>
          <a class="btn radius btn-primary size-L confirm_ft" href="javascript:void(0)">确认转本</a>
          （若不点击，将给您打款并扣除5美金手续费）-->
          <div class="panel panel-primary ml-5 mr-5">
            <div class="panel-header">
              投资金额：
              <span></span>
            </div>
            <div class="panel-body">
              <span>开始日：2016-02-12</span>
              <h3 class="red-txt">
                <i class="fa fa-level-up success"></i>
                100
              </h3>
            </div>

          </div>
          <div class="row cl ml-5">
            <div class="col-4" style="width:33.333333%">
              <div class="panel panel-secondary mt-5 mr-5">
                <div class="panel-header">
                  本日赚取
                  <span>2016-08-18</span>
                </div>
                <div class="panel-body">
                  <h3>
                    <i class="fa fa-level-up success"></i>
                    0.01
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-4" style="width:33.333333%">

              <div class="panel panel-secondary mt-5 mr-5">
                <div class="panel-header">
                  本月红利
                  <span>
                    需到2016-9-15可领取 倒数
                    <span>28</span>
                    日
                  </span>
                </div>
                <div class="panel-body">
                  <h3>5.71</h3>

                </div>
              </div>

            </div>
            <div class="col-4" style="width:33.333333%">
              <div class="panel panel-secondary mt-5 mr-5">
                <div class="panel-header">所有红利</div>
                <div class="panel-body">

                  <h3>
                    <span>175.86</span>
                  </h3>

                </div>
              </div>
            </div>
          </div>
          <div class="row cl ml-5"  style="display:none;">
            <div class="col-6"  style="width:50%">
              <div class="panel panel-success mt-5 mr-5">
                <div class="panel-header">本月收入图(2016-08-01至2016-09-01)</div>
                <div class="panel-body">

                  <div id="december-chart">
                    <div id="december_grid" class="legend-block"></div>
                    <div id="december-chartContainer" style="width: 100%;height:300px; text-align: center; margin:0 auto;"></div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-6" style="width:50%">
              <div class="panel panel-success mt-5 mr-5">
                <div class="panel-header">各月份收入图(2016-02-01至2017-01-31)</div>
                <div class="panel-body">

                  <div id="year-chart">
                    <div id="year_grid" class="legend-block"></div>
                    <div id="year-chartContainer" style="width: 100%;height:300px; text-align: center; margin:0 auto;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row cl ml-5 mr-5">
            <div class="panel panel-warning mt-5 mr-5">
              <div class="panel-header">
                <center>每月收入表(2016-02-12至今)</center>
              </div>
            </div>
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-border table-bordered table-hover">

                  <thead>
                    <tr>
                      <th>日期</th>
                      <td class="numeric">月红利</td>
                      <th class="numeric">年红利累计</th>
                      <th class="numeric">目前总积分</th>
                      <th class="numeric">本月可取的红利</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>2016-02-01 ~ 2016-02-29</td>
                      <td class="numeric">62.30</td>
                      <td class="numeric">31.15</td>
                      <td class="numeric">131.15</td>
                      <td class="numeric">31.15</td>
                    </tr>

                    <tr>
                      <td>2016-03-01 ~ 2016-03-31</td>
                      <td class="numeric">13.18</td>
                      <td class="numeric">37.74</td>
                      <td class="numeric">137.74</td>
                      <td class="numeric">6.59</td>
                    </tr>

                    <tr>
                      <td>2016-04-01 ~ 2016-04-30</td>
                      <td class="numeric">21.02</td>
                      <td class="numeric">48.25</td>
                      <td class="numeric">148.25</td>
                      <td class="numeric">10.51</td>
                    </tr>

                    <tr>
                      <td>2016-05-01 ~ 2016-05-31</td>
                      <td class="numeric">42.45</td>
                      <td class="numeric">69.48</td>
                      <td class="numeric">169.48</td>
                      <td class="numeric">21.23</td>
                    </tr>

                    <tr>
                      <td>2016-06-01 ~ 2016-06-30</td>
                      <td class="numeric">15.05</td>
                      <td class="numeric">77.00</td>
                      <td class="numeric">177.00</td>
                      <td class="numeric">7.53</td>
                    </tr>

                    <tr>
                      <td>2016-07-01 ~ 2016-07-31</td>
                      <td class="numeric">16.15</td>
                      <td class="numeric">85.08</td>
                      <td class="numeric">185.08</td>
                      <td class="numeric">8.08</td>
                    </tr>

                    <tr>
                      <td>2016-08-01 ~ 2016-08-31</td>
                      <td class="numeric">5.71</td>
                      <td class="numeric">87.93</td>
                      <td class="numeric">187.93</td>
                      <td class="numeric">2.86</td>
                    </tr>

                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>

      </div>
      <footer class="footer">
        <center>Copyright © 1999-2016 百家利投资有限公司</center>
      </footer>
    </div>
  </div>
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../static/js/jquery-1.10.2.min.js"></script>
<script src="../static/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../static/js/jquery-migrate-1.2.1.min.js"></script>
<script src="../static/js/bootstrap.min.js"></script>
<script src="../static/js/modernizr.min.js"></script>
<script src="../static/js/jquery.nicescroll.js"></script>

<!-- jQuery Flot Chart-->
<script src="../static/js/flot-chart/jquery.flot.js"></script>
<script src="../static/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="../static/js/flot-chart/jquery.flot.resize.js"></script>
<script src="../static/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="../static/js/flot-chart/jquery.flot.selection.js"></script>
<script src="../static/js/flot-chart/jquery.flot.stack.js"></script>
<script src="../static/js/flot-chart/jquery.flot.time.js"></script>
<!--script src="../js/flot.chart.init.day.js">
</script>
<!--本月各日之圖表統計-->
<!--script src="../js/flot.chart.init.year.js">
</script>
<!--本年各月之圖表統計-->

<!--common scripts for all pages-->
<script src="../static/js/scripts.js"></script>

<!--Dashboard Charts-->
<!--script src="../js/dashboard-chart-init.js">
</script-->
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../static/admin/jquery.fancybox.js?v=2.1.5"></script>
<!--FancyBox JS-->
<link rel="stylesheet" type="text/css" href="../static/admin/jquery.fancybox.css?v=2.1.5" media="screen" />
<!--FancyBox CSS-->

<script>
$(document).ready(function(){
    //fancy box
    $(".various").fancybox({
      maxWidth  : 800,
      maxHeight : 400,
      fitToView : true,
      width   : '80%',
      height    : '80%',
      autoSize  : true,
      closeClick  : true,
      openEffect  : 'none',
      closeEffect : 'none',
      afterClose: function () { 
        //parent.location.reload(true);//關閉時reload一次
      }
    });


  //月份圖
  var thisMonth=[[1,0.01],[2,0.01],[3,0.09],[4,1.17],[5,0.31],[6,0.50],[7,0.42],[8,0.33],[9,0.30],[10,0.40],[11,0.35],[12,0.40],[13,0.58],[14,0.02],[15,0.18],[16,0.35],[17,0.28],[18,0.01],[19,0],[20,0],[21,0],[22,0],[23,0],[24,0],[25,0],[26,0],[27,0],[28,0],[29,0],[30,0],[31,]]; var ticks = [
    [1, "1日"],
    [2, ""],
    [3, "3日"],
    [4, ""],
    [5, "5日"],
    [6, ""],
    [7, "7日"],
    [8, ""],
    [9, "9日"],
    [10, ""],
    [11, "11日"],
    [12, ""],
    [13, "13日"],
    [14, ""],
    [15, "15日"],
    [16, ""],
    [17, "17日"],
    [18, ""],
    [19, "19日"],
    [20, ""],
    [21, "21日"],
    [22, ""],
    [23, "23日"],
    [24, ""],
    [25, "25日"],
    [26, ""],
    [27, "27日"],
    [28, ""],
    [29, "29日"],
    [30, ""],
    [31, "31日"]];
    //alert(thisMonth);
    //alert(ticks);
  var data = [{
    label: 2016+"年"+08+"月",
    data: thisMonth,
    lines: {
      show: true,
      fill: true
    },
    points: {
      show: true
    }
  }];
  var options = {
    xaxis: {
      ticks: ticks
    },
    series: {
      shadowSize: 0
    },
    grid: {
      hoverable: true,
      clickable: true,
      tickColor: "#f9f9f9",
      borderWidth: 1,
      borderColor: "#eeeeee"
    },
      colors: ["#6dc5a3", "#869cb3"],
      tooltip: true,
      tooltipOpts: {
      defaultTheme: false
    },
    legend: {
      labelBoxBorderColor: "#000000",
      container: $("#december_grid"),
      noColumns: 0
    }
  };
  // var plot = $.plot($("#december-chart #december-chartContainer"),data, options);

  //年份圖
  //thisYearMonthFundsArray
  var year=[[1,0],[2,62.3],[3,12.76],[4,20.82],[5,41.95],[6,14.96],[7,7.97],[8,5.7],[9,0],[10,0],[11,0],[12,0]];  /*
  var year = [
            [1, 520],
            [2, 337],
            [3, 261],
            [4, 157],
            [5, 78],
            [6, 58],
            [7, 48],
            [8, 54],
            [9, 38],
            [10, 88],
            [11, 214],
            [12, 364]
        ];*/
        var ticks = [
            [1, "1月"],
            [2, "2月"],
            [3, "3月"],
            [4, "4月"],
            [5, "5月"],
            [6, "6月"],
            [7, "7月"],
            [8, "8月"],
            [9, "9月"],
            [10, "10月"],
            [11, "11月"],
            [12, "12月"]
        ];
        var data = [{
            label: 2016+"年",
            data: year,
            lines: {
                show: true,
                fill: true
            },
            points: {
                show: true
            }
        }];
        var options = {
            xaxis: {
                ticks: ticks
            },
            series: {
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#f9f9f9",
                borderWidth: 1,
                borderColor: "#eeeeee"
            },
            colors: ["#6fb1cd", "#a2cddf"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            },
            legend: {
                labelBoxBorderColor: "#000000",
    container: $("#year_grid"),
                noColumns: 0
            }
        };
        // var plot = $.plot($("#year-chart #year-chartContainer"),data, options);
});
</script>
<script type="text/javascript" src="lib/bootstrap-modal/2.2.4/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="lib/bootstrap-modal/2.2.4/bootstrap-modal.js"></script>

<script>
  $('.tiqu').click(function(){
    var data = $('#tiqu').serialize();
    $.post('/tiqu.php',data,function(data){
      alert(data);
      location.reload();  
    })
  });
</script>
<script>
  
  $('.confirm_ft').click(function(){
    var user_id = $("#user_id").val();
    var type = 0;
    $.post('/one.php',{user_id:user_id},function(data){
      alert(data);  
    });       
  })
</script>
<script type="text/javascript" src="js/H-ui.js"></script>
<script type="text/javascript" src="js/H-ui.admin.js"></script>
</body>
</html>