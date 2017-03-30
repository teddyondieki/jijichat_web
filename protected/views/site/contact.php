<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' : Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>


<div class="desc">
    <h1 class="introHeading">
        Send Us Your Feedback
    </h1>

    <?php if (Yii::app()->user->hasFlash('contact')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
        </div>
    <?php else: ?>
        <p class="contactText">
            We value your feedback to constantly improve your experience with Jijichat. Please fill out the following form and we will get back to you as soon as possible.
        </p>


        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array(
//                'class' => 'form-vertical',
                'role' => 'form'
            ),
        ));
        ?>

        <?php // echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger')); ?>

            <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'email', array('class' => 'text-danger')); ?>

            <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'placeholder' => 'Email')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'body', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'body', array('class' => 'text-danger')); ?>

            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'placeholder' => 'Message')); ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-lg btn-block btn-primary')); ?>
        </div>
        <?php $this->endWidget(); ?>
    <?php endif; ?>

</div>


