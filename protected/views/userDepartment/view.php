<?php
/* @var $this UserDepartmentController */
/* @var $model UserDepartment */

$this->breadcrumbs=array(
	'User Departments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserDepartment', 'url'=>array('index')),
	array('label'=>'Create UserDepartment', 'url'=>array('create')),
	array('label'=>'Update UserDepartment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserDepartment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDepartment', 'url'=>array('admin')),
);
?>

<h1>View UserDepartment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'dept_id',
	),
)); ?>
