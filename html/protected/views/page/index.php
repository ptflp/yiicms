<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Новости - '.$category->title
);
?>
<?php
foreach ($models as $one) {
 	echo CHtml::link('<h3>'.$one->title.'</h3>',array('view','id'=>$one->id));
 	echo substr($one->content,0,260);
 	echo CHtml::link('Читать далее...',array('view','id'=>$one->id));
 	echo ('<br><br><hr/>');
 } 

if (!$models) {
	echo 'В данной категории статей нет.';
}

 ?>