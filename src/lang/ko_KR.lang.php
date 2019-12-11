<?php

/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Ik-Jun
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: @package_version@
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
    'name' => '한국 - Korean',
    'locale' => array(
        '0' => 'ko_KR.UTF-8',
        '1' => 'ko_KR',
        '2' => 'korean',
    ),
    'locale_tag' => 'ko',
    'locale_dir' => 'ltr',
    'system' => array(
        'title' => 'Server Monitor',
        'install' => 'Install',
        'action' => 'Action',
        'save' => '저장',
        'edit' => '수정',
        'delete' => '삭제',
        'date' => '날짜',
        'message' => '메세지',
        'yes' => '예',
        'no' => '아니오',
        'insert' => '삽입',
        'add_new' => '새계정 추가',
        'update_available' => '새로운 업데이트가 있습니다 ({version}). 다음사이트를 방문 해
 주십시오. <a href="https://github.com/phpservermon/phpservermon/releases/latest"
 target="_blank" rel="noopener">http://www.phpservermonitor.org</a>.',
        'back_to_top' => 'Back to top',
        'go_back' => 'Go back',
        'ok' => 'OK',
        'cancel' => 'Cancel',
        'short_day_format' => '%B %e',
        'long_day_format' => '%B %e, %Y',
        'yesterday_format' => 'Yesterday at %X',
        'other_day_format' => '%A at %X',
        'never' => 'Never',
        'hours_ago' => '%d hours ago',
        'an_hour_ago' => 'about an hour ago',
        'minutes_ago' => '%d minutes ago',
        'a_minute_ago' => 'about a minute ago',
        'seconds_ago' => '%d seconds ago',
        'a_second_ago' => 'a second ago',
        'year' => 'year',
        'years' => 'years',
        'month' => 'month',
        'months' => 'months',
        'day' => 'day',
        'days' => 'days',
        'hour' => 'hour',
        'hours' => 'hours',
        'minute' => 'minute',
        'minutes' => 'minutes',
        'second' => 'second',
        'seconds' => 'seconds',
    ),
    'menu' => array(
        'config' => '설정',
        'server' => '서버목록',
        'server_log' => '로그',
        'server_status' => 'Status',
        'server_update' => '업데이트',
        'user' => '사용자',
        'help' => '도움말',
    ),
    'users' => array(
        'user' => '사용자',
        'name' => '이름',
        'user_name' => 'Username',
        'password' => 'Password',
        'password_repeat' => 'Password repeat',
        'password_leave_blank' => 'Leave blank to keep unchanged',
        'level' => 'Level',
        'level_10' => 'Administrator',
        'level_20' => 'User',
        'level_description' => '<b>Administrators</b> have full access: they can manage servers, users and edit the
 global configuration.<br><b>Users</b> can only view and run the updater for the
 servers that have been assigned to them.',
        'mobile' => '휴대폰',
        'email' => 'Email',
        'pushover' => 'Pushover',
        'pushover_description' => 'Pushover is a service that makes it easy to get real-time notifications. See <a
 href="https://pushover.net/">their website</a> for more info.',
        'pushover_key' => 'Pushover Key',
        'pushover_device' => 'Pushover Device',
        'pushover_device_description' => 'Device name to send the message to. Leave empty to send it to all devices.',
        'delete_title' => 'Delete User',
        'delete_message' => 'Are you sure you want to delete user \'%1\'?',
        'deleted' => 'User deleted.',
        'updated' => '수정되었습니다.',
        'inserted' => '추가되었습니다.',
        'profile' => 'Profile',
        'profile_updated' => 'Your profile has been updated.',
        'error_user_name_bad_length' => 'Usernames must be between 2 and 64 characters.',
        'error_user_name_invalid' => 'It may only contain alphabetic characters (a-z, A-Z), digits (0-9), dots (.) and
 underscores (_).',
        'error_user_name_exists' => 'The given username already exists in the database.',
        'error_user_email_bad_length' => 'Email addresses must be between 5 and 255 characters.',
        'error_user_email_invalid' => 'The email address is invalid.',
        'error_user_level_invalid' => 'The given user level is invalid.',
        'error_user_no_match' => 'The user could not be found in the database.',
        'error_user_password_invalid' => 'The entered password is invalid.',
        'error_user_password_no_match' => 'The entered passwords do not match.',
    ),
    'log' => array(
        'title' => 'Log entries',
        'type' => '속성',
        'status' => '상태',
        'email' => 'email',
        'sms' => 'sms',
        'pushover' => 'Pushover',
        'no_logs' => 'No logs',
        'clear' => 'Clear log',
        'delete_title' => 'Delete log',
        'delete_message' => 'Are you sure you want to delete <b>all</b> logs?',
    ),
    'servers' => array(
        'server' => '서버',
        'status' => 'Status',
        'label' => 'Label',
        'domain' => 'Domain/IP',
        'timeout' => 'Timeout',
        'timeout_description' => 'Number of seconds to wait for the server to respond.',
        'port' => 'Port',
        'type' => 'Type',
        'type_website' => 'Website',
        'type_service' => 'Service',
        'pattern' => 'Search string/regex',
        'pattern_description' => 'If this pattern is not found on the website, the server will be marked offline.
 Regular expressions are allowed.',
        'last_check' => '최근체크',
        'last_online' => '최근접속',
        'last_offline' => 'Last offline',
        'monitoring' => '확인중',
        'no_monitoring' => 'No monitoring',
        'email' => '메일 전송',
        'send_email' => '메일 전송',
        'sms' => 'SMS 전송',
        'send_sms' => 'SMS 전송',
        'pushover' => 'Pushover',
        'users' => 'Users',
        'delete_title' => 'Delete Server',
        'delete_message' => 'Are you sure you want to delete server \'%1\'?',
        'deleted' => 'Server deleted.',
        'updated' => '서버가 수정되었습니다.',
        'inserted' => '서버가 추가되었습니다.',
        'latency' => '응답',
        'latency_max' => 'Latency (maximum)',
        'latency_min' => 'Latency (minimum)',
        'latency_avg' => 'Latency (average)',
        'uptime' => 'Uptime',
        'year' => 'Year',
        'month' => 'Month',
        'week' => 'Week',
        'day' => 'Day',
        'hour' => 'Hour',
        'warning_threshold' => 'Warning threshold',
        'warning_threshold_description' => 'Number of failed checks required before it is marked offline.',
        'chart_last_week' => 'Last week',
        'chart_history' => 'History',
        'chart_day_format' => '%Y-%m-%d',
        'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
        'chart_short_date_format' => '%m/%d %H:%M',
        'chart_short_time_format' => '%H:%M',
        'warning_notifications_disabled_sms' => 'SMS notifications are disabled.',
        'warning_notifications_disabled_email' => 'Email notifications are disabled.',
        'warning_notifications_disabled_pushover' => 'Pushover notifications are disabled.',
        'error_server_no_match' => 'Server not found.',
        'error_server_label_bad_length' => 'The label must be between 1 and 255 characters.',
        'error_server_ip_bad_length' => 'The domain / IP must be between 1 and 255 characters.',
        'error_server_ip_bad_service' => 'The IP address is not valid.',
        'error_server_ip_bad_website' => 'The website URL is not valid.',
        'error_server_type_invalid' => 'The selected server type is invalid.',
        'error_server_warning_threshold_invalid' => 'The warning threshold must be a valid integer greater than 0.',
    ),
    'config' => array(
        'general' => '일반',
        'language' => '언어',
        'show_update' => '매주 업데이트를 확인하시겠습니까?',
        'email_status' => '메일전송 허용',
        'email_from_email' => 'Email 주소',
        'email_from_name' => 'Email 사용자',
        'email_smtp' => 'Enable SMTP',
        'email_smtp_host' => 'SMTP host',
        'email_smtp_port' => 'SMTP port',
        'email_smtp_security' => 'SMTP security',
        'email_smtp_security_none' => 'None',
        'email_smtp_username' => 'SMTP username',
        'email_smtp_password' => 'SMTP password',
        'email_smtp_noauth' => 'Leave blank for no authentication',
        'sms_status' => 'SMS전송 허용',
        'sms_gateway' => '메세지 전송을 위한 게이트웨이 허용',
        'sms_gateway_username' => 'Gateway username',
        'sms_gateway_password' => 'Gateway password',
        'sms_from' => 'Sender\'s phone number',
        'pushover_status' => 'Allow sending Pushover messages',
        'pushover_description' => 'Pushover is a service that makes it easy to get real-time notifications. See <a
 href="https://pushover.net/">their website</a> for more info.',
        'pushover_clone_app' => 'Click here to create your Pushover app',
        'pushover_api_token' => 'Pushover App API Token',
        'pushover_api_token_description' => 'Before you can use Pushover, you need to <a href="%1$s" target="_blank"
 rel="noopener">register an App</a> at their website and enter the App API
 Token here.',
        'alert_type' => '알림을 원하면 다음과 같이 변경하십시오.',
        'alert_type_description' => '<b>상태 변경: </b><br>서버 상태가 변경이되면 알림을
 받습니다. online -> offline -> online.<br><br><b>오프라인:
 </b><br>서버가 첫번째로 오프라인이 되었을 때 알림을
 받습니다. 예를들어, cron이 매 15분이고 오전1시 부터
 오전6시까지 다운되었을때 오전1시에 한번 알림을
 받습니다.<br /><br><b>항상: </b><br>사이트가 다운되었을 때
 매시간 알림을 받습니다.',
        'alert_type_status' => '상태 변경',
        'alert_type_offline' => '오프라인',
        'alert_type_always' => '항상',
        'log_status' => '로그 상태',
        'log_status_description' => '로그상태가 TRUE이면 알림설정이 통과할때마다 이벤트를
 기록합니다.',
        'log_email' => '이메일로 로그를 전송하시겠습니까?',
        'log_sms' => 'SMS로 로그를 전송하시겠습니까?',
        'log_pushover' => 'Log pushover messages sent by the script',
        'updated' => '설정이 수정되었습니다.',
        'tab_email' => 'Email',
        'tab_sms' => 'SMS',
        'tab_pushover' => 'Pushover',
        'settings_email' => 'Email 설정',
        'settings_sms' => 'SMS 설정',
        'settings_pushover' => 'Pushover settings',
        'settings_notification' => '알림 설정',
        'settings_log' => '로그 설정',
        'auto_refresh' => 'Auto-refresh',
        'auto_refresh_description' => '서버페이지를 자동으로 새로고침.<br><span class="small">시간은
 초(sec)로 설정을 하고, 0은 새로고침을 하지 않습니다.</span>',
        'seconds' => 'seconds',
        'test' => 'Test',
        'test_email' => 'An email will be sent to the address specified in your user profile.',
        'test_sms' => 'An SMS will be sent to the phone number specified in your user profile.',
        'test_pushover' => 'A Pushover notification will be sent to the user key/device specified in your user
 profile.',
        'send' => 'Send',
        'test_subject' => 'Test',
        'test_message' => 'Test message',
        'email_sent' => 'Email sent',
        'email_error' => 'Error in email sending',
        'sms_sent' => 'Sms sent',
        'sms_error' => 'Error in sms sending. %s',
        'sms_error_nomobile' => 'Unable to send test SMS: no valid phone number found in your profile.',
        'pushover_sent' => 'Pushover notification sent',
        'pushover_error' => 'An error has occurred while sending the Pushover notification: %s',
        'pushover_error_noapp' => 'Unable to send test notification: no Pushover App API token found in the global
 configuration.',
        'pushover_error_nokey' => 'Unable to send test notification: no Pushover key found in your profile.',
        'log_retention_period' => 'Log retention period',
        'log_retention_period_description' => 'Number of days to keep logs of notifications and archives of server
 uptime. Enter 0 to disable log cleanup.',
        'log_retention_days' => 'days',
    ),
    'notifications' => array(
        'off_sms' => '서버(\'%LABEL%\')가 다운되었습니다. : ip=%IP%, port=%PORT%. Error=%ERROR%',
        'off_email_subject' => '중요: 서버(\'%LABEL%\')가 다운되었습니다.',
        'off_email_body' => '서버 접속을 실패하였습니다.<br><br>Server: %LABEL%<br>IP: %IP%<br>Port:
 %PORT%<br>Error: %ERROR%<br>Date: %DATE%',
        'off_pushover_title' => '서버(\'%LABEL%\')가 다운되었습니다.',
        'off_pushover_message' => '서버 접속을 실패하였습니다.<br><br>Server: %LABEL%<br>IP: %IP%<br>Port:
 %PORT%<br>Error: %ERROR%<br>Date: %DATE%',
        'on_sms' => '서버(\'%LABEL%\') 가동중: ip=%IP%, port=%PORT%, it was down for %LAST_OFFLINE_DURATION%',
        'on_email_subject' => '중요: 서버(\'%LABEL%\')가 가동중입니다.',
        'on_email_body' => '서버(\'%LABEL%\')가 재가동됩니다., it was down for
 %LAST_OFFLINE_DURATION%:<br><br>Server: %LABEL%<br>IP: %IP%<br>Port: %PORT%<br>Date:
 %DATE%',
        'on_pushover_title' => '서버(\'%LABEL%\')가 가동중입니다.',
        'on_pushover_message' => '서버(\'%LABEL%\')가 재가동됩니다., it was down for
 %LAST_OFFLINE_DURATION%:<br><br>Server: %LABEL%<br>IP: %IP%<br>Port: %PORT%<br>Date:
 %DATE%',
    ),
    'login' => array(
        'welcome_usermenu' => 'Welcome, %user_name%',
        'title_sign_in' => 'Please sign in',
        'title_forgot' => 'Forgot your password?',
        'title_reset' => 'Reset your password',
        'submit' => 'Submit',
        'remember_me' => 'Remember me',
        'login' => 'Login',
        'logout' => 'Logout',
        'username' => 'Username',
        'password' => 'Password',
        'password_repeat' => 'Repeat password',
        'password_forgot' => 'Forgot password?',
        'password_reset' => 'Reset password',
        'password_reset_email_subject' => 'Reset your password for PHP Server Monitor',
        'password_reset_email_body' => 'Please use the following link to reset your password. Please note it expires
 in 1 hour.<br><br>%link%',
        'error_user_incorrect' => 'The provided username could not be found.',
        'error_login_incorrect' => 'The information is incorrect.',
        'error_login_passwords_nomatch' => 'The provided passwords do not match.',
        'error_reset_invalid_link' => 'The reset link you provided is invalid.',
        'success_password_forgot' => 'An email has been sent to you with information how to reset your password.',
        'success_password_reset' => 'Your password has been reset successfully. Please login.',
    ),
    'error' => array(
        '401_unauthorized' => 'Unauthorized',
        '401_unauthorized_description' => 'You do not have the privileges to view this page.',
    ),
);
