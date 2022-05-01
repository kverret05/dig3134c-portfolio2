<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Delete a Contact</title>
    </head>
    <body>
    <h2>Want to Delete a Contact?</h2>
        <form action="delete.php" method="POST">
        <h2>Delete a Contact from List:</h2>
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
        updateContact();
        deleteContact();
        close();
        echo("<br><a href='index.php'>Go back to Main Menu</a>");
    ?>
</html>