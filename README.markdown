Mailer module for [KohanaPHP](http://kohanaframework.org/) v3.0.x

Uses PHPMailer for sending emails.

Usage Example :

$to = 'example@test.com';
$name = 'no-reply';
$subject = 'Test';
$body = 'Test Body';

//Send email with phpmailer
Kohana_Mailer::send($to, $name, $subject, $body);

