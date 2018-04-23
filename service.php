<?php
	session_start();
	if ($_SESSION["RegState"] != 4) {
		header("location:../index.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Overview &middot; Dashboard theme &middot; Official Bootstrap Themes
      
    </title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="../css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="../css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
  </head>


<body>
  <div class="bw">
    <div class="dh">
      <div class="en bpz">
        <nav class="bqg">
          <div class="bqa">
            <button class="bow boy bqb" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="adp">Toggle nav</span>
            </button>
            <a class="bqc brd" href="index.html">
              <span class="bv bhc bqd"></span>
            </a>
          </div>

          <div class="collapse bpd" id="nav-toggleable-md">
            <form class="bqe">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="nz">
                <span class="bv bhw"></span>
              </button>
            </form>
            <ul class="nav pb nav-stacked wz">
              <li class="axq">Dashboards</li>
              <li class="pa">
                <a class="oy active" href="index.html">Overview</a>
              </li>
              <li class="pa">
                <a class="oy " href="order-history/index.html">Order history</a>
              </li>
              <li class="pa">
                <a class="oy "href="fluid/index.html">Fluid layout</a>
              </li>
              <li class="pa">
                <a class="oy " href="icon-nav/index.html">Icon nav</a>
              </li>

              <li class="axq">More</li>
              <li class="pa">
                <a class="oy "href="docs/index.html">
                  Toolkit docs
                </a>
              </li>
              <li class="pa">
                <a class="oy" href="http://getbootstrap.com" target="blank">
                  Bootstrap docs
                </a>
              </li>
              <li class="pa">
                <a class="oy " href="logout.php">Logout</a>
              </li>
            </ul>
            <hr class="bre aez">
          </div>
        </nav>
      </div>
      <div class="et brf">
        <div class="bqn">
  <div class="bqo">
    <h6 class="bqq">Dashboards</h6>
    <h2 class="bqp">Overview</h2>
  </div>

  <div class="on bqr">
    <div class="axm bpy">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="bv bbc"></span>
    </div>
  </div>
</div>

<hr class="aez">

<div class="dh avv afn">
  <div class="eo afk amd">
    <div class="ayq ahn">
      <canvas
        class="bps"
        width="200" height="200"
        data-chart="doughnut"
        data-dataset="[230, 130]"
        data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }"
        data-labels="['Returning', 'New']">
      </canvas>
    </div>
    <strong class="awy">Traffic</strong>
    <h4>New vs Returning</h4>
  </div>
  <div class="eo afk amd">
    <div class="ayq ahn">
      <canvas
        class="bps"
        width="200" height="200"
        data-chart="doughnut"
        data-dataset="[330,30]"
        data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }"
        data-labels="['Returning', 'New']">
      </canvas>
    </div>
    <strong class="awy">Revenue</strong>
    <h4>New vs Recurring</h4>
  </div>
  <div class="eo afk amd">
    <div class="ayq ahn">
      <canvas
        class="bps"
        width="200" height="200"
        data-chart="doughnut"
        data-dataset="[100,260]"
        data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }"
        data-labels="['Referrals', 'Direct']">
      </canvas>
    </div>
    <strong class="awy">Traffic</strong>
    <h4>Direct vs Referrals</h4>
  </div>
</div>

<div class="bpu afn afd">
  <h3 class="bpv bpw">Quick stats</h3>
</div>

<div class="dh brg">
  <div class="eq fp afd amk asi">
    <div class="brh bpn">
      <div class="ago">
        <span class="bpi">Page views</span>
        <h2 class="bph">
          1,293
          <small class="bpj bpk">5%</small>
        </h2>
        <hr class="bpr aei">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="bri"
        data-chart="spark-line"
        data-dataset="[[28,68,41,43,96,45,100]]"
        data-labels="['a','b','c','d','e','f','g']"
        style="width: 189px; height: 47px;">
      </canvas>
    </div>
  </div>
  <div class="eq fp afd amk asi">
    <div class="brh bpq">
      <div class="ago">
        <span class="bpi">Downloads</span>
        <h2 class="bph">
          758
          <small class="bpj bpl">1.3%</small>
        </h2>
        <hr class="bpr aei">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="bri"
        data-chart="spark-line"
        data-dataset="[[4,34,64,27,96,50,80]]"
        data-labels="['a', 'b','c','d','e','f','g']"
        style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="eq fp afd amk asi">
    <div class="brh bpo">
      <div class="ago">
        <span class="bpi">Sign-ups</span>
        <h2 class="bph">
          1,293
          <small class="bpj bpk">6.75%</small>
        </h2>
        <hr class="bpr aei">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="bri"
        data-chart="spark-line"
        data-dataset="[[12,38,32,60,36,54,68]]"
        data-labels="['a', 'b','c','d','e','f','g']"
        style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
  <div class="eq fp afd amk asi">
    <div class="brh bpp">
      <div class="ago">
        <span class="bpi">Downloads</span>
        <h2 class="bph">
          758
          <small class="bpj bpl">1.3%</small>
        </h2>
        <hr class="bpr aei">
      </div>
      <canvas id="sparkline1" width="378" height="94" class="bri"
        data-chart="spark-line"
        data-dataset="[[43,48,52,58,50,95,100]]"
        data-labels="['a', 'b','c','d','e','f','g']"
        style="width: 189px; height: 47px;"></canvas>
    </div>
  </div>
</div>

<hr class="afn">

<div class="dh">
  <div class="eq afr">
    <div class="by afd">
      <h6 class="aya">
        Countries
      </h6>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 62.4%;"></span>
          United States
          <span class="brj awy">62.4%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 15.0%;"></span>
          India
          <span class="brj awy">15.0%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 5.0%;"></span>
          United Kingdom
          <span class="brj awy">5.0%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 5.0%;"></span>
          Canada
          <span class="brj awy">5.0%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 4.5%;"></span>
          Russia
          <span class="brj awy">4.5%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 2.3%;"></span>
          Mexico
          <span class="brj awy">2.3%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 1.7%;"></span>
          Spain
          <span class="brj awy">1.7%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 1.5%;"></span>
          France
          <span class="brj awy">1.5%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 1.4%;"></span>
          South Africa
          <span class="brj awy">1.4%</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span class="ayb" style="width: 1.2%;"></span>
          Japan
          <span class="brj awy">1.2%</span>
        </a>
      
    </div>
    <a href="#" class="ce nr ags">All countries</a>
  </div>
  <div class="eq afr">
    <div class="by afd">
      <h6 class="aya">
        Most visited pages
      </h6>
      
        <a class="pu rs xj ux" href="#">
          <span>/ (Logged out)</span>
          <span class="brk awy">3,929,481</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/ (Logged in)</span>
          <span class="brk awy">1,143,393</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/tour</span>
          <span class="brk awy">938,287</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/features/something</span>
          <span class="brk awy">749,393</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/features/another-thing</span>
          <span class="brk awy">695,912</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/users/username</span>
          <span class="brk awy">501,938</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/page-title</span>
          <span class="brk awy">392,842</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/some/page-slug</span>
          <span class="brk awy">298,183</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/another/directory/and/page-title</span>
          <span class="brk awy">193,129</span>
        </a>
      
        <a class="pu rs xj ux" href="#">
          <span>/one-more/page/directory/file-name</span>
          <span class="brk awy">93,382</span>
        </a>
      
    </div>
    <a href="#" class="ce nr ags">View all pages</a>
  </div>
</div>

<div class="by afd">
  <h6 class="aya">
    Devices and resolutions
  </h6>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (1920x1080)</span>
      <span class="awy">3,929,481</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (1366x768)</span>
      <span class="awy">1,143,393</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (1440x900)</span>
      <span class="awy">938,287</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (1280x800)</span>
      <span class="awy">749,393</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Tablet (1024x768)</span>
      <span class="awy">695,912</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Tablet (768x1024)</span>
      <span class="awy">501,938</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Phone (320x480)</span>
      <span class="awy">392,842</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Phone (720x450)</span>
      <span class="awy">298,183</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (2560x1080)</span>
      <span class="awy">193,129</span>
    </a>
  
    <a class="pu rs xj ux" href="#">
      <span>Desktop (2560x1600)</span>
      <span class="awy">93,382</span>
    </a>
  
</div>
<a href="#" class="ce nr ags">View all devices</a>

      </div>
    </div>
  </div>

  <div id="docsModal" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="brl">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="sd">
        <h4 class="modal-title" id="myModalLabel">Example modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>You're looking at an example modal in the dashboard theme.</p>
      </div>
      <div class="se">
        <button type="button" class="ce ni" data-dismiss="modal">Nice.</button>
      </div>
    </div>
  </div>
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/tablesorter.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
  </body>
</html>
