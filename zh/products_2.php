<!doctype html>
<html lang="zh-TW">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsPage">
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
                  <span itemprop="name">水閘門</span>
                  <meta itemprop="position" content="3">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox hasSide">
                <?php include('include_products.php'); ?>

                <div class="content wow fadeInUp" data-wow-delay="0.4s">
                  <h1 class="productTitle">水閘門</h1>
                  <div class="listBox">
                    <? for ($i = 0; $i < 8; $i++) { ?>
                      <div class="item">
                        <a href="products_3.php">
                          <div class="pic"><img src="../images/index/c_1.jpg" alt=""></div>
                          <div class="infoBox">
                            <h2 class="title">不銹鋼水閘門</h2>
                          </div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
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
    $(function() {});
  </script>
</body>

</html>