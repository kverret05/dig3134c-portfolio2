<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Contacts List</title>
    </head>
    <body>
    <h2>Current Contacts List</h2>
    <form action="index.php" method="POST">
        <h3>Add a Contact to List:</h3>
        <dl>
        <dt><label>Contact ID:</label></dt>
                <dd><input type="number" id="contact_id" name="contact_id"></input></dd>
            <dt><label>Contact First Name:</label></dt>
                <dd><input type="text" id="contact_fName" name="contact_fName"></input></dd>
            <dt><label>Contact Last Name:</label><dt> 
                <dd><input type="text" id="contact_lName" name="contact_lName"></input></dd>
            <dt><label>Phone Number:</label><dt>  
                <dd><input type="text" id="tel" name="tel"></input></dd>
            <dt><label>Email:</label><dt>  
                <dd><input type="text" id="email" name="email"></input></dd>
            <dt><label>Affiliation:</label><dt>  
                <dd><input type="text" id="affiliation" name="affiliation"></input></dd>
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
        echo("<br><a href='delete.php'>Delete a Contact</a>");
    ?>
</html>