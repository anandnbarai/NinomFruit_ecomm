<?php

class model
{
    public $connection = "";

    public function __construct()
    {
        session_start();

        //! database connectivity
        $con = $this->connection = mysqli_connect('localhost', 'root', '', 'ninomdb');

        if ($con) {
            // echo "<h5>Connection Established Successfully.</h5>";
        } else {
            die(mysqli_error($con));
        }
    }

    //! function to regiter user and insert data into Database
    public function register($table, $data)
    {
        //* Convert Array into String
        $column = array_keys($data);
        $column1 = implode(",", $column);

        $value = array_values($data);
        $value1 = implode("','", $value);

        $insert = "insert into $table($column1) values('$value1')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }

    //! function for login
    public function login($table, $email, $password)
    {
        $select = "select * from $table where email='$email' and password='$password'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $num_rows = mysqli_num_rows($exe);
        if ($num_rows == 1) {
            $_SESSION["user_id"] = $fetch["user_id"];
            $_SESSION["email"] = $fetch["email"];
            $_SESSION["name"] = $fetch["name"];
            return true;
        } else {
            return false;
        }
    }

    //! function for Logout
    public function logout()
    {
        unset($_SESSION["email"]);
        unset($_SESSION["name"]);
        session_destroy();
        return true;
    }

}
?>