<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Crystal - Free Video Background Website Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>
      <div class="menu-wrap">
        <nav class="menu navbar">
          <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#video-area">首頁</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#apply_inspection">申請檢驗</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#upload_data">上傳檢驗資料</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#create_data">新增資料</a>
              </li>       
              <li class="nav-item">
                <a class="nav-link" href="#view_pass_data">查看已通過驗證資料</a>
              </li>                                 
              <li class="nav-item">
                <a class="nav-link" href="#contact">聯絡我們</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="farmer_info.html">我的帳號</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="resume.html">登出</a>
              </li> 
              
            </ul>
          </div>
        </nav> 
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
      </div>      
  	<!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="video/video"></div>
      <div class="fixed-top">
          <div class="container">
            <div class="logo-menu">
                <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
              <a class="navbar-brand" href="../index.html">Production resume</a>
              <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>    
            </div>           
          </div>
      </div>
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
            </div>
          </div>
        </div> 
      </div>      
    </header>
    <!-- Header Section End --> 

    <!-- apply_inspection Section Start -->
    <section id="apply_inspection" class="section" data-stellar-background-ratio="0.2">
      <div class="card-body">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">申請 <span>檢驗</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        </div>
        <div class="row">
    
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="你的姓名" required data-error="請輸入你的姓名">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="你的電話" id="phone" class="form-control" required data-error="請輸入你的電話">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="申請作物" id="apply_crop" class="form-control" required data-error="請輸入你的申請作物">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" placeholder="申請項目" rows="11" data-error="請輸入你的申請項目" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-center">
                  <button class="btn btn-common" id="submit" type="submit">申請</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
            
        </div>
      </div>
    </section>
    <!-- apply_inspection Section End --> 

    
    <!-- upload_data Section Start -->
    <section id="upload_data" class="section" data-stellar-background-ratio="0.2">
      <div class="card-body">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">上傳 <span>檢驗資料</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        </div>
        <div class="row">
    
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="你的姓名" required data-error="請輸入你的姓名">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="你的電話" id="phone" class="form-control" required data-error="請輸入你的電話">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="檢驗作物" id="inspection_crop" class="form-control" required data-error="請輸入你的檢驗作物">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" placeholder="檢驗項目" rows="11" data-error="請輸入你的檢驗項目" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-center">
                  <button class="btn btn-common" id="submit" type="submit">申請</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
            
        </div>
      </div>
    </section>
    <!-- upload_data Section End --> 
      
    <!-- create_data Section Start -->
    <section id="create_data" class="section" data-stellar-background-ratio="0.2">
      <div class="card-body">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">新增 <span>資料</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        </div>
        <div class="row">
    
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="你的姓名" required data-error="請輸入你的姓名">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="date" placeholder="日期" id="date" name="name" class="form-control" placeholder="請輸入日期">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="作物" id="crop" class="form-control" required data-error="請輸入你的作物">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="作物地點" id="crop_location" class="form-control" required data-error="請輸入你的作物地點">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="作業種類" id="job_type" class="form-control" required data-error="請輸入你的作業種類">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" placeholder="內容" rows="11" data-error="請輸入你的內容" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-center">
                  <button class="btn btn-common" id="submit" type="submit">送出</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
            
        </div>
      </div>
    </section>
    <!-- create_data Section End -->

    <!-- view_pass_data Section Start -->
    <section id="view_pass_data" class="section">
      <div class="card-body">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">查看已通過 <span>驗證資料</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
        </div>
        <div class="row">
         
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-rocket"></i> 
              </div>
              <div class="pricing-details">
                <h2>ABC</h2>
                <span>Free</span>
                <ul>
                  <li>火龍果</li>
                  <li>高山高麗菜</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-rocket"></i> 
              </div>
              <div class="pricing-details">
                <h2>love蔬果</h2>
                <span>$3.99</span>
                <ul>
                  <li>12345</li>
                  <li>test</li>
                  <li>梨山水蜜桃</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table table-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lnr lnr-rocket"></i> 
              </div>
              <div class="pricing-details">
                <h2>原食</h2>
                <span>$9.50</span>
                <ul>
                  <li>12345</li>
                  <li>test</li>
                  <li>梨山水蜜桃</li>
                </ul>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-common">more</a>
              </div>
            </div>
          </div>
            
            
        </div>
      </div>
    </section>
    <!-- view_pass_data Section End -->  
    
    <!-- Contact Section Start -->
    <section id="contact" class="section">
      <div class="card-body">
        <div class="row justify-content-md-center">          
          <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">            
            <div class="contact-block">
              <div class="section-header">          
                <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">聯絡 <span>我們</span></h2>
                <hr class="lines wow zoomIn" data-wow-delay="0.3s">
              </div>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="你的姓名" required data-error="請輸入你的姓名">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="你的信箱" id="email" class="form-control" required data-error="請輸入你的信箱">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="標題" id="msg_subject" class="form-control" required data-error="請輸入你的標題">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" placeholder="內容" rows="11" data-error="請輸入你的內容" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button text-center">
                      <button class="btn btn-common" id="submit" type="submit">送出</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->
       

    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.min.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/smooth-scroll.js"></script>    
    <script src="js/smooth-on-scroll.js"></script>    
    <script src="js/wow.js"></script>    
    <script src="js/menu.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>     
    <script src="js/main.js"></script>
    
  </body>
</html>