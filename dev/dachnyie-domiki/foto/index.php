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
$images = scandir('./');
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
		<div class="grid">
		<div class="imgholder image-thumb">
			<a class="fancybox-thumb" rel="gallery1" href="<?php echo htmlspecialchars(urlencode($row));?>">
			<figure class=" animated zoomIn">
			<img src="<?php echo htmlspecialchars(urlencode($row));?>" class="img-responsive" alt="Дачный дом - Ключ 585"/>
			</figure></a>
		</div></div>
<?php }} ?>
 
    </div>
  </div>
</div>    

<?php include($root."blocks/footer.php"); ?>