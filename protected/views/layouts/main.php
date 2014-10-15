<?php /* @var $this Controller */ ?>
<!DOCTYPE html >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/offcanvas.css">

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
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordionOne">
                                    Paciente
                                </a>
                            </h4>
                        </div>

                        <div id="accordionOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <a href="">Nuevo</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-success">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordionTwo">
                                    Medico
                                </a>
                            </h4>
                        </div>

                        <div id="accordionTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="">cita</a>
                            </div>
                        </div>

                    </div>
                </div>
                </div><!--/span-->

            <!--/ contenido -->
            <div class="col-xs-12 col-sm-9 ">
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
