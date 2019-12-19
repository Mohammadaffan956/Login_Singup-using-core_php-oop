<?php
include_once('Connection.php');


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    public function Login($name, $pass)
    {
        if (!empty($name) && !empty($pass)) {
            $st = $this->db->prepare("select * from users where name =? and pass= ?");
            $st->bindParam(1, $name);
            $st->bindParam(2, $pass);
            $st->execute();
            if ($st->rowCount() == 1) {
                echo "User verified, Access granted.";
                $_SESSION['user'] = $name;
                header('Location: Burhani\index.php');
            } else {
//                echo "Incorrect Username or Password";
                echo "<script type='text/javascript'>
                        alert ('Incorrect Username or Password');
                      </script>";
            }

        } else {
            echo "Please enter Username And Password";
        }
    }

    public function SignUp($name, $pass)
    {
        $st = $this->db->prepare("INSERT INTO users (name, pass) VALUES ('" . $name . "', '" . $pass . "')");
        $st->bindParam(1, $name);
        $st->bindParam(2, $pass);
        $st->execute();
        if ($st->rowCount() == 1) {
            header('Location: index.php');
        }
    }
}

?>