<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
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
                  <span itemprop="name">最新消息</span>
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
              <h1 class="title">最新消息</h1>
              <div class="en">News</div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">

                <div class="listBox">
                  <? for ($i = 0; $i < 12; $i++) { ?>
                    <div class="item">
                      <a href="media_detail.php">
                        <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                        <div class="infoBox">
                          <div class="info wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="title">冠美金屬 ‧ 安心守護每一道門</h2>
                            <div class="description">在安全與美觀之間，我們找到了完美平衡。冠美金屬新推出的壓花防火鋼板門，不僅厚實堅固，具備1.2mm的優質鋼板厚度，更成功通過CNS11227-1 F60A等級的防火測試，證明我們對品質的堅持不容妥協。</div>
                            <div class="more">VIEW MORE</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  <? } ?>
                </div>

                <div class="pageBtnBox">
                  <a href="media.php" class="viewMore">瀏覽更多</a>
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