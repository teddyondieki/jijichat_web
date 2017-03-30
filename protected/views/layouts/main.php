<?php
/* @var $this Controller */
$cs = Yii::app()->clientScript;

$cs->scriptMap = array(
    'jquery.js' => Yii::app()->baseUrl . '/js/jquery-1.11.1.min.js',
);

$cs->registerCoreScript("jquery");
$cs->registerScriptFile(Yii::app()->baseUrl . "/js/init.js");
$cs->registerScriptFile(Yii::app()->baseUrl . "/js/bootstrap.min.js");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

            <title><?php echo CHtml::encode($this->pageTitle); ?></title>

            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

            <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
            <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>

            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie10-viewport-bug-workaround.js"></script>

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->


    </head>

    <body>

            <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/" class="navbar-brand">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" class="logoImg" alt="<?php echo CHtml::encode(Yii::app()->name); ?>"/>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'Download', 'url' => array('/site/download')),
                                array('label' => 'FAQ', 'url' => array('/site/page', 'view' => 'faq')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                            ),
                            'htmlOptions' => array(
                                'class' => 'nav navbar-nav navbar-right navbar-collapse collapse',
                            ),
                            'encodeLabel' => false,
                        ));
                        ?>
                    </div><!--/.navbar-collapse -->
                </div>
            </div>


        <div id="page">
            <section id="home" data-type="background" data-speed="6">

                <div class="container">
                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                        ));
                        ?><!-- breadcrumbs -->
                    <?php endif ?>
                    <?php echo $content; ?>
                </div>
            </section>
        </div><!-- page -->

        <div id="footer">
            <div class="container">
                <div class="footerText">
                    &copy; <?php echo date('Y'); ?> Jijichat
                </div>

                <!--<div class="pull-right">-->
                <!--Made in Kenya-->
                <!--</div>-->
            </div>
        </div><!-- footer -->

    </body>
</html>
