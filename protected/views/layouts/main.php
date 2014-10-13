<?php /* @var $this Controller */ ?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />


    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/offcanvas.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.1.min.js" ></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/offcanvas.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>



    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Tareas</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?></a>

        </div>
        <div class="collapse navbar-collapse">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Administrar Usuarios'
                    , 'url'=>Yii::app()->user->ui->userManagementAdminUrl
                    , 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'Login'
                    , 'url'=>Yii::app()->user->ui->loginUrl
                    , 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')'
                    , 'url'=>Yii::app()->user->ui->logoutUrl
                    , 'visible'=>!Yii::app()->user->isGuest),
                ),
                'htmlOptions'=>array('class'=> 'nav navbar-nav'),
            )); ?>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container">
    <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="list-group">
                <a href="#" class="list-group-item active">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
            </div>
        </div><!--/span-->
        <div class="col-xs-12 col-sm-9">
            <p class="pull-left visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Tareas</button>
            </p>
            <br/>
            <?php echo $content;?>
        </div><!--/span-->

    </div><!--/row-->

    <footer>
        <p>&copy; Copyright <?php echo date('Y'); ?>
            <br/>Todos los derechos reservados<br/>
            <?php echo Yii::powered(); ?>
        </p>

    </footer>

</div><!--/.container-->
</body>
</html>
