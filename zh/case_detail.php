<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/case.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages caseDetailPage">
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
              <h1 class="title">安麗台南體驗中心 × 冠美金屬門</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">

                <div class="info wow fadeInUp" data-wow-delay="0.4s">我們近期很榮幸受全聯工程科技委託，參與「安麗台南體驗中心」的門體設計與製作工程。該體驗中心位於台南市政府對面，為品牌全新打造的重要據點，本案在設計與施工上有兩大亮點，展現冠美的專業流程。<br /><br />
                  一、量身搭配 ‧ 融入裝潢的金屬門體<br />
                  為符合業主對空間質感的高標準，我們配合客戶需求，選用其指定的門扇貼皮，由第三方廠商貼覆韓國進口的防焰天鵝絨橡木紋裝潢膜。再搭配冠美製造的不銹鋼毛絲雙開金屬門，使整體色系與空間設計完美融合，呈現簡約而高質感的會議空間風貌。<br /><br />
                  二、隱形防護 ‧ 60A防火橫拉門嵌入設計<br />
                  防火橫拉門部分，由冠美具備30年實務經驗的工務經理親自會勘現場，與隔間廠商及工地主任密切討論，針對複壁牆預留空間與結構強度進行專業建議與協調。最終，我們將60A等級的防火橫拉門巧妙隱藏於牆體之中，不僅維持了空間整體的簡潔視覺，也兼顧了安全與機能。<br /><br />

                  本案充分體現冠美在金屬門設計與施工上的靈活應變與高度配合度。無論是設計美感、空間整合或安全性能，我們都致力於提供善的解決方案。</div>

                <div class="listBox wow fadeInUp" data-wow-delay="0.6s">
                  <? for ($i = 0; $i < 9; $i++) { ?>
                    <div class="item popup-gallery">
                      <a href="../images/index/c_1.jpg">
                        <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                      </a>
                    </div>
                  <? } ?>
                </div>

                <div class="pageBtnBox">
                  <a href="case.php" class="back">回列表頁</a>
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