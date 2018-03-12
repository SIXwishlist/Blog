<?php
class ArticlesController extends Controller
{
	// Add New Articles
    public function actionadd()
    { 
    	if($_POST)
		{        
		    $model = new validation;      
			// Getting data
			$data = array('name' => Yii::app()->request->getPost('name'),
						  'email' => Yii::app()->request->getPost('email'), 
						  'address' => Yii::app()->request->getPost('address'),
						  'text' => Yii::app()->request->getPost('text')
						  );
			$model->attributes = $data;
			if($model->validate())
			{
				$articles = new Articles;
				$articles->attributes = $data;
				$articles->save(false);
				Yii::app()->session['success'] = 'Article Added Successfully';
				
				$this->redirect(array('articles/view'));
			}
			else
			{
				$validation_error = $model->errors;
				$this->render('add', array(
									'validation_error' => $validation_error,
									'prev_values' => $data,
									));
			}
		}  
		else
			$this->render('add');
    }
    // Update  Articles
    public function actionedit($id)
    { 
    	if($_POST)
		{        
		    $model = new validation;      
			// Getting data
			$data = array('name' => Yii::app()->request->getPost('name'),
						  'email' => Yii::app()->request->getPost('email'), 
						  'address' => Yii::app()->request->getPost('address'),
						  'text' => Yii::app()->request->getPost('text')
						  );
			$model->attributes = $data;
			if($model->validate())
			{
				Articles::model()->updateall($data, 'article_id=:article_id', array(':article_id' => base64_decode($id)));
				Yii::app()->session['success'] = 'Article Updated Successfully';
				$this->redirect(array('articles/view'));
			}
			else
			{
				$validation_error = $model->errors;
				$this->render('add', array(
									'validation_error' => $validation_error,
									'prev_values' => $data,
									));
			}
		}  
		else
		{
			$article = Articles::model()->find('article_id=:article_id', array(':article_id' => base64_decode($id)));
			$this->render('add' , array('article' => $article));
		}
    }
	public function actionView()
	{
		$articles = Articles::model()->findall(array('order' => 'article_id DESC'));
		$this->render('view', array('articles' => $articles));
	}
	// Deleta articles
	public function actiondelete($id)
	{
		if(isset($id) && $id != '')
		{
			Articles::model()->deleteall('article_id=:article_id', array(':article_id' => base64_decode($id)));
			Yii::app()->session['success'] = 'Article deleted Successfully';
			$this->redirect(array('articles/view'));
		}
	}

}