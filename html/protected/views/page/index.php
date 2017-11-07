<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Новости - '.$category->title
);
?>
<?php
foreach ($models as $one) {
 	echo '<h3>',$one->title,'</h3>';
 	echo substr($one->content,0,260);
 } 

if (!$models) {
	echo 'В данной категории статей нет.';
}

 ?>