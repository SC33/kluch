<?php $meta_container = '<link rel="stylesheet" href="/css/jquery.fancybox.css"><link rel="stylesheet" href="/js/helpers/jquery.fancybox-thumbs.css">'; ?>
<?php $title = 'Фотографии дачных домов построенных компанией Ключ 585'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Фото дачных домов'; ?>
<?php $breadcrumb2 = 'Дачные дома'; ?>
<?php $breadcrumb2_url = '/dachnyie-domiki/'; ?>
<?php $canonical = '/dachnyie-domiki/foto/'; ?>
<?php $root='../../';include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php"); ?>

<div class="container">
  <div class="row">
    <h1>Фотографии дачных домов построенных нашей компанией</h1>
    <div id="container" class="gallery foto-otchyot">
	
<?php 
$host = $_SERVER['HTTP_HOST'];
$self = explode("/", $_SERVER['PHP_SELF']);
define('HTTP_URL', 'http://'.$host.'/'.$self[1].'/'.$self[2].'/');
$path = $_SERVER['DOCUMENT_ROOT'].'/'.$self[1].'/'.$self[2].'/';
$images = scandir($path);
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
		<div class="grid">
		<div class="imgholder image-thumb">
			<a class="fancybox-thumb" rel="gallery1" href="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>">
			<figure class=" animated zoomIn">
			<img src="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>" class="img-responsive" alt="Дачный дом - Ключ 585"/>
			</figure></a>
		</div></div>
<?php }} ?>
 
    </div>
  </div>
</div>    

<?php include($root."blocks/footer.php"); ?>