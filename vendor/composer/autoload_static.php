<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7056854bfdcc20ff5b27f1efeb0abc08
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PPMWP\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PPMWP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
            1 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PPMWP\\Admin\\PPM_WP_Admin' => __DIR__ . '/../..' . '/admin/class-ppm-wp-admin.php',
        'PPMWP\\Admin\\PPM_WP_MS_Admin' => __DIR__ . '/../..' . '/admin/class-ppm-wp-ms-admin.php',
        'PPMWP\\Ajax\\AjaxInterface' => __DIR__ . '/../..' . '/app/ajax/class-ajaxinterface.php',
        'PPMWP\\Crons\\CronInterface' => __DIR__ . '/../..' . '/app/crons/class-croninterface.php',
        'PPMWP\\Crons\\SummaryEmail' => __DIR__ . '/../..' . '/app/crons/class-summaryemail.php',
        'PPMWP\\Helpers\\OptionsHelper' => __DIR__ . '/../..' . '/app/helpers/class-optionshelper.php',
        'PPMWP\\Utilities\\ValidatorFactory' => __DIR__ . '/../..' . '/app/Utilities/class-validatorfactory.php',
        'PPMWP\\Validators\\Validator' => __DIR__ . '/../..' . '/app/Validators/class-validator.php',
        'PPM_Apply_Timestamp_For_Users_Process' => __DIR__ . '/../..' . '/app/helpers/class-ppm-apply-timestamp-for-users-process.php',
        'PPM_EmailStrings' => __DIR__ . '/../..' . '/app/helpers/class-ppm-emailstrings.php',
        'PPM_MB_String_Helper' => __DIR__ . '/../..' . '/app/helpers/class-ppm-mb-string-helper.php',
        'PPM_New_User_Register' => __DIR__ . '/../..' . '/app/enforcers/class-new-user.php',
        'PPM_Reset_User_PW_Process' => __DIR__ . '/../..' . '/app/enforcers/class-ppm-wp-reset-bg-process.php',
        'PPM_Shortcodes' => __DIR__ . '/../..' . '/app/enforcers/class-shortcodes.php',
        'PPM_User_Meta_Upgrade_Process' => __DIR__ . '/../..' . '/app/helpers/class-ppm-user-meta-upgrade-process.php',
        'PPM_User_Profile' => __DIR__ . '/../..' . '/app/enforcers/class-user-profile.php',
        'PPM_WP' => __DIR__ . '/../..' . '/app/class-ppm-wp.php',
        'PPM_WP_Expire' => __DIR__ . '/../..' . '/app/enforcers/class-ppm-wp-expire.php',
        'PPM_WP_Forms' => __DIR__ . '/../..' . '/app/enforcers/class-ppm-wp-forms.php',
        'PPM_WP_History' => __DIR__ . '/../..' . '/app/helpers/class-ppm-wp-history.php',
        'PPM_WP_Msgs' => __DIR__ . '/../..' . '/app/policies/class-ppm-wp-msgs.php',
        'PPM_WP_Options' => __DIR__ . '/../..' . '/app/policies/class-ppm-wp-options.php',
        'PPM_WP_Password_Check' => __DIR__ . '/../..' . '/app/enforcers/class-ppm-wp-password-check.php',
        'PPM_WP_Password_Gen' => __DIR__ . '/../..' . '/app/helpers/class-ppm-wp-password-gen.php',
        'PPM_WP_Pointer' => __DIR__ . '/../..' . '/app/helpers/class-pointer.php',
        'PPM_WP_Regex' => __DIR__ . '/../..' . '/app/policies/class-ppm-wp-regex.php',
        'PPM_WP_Reset' => __DIR__ . '/../..' . '/app/enforcers/class-ppm-wp-reset.php',
        'WP_Admin_Pointer' => __DIR__ . '/../..' . '/app/helpers/class-pointer.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7056854bfdcc20ff5b27f1efeb0abc08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7056854bfdcc20ff5b27f1efeb0abc08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7056854bfdcc20ff5b27f1efeb0abc08::$classMap;

        }, null, ClassLoader::class);
    }
}
