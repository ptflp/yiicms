<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал комментариев</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=>array(
			'name' => 'id',
			'headerHtmlOptions' => array('width'=>30)
		),
		'status'=> array(
			'name' => 'status',
			'value' => '($data->status==1)?"Доступно":"Скрыто"',
			'filter' => array(1=>'Доступно', 0=>'Скрыто')
		),
		'content',
		'page_id'=> array(
			'name' => 'page_id',
			'value' => '$data->page->title',
			'filter' => Page::all()
		),
		'created'=>array(
			'name' => 'created',
			'value' => 'date("j.m.Y H:i", $data->created)'
		),
		'user_id'=> array(
			'name' => 'user_id',
			'value' => '$data->user->username',
			'filter' => User::all()
		),
		'guest',
		array(
			'class'=>'CButtonColumn',
			'updateButtonOptions'=> array('style' => 'display: none' ),
		),
	),
)); ?>
