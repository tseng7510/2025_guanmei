<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/cert.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages certPage">
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
                  <span itemprop="name">專業認證</span>
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
              <h1 class="title">專業認證</h1>
              <div class="en">Professional</div>
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
                  <? for ($i = 0; $i < 8; $i++) { ?>
                    <div class="item popup-gallery">
                      <a href="../images/in/cert2.jpg">
                        <div class="picBox">
                          <div class="pic"><img src="../images/in/cert.jpg" alt=""></div>
                        </div>
                        <div class="title">單開推拉防火證明</div>
                      </a>
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