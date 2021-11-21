# CodeIgniter 4 Application Registration with Tailwind and bootsrap



## after cloning,
### 1. edit the env file to .env

### 2. adjust database configuration
#### database.default.hostname = yourdbhost
#### database.default.database = yourdbname
#### database.default.username = your username
#### database.default.password =  your password
#### database.default.DBDriver = MySQLi
### 3. Configure Email.php 
#### in app/Config/Email.php

    public $SMTPHost = 'yoursmtphost';

    /**
     * SMTP Username
     *
     * @var string
     */
    public $SMTPUser = 'yoursmtpuser';

    /**
     * SMTP Password
     *
     * @var string
     */
    public $SMTPPass = 'yoursmtppass';

    /**
     * SMTP Port
     *
     * @var int
     */
    public $SMTPPort = 'yoursmtport';
### 3. run composer install
### 4. run php spark migrate

