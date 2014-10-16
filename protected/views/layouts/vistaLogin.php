<html>
    <head>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">

        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/skel.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl;?>/js/init.js"></script>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/font-awesome/css/font-awesome.min.css">


    </head>
    <body >

        <section id="header" class="dark">
            <header>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logoCSA.png"/>
                <h1>Clinica Santa Ana</h1>
                <p>Sistema de Informacion Clinica y Contable Santa Ana Potosi</p>
            </header>

            <footer>

                <?php echo $content?>

            </footer>
        </section>

        <section id="footer">
            <ul class="icons">
                <li><a href="#" class="fa fa-envelope-o solo" title="Notificaciones"></a></li>
                <li><a href="#" class="fa fa-medkit solo" title="Lista de pacientes"></a></li>
                <li><a href="#" class="fa fa-phone solo" title="Contactos"></a></li>
                <li><a href="#" class="fa fa-briefcase solo" title="Soporte Tecnico"></a></li>
                <li><a href="#" class="fa fa-question solo" title="Ayuda"></a></li>
            </ul>
            <div class="copyright">
                <ul class="menu">
                    <li>&copy; Todos los derechos reservados.</li>
                </ul>
            </div>
        </section>
    </body>
</html>