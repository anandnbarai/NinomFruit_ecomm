<?php
require_once("model/adminmodel.php");
class admincontroller extends adminmodel
{
    public function __construct()
    {
        parent::__construct();
        //! admin login logic
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

        //! insert about section data into batabase
        if (isset($_POST['addabout'])) {

            $tmp_name = $_FILES["about_image"]["tmp_name"];
            $path = "../uploads/" . $_FILES["about_image"]["name"];
            move_uploaded_file($tmp_name, $path);
            $title = $_POST["about_title"];
            $desctiption = $_POST["description"];
            $desctiption1 = $_POST["description1"];

            $data = array(
                "title" => $title,
                "description" => $desctiption,
                "description1" => $desctiption1,
                "image" => $path
            );

            $chk = $this->insertdata('about', $data);

            if ($chk) {
                echo "<script>
                        alert('About Section data uploaded succefully')
                        window.location='manageabout';
            </script>";
            } else {
                echo "<script>
                        alert('Something went wrong, Please try again!')
                        window.location='addabout';
            </script>";
            }
        }

        //!fetch data from about table
        $about = $this->selectalldata('about');

        //! update customer profile data
        if (isset($_POST["updateabout"])) {
            $id = $_SESSION["user_id"];
            $tmp_name = $_FILES["about_image"]["tmp_name"];
            $path = "../uploads/" . $_FILES["about_image"]["name"];
            move_uploaded_file($tmp_name, $path);
            $title = $_POST["about_title"];
            $desctiption = $_POST["description"];
            $desctiption1 = $_POST["description1"];

            $check = $this->updateabout('about', 'id', $title, $desctiption, $desctiption1, $path, $id);

            if ($check) {
                echo "<script>
                        alert('Your profile Updated successfully')
                        window.location='manageabout';
                    </script>";
            }
        }

        //! logout admin logic
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

                case '/addabout':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addabout.php");
                    require_once("footer.php");
                    break;

                case '/manageabout':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("manageabout.php");
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