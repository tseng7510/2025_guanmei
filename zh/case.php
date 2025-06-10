<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/case.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages casePage">
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
                  <span itemprop="name">案例分享</span>
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
              <h1 class="title">案例分享</h1>
              <div class="en">Case Study</div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="pageMenu wow fadeInUp" data-wow-delay="0.4s">
                <button type="button">分類</button>
                <nav>
                  <ul>
                    <li><a href="#" class="active">全部作品</a></li>
                    <li><a href="#">隔音門案例</a></li>
                    <li><a href="#">玄關隔音門</a></li>
                    <li><a href="#">別墅大門</a></li>
                  </ul>
                </nav>
              </div>
              <div class="contentBox">
                <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                  <? for ($i = 0; $i < 12; $i++) { ?>
                    <div class="item">
                      <a href="case_detail.php">
                        <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                        <div class="infoBox">
                          <h2 class="title">單開橫拉門玻璃</h2>
                        </div>
                      </a>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript">
    $('.pageMenu button').on('click', function(e) {
      $(this).toggleClass('active');
      $(this).siblings('nav').slideToggle(200);
    })
  </script>
</body>

</html>