<?php
require_once (DB_PATH . 'Connection.php');
require_once (MODEL_PATH . 'User.php');

class UserDAO
{

    private $list;

    function __construct()
    {
        $this->list = new ArrayObject();
    }
    
    public function checkUser($mail){
        try {
            $getobj = new Connection();
            $conn = $getobj->Connect();
            
            $sql = "SELECT * FROM Account where user_mail='$mail'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    $user = new User($row["user_mail"], $row["password"]);   
                    break;
                }
            } else {
                echo "0 results";
            }
            
        } catch (Exception $e) {
            echo $e;
        }
        $conn->close();
        return $user;
    }

    public function insertUser($email, $pwd, $name)
    {
        $getobj = new Connection();
        $conn = $getobj->Connect();

        $sql = "INSERT INTO Account (user_mail, password, account_role,user_name) VALUES (?, ?, ?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $email, $pwd, 1, $name);

        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

    public function deleteUser($email)
    {
        $getobj = new Connection();
        $conn = $getobj->Connect();

        $sql = "DELETE FROM Account WHERE user_mail=$email";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    }

    public function updateUser($email, $col, $text)
    {
        $getobj = new Connection();
        $conn = $getobj->Connect();

        $sql = "UPDATE Account SET $col='$text' WHERE user_mail=$email";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
?>