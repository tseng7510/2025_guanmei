<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetailPage">
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
              <time datetime="2024/10/9">2024/10/9 </time>
              <h1 class="title">安冠美金屬 ‧ 安心守護每一道門</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <div class="editor wow fadeInUp" data-wow-delay="0.4s">
                  <strong>冠美防火壓花鋼板門｜厚度1.2mm，通過CNS11227-1 /F60A防火標準</strong><br /><br />
                  <img src="../images/index/c_1.jpg" alt=""><br /><br />
                  在安全與美觀之間，我們找到了完美平衡。<br /><br />

                  冠美金屬新推出的壓花防火鋼板門，不僅厚實堅固，具備1.2mm的優質鋼板厚度，更成功通過CNS11227-1 F60A等級的防火測試，證明我們對品質的堅持不容妥協。<br /><br />

                  雖然工法與傳統平板門類似，但在細節上我們講究更多——<br />
                  從鋼板與防火材料之間的密合度，到內部防火材的拼裝方式，每一處都經過反覆驗證。<br />
                  因為我們深知，防火門不單只是門，更是守護生命與財產的第一道防線。<br /><br />

                  這次的測試成功，不僅強化了客戶對防火安全的信賴，也為設計增添更多選擇。<br />
                  表面壓印紋路搭配冠美自營烤漆廠的多樣色系與質感處理，<br />
                  為建築空間提供更多創意與風格的可能。<br /><br />

                  <strong><span style="color:#000">冠美，用心打造每一扇門</span></strong>

                </div>
                <div class="pageBtnBox">
                  <a href="media.php" class="back">回列表頁</a>
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
    $(function() {
      $('.pageMenu button').on('click', function(e) {
        $(this).toggleClass('active');
        $(this).siblings('nav').slideToggle(200);
      })

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