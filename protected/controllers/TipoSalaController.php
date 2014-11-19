<?php

class TipoSalaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModelTipoSala($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$modelTipoSala=new TipoSala;
        $modelCosto = new HistorialCosto;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TipoSala'],$_POST['HistorialCosto']))
		{
			$modelTipoSala->attributes=$_POST['TipoSala'];
            $modelCosto->attributes=$_POST['HistorialCosto'];
			if($modelTipoSala->validate()&&$modelCosto->validate()){
                $modelTipoSala->save();
                $modelCosto->id_servicio=$modelTipoSala->id_servicio;
                $modelCosto->tipo_servicio=$modelTipoSala->tipo_servicio;
                $modelCosto->save();
                $this->redirect(array('view','id'=>$modelTipoSala->id_servicio));
            }

		}

		$this->render('create',array(
			'modelTipoSala'=>$modelTipoSala,
            'modelCosto'=>$modelCosto,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$modelTipoSala=$this->loadModelTipoSala($id);
        $modelCosto=$this->loadModelCosto($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TipoSala'],$_POST['HistorialCosto']))
		{
			$modelTipoSala->attributes=$_POST['TipoSala'];
            $modelTipoSala->fecha_modificacion_servicio=date('d-m-Y');
            $modelCosto->attributes=$_POST['HistorialCosto'];
			if($modelTipoSala->validate()&&$modelCosto->validate()){
                $modelTipoSala->save();
                $modelCosto->save();
                $this->redirect(array('view','id'=>$modelTipoSala->id_servicio));
            }

		}

		$this->render('update',array(
			'modelTipoSala'=>$modelTipoSala,
            'modelCosto'=>$modelCosto,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModelTipoSala($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TipoSala');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TipoSala('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TipoSala']))
			$model->attributes=$_GET['TipoSala'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TipoSala the loaded model
	 * @throws CHttpException
	 */
	public function loadModelTipoSala($id)
	{
		$model=TipoSala::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    public function loadModelCosto($id)
    {
        $criterio=new CDbCriteria;
        $criterio->addCondition('fecha_fin is NULL');
        $criterio->addCondition('id_servicio='.$id);
        $criterio->compare('tipo_servicio','sala');
        $model=HistorialCosto::model()->find($criterio);

        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
	/**
	 * Performs the AJAX validation.
	 * @param TipoSala $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tipo-sala-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
