<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Новости - '.$model->category->title => array('index', 'id' => $model->category_id),$model->title
);
?>
