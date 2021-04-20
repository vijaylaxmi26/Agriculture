 <?php
//the subject
$sub = "Your subject";
//the message
$msg = "Your message";
//recipient email here
$rec = "vijaylaxmi262001@gmail.com";
//send email
if(mail($rec,$sub,$msg)){
    echo "succes";
}
?> 