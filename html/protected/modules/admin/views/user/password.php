<?php


$this->menu=array(
	array('label'=>'Журнал User', 'url'=>array('index')),
	array('label'=>'Создать User', 'url'=>array('create')),
	array('label'=>'Просмотр User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Редактировать пользователей', 'url'=>array('update', 'id'=>$model->id)),
);
?>
Укажите пароль
<?php 
	echo CHtml::form();
	echo CHtml::textField('password');
	echo CHtml::submitButton('Изменить');
	echo CHtml::endForm();
 ?>