<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('verify'),
                'users' => array('*'),
            ),
//            array('allow', // allow authenticated user to perform 'create' and 'update' actions
//                'actions' => array('create', 'update'),
//                'users' => array('@'),
//            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array('admin', 'delete'),
//                'users' => array('admin'),
//            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($username) {
        $this->render('view', array(
            'model' => $this->loadModel($username),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new User;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->username));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->username));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('User');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new User('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionUploadProfilePicture() {
        
    }

    public function actionCheckEmail() {
//        echo md5("teddy");
        if (isset($_POST['email']) && (strlen(trim($_POST['email'])) > 0)) {
            $email = $_POST['email'];
            $profile = Profile::model()->findByAttributes(array('email' => $email));
            $jsonResponse = '{"exists":';
            if ($profile === null) {
                $jsonResponse .= 'false';
            } else {
                $jsonResponse .= 'true';
            }
            $jsonResponse .= '}';
            header('Content-type: application/json');
            echo $jsonResponse;
            Yii::app()->end();
        }
    }

    public function actionRegister() {
        if (isset($_POST['i'])) {
            // TO-DO create defensive profile
            $profile = new Profile;
            $profile->attributes = $_POST['i'];
            $jsonResponse = '{"result":"';
            $profile->jid .= '@192.168.43.194';

            $registrationSuccessful = FALSE;

            if ($profile->validate()) {

                $user = new User;
                $user->user_id = $profile->jid;
                $user->account_status = -1;

                if ($user->validate()) {
                    $user->save();
                    $profile->uid = $user->uid;
                    $profile->save();
                    $registrationSuccessful = TRUE;
                } else {
                    var_dump($user->getErrors());
                }
            } else {
                var_dump($profile->getErrors());
            }
            if ($registrationSuccessful == TRUE) {
                $jsonResponse .= self::RESPONSE_SUCCESS;
            } else {
                $jsonResponse .= self::RESPONSE_ERROR;
            }
            $jsonResponse .= '"}';
            header('Content-type: application/json');
            echo $jsonResponse;
            Yii::app()->end();
        }
    }

    // Careful
    public function actionVerify() {
        if (isset($_POST['phone']) && (strlen(trim($_POST['phone'])) > 0) && isset($_POST['pass']) && (strlen(trim($_POST['pass'])) > 0)) {
            $clientVer = $_POST['clientVer'];
            $clientKey = $_POST['clientKey'];
            $phone = $_POST['phone'];
            $serverKey = md5($phone . $clientVer);

            $jsonResponse = '{"result":';

            if ($serverKey === $clientKey) {
                $password = $_POST['pass'];
                $phone = md5($phone);
                $user = User::model()->findByAttributes(array('username' => $phone));

                if ($user == null) {
                    $user = new User();
                    $user->username = $phone;
                }

                $user->encryptedPassword = $password;
                if ($user->save()) {
                    $jsonResponse .= 'true, "u" : "' . $user->username . '@jijichat.co"';
                } else {
                    $jsonResponse .= 'false, "message":"Failed to create account."';
                    Yii::log('Error is ' . json_encode($user->getErrors()), CLogger::LEVEL_ERROR, 'Saving User');
                }
            } else {
                $jsonResponse .= 'false, "message":"Failed to create account."';
            }

            $jsonResponse .= '}';

            header('Content-type: application/json');
            echo $jsonResponse;
            Yii::app()->end();
        }
    }

}
