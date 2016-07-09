<?php
include 'connection.php'
$sql="select email1,date1 from new_users where sysdate() - date1>30";

    while($row = $result->fetch_assoc()) {
$to = $row['email'].'@example.com';
$subject = 'Rangde is waiting for you'; 
$random_hash = md5(date('r', time())); 
$headers = "From: webmaster@example.com\r\nReply-To: webmaster@example.com";
$headers .= "\r\nContent-Type: multipart/alternative; boundary=\"PHP-alt-".$random_hash."\""; 
ob_start(); 
$row['date1']=now();}
?>
--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/plain; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

Hello World!!! 
This is simple text email message. 

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/html; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<h2>Hello World!</h2>
<p> <b>Rang De is waiting for you</b>Our vision is to make poverty history in India by reaching out to underserved communities through microcredit. We are striving to do this through a network of committed field partners and social investors, by offering microcredit that has a positive impact on business, education, health and environment of the communities we work with. </p> 

--PHP-alt-<?php echo $random_hash; ?>--
<?
//copy current buffer contents into $message variable and delete current output buffer
$message = ob_get_clean();
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
?>