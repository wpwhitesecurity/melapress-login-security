<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'PPMWP\\Admin\\PPM_WP_Admin' => $baseDir . '/admin/class-ppm-wp-admin.php',
    'PPMWP\\Admin\\PPM_WP_MS_Admin' => $baseDir . '/admin/class-ppm-wp-ms-admin.php',
    'PPMWP\\Admin\\Upgrade_Notice' => $baseDir . '/admin/classes/class-upgrade-notices.php',
    'PPMWP\\Ajax\\AjaxInterface' => $baseDir . '/app/ajax/class-ajaxinterface.php',
    'PPMWP\\Ajax\\UnlockInactiveUser' => $baseDir . '/app/modules/failed-logins/class-unlock-inactive-user-ajax.php',
    'PPMWP\\Crons\\CronInterface' => $baseDir . '/app/crons/class-croninterface.php',
    'PPMWP\\Crons\\SummaryEmail' => $baseDir . '/app/crons/class-summaryemail.php',
    'PPMWP\\Helpers\\HideAdminNotices' => $baseDir . '/app/helpers/class-hide-admin-notices.php',
    'PPMWP\\Helpers\\OptionsHelper' => $baseDir . '/app/helpers/class-optionshelper.php',
    'PPMWP\\Helpers\\SettingsImporter' => $baseDir . '/app/helpers/class-settings-importer.php',
    'PPMWP\\Helpers\\UserImporter' => $baseDir . '/app/helpers/class-user-importer.php',
    'PPMWP\\MLS_Login_Page_Control' => $baseDir . '/app/login-page-control/class-login-page-control.php',
    'PPMWP\\PPM_Apply_Timestamp_For_Users_Process' => $baseDir . '/app/helpers/class-ppm-apply-timestamp-for-users-process.php',
    'PPMWP\\PPM_EmailStrings' => $baseDir . '/app/helpers/class-ppm-emailstrings.php',
    'PPMWP\\PPM_Failed_Logins' => $baseDir . '/app/modules/failed-logins/class-ppm-failed-logins.php',
    'PPMWP\\PPM_MB_String_Helper' => $baseDir . '/app/helpers/class-ppm-mb-string-helper.php',
    'PPMWP\\PPM_New_User_Register' => $baseDir . '/app/enforcers/class-new-user.php',
    'PPMWP\\PPM_Reset_User_PW_Process' => $baseDir . '/app/enforcers/class-ppm-wp-reset-bg-process.php',
    'PPMWP\\PPM_Shortcodes' => $baseDir . '/app/enforcers/class-shortcodes.php',
    'PPMWP\\PPM_User_Profile' => $baseDir . '/app/enforcers/class-user-profile.php',
    'PPMWP\\PPM_WP_Expire' => $baseDir . '/app/enforcers/class-ppm-wp-expire.php',
    'PPMWP\\PPM_WP_Forms' => $baseDir . '/app/enforcers/class-ppm-wp-forms.php',
    'PPMWP\\PPM_WP_History' => $baseDir . '/app/helpers/class-ppm-wp-history.php',
    'PPMWP\\PPM_WP_Msgs' => $baseDir . '/app/policies/class-ppm-wp-msgs.php',
    'PPMWP\\PPM_WP_Options' => $baseDir . '/app/policies/class-ppm-wp-options.php',
    'PPMWP\\PPM_WP_Password_Check' => $baseDir . '/app/enforcers/class-ppm-wp-password-check.php',
    'PPMWP\\PPM_WP_Password_Gen' => $baseDir . '/app/helpers/class-ppm-wp-password-gen.php',
    'PPMWP\\PPM_WP_Pointer' => $baseDir . '/app/helpers/class-pointer.php',
    'PPMWP\\PPM_WP_Regex' => $baseDir . '/app/policies/class-ppm-wp-regex.php',
    'PPMWP\\PPM_WP_Reset' => $baseDir . '/app/enforcers/class-ppm-wp-reset.php',
    'PPMWP\\RestrictLogins' => $baseDir . '/app/modules/restrict-logins/class-restrict-logins.php',
    'PPMWP\\Utilities\\ValidatorFactory' => $baseDir . '/app/Utilities/class-validatorfactory.php',
    'PPMWP\\Validators\\Validator' => $baseDir . '/app/Validators/class-validator.php',
    'PPMWP\\Views\\Tables\\InactiveUsersTable' => $baseDir . '/app/modules/failed-logins/InactiveUsersTable.php',
    'PPMWP\\WP_Admin_Pointer' => $baseDir . '/app/helpers/class-pointer.php',
    'PPM_WP' => $baseDir . '/app/class-ppm-wp.php',
    'WP_Async_Request' => $vendorDir . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
    'WP_Background_Process' => $vendorDir . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
);
