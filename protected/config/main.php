<?php
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'timeZone'=>'America/La_Paz',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SICCSAP',
    'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.cruge.components.*',
        'application.modules.cruge.extensions.crugemailer.*',
	),

	'modules'=>array(

    'importcsv'=>array(
    'path'=>'C:/wamp/www/SICCSAPSRL/archivos/', // path to folder for saving csv file and file with import params
    ),

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
            'generatorPaths'=>array(
                'bootstrap.gii',
            ),
   		),

        'cruge'=>array(
            'tableprefix'=>'cruge_',

            // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
            //
            // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
            // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
            //
            'availableAuthMethods'=>array('default'),

            'availableAuthModes'=>array('username','email'),

            // url base para los links de activacion de cuenta de usuario
            'baseUrl'=>'http://coco.com/',

            // NO OLVIDES PONER EN FALSE TRAS INSTALAR
            'debug'=>true,
            'rbacSetupEnabled'=>true,
            'allowUserAlways'=>true,

            // MIENTRAS INSTALAS..PONLO EN: false
            // lee mas abajo respecto a 'Encriptando las claves'
            //
            'useEncryptedPassword' => false,

            // Algoritmo de la función hash que deseas usar
            // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
            'hash' => 'md5',

            // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
            // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
            //  lee en la wiki acerca de:
            //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
            //
            // ejemplo:
            //		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
            //		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
            //
            'afterLoginUrl'=>null,
            'afterLogoutUrl'=>null,
            'afterSessionExpiredUrl'=>null,
            // manejo del layout con cruge.
            //
            'loginLayout'=>'//layouts/vistaLogin',
            'registrationLayout'=>'//layouts/column2',
            'activateAccountLayout'=>'//layouts/column2',
            'editProfileLayout'=>'//layouts/column2',
            // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
            // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
            // requerirá de un portlet para desplegar un menu con las opciones de administrador.
            //
            'generalUserManagementLayout'=>'ui',
            //'loginLayoutPropio'=>'//layouts/vistaLogin',

            // permite indicar un array con los nombres de campos personalizados,
            // incluyendo username y/o email para personalizar la respuesta de una consulta a:
            // $usuario->getUserDescription();
            'userDescriptionFieldsArray'=>array('email'),

        ),
	),

	// application components
	'components'=>array(
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),
        'user'=>array(
            'allowAutoLogin'=>true,
            'class' => 'application.modules.cruge.components.CrugeWebUser',
            'loginUrl' => array('/cruge/ui/login'),
        ),
        'authManager' => array(
            'class' => 'application.modules.cruge.components.CrugeAuthManager',
        ),
        'crugemailer'=>array(
            'class' => 'application.modules.cruge.components.CrugeMailer',
            'mailfrom' => 'email-desde-donde-quieres-enviar-los-mensajes@xxxx.com',
            'subjectprefix' => 'Tu Encabezado del asunto - ',
            'debug' => true,
        ),
        'format' => array(
            'datetimeFormat'=>"d M, Y h:m:s a",
        ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
        // uncomment the following to use a SQLite or  MySQL database
        /*
        'db'=>array(
            'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
        ),

        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        */
        'db'=>array(
            'connectionString' => 'pgsql:host=localhost;port=5432;dbname= siccsap',
            'username' => 'postgres',
            'password' => 'root',
            'charset' => 'utf8',
        ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);