<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7771244293aeaa3ac9a956459d194ba
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\Backend' => __DIR__ . '/../..' . '/App/Controller/Backend.php',
        'App\\Controller\\Frontend' => __DIR__ . '/../..' . '/App/Controller/Frontend.php',
        'App\\Model\\AuthManager' => __DIR__ . '/../..' . '/App/Model/AuthManager.php',
        'App\\Model\\Exception' => __DIR__ . '/../..' . '/App/Model/Exception.php',
        'App\\Model\\JobManager' => __DIR__ . '/../..' . '/App/Model/JobManager.php',
        'App\\Model\\Manager' => __DIR__ . '/../..' . '/App/Model/Manager.php',
        'App\\Model\\ProjectManager' => __DIR__ . '/../..' . '/App/Model/ProjectManager.php',
        'App\\Model\\Recaptcha' => __DIR__ . '/../..' . '/App/Model/Recaptcha.php',
        'App\\Model\\SkillManager' => __DIR__ . '/../..' . '/App/Model/SkillManager.php',
        'App\\Model\\TrainingManager' => __DIR__ . '/../..' . '/App/Model/TrainingManager.php',
        'App\\Model\\UserManager' => __DIR__ . '/../..' . '/App/Model/UserManager.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7771244293aeaa3ac9a956459d194ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7771244293aeaa3ac9a956459d194ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7771244293aeaa3ac9a956459d194ba::$classMap;

        }, null, ClassLoader::class);
    }
}
