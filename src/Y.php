<?php

namespace cornernote\shortcuts;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * Class Y
 * @package cornernote\shortcuts
 */
class Y
{
    /**
     * @return \yii\console\Application|\yii\web\Application
     */
    static public function app()
    {
        return Yii::$app;
    }

    /**
     * @return mixed|\yii\web\User
     */
    static public function user()
    {
        return Yii::$app->getUser();
    }

    /**
     * @return \yii\db\Connection
     */
    static public function db()
    {
        return Yii::$app->getDb();
    }

    /**
     * @return \yii\caching\Cache
     */
    static public function cache()
    {
        return Yii::$app->getCache();
    }

    /**
     * @return \yii\console\Request|\yii\web\Request
     */
    static public function request()
    {
        return Yii::$app->getRequest();
    }

    /**
     * @param $name
     * @return null|\yii\base\Module
     */
    static public function module($name)
    {
        return Yii::$app->getModule($name);
    }

    /**
     * @param $name
     * @return null|object
     */
    static public function component($name)
    {
        return Yii::$app->get($name);
    }

    /**
     * @return \yii\i18n\Formatter
     */
    static public function formatter()
    {
        return Yii::$app->formatter;
    }

    /**
     * @return \yii\console\Controller|\yii\web\Controller
     */
    static public function controller()
    {
        return Yii::$app->controller;
    }

    /**
     * @return \yii\base\View|\yii\web\View
     */
    static public function view()
    {
        return Yii::$app->getView();
    }

    /**
     * @return \yii\web\Session
     */
    static public function session()
    {
        return Yii::$app->getSession();
    }

    /**
     * Returns the Yii::$app->params variable value or $defaultValue if the Yii::$app->params variable does not exist
     *
     * @param string $name the param variable name (could be used dot delimiter for nested variable)
     * Example: variable name 'Post.post_text' will return value at Yii::$app->params['Post']['post_text']
     * @param mixed $defaultValue the default value to be returned when the Yii::$app->params variable does not exist
     * @return mixed
     */
    static public function param($name, $defaultValue = null)
    {
        return ArrayHelper::getValue(Yii::$app->params, $name, $defaultValue);
    }

    /**
     * Returns the $_GET variable value or $defaultValue if the $_GET variable does not exist
     *
     * @param string $name the $_GET variable name (could be used dot delimiter for nested variable)
     * Example: variable name 'Post.post_text' will return value at $_GET['Post']['post_text']
     * @param mixed $defaultValue the default value to be returned when the $_GET variable does not exist
     * @return mixed
     */
    public static function GET($name, $defaultValue = null)
    {
        return ArrayHelper::getValue($_GET, $name, $defaultValue);
    }

    /**
     * Returns the $_POST variable value or $defaultValue if the $_POST variable does not exist
     *
     * @param string $name the $_POST variable name (could be used dot delimiter for nested variable)
     * Example: variable name 'Post.post_text' will return value at $_POST['Post']['post_text']
     * @param mixed $defaultValue the default value to be returned when the $_POST variable does not exist
     * @return mixed
     */
    public static function POST($name, $defaultValue = null)
    {
        return ArrayHelper::getValue($_POST, $name, $defaultValue);
    }

    /**
     * Returns the $_FILES variable value or $defaultValue if the $_FILES variable does not exist
     *
     * @param string $name the $_FILES variable name (could be used dot delimiter for nested variable)
     * Example: variable name 'userfile.name' will return value at $_FILES['userfile']['name']
     * @param mixed $defaultValue the default value to be returned when the $_FILES variable does not exist
     * @return mixed
     */
    public static function FILES($name, $defaultValue = null)
    {
        return ArrayHelper::getValue($_FILES, $name, $defaultValue);
    }

    /**
     * Returns the relative URL for the application
     *
     * @param bool $absolute whether to return an absolute URL. Defaults to false, meaning returning a relative one (@since 1.1.0)
     * @return string
     */
    public static function baseUrl($absolute = false)
    {
        return Yii::$app->request->getBaseUrl($absolute);
    }

}


