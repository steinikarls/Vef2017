<?php  
namespace Mini\Controller;

use Mini\Model\Login;

class LoginController
{
    public function index()
    {
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/login.php';
        require APP . 'view/_templates/footer.php';     
    }
    
    public function loginRegister()
    {
        if (isset($_POST["register"]))
        {
            $login = new Login();
            $loginUser = $login->addLogin($_POST["name"],$_POST["email"],$_POST["password"]);
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/login.php';
        require APP . 'view/_templates/footer.php';   

    }
    
    public function login()
    {
        if (isset($_POST["login"]))
        {
            $login = new Login();
            $emailCheck = $_POST["email"];
            $passwordCheck = $_POST["password"];

            $loginUser = $login->checkLogin($emailCheck,$passwordCheck);

            foreach ($loginUser as $key => $value) 
            {
                $email =  $value->email;
                $password = $value->password;
                $name = $value->name;
            }         
            /*if (empty($email)||empty($password)) {
                $email = "noemail";
                $password = "nopassword";

            }*/
            if ($emailCheck == $email && 
            $passwordCheck == $password)
            {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $loginImage = $login->getImage($emailCheck);
                
                require APP . 'view/_templates/header.php';
                require APP . 'view/login/admin.php';
                require APP . 'view/_templates/footer.php';  
            }
            else
            {
                header('location: ' . URL . 'login/index');
            }  
        }
        else
        {
            header('location: ' . URL . 'login/index');
        }       
    }
        
        
    public function addImage()
    {
        if (isset($_POST["login"]))
        {
            $login = new Login();
            $emailCheck = $_POST["email"];
            $passwordCheck = $_POST["password"];
            $addImage = $login->addImage($_POST["myndaheiti"],$_POST["link"],$emailCheck);
            $loginUser = $login->checkLogin($emailCheck,$passwordCheck);

            foreach ($loginUser as $key => $value) 
            {
                $email =  $value->email;
                $password = $value->password;
                $name = $value->name;
            }         
            /*if (empty($email)||empty($password)) {
                $email = "noemail";
                $password = "nopassword";

            }*/
            if ($emailCheck == $email && 
            $passwordCheck == $password)
            {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $loginImage = $login->getImage($emailCheck);
                
                require APP . 'view/_templates/header.php';
                require APP . 'view/login/admin.php';
                require APP . 'view/_templates/footer.php';  
            }
            else
            {
                header('location: ' . URL . 'login/index');
            }  
        }
        else
        {
            header('location: ' . URL . 'login/index');
        }       

    }
    public function edidUser()
    {
        if (isset($_POST["login"]))
        {
            $login = new Login();    
            $emailCheck = $_POST["email"];
            $passwordCheck = $_POST["password"];
            $addImage = $login->updateUser($_POST["newname"],$_POST["name"]);
            $loginUser = $login->checkLogin($emailCheck,$passwordCheck);

            foreach ($loginUser as $key => $value) 
            {
                $email =  $value->email;
                $password = $value->password;
                $name = $value->name;
            }         
            /*if (empty($email)||empty($password)) {
                $email = "noemail";
                $password = "nopassword";

            }*/
            if ($emailCheck == $email && 
            $passwordCheck == $password)
            {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $loginImage = $login->getImage($emailCheck);
                
                require APP . 'view/_templates/header.php';
                require APP . 'view/login/admin.php';
                require APP . 'view/_templates/footer.php';  
            }
            else
            {
                header('location: ' . URL . 'login/index');
            }  
        }
        else
        {
            header('location: ' . URL . 'login/index');
        }       







        

    }
        public function deleteImage()
        {
            $login = new Login();
            $deleteImage = $_GET["myndaheiti"];
            $addImage = $login->deleteImage($deleteImage);
        if (isset($_POST["login"]))
        {
            
            
            $emailCheck = $_POST["email"];
            $passwordCheck = $_POST["password"];

            $loginUser = $login->checkLogin($emailCheck,$passwordCheck);

            foreach ($loginUser as $key => $value) 
            {
                $email =  $value->email;
                $password = $value->password;
                $name = $value->name;
            }         
            /*if (empty($email)||empty($password)) {
                $email = "noemail";
                $password = "nopassword";

            }*/
            if ($emailCheck == $email && 
            $passwordCheck == $password)
            {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $loginImage = $login->getImage($emailCheck);
                
                require APP . 'view/_templates/header.php';
                require APP . 'view/login/admin.php';
                require APP . 'view/_templates/footer.php';  
            }
            else
            {
                header('location: ' . URL . 'login/index');
            }  
        }
        else
        {
            header('location: ' . URL . 'login/index');
        }         
    }
}
    ?>
    