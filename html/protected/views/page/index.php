<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Page',
);
?>
<?php 
foreach ($models as $one) {
 	echo '<h3>',$one->title,'</h3>';
 } 

if (!$models) {
	echo 'В данной категории статей нет.';
}

 ?>