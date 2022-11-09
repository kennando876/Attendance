<?php
    require 'vendor/autoload.php';

    class Sendemail{

        public static function Sendmail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("kennandospence@gmail.com","Kennando Spence");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
           // $email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }

        }
    }
?>