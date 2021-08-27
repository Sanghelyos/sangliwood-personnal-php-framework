<?php
namespace App\DefaultApp;

/**
 * Mailer
 */
class Mailer
{
    
    
    /**
     * SendMail
     *
     * @param  string $to
     * @param  string $from
     * @param  string $objet
     * @param  string $message
     * @return void
     */
    public static function SendMail (string $to, string $from, string $objet, string $message) {

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: '. $from . "\r\n";

        mail($to, $objet, $message, $headers);

    }
    
    /**
     * Check_null
     *
     * @param  mixed $var
     * @param  mixed $target
     * @return void
     */
    public static function Check_null($var, $target) {
        foreach ($var as $check) {
            if ($check === NULL) {
                ErrorHandler::Error("Une erreur est survenue !");
                Router::Redirect($target);
            }
        }
    }

}