<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsDetailPage">
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
                  <a href="products.php" itemprop="item">
                    <span itemprop="name">產品介紹 </span>
                  </a>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="products_2.php" itemprop="item">
                    <span itemprop="name">水閘門</span>
                  </a>
                  <meta itemprop="position" content="3">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="products_3.php" itemprop="item">
                    <span itemprop="name">不銹鋼水閘門</span>
                  </a>
                  <meta itemprop="position" content="4">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">WT-001</span>
                  <meta itemprop="position" content="5">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <section class="wow">

          <div class="outerBox">
            <div class="container">
              <div class="contentBox">

                <div class="topBox">
                  <div class="titleBox fadeInUp" data-wow-delay="0.2s">
                    <h1 class="model">WT-001</h1>
                    <div class="title">不銹鋼防水閘門</div>
                  </div>

                  <div class="info fadeInRight" data-wow-delay="0.4s">
                    <ul class="list">
                      <li>本產品採用SUS 304不鏽鋼製作，不會產生銹蝕。</li>
                      <li>採用EPDM膠條，不易腐蝕、不易變形，且防水性能極佳!</li>
                      <li>可製作單扇或雙扇門片，使用時相當簡便且快速，五分鐘內即可完成。</li>
                      <li>特製緊迫把手操作簡單又省力。</li>
                      <li>門扇立柱與地面軌道採用埋入式工法製作安裝。</li>
                      <li>配合現場尺寸丈量設計，可收納於水泥框內 (或加做不銹鋼收納框)，收合後平整美觀。</li>
                    </ul>
                  </div>
                </div>
                <div class="bottomBox fadeInUp" data-wow-delay="0.6s">
                  <div class="listBox popup-gallery">
                    <? for ($i = 0; $i < 9; $i++) { ?>
                      <div class="item">
                        <a href="../images/index/c_1.jpg">
                          <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                  <div class="pageBtnBox">
                    <a href="products_3.php" class="back">回列表頁</a>
                  </div>
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
  <script type="text/javascript">
    $(function() {
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1]
        },
        closeOnBgClick: false,
        callbacks: {
          open: function() {
            const _this = this;
            const mfpContent = document.querySelector('.mfp-content');
            const prevBtn = document.createElement('button');
            const nextBtn = document.createElement('button');
            prevBtn.className = 'mfp-arrow mfp-arrow-left';
            nextBtn.className = 'mfp-arrow mfp-arrow-right';
            prevBtn.setAttribute('type', 'button');
            nextBtn.setAttribute('type', 'button');
            mfpContent.appendChild(prevBtn);
            mfpContent.appendChild(nextBtn);
            prevBtn.addEventListener('click', (e) => {
              e.preventDefault();
              _this.prev();
            })
            nextBtn.addEventListener('click', (e) => {
              e.preventDefault();
              _this.next();
            })
          },
        }
      });
    });
  </script>
</body>

</html>