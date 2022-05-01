<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Delete a Contact</title>
    </head>
    <body>
    <h2>Want to Delete a Contact from your List?</h2>
        <form action="delete.php" method="POST">
        <dl>
            <dt><label>Contact First Name:</label></dt>
                <dd><input type="number" id="contact_fName" name="contact_fName"></input></dd>
            <dt><label>Contact Last Name:</label><dt> 
                <dd><input type="text" id="contact_lName" name="contact_lName"></input></dd>
                </dl>
            <dd><input type="submit"></input></dd>
    </form>
    <?php
        connect();
        contactsTable();
        addContact();
        deleteContact();
        close();
        echo("<br><a href='index.php'>Go back to Main Menu</a>");
    ?>
</html>