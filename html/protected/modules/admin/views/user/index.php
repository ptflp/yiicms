<?php


$this->menu=array(
	array('label'=>'Создание пользователей', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список пользователей</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php 
echo CHtml::form();
echo CHtml::submitButton('Разбанить',array('name' => 'noban'));
echo CHtml::submitButton('Бан',array('name' => 'ban'));
echo '<br>';
echo CHtml::submitButton('Админ',array('name' => 'admin'));
echo CHtml::submitButton('Пользователь',array('name' => 'user'));
 ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'selectableRows'=>2,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('class'=>'CCheckBoxColumn',
		'id'=>'User_id'),
		'username',
		'password',
		'created'=>array(
			'name' => 'created',
			'value' => 'date("j.m.Y H:i", $data->created)'
		),
		'ban'=> array(
			'name' => 'ban',
			'value' => '($data->ban==1)?"":"Бан"',
			'filter' => array(1=>'Да', 0=>'Нет')
		),
		'role'=> array(
			'name' => 'role',
			'value' => '($data->role==1)?"User":"Admin"',
			'filter' => array(1=>'Admin', 0=>'User')
		),
		/*
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php 
echo CHtml::endform();
 ?>