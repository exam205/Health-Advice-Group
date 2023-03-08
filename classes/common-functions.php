<?php
class Common {
    public static function goBack(){
        if(isset($_SERVER['HTTP_REFERER'])){
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }else{
            header("Location: index.php"); //If no referer, go back to index.php
            exit;
        }
    }
}
 ?>