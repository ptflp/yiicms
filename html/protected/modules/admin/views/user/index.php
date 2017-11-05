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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'created'=>array(
			'name' => 'created',
			'value' => 'date("j.m.Y H:i", $data->created)'
		),
		'ban'=> array(
			'name' => 'ban',
			'value' => '($data->ban==1)?"Бан":""',
			'filter' => array(1=>'Нет', 0=>'Да')
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
