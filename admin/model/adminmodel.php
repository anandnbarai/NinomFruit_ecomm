<?php
class adminmodel
{
    public $connection = "";
    public function __construct()
    {
        session_start();
        //database connectivity

        $conn = $this->connection = new mysqli("localhost", "root", "", "ninomdb");
        if ($conn) {
            // echo "<h5>Connection Established Successfully.</h5>";
        } else {
            die(mysqli_error($conn));
        }
    }

    // create a member function for login
    public function adminlogin($table, $em, $pass)
    {
        $select = "select * from $table where email='$em' and password='$pass'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $num_rows = mysqli_num_rows($exe);
        if ($num_rows == 1) {
            // inside fetch always write database table column name 
            $_SESSION['admin_id'] = $fetch['admin_id'];
            $_SESSION['txt_email'] = $fetch['email'];
            return true;
        } else {
            return false;
        }
    }


    // create member function for logout

    public function logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['txt_email']);
        session_destroy();
        return true;
    }
}

?>