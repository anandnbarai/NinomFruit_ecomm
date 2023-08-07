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
            //! inside fetch always write database table column name 
            $_SESSION['admin_id'] = $fetch['admin_id'];
            $_SESSION['txt_email'] = $fetch['email'];
            return true;
        } else {
            return false;
        }
    }


    //! function to insert data into Database
    public function insertdata($table, $data)
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

    //! function for Update About Section
    public function updateabout($table, $column, $title, $description, $description1, $image, $id)
    {
        $update = "update $table set title='$title', description='$description',description1='$description1', image='$image' 
        where $column='$id'";
        $exe = mysqli_query($this->connection, $update);
        return $exe;
    }

    //! function for logout
    public function logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['txt_email']);
        session_destroy();
        return true;
    }
}

?>