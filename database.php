<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "contactsList";
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        if ($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function contactsTable() {
        global $connection;

        if ($connection != null) {
            $results = mysqli_query($connection, "SELECT `contact_fName`, `contact_lName`, `tel`, `email` FROM `list`;");
            echo("<table width='600' border='1px solid'><tbody>");
            echo("<tr><th>Contact First Name</th><th>Contact Last Name</th><th>Phone Number</th><th>Email</th></tr>");
            while($row = mysqli_fetch_assoc($results)) {
                echo("<tr>");
                echo("<td>".$row['contact_fName']."</td>");
                echo("<td>".$row['contact_lName']."</td>");
                echo("<td>".$row['tel']."</td>");
                echo("<td>".$row['email']."</td>");
                echo("</tr>");
            }
            echo("</tbody></table>");
        }
    }

    function addContact() {
        global $connection;
        if (isset($_POST["contact_fName"]) &&
            isset($_POST["contact_lName"]) &&
            isset($_POST["tel"]) &&
            isset($_POST["email"]) {
                $bookName = htmlspecialchars($_POST["contact_fName"]);
                $author_lastName = htmlspecialchars($_POST["contact_lName"]);
                $author_firstName = htmlspecialchars($_POST["tel"]);
                $genre = htmlspecialchars($_POST["email"]);
                if($connection != null) {
                    $results = mysqli_query($connection, "INSERT INTO list (contact_fName, contact_lName, tel, email) VALUES('{$contact_fName}', '{$contact_lName}', '{$tel}', '{$email}')");
            }
        }
    }

    function deleteContact() {
        global $connection;
        if (isset($_POST["contact_fName"]) &&
            isset($_POST["contact_lName"])) {
                $book_id = intval($_POST["contact_fName"]);
                $book_name = htmlspecialchars($_POST["contact_lName"]);
                if($connection != null) {
                    $delete = "DELETE FROM list WHERE contact_fName = '{$contact_fName}'";
                    mysqli_query($connection, $delete);
                }
            }
    }
       
    function close() {
        global $connection;

        if ($connection != null) {
            mysqli_close($connection);
        }
    }
?>