<?php

require_once("model/model.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        //!Register Page
        try {
            if (isset($_POST["register"])) {

                require_once("PHPMailer.php");
                require_once("Exception.php");
                require_once("SMTP.php");

                $name = $_POST["name"];
                $email = $_POST["email"];
                $number = $_POST["mobile"];
                $pass = base64_encode($_POST["password"]);
                $cpass = base64_encode($_POST["c_password"]);
                $address = $_POST["address"];

                if ($pass == $cpass) {

                    $mail = new PHPMailer(true);
                    $mail->SMTPDebug = false; //?Enable verbose debug output
                    $mail->isSMTP(); //? Send using SMTP
                    $mail->Host = 'smtp.gmail.com'; //?Set the SMTP server to send through
                    $mail->SMTPAuth = true; //?Enable SMTP authentication

                    $mail->Username = 'ab20892@gmail.com'; //*SMTP username, It can be any mail id
                    $mail->Password = ' '; //*SMTP password

                    $mail->SMTPSecure = "TLS"; //?Enable implicit TLS encryption
                    $mail->Port = 587;

                    //Recipients
                    $mail->setFrom('ab20892@gmail.com', 'Thanks to Create an Account');
                    $mail->addAddress($_POST["email"], 'To');

                    $mail->isHTML(true); //Set email format to HTML
                    $mail->Subject = 'Welcome to Ninom';
                    $mail->Body = '<h1 style="text-align:center;">Welcome to Ninom</h1>.<br>
                    <h3>Hello, ' . $name . '</h3><br>Thank You for create an Account with us.<br>Enjoy Shopping with us.';

                    $mail->send();

                    $data = array(
                        "name" => $name,
                        "email" => $email,
                        "password" => $pass,
                        "mobile" => $number,
                        "address" => $address
                    );

                    $chk = $this->register('user', $data);

                    if ($chk) {
                        echo "<script>
                    alert('Your account has been successfully created.')
                    window.location='login';
                    </script>";
                    } else {
                        echo "<script>
                    alert('Something went wrong, Please try again!')
                    window.location='register';
                    </script>";
                    }
                }
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }

        //!User login
        if (isset($_POST["login"])) {

            $email = $_POST["email"];
            $password = base64_encode($_POST["password"]);
            $chk = $this->login('user', $email, $password);

            if ($chk) {
                echo "<script>
                        alert('You are Logged in Successfully.')
                        window.location='./';
                    </script>";

            } else {
                echo "<script>
                        alert('Your Email and Password are Incorect, Try Again!')
                        window.location='login';
                    </script>";
            }
        }
        try {
            //* Contact Page - mail sending when click on send button
            if (isset($_POST["click"])) {

                require_once("PHPMailer.php");
                require_once("Exception.php");
                require_once("SMTP.php");

                $name = $_POST["name"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $message = $_POST["message"];


                $mail = new PHPMailer(true);

                //Server settings
                $mail->SMTPDebug = false; //?Enable verbose debug output
                $mail->isSMTP(); //? Send using SMTP
                $mail->Host = 'smtp.gmail.com'; //?Set the SMTP server to send through
                $mail->SMTPAuth = true; //?Enable SMTP authentication


                $mail->Username = 'ab20892@gmail.com'; //*SMTP username, It can be any mail id
                $mail->Password = ' '; //*SMTP password


                $mail->SMTPSecure = "TLS"; //?Enable implicit TLS encryption
                $mail->Port = 587;
                //*TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'User Inquiry Alert');
                $mail->addAddress('anandnbarai@gmail.com', 'To');


                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'This User is trying to Contact You!!!';
                $mail->Body = '<b>Person Details :</b><br> <b>Name :</b> ' . $name . '<br> <b>Email :</b> ' . $email . '<br> <b>Phone :</b>' . $phone . '<br> <b>Message : ' . $message;


                $mail->send();

                echo "<script>alert('Our executive will contact you soon!')
                    window.location='contact';
                    </script>";
            }

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        //! Logout

        if (isset($_GET["logout"])) {
            $chk = $this->logout();
            if ($chk) {
                echo "<script>
                        alert('You are Logged Out Successfully.')
                        window.location='/';
                    </script>";
            }
        }



        //! Routing
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {

                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("about.php");
                    require_once("fruit.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                case '/about':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;


                case '/fruit':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("fruit.php");
                    require_once("footer.php");
                    break;

                case '/contact':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                case '/register':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;


                case '/login':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/myprofile':
                    require_once("index.php");
                    require_once("sub_header.php");
                    require_once("myprofile.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("404.php");
                    break;
            }
        }

    }
}

$obj = new controller;

?>