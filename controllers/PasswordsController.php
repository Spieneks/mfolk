<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Passwords;
use app\models\PasswordsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasswordsController implements the CRUD actions for Passwords model.
 */
class PasswordsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
		'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'actions' => ['index'],
                    'allow' => true,
                    'roles' => ['admin'],
                ],
				[
                    'actions' => ['create'],
                    'allow' => true,
                    'roles' => ['admin'],
                ],
            ],
        ],
		
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
					'update' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Passwords models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PasswordsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	

    /**
     * Displays a single Passwords model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Passwords model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Passwords();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Passwords model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Passwords model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Passwords model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Passwords the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Passwords::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	 public function actionRole()
    {
		/*$permit = Yii::$app->authManager->createPermission('canAdmin');
		$permit->description = 'Право входа в админку';
		Yii::$app->authManager->add($permit);*/
		
		/*$role = Yii::$app->authManager->getRole('admin');
		$permit = Yii::$app->authManager->getPermission('canAdmin');
		Yii::$app->authManager->addChild($role, $permit);*/
		
		/*$userRole = Yii::$app->authManager->getRole('admin');
		Yii::$app->authManager->assign($userRole, 2);*/
		
		return 1212121;
    }
}
