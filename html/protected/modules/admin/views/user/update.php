<?php


$this->menu=array(
	array('label'=>'Журнал User', 'url'=>array('index')),
	array('label'=>'Создать User', 'url'=>array('create')),
	array('label'=>'Просмотр User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Изменение пароля', 'url'=>array('password', 'id'=>$model->id)),
);
?>

<h1>Редактировать пользователей<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>