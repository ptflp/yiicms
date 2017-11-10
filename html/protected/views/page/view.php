<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Новости - '.$model->category->title => array('index', 'id' => $model->category_id),$model->title
);
?>
<h1>
<?php 
	echo $model->title;
 ?>
</h1>
<?php echo date('j.m.Y H:i',$model->created); ?>
<hr>
 <?php 
 	echo $model->content;
  ?>

  <?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<hr>
