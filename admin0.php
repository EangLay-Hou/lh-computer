<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | LHComputer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <style>
    body{width:100%;margin: auto; background-color: lightblue;}
    form{width:1000px;margin:auto;margin-top:20px;}
    input {width: 200px;}
    label {width: 200px; display: inline-block;}
    #btn{width:100px; height:30px; text-align:center;}
    #c{margin: auto;color: green;float: right;}
    h2{text-align: center;}
    #left{width:50%;float:left;}
    #right{float:left;}
    </style>
</head><!--/head-->

<body>
    <!--header-->
    <header id="header">

      <div class="header-middle"><!--header-middle-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="nav navbar-nav collapse navbar-collapse">
                <a href="index.html"><img id="head" src="images/image/2.png" class="img-responsive"/></a>
              </div>
            </div>
          </div>
        </div>
      </div><!--/header-middle-->

<!--header-bottom-->
      <div class="header-bottom">
        <div id="m" class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="mainmenu pull-left">
                <ul id="m1" class="nav navbar-nav collapse navbar-collapse">
                  <li><a href="index.html" class="active">Home</a></li>
                  <li class="dropdown"><a href="#">Desktop<i class="fa fa-angle-down"></i></a>
                                      <ul role="menu" class="sub-menu">
                                          <li><a href="#">ASUS</a></li>
                                          <li><a href="login.html">APPLE</a></li>
                                          <li><a href="product-details.html">ACER</a></li>
                                          <li><a href="checkout.html">DELL</a></li>
                                          <li><a href="cart.html">LENOVO</a></li>
                                          <li><a href="cart.html">MSI</a></li>
                                      </ul>
                  </li>

                  <li class="dropdown"><a href="#">Laptop<i class="fa fa-angle-down"></i></a>
                                      <ul role="menu" class="sub-menu">
                                          <li><a href="#">ASUS</a></li>
                                          <li><a href="blog-single.html">APPLE</a></li>
                                          <li><a href="blog-single.html">ACER</a></li>
                                          <li><a href="blog-single.html">DELL</a></li>
                                          <li><a href="blog-single.html">LENOVO</a></li>
                                          <li><a href="blog-single.html">MSI</a></li>
                                      </ul>
                  </li>

                  <li><a href="404.html">PC Hardware</a></li>
                  <li><a href="customs1.php">Customs</a></li>
                  <li><a href="404.html">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="search_box pull-right">
                <input type="text" placeholder="Search"/>
              </div>
            </div>
          </div>
        </div>
      </div><!--/header-bottom-->
    </header><!--/header-->




<!--admin-->
          <h2 class="title text-center">Admin</h2>
          <div>
              <form method="post" action="Model/process.php">
              <div>
            <div id="left">
                    <h2>Please Insert Case</h2>
                    <label>Name:</label><input type="text" name="Case_Name" placeholder="Product Name" ><br/><br/>
                    <label>Type:</label><input type="text" name="Ca_Type" placeholder="Type"><br/><br/>
                    <label>Price:</label><input type="text" name="Ca_Price" placeholder="Product Price"<br/><br/>
                    <!-- <input id="btn" type="submit" name="btnAdd" value="Add"></br><br/> -->

                    <h2>Please Insert CPU</h2>
                    <label>Name:</label><input type="text" name="CPU_Name" placeholder="Product Name"><br/><br/>
                    <label>Generation And Core:</label><input type="text" name="Generation_and_Core" placeholder="Type"><br/><br/>
                    <label>Price:</label><input type="text" name="Cp_Price" placeholder="Product Price"><br/><br/>
                    <!-- <input id="btn" type="submit" name="btnAdd" value="Add"></br><br/> -->

                    <h2>Please Insert Motherbard</h2>
                    <label>Name:</label><input type="text" name="Motherboard_Name" placeholder="Product Name"><br/><br/>
                    <label>Type:</label><input type="text" name="Mo_Type" placeholder="Type"><br/><br/>
                    <label>Price:</label><input type="text" name="Mo_Price" placeholder="Product Price"><br/><br/>
                    <!-- <input id="btn" type="submit" name="btnAdd" value="Add"></br><br/> -->

<!--                button for add update and delete-->

                    <input id="btn" type="submit" name="btnAdd" value="Add">
                    <input id="btn" type="#" name="btnupdate" value="update">
                    <input id="btn" type="#" name="btndelete" value="delete"></br><br/>
                    <a href="index.html"><h2>GO TO HOME</h2></a>

<!--                button for add update and delete-->

            </div>



            <div id="right">
                    <h2>Please Insert power_supply</h2>
                    <label>Name:</label><input type="text" name="Power_Supply_Name" placeholder="Product Name"><br/><br/>
                    <label>Type:</label><input type="text" name="Po_Type" placeholder="Type"><br/><br/>
                    <label>Price:</label><input type="text" name="Po_Price" placeholder="Product Price"><br/><br/>
                    <!-- <input id="btn" type="submit" name="btnAdd" value="Add"></br><br/> -->

                    <h2>Please Insert RAM</h2>
                    <label>Name:</label><input type="text" name="RAM_Name" placeholder="Product Name"><br/><br/>
                    <label>Type:</label><input type="text" name="Ra_Type" placeholder="Type"><br/><br/>
                    <label>Size:</label><input type="text" name="Size_Ram" placeholder="Size"><br/><br/>
                    <label>Price:</label><input type="text" name="Ra_Price" placeholder="Product Price"><br/><br/>
                    <!-- <input id="btn" type="submit" name="btnAdd" value="Add"></br><br/> -->

                    <h2>Please Insert VGA</h2>
                    <label>Name:</label><input type="text" name="VGA_Name" placeholder="Product Name"><br/><br/>
                    <label>Type:</label><input type="text" name="Vg_Type" placeholder="Type"><br/><br/>
                    <label>Size:</label><input type="text" name="Size_Vga" placeholder="Size"><br/><br/>
                    <label>Price:</label><input type="text" name="Vg_Price" placeholder="Product Price"><br/><br/>

            </div>

            </div>

              </form>

          </div>

          </div>
        </div>
      </div>
    </section>

<!--Footer-->


          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <p class="pull-left">Copyright © 2016 LHComputer. All rights reserved.</p>
            <p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/lay.sothearath">Eang Lay</a></span>
              <a href="admin.php">Admin</a>
            </p>
          </div>
        </div>
      </div>

    </footer><!--/Footer-->

  <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
