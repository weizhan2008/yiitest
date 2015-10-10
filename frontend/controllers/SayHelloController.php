<?php
	namespace frontend\controllers;
	use yii\web\Controller;

	class SayHelloController extends Controller
	{
		// ...其它代码...

		public function actionHelloWorld($message = 'Hello')
		{
			return $this->render('hello-world', ['message' => $message]);
		}
	}