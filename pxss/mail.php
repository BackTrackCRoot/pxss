<?php
require "PHPMailer/class.phpmailer.php";
function smtp_mail ( $sendto_email, $subject, $body) {
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.163.com"; // SMTP servers
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "admin@i0day.com"; // SMTP username ע�⣺��ͨ�ʼ���֤����Ҫ�� @����
$mail->Password = "123456"; // SMTP password

$mail->From = "admin@i0day"; // ����������
$mail->FromName = "Pxss"; // ������

$mail->CharSet = "UTF8"; // ����ָ���ַ�����
$mail->Encoding = "base64";

$mail->AddAddress($sendto_email,"username"); // �ռ������������
//$mail->AddReplyTo("yourmail@jbxue.com","jbxue.com");

//$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
$mail->IsHTML(true); // send as HTML
// �ʼ�����
$mail->Subject =$subject;
// �ʼ�����
$mail->Body = $body;

$mail->AltBody ="text/html";
$mail->Send();
    }

// ����˵��(���͵�, �ʼ�����, �ʼ�����, ������Ϣ, �û���)


?>