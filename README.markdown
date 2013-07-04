Mailer module for [KohanaPHP](http://kohanaframework.org/) v3.0.x

Uses PHPMailer for sending emails.

# Usage Example :

* config

<pre>
 'smtp' => array(
        'host'      => 'email@smtp.host',
        'port'      => 22, //or any other port
        'username'  => '',
        'password'  => '',
    ),

    // Sender
    'from' => array(
        'mail' => 'no-reply@example.com',
        'name' => 'Example',
    ),
</pre>

* Sending the email

<pre>
$to = 'example@test.com';
$name = 'no-reply';
$subject = 'Test';
$body = 'Test Body';

//Send email with phpmailer
Kohana_Mailer::send($to, $name, $subject, $body);
</pre>



