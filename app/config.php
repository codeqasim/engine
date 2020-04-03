<?php
class Config {

// *** Datavase Credentials *** //
public static $hostname = "localhost";
public static $username = "booknow_db";
public static $password = "booknow_db";
public static $name = "booknow_db";

// *** API Layer Credentials *** //
public static $currency_key = "6fe22d6838357e898a6cf2c186812a3f";
public static $currency_url = "http://apilayer.net/api/live?access_key=";
// Cron URL domain.com/automation/currencies

// *** Enviroment Settings *** //
public static $global = array( 'ENVIROMENT' => '0', );

// *** SMTP Configurations *** //
public static $email_settings = array(
'protocol' => 'smtp',
'smtp_host' => 'smtp-relay.sendinblue.com',
'smtp_port' => 587,
'smtp_user' => 'info@tecfare.com',
'smtp_pass' => 'za4TLgdybMrIC8OW',
'mailtype' => 'html',
'charset' => 'iso-8859-1',
'crlf' => "\r\n",
'newline' => "\r\n",
'wordwrap' => TRUE,
'smtp_crypto' => 'tls',
);

}