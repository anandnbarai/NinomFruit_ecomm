<?php

error_reporting(0);

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

    //!Add cart details into database
    public function addtocart($table, $data)
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

    //! function for Change Password
    public function chngepassword($table, $column, $opassword, $npassword, $cpassword, $id)
    {
        // select old  password 
        $id = $_SESSION["user_id"];
        $select = "select password from $table where $column='$id'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $password = $fetch["password"];

        if ($password == $opassword && $npassword == $cpassword) {
            $changepassword = "update $table set password='$npassword' where $column='$id'";
            $exe = mysqli_query($this->connection, $changepassword);
            return true;
        } else {
            return false;
        }

    }

    //! funtion for forgot password
    public function forgotpassword($table, $column, $column1, $email)
    {
        $select = "select $column from $table where $column1='$email'";
        $exe = mysqli_query($this->connection, $select);
        $num_rows = mysqli_num_rows($exe);
        $fetch = mysqli_fetch_array($exe);
        // if($num_rows==1)
        if ($num_rows > 0) {
            $pass = base64_decode($fetch[$column]);
            return $pass;
        } else {
            return false;
        }
    }

    //! function for account delete
    public function deleteaccount($table, $id)
    {
        //key convert array into value or string
        $column = array_keys($id);
        $column1 = implode(",", $column);
        //values convert array into value or string
        $value = array_values($id);
        $value1 = implode("','", $value);

        $delete = "delete from $table where $column1='$value1'";
        $exe = mysqli_query($this->connection, $delete);
        return $exe;

    }

    //! function for select data from database
    public function selectalldata($table)
    {
        $select = "select * from $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;
    }

    //! function for Update user data
    public function updateprofile($table, $column, $name, $email, $mobile, $address, $id)
    {
        $upd = "update $table set name='$name',email='$email',mobile='$mobile',address='$address' where $column='$id'";
        $exe = mysqli_query($this->connection, $upd);
        return $exe;
    }

}
?>