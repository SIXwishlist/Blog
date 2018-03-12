<?php
class SiteController extends Controller
{
	public function actionIndex()
	{
		$articles = Articles::model()->findall(array('limit' => 5));
		$count = Articles::model()->count();
		$this->render('index', array('articles' => $articles, 'count' => $count));
	}
	
    // login 
    public function actionlogin()
    {
    	$login_error = '';
    	if(Yii::app()->request->getPost('username') && Yii::app()->request->getPost('password'))
    	{
    		 $check = Admin::model()->find('username=:username AND password=:pass', array(':username' => Yii::app()->request->getPost('username'), ':pass' => md5(Yii::app()->request->getPost('password'))));
    		 if(!empty($check))
    		 {
 				 Yii::app()->session['admin_login'] = 1;
 				 $this->redirect(array('site/index'));
    		 }
    		 else
    		 	$login_error = "Invalid username and password.";
    	}
    	$this->render('login', array('login_error' => $login_error));
    }
    // logout
    public function actionlogout()
    {
    	Yii::app()->session['admin_login'] = '';
    	$this->redirect(array('site/login'));
    }
	
}