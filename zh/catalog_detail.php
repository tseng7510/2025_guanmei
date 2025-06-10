<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/catalog.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages catalogOnlinePage">
    <header class="siteHeader" itemscope="itemscope">
      <div class="logo_catalog" itemprop="headline">
        <a href="index.php" itemprop="url">
          <picture>
            <source srcset="../images/logo_m.svg" media="(max-width: 767px)" />
            <img src="../images/logo.svg" alt="冠美金屬企業股份有限公司" />
          </picture>
        </a>
      </div>
      <div class="btnBox">
        <button class="home" title="回第一頁"></button>
        <button class="prev" title="上一頁"></button>
        <button class="next" title="下一頁"></button>
        <button class="zoomIn" title="放大"></button>
        <button class="zoomOut" title="縮小"></button>
        <button class="listBtn" title="列表"></button>
      </div>
      <div class="pageNum">
        <div class="nowPage"><input type="text" /></div>
        /
        <div class="totalPage"></div>
      </div>
      <a href="catalog.php" class="back">回列表頁</a>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="mainBox">
        <section class="wow fadeInUp" data-wow-delay="0.4s">
          <div class="outer">
            <div class="holderBox">
              <div id="holder">
                <div class="pic"><img src="../images/in/catalog_1.jpg" alt="" /></div>
                <div class="pic"><img src="../images/in/catalog_2.jpg" alt="" /></div>
                <div class="pic"><img src="../images/in/catalog_1.jpg" alt="" /></div>
                <div class="pic"><img src="../images/in/catalog_2.jpg" alt="" /></div>
              </div>
            </div>
            <div class="listBox"></div>
        </section>
      </div>
    </main>

  </div>
  <script type="text/javascript" src="../plugins/jquery-3.7.1.min.js"></script>
  <script src="../plugins/turn.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('.listBox').append($('#holder').clone().attr('id', 'listUse'));

      let initialWidth = document.querySelector('#holder img').clientWidth;
      let initialHeight = document.querySelector('#holder img').clientHeight;
      let mainTop = document.querySelector('.mainBox').offsetTop + 40;

      let aspectRatio = initialHeight / initialWidth;


      if (initialHeight > window.innerHeight) {
        initialHeight = window.innerHeight - mainTop - 40;
        initialWidth = (initialHeight / aspectRatio);
      }

      $('#holder').turn({
        width: initialWidth * 2,
        height: initialHeight,
        autoCenter: true,
        when: {
          turned: function(event, page, pageObj) {
            let windowWidth = window.innerWidth;

            if (window.innerWidth > 1024) {
              console.log('page', page, 'pageObj', pageObj);
              $('.nowPage input').val(pageObj[1]);
              if (pageObj[1] === 0) $('.nowPage input').val($('#holder').turn('pages'));
            } else {
              $('.nowPage input').val(page);
            }
            $('.totalPage').text($('#holder').turn('pages'));
          },
        },
      });

      function resizeFlipBook() {
        mainTop = document.querySelector('.mainBox').offsetTop + 40;


        if (window.innerWidth > 1024) {

          let containerWidth = window.innerWidth;
          let newWidth = containerWidth / 2 - 40;
          let newHeight = newWidth * aspectRatio;

          if (newHeight > window.innerHeight - mainTop && newWidth * 2 < window.innerWidth) {
            newHeight = window.innerHeight - mainTop;
            newWidth = (newHeight / aspectRatio) * 2;
          } else {
            newHeight = newHeight;
            newWidth = newWidth * 2;
          }

          $('#holder').turn('display', 'double');
          $('#holder').turn('size', newWidth, newHeight);
          $('#holder').turn('resize');
        } else {
          let containerWidth = window.innerWidth;
          let newWidthS = containerWidth - 40;
          let newHeightS = newWidthS * aspectRatio;

          if (newHeightS > window.innerHeight - mainTop) {

            newHeightS = window.innerHeight - mainTop;
            newWidthS = (newHeightS / aspectRatio);
          } else {
            newHeightS = newHeightS;
            newWidthS = newWidthS;
          }

          $('#holder').turn('display', 'single');
          $('#holder').turn('size', newWidthS, newHeightS);
        }
        $('#holder').turn('resize');
      }

      resizeFlipBook()

      $(window).on('resize', function() {
        resizeFlipBook()
      });

      $('.home').on('click', function() {
        $('#holder').turn('page', 1);
      });
      $('.prev').on('click', function() {
        $('#holder').turn('previous');
      });
      $('.next').on('click', function() {
        $('#holder').turn('next');
      });

      $('.zoomIn').on('click', function() {
        width = $('#holder').width() + 40;
        height = width * aspectRatio;
        $('#holder').turn('size', width, height);
      });
      $('.zoomOut').on('click', function() {
        width = $('#holder').width() - 40;
        height = width * aspectRatio;
        $('#holder').turn('size', width, height);
      });
      $('.nowPage input').on('change', function() {
        $('#holder').turn('page', $(this).val());
      });

      $('.listBtn').on('click', function() {
        $('.listBox').addClass('active');
      });

      $('#listUse .pic').on('click', function() {
        $('#holder').turn('page', $(this).index() + 1);
        $('.listBox').removeClass('active');
      });
    });
  </script>
</body>

</html>