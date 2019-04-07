
<?php
class MySmtpMailTransport extends Swift_SmtpTransport {
    function __construct() {
        parent::__construct('smtp.example.com', 587, 'tls');
        $this->setUsername('user@example.com');
        $this->setPassword('your password here');
    }
}
