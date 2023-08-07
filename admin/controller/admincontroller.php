<?php
require_once("model/adminmodel.php");
class admincontroller extends adminmodel
{
    public function __construct()
    {
        parent::__construct();
        // admin login logic
        if (isset($_POST['log'])) {
            $em = $_POST["txt_email"];
            $pass = $_POST["txt_password"];
            $chk = $this->adminlogin('admin', $em, $pass);
            if ($chk) {
                echo "<script>
                alert('You are Logged In Successfully')
                window.location='admindashboard';
                </script>";
            } else {
                echo "<script>
                alert('Your Email and Password are Incorrect, Try Again!')
                window.location='./';
                </script>";
            }
        }

        // logout admin logic

        if (isset($_GET['logout-admin'])) {
            $chk = $this->logout();
            if ($chk) {
                echo "<script>
                alert('You are Logged Out Successfully.')
                window.location='./';
                </script>";
            }
        }

        //load views of admin create an routing
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("adminlogin.php");
                    break;

                case '/admindashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("admindashboard.php");
                    require_once("footer.php");
                    break;

                case '/adminaddcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcategory.php");
                    require_once("footer.php");
                    break;

                case '/adminprofile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("adminprofile.php");
                    require_once("footer.php");
                    break;

                case '/faq':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("faq.php");
                    require_once("footer.php");
                    break;

                case '/contact':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}

$obj = new admincontroller;
?>