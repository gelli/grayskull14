<div class="carousel-wrapper hidden-xs">

  <div id="carousel-jumbotron" class="carousel slide" data-ride="carousel" data-interval="5000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php if (!get_theme_mod("grayskull14_carousel_image_1")) { ?>
        <li data-target="#carousel-jumbotron" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="1"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="2"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="3"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="4"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="5"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="6"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="7"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="8"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="9"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="10"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="11"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="12"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="13"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="14"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="15"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="16"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="17"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="18"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="19"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="20"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="21"></li>
        <li data-target="#carousel-jumbotron" data-slide-to="22"></li>
      <?php } else {
        $j = -1;
        for($i = 1; $i <= 20; $i++) {
          if (get_theme_mod("grayskull14_carousel_image_$i")) {
            $j++;
            printf('<li data-target="#carousel-jumbotron" data-slide-to="%d" %s></li>', $j, (0 == $j) ? 'class="active"' : '');
          }
        }
      } ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if (!get_theme_mod("grayskull14_carousel_image_1")) { ?>
        <div class="item item-1 active"></div>
        <div class="item item-2"></div>
        <div class="item item-3"></div>
        <div class="item item-4"></div>
        <div class="item item-5"></div>
        <div class="item item-6"></div>
        <div class="item item-7"></div>
        <div class="item item-8"></div>
        <div class="item item-9"></div>
        <div class="item item-10"></div>
        <div class="item item-11"></div>
        <div class="item item-12"></div>
        <div class="item item-13"></div>
        <div class="item item-14"></div>
        <div class="item item-15"></div>
        <div class="item item-16"></div>
        <div class="item item-17"></div>
        <div class="item item-18"></div>
        <div class="item item-19"></div>
        <div class="item item-20"></div>
        <div class="item item-21"></div>
        <div class="item item-22"></div>
        <div class="item item-23"></div>
      <?php } else {
        for($i = 1; $i <= 20; $i++) {
          if (get_theme_mod("grayskull14_carousel_image_$i")) {
            printf(
              '<div style="background-image: url(%s)" class="item item-%d %s"></div>',
              wp_get_attachment_image_url(absint( get_theme_mod("grayskull14_carousel_image_$i" )), 'full'),
              $i, (1 == $i) ? 'active' : '');
          }
        }
      } ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-jumbotron" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-jumbotron" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="jumbo-content text-center">
    <h1>Katrin &amp; Sandra</1>
    <h2>Hochzeitsfotografen mit Liebe zum Detail</h2>
    <div class="jumbo-button-row btn-toolbar">
        <a class="btn btn-lg btn-default" href="/hochzeitsanfrage/"><span class="glyphicon glyphicon-heart"></span> Fotos für euren schönsten Tag</a>
    </div>
  </div>
</div>
