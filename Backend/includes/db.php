    <?php
        //saves the login details for the local database
        $servername = 'barnumdesigns.gigapages.net';
        $dbname = 'barnunpage_SwanHub';
        $username = 'barnunpage_Admin';
        $password = 'BnB~9r,+';

        //establishes a connection with the database using MySQli
        $mysqli = mysqli_connect($servername, $username, $password, $dbname);
        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?> 