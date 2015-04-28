<?php
/* @var $this UserDepartmentController */
/* @var $model UserDepartment */

$this->breadcrumbs=array(
	'User Departments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserDepartment', 'url'=>array('index')),
	array('label'=>'Create UserDepartment', 'url'=>array('create')),
	array('label'=>'View UserDepartment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserDepartment', 'url'=>array('admin')),
);
?>

<h1>Update UserDepartment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>