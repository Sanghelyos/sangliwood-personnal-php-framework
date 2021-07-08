<?php
namespace App\DefaultApp;

/**
 * MiscTools
 */
class MiscTools
{

    /**
     * Check_null
     * deprecated
     *
     * @param  mixed $var
     * @param  mixed $target
     * @return void
     */
    public static function Check_null($var, $target) {
        foreach($var as $check){
            if($check === NULL){
                ErrorHandler::Error("Une erreur est survenue !");
                Router::Redirect($target);
            }
        }
    }
    
    /**
     * Img_upload
     *
     * @param  mixed $fileData
     * @param  int $fileSize
     * @param  string $fileLocation
     * @param  string $redirect
     * @return void
     */
    public static function Img_upload($fileData, int $fileSize /* Bytes */, string $fileLocation, string $redirect) {
        

        $target_file = $fileLocation . basename($fileData['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($fileData['tmp_name']);
        if($check == false) {
            ErrorHandler::Error('Le fichier uploadé n\'est pas une image.');
            Router::Redirect($redirect);
        }elseif($fileData['size'] > $fileSize) {
            ErrorHandler::Error("Désolé, votre image ne doit pas faire plus de $fileSize bits.");
            Router::Redirect($redirect);
        }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            ErrorHandler::Error('Le fichier uploadé doit être au format jpg, jpeg ou png.');
            Router::Redirect($redirect);
        }
        elseif(file_exists($target_file)) {
            unlink($target_file);
          }
        move_uploaded_file($fileData['tmp_name'], $target_file);
    }

}