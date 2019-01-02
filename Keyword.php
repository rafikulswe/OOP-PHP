<?php   
    class UserController{
        //static function
        public static function generateUserID($accountId){
            $userAccId = $accountId . '_2018';
            return $userAccId;
        }

        //final function
        final public function userName($userName){
            $userName = $userName;
            return $userName;
        }

        public function userDetails(){
            $id = '10';
            $userName = "Rafikul Islam Rafi";
            $data = array(
                'user_id' => self::generateUserID($id),
                'user_name' => self::userName($userName)
            );
            return $data;
        }
    }
    $userController = new UserController;
    $ownValue = $userController->userDetails();
    foreach($ownValue as $ownVal){
        echo 'Own class value is: '. $ownVal.'<br>';
    }

    class AccountController extends UserController{
        public function userNameDetails(){
            $id = '15';
            $userName = "Rafikul Islam";
            $data = array(
                'user_id' => UserController::generateUserID($id),
                'user_name' => UserController::userName($userName)
            );
            return $data;
        }
    }
    $accountController = new AccountController;
    $extendValue = $accountController->userNameDetails();
    foreach($extendValue as $exVal){
        echo '<br>extend value is: '. $exVal;
    }
?>

