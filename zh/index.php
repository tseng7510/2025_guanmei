<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <picture>
                    <source srcset="../images/index/banner_m.jpg" media="(max-width: 1100px)" />
                    <img src="../images/index/banner.jpg" alt="">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <picture>
                    <source srcset="../images/index/banner.jpg" media="(max-width: 767px)" />
                    <img src="../images/index/banner.jpg" alt="">
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <picture>
                    <source srcset="../images/index/banner.jpg" media="(max-width: 767px)" />
                    <img src="../images/index/banner.jpg" alt="">
                  </picture>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <section class="aboutBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <div class="infoBox wow fadeInLeft" data-wow-delay="0.2s">
                  <h2>Guan Mei Metal</h2>
                  <div class="slogan">匠心打造 ‧ 冠於品質 ‧ 美以精工</div>
                  <div class="description">冠美創立至今三十年餘年，以金屬加工為根，穩扎穩打成為南部地區知名的金屬建材製造廠商。一路走來歷經各大案場洗鍊，累積了眾多經驗與實績，其中涵蓋企業廠辦、公家單位及指標性建築。</div>
                  <div class="pic acBoxDown"><img src="../images/index/a_1.jpg" alt=""></div>
                </div>
                <div class="picBox wow fadeInRight" data-wow-delay="0.4s">
                  <div class="caption acBoxUp">近年來我們傾心專注於更具技術的高安全性產品領域，如各類防火門與防水閘門，堅持用料實在、工藝細膩，為每一位客戶把關最重要的安全防線。</div>
                  <div class="pic acBoxDown"><img src="../images/index/a_2.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="caseBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <h2 class="blockTitle wow fadeInUp" data-wow-delay="0.2s">最新案例</h2>
                <div class="slogan wow fadeInUp" data-wow-delay="0.4s">美好便利的生活 從安全設計開始</div>
                <div class="listBox">
                  <div class="item wow fadeInUp" data-wow-delay="0.6s">
                    <a href="case_detail.php">
                      <div class="pic">
                        <picture>
                          <source srcset="../images/index/c_2.jpg" media="(max-width: 767px)" />
                          <img src="../images/index/c_1.jpg" alt="">
                        </picture>
                      </div>
                      <div class="infoBox">
                        <h3 class="title">安麗台南體驗中心 × 冠美金屬門</h3>
                      </div>
                    </a>
                  </div>
                  <div class="item wow fadeInUp" data-wow-delay="0.7s">
                    <a href="case_detail.php">
                      <div class="pic">
                        <picture>
                          <source srcset="../images/index/c_2.jpg" media="(max-width: 767px)" />
                          <img src="../images/index/c_2.jpg" alt="">
                        </picture>
                      </div>
                      <div class="infoBox">
                        <h3 class="title">安麗台南體驗中心 × 冠美金屬門</h3>
                      </div>
                    </a>
                  </div>
                  <div class="item wow fadeInUp" data-wow-delay="0.8s">
                    <a href="case_detail.php">
                      <div class="pic">
                        <picture>
                          <source srcset="../images/index/c_2.jpg" media="(max-width: 767px)" />
                          <img src="../images/index/c_3.jpg" alt="">
                        </picture>
                      </div>
                      <div class="infoBox">
                        <h3 class="title">安麗台南體驗中心 × 冠美金屬門</h3>
                      </div>
                    </a>
                  </div>
                  <div class="item wow fadeInUp" data-wow-delay="0.9s">
                    <a href="case_detail.php">
                      <div class="pic">
                        <picture>
                          <source srcset="../images/index/c_2.jpg" media="(max-width: 767px)" />
                          <img src="../images/index/c_4.jpg" alt="">
                        </picture>
                      </div>
                      <div class="infoBox">
                        <h3 class="title">安麗台南體驗中心 × 冠美金屬門</h3>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="productBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <h2 class="blockTitle wow fadeInUp" data-wow-delay="0.2s">熱銷產品</h2>
                <div class="slogan wow fadeInUp" data-wow-delay="0.2s">解決您的煩惱，專屬於您需求的設計</div>
                <div class="listBox">
                  <? for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item wow fadeInUp" data-wow-delay="0.4s">
                      <a href="products.php">
                        <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                        <div class="infoBox">
                          <h3 class="title">單開橫拉門玻璃</h3>
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
  <script src="../plugins/gsap.min.js"></script>

  <script type="text/javascript">
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      pagination: {
        el: '.banner .swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
    });
  </script>
</body>

</html>