<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actionList(){
			//used in for loop
			$dep_num = Department::model()->count();
			//array to store all the dictionaries.
			$arr = array();
			for ($x = 1; $x <= $dep_num; $x++) {
				$users=User::model()->with(array(
				    'userDepartments'=>array(
				        // we don't want to select dept
				        'select'=>false,
				        // but want to get only users in departmant group x
				        'condition'=>'userDepartments.dept_id='.$x
				    )
				))->together()->findAll();
				$dep_name = Department::model()->findbyPk($x)['dept_name'];
				$des = Department::model()->findbyPk($x)['dept_description'];
				//temp var stores all the list of users in a group
				$temp = array();
				foreach ($users as $value) {
					array_push($temp, array("name"=>$value['user_name']));
				}
				array_push($arr, array("dept_name" => $dep_name, "dept_des" => $des, "users" => $temp));
				//array_push($arr, array("dept_name" => $dep_name,  "users" => $temp));
			}
			
			//DATA STRUCTURE : {department:"cs", department description :"blahblabhlahb" ,users: ["username"]}
			echo CJSON::encode($arr);

	}

	public function actionCreate(){

		$dept = new Department;
		$dept->dept_name=$_POST['name'];
		$dept->dept_description=$_POST['description'];
		$dept->save();

	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}