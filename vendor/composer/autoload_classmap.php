<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'PPMWP\\Admin\\PPM_WP_Admin' => $baseDir . '/admin/class-ppm-wp-admin.php',
    'PPMWP\\Admin\\PPM_WP_MS_Admin' => $baseDir . '/admin/class-ppm-wp-ms-admin.php',
    'PPMWP\\Ajax\\AjaxInterface' => $baseDir . '/app/ajax/class-ajaxinterface.php',
    'PPMWP\\Ajax\\UnlockInactiveUser' => $baseDir . '/app/modules/inactive-users/class-unlock-inactive-user-ajax.php',
    'PPMWP\\Crons\\CronInterface' => $baseDir . '/app/crons/class-croninterface.php',
    'PPMWP\\Crons\\InactiveUsersCheck' => $baseDir . '/app/modules/inactive-users/class-inactive-users-check-cron.php',
    'PPMWP\\Crons\\SummaryEmail' => $baseDir . '/app/crons/class-summaryemail.php',
    'PPMWP\\ExtensionLoader' => $baseDir . '/app/modules/ExtensionLoader.php',
    'PPMWP\\Helpers\\OptionsHelper' => $baseDir . '/app/helpers/class-optionshelper.php',
    'PPMWP\\InactiveUsers' => $baseDir . '/app/modules/inactive-users/class-inactive-users.php',
    'PPMWP\\Utilities\\ValidatorFactory' => $baseDir . '/app/Utilities/class-validatorfactory.php',
    'PPMWP\\Validators\\Validator' => $baseDir . '/app/Validators/class-validator.php',
    'PPMWP\\Views\\Tables\\InactiveUsersTable' => $baseDir . '/app/modules/inactive-users/InactiveUsersTable.php',
    'PPM_Apply_Timestamp_For_Users_Process' => $baseDir . '/app/helpers/class-ppm-apply-timestamp-for-users-process.php',
    'PPM_CheckInactiveUsers_Process' => $baseDir . '/app/modules/inactive-users/class-inactive-users-check-bg-process.php',
    'PPM_EmailStrings' => $baseDir . '/app/helpers/class-ppm-emailstrings.php',
    'PPM_Email_Settings' => $baseDir . '/app/modules/email-settings/class-ppm-email-settings.php',
    'PPM_Failed_Logins' => $baseDir . '/app/modules/failed-logins/class-ppm-failed-logins.php',
    'PPM_MB_String_Helper' => $baseDir . '/app/helpers/class-ppm-mb-string-helper.php',
    'PPM_New_User_Register' => $baseDir . '/app/enforcers/class-new-user.php',
    'PPM_Reset_User_PW_Process' => $baseDir . '/app/enforcers/class-ppm-wp-reset-bg-process.php',
    'PPM_Shortcodes' => $baseDir . '/app/enforcers/class-shortcodes.php',
    'PPM_ThirdParties' => $baseDir . '/app/modules/third-party/class-thirdparties.php',
    'PPM_User_Meta_Upgrade_Process' => $baseDir . '/app/helpers/class-ppm-user-meta-upgrade-process.php',
    'PPM_User_Profile' => $baseDir . '/app/enforcers/class-user-profile.php',
    'PPM_WP' => $baseDir . '/app/class-ppm-wp.php',
    'PPM_WP_Expire' => $baseDir . '/app/enforcers/class-ppm-wp-expire.php',
    'PPM_WP_Forms' => $baseDir . '/app/enforcers/class-ppm-wp-forms.php',
    'PPM_WP_History' => $baseDir . '/app/helpers/class-ppm-wp-history.php',
    'PPM_WP_Msgs' => $baseDir . '/app/policies/class-ppm-wp-msgs.php',
    'PPM_WP_Options' => $baseDir . '/app/policies/class-ppm-wp-options.php',
    'PPM_WP_Password_Check' => $baseDir . '/app/enforcers/class-ppm-wp-password-check.php',
    'PPM_WP_Password_Gen' => $baseDir . '/app/helpers/class-ppm-wp-password-gen.php',
    'PPM_WP_Pointer' => $baseDir . '/app/helpers/class-pointer.php',
    'PPM_WP_Regex' => $baseDir . '/app/policies/class-ppm-wp-regex.php',
    'PPM_WP_Reset' => $baseDir . '/app/enforcers/class-ppm-wp-reset.php',
    'WP_Admin_Pointer' => $baseDir . '/app/helpers/class-pointer.php',
    'WP_Async_Request' => $vendorDir . '/deliciousbrains/wp-background-processing/classes/wp-async-request.php',
    'WP_Background_Process' => $vendorDir . '/deliciousbrains/wp-background-processing/classes/wp-background-process.php',
);