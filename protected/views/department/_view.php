<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_name')); ?>:</b>
	<?php echo CHtml::encode($data->dept_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dept_description')); ?>:</b>
	<?php echo CHtml::encode($data->dept_description); ?>
	<br />


</div>