
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 proekt" itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
 <a itemprop="url" href="<?php echo $url; ?>">
	<img src="<?php echo $img; ?>" class="img-responsive" itemprop="image" alt="<?php echo $alt; ?>">
<?php if ($akciya) {echo '<img src="/dachnyie-domiki/img/akciya.png" width="100px" alt="" style="position:absolute; top:0;right:0">';$akciya=false;}?>
 </a>
  <div class="pl">Площадь: <?php echo $pl; ?> м<sup>2</sup><br />
  Габариты: <?php echo $gab; ?> м
  </div>
  <div class="arrow_box6 asf"> <span class="proekt-name" itemprop="name"><?php echo $name; ?></span> <span class="price-proekt" itemtype="http://schema.org/Offer" itemprop="offers" itemscope>от <span class="red-text" itemprop="price"><?php echo $price; ?></span>
    <meta itemprop="priceCurrency" content="RUB">
    <i class="fa fa-rub"></i></span> </div>
</div>
