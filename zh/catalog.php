<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/catalog.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages catalogPage">
    <header class="siteHeader" itemscope="itemscope">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="index.php" itemprop="item">
                    <span itemprop="name">首頁</span>
                  </a>
                  <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">線上型錄</span>
                  <meta itemprop="position" content="2">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0.2s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <h1 class="title">線上型錄</h1>
              <div class="en">Catalog</div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <section class="wow fadeInUp" data-wow-delay="0.4s">
                <div class="listBox">
                  <? for ($i = 0; $i < 3; $i++) { ?>
                  <div class="item">
                    <div class="pic"><img src="../images/in/catalog.jpg" alt=""></div>
                    <div class="title">2025冠美金屬型錄</div>
                    <a href="catalog_detail.php" class="online">線上觀看</a>
                  </div>
                  <? } ?>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>

  <?php include('include_body_bottom.php'); ?>
  <script src="../plugins/Magnific-Popup-master/jquery.magnific-popup.min.js"></script>
</body>

</html>