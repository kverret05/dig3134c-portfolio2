<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";
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
            $results = mysqli_query($connection, "SELECT `contact_id`, `contact_fName`, `contact_lName`, `email`, `tel`, 'affiliation' FROM `list`;");
            
            echo("<table><tbody>");
            
            while($row = mysqli_fetch_assoc($results)) {
                echo("<tr>");

                echo("<td>".$row['contact_id']."</td>");
                echo("<td>".$row['contact_fName']."</td>");
                echo("<td>".$row['contact_lName']."</td>");
                echo("<td>".$row['email']."</td>");
                echo("<td>".$row['tel']."</td>");
                echo("<td>".$row['affiliation']."</td>");

                echo("</tr>");
            }
            echo("</tbody></table>");
        }
    }

    function addContact() {

        global $connection;

        if (isset($_POST["contact_id"]) &&
            isset($_POST["contact_lName"]) &&
            isset($_POST["email"]) &&
            isset($_POST["tel"]) &&
            isset($_POST["affiliation"]) {

                $contact_id = htmlspecialchars($_POST["contact_id"]);
                $contact_fName = htmlspecialchars($_POST["contact_fName"]);
                $contact_lName = htmlspecialchars($_POST["contact_lName"]);
                $email = htmlspecialchars($_POST["email"]);
                $tel = htmlspecialchars($_POST["tel"]);
                $affiliation = htmlspecialchars($_POST["affiliation"]);

                if($connection != null) {
                    $results = mysqli_query($connection, "INSERT INTO list (contact_id, contact_fName, contact_lName, tel, email, affiliation) VALUES('{$contact_id}','{$contact_fName}', '{$contact_lName}', '{$tel}', '{$email}', '{$affiliation}')");
            }
        }
    }

    function deleteContact() {

        global $connection;

        if (isset($_POST["contact_id"]) &&
        isset($_POST["contact_fName"]) &&
        isset($_POST["contact_lName"])) {

                $contact_id = intval($_POST["contact_id"]);
                $contact_fName = htmlspecialchars($_POST["contact_fName"]);
                $contact_lName = htmlspecialchars($_POST["contact_fName"]);

                if($connection != null) {
                    $delete = "DELETE FROM list WHERE contact_id = '{$contact_id}'";
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