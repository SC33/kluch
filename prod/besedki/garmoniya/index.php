<?php $title = 'Беседка Гармония от производителя по доступной цене во Владимире';
$description = '';
$keywords = '';
$breadcrumb2 = 'Беседки';
$breadcrumb2_url = '/besedki/';
$breadcrumb = 'Беседка Гармония';
$canonical = '/besedki/garmoniya/';

$lang=json_decode('{
  "h1":"Беседка Сруб",
  "about":"<p>Беседка из бревна получается очень уютной и красивой. Мы строим беседки из бревна любого диаметра от фундамента до кровли.</p><p>Для обозначения стоимости присылайте нам желаемый размер беседки и диаметр бревна. Срок изготовления -1 месяц.</p>",
  "alt":"Беседка Сруб",
  "img":"srub1",
  "eche":["skazka","leto","besedka-iz-brusa","garmoniya"]
}',true);
$pricebd = [["","договорная"]];
$harakt = [["Размер беседки",""],["Срок постройки","30 дней"]];
$gallery2 = [["besedka-s-pechkoy","беседка с печкой"],["besedka-s-pechkoy2","беседка с печкой"],["besedka-srub-iz-brevna","Беседка сруб из оцилиндрованного бревна"],["besedka-srub","Беседка сруб"]];

include("../template.php"); ?>


<?php $root='../../';include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php"); ?>
<div class="container proekt-style">
  <div class="row">
    <h1>Беседка Гармония</h1>
    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="padding:0"> 
       </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
    <a class="fancybox-thumb" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya.jpg"><img src="/besedki/garmoniya/garmoniya.jpg" class="img-responsive" alt="Беседка Гармония"/></a>
    <!--gallery-->  

   </div>
    
    

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="row">
       
        <div class="cena-block"> <span class="price-proekt2">Стоимость строительства:</span> <span class="price-proekt3">65000 </span>руб.<br>
          <button type="submit" class="button-style open-modal">Оставить заявку</button>
<?php include($root."blocks/modal-zakaz.php"); ?>     
        <div class="opisanie table-responsive">
           <table class="table">
              <caption>Основные характеристики</caption>
              <tbody>
                <tr>
                  <th scope="row">Размер беседки:</th>
                  <td>2,75x2,75 м</td>
                </tr>
                <tr>
                  <th scope="row">Срок постройки:</th>
                  <td>30 дней</td>
                </tr>
               
              </tbody>
           </table>  
        </div>
        </div><!--cena-block-->
   
      </div><!--row-->
    </div><!--col-md-4-->
  </div><!--row-->
</div><!--container--> 

<div class="container">
  <div class="row"> 
    
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">  
     <div class="opisanie table-responsive">
     <div><h2>Описание</h2></div>
        <p>В стоимость 65000 руб. входит: беседка с тремя стационарными лавками (покрыта антисептиком), фундамент из бетонных блоков, подиум, кровля - оцинкованный профнастил, доставка в радиусе 30 км от г. Владимира, установка.<p>
        </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-xs">
        <h2>Беседки построенные по проекту</h2>
        
         <div class="gallery2">
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya.jpg"><img src="/besedki/garmoniya/besedka-garmoniya.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-1.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-1.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-1.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-2.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-2.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-3.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-3.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-4.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-4.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-5.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/garmoniya/besedka-garmoniya-5.jpg"><img src="/besedki/garmoniya/besedka-garmoniya-6.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
       </div>
        
        
     </div>   
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title"><span>Похожие беседки</span></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
 <?php include("../../besedki/skazka/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
    
     <!--col-md-6-->
    <?php include("../../besedki/leto/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
     <!--col-md-6-->
    <?php include("../../besedki/srub/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
 
    <!--col-md-6--> 
    <!--col-md-6-->
    <?php include("../../besedki/besedka-iz-brusa/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
    
  </div><!--row-->
</div><!--container-->
<?php include($root."blocks/footer.php"); ?>