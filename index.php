<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EAEDF8;
            margin: 0; /* removes unwanted border around body content */ 
        }

        /* Main Container with Menu Container and dynamic PHP Content*/ 
        .main {
            display: flex; /* to display container inside next to each other */ 
        }

        .menubar {
            background-color: #FFFFFF;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between; /* space of menubar should be between the elements */
            height: 100px;
            left: 0;
            right: 0;
            top: 0;
            position: absolute; /* arranged independently */
            padding-top: 10px;
            padding-left: 23%;
            padding-right: 30px;
        }

        /* Menu Bar Logo */
        .avatar {
            color: #FFFFFF;
            background-color: #343434;
            display: flex;
            justify-content: center; /* x-axis*/
            align-items: center; /* y-axis */
            border-radius: 100%;
            height: 30px;
            width: 30px;
            padding: 8px;
            margin: auto;
        }

        /* Menu Bar Name below Logo */
        .name {
            text-align: center;
            display: block;
            width: 150px;
            margin: 10px 0;
        }

        .name p {
            margin-top: 7px;
        }

        /* Menu Container with Menu (left side) */
        .menu {
            background-color: #746CF5;
            height: 100vh; /* whole display height */ 
            width: 20%;
            padding-top: 180px;
            padding-left: 17px;
            margin-right: 32px;
        }

        /* Change Appearance of Menu Elements/Links */
        .menu a {
            color: #FFFFFF;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px;
        }

        /* Every img-Tag in Menu Container */
        .menu img {
            margin-right: 8px;
        }

        .menu a:hover {
            background-color: rgba(255, 255, 255, 0.1); /*white with transparency */ 
        }

        /* PHP Container with Content of Side (right side) */
        .php {
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.1);
            width: 80%;
            padding: 10px 21px;
            margin: 150px 30px 45px 0;
        }

        /* Contact Section */
        .contact-card {
            border-radius: 8px;
            background-color: rgba(0,0,0,0.05); /* light gray */
            height: 55px;
            padding: 10px;
            padding-left: 64px;
            margin-bottom: 12px;
            position: relative; /* position div elemente relative to div container */
        }

        .profile-picture {
            border-radius: 100%;
            border: 2px solid white;
            height: 45px;
            width: 45px;
            margin-right: 12px;
            position: absolute; /* for relative positioning */
            left: 8px;
        }

        .contact-information {
            position: absolute; /* for relative positioning */
            top: -6px;
        }

        .call-btn {
            background-color: rgba(134, 184, 88, 1.0); 
            color: #343434;
            text-decoration: none;
            border-radius: 5px;
            padding: 5px;
            position: absolute; /* for relative positioning */
            top: 21px;
            right: 10px;
        }

        .call-btn:hover {
            background-color: rgba(134, 184, 88, 0.6); 
        }

        .delete-btn {
            background-color: rgba(255, 70, 70, 1.0); 
            color: #343434;
            text-decoration: none;
            border-radius: 5px;
            padding: 5px;
            position: absolute; /* for relative positioning */
            top: 21px;
            right: 90px;
        }

        .delete-btn:hover {
            background-color: rgba(255, 70, 70, 0.6); 
        }

        .add-btn {
            background-color: rgba(134, 184, 88, 1.0); 
            color: #343434;
            text-decoration: none;
            border-radius: 5px;
            padding: 5px;
            margin-left: 15px;
        }

        .add-btn:hover {
            background-color: rgba(134, 184, 88, 0.6); 
        }

        /* Delete Call Out */
        .delete-call-out {
            color: red;
        }

        /* Contact Form */
        input {
            font-family: 'Poppins', sans-serif;
            width: 250px;
            border: 0.5px solid rgba(52,52,52,0.3);
            border-radius: 3px;
            padding: 7px 5px;
            margin-bottom: 10px;
        }

        button[type=submit] {
            background-color: rgba(134, 184, 88, 1.0); 
            color: #343434;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            padding: 5px;
            margin-top: 4px;
        }

        button[type=submit]:hover {
            background-color: rgba(134, 184, 88, 0.6); 
            cursor: pointer;
        }

        /* Footer */
        .footer {
            color: #FFFFFF;
            background-color: #343434;
            text-align: center;
            padding: 100px;
        }

    </style>
</head>
<body>

    <!-- Menu Bar -->
    <div class="menubar">
        <h1>My Contact Book</h1>
        <div class="name">
            <div class="avatar">NG</div>
            <p>Nicole Gottschall</p>
        </div>        
    </div>

    <!-- Main Container -->
    <!-- With Flex Property to display divs next to each other -->
    <div class="main">
        <!-- Menu Container -->
        <div class="menu">
            <a href="index.php?page=start"><img src="img/home.svg"> Start</a>
            <a href="index.php?page=contacts"><img src="img/contactbook.svg"> Kontakte</a>
            <a href="index.php?page=addContact"><img src="img/add.svg"> Kontakt hinzuf??gen</a>
            <a href="index.php?page=impressum"><img src="img/policy.svg"> Impressum</a>
        </div>


        <!-- PHP Container -->
        <!-- Dynamic Content with PHP-->
        <div class="php">
            <?php 
                $headline = 'Herzlich Willkommen!';
                $contacts = [];

                //check if textfile already exists
                //textfile used to store contacts
                if(file_exists('contacts.txt')) {
                    //do not overwrite existing file
                    //instead add new contact information to the end
                    //First Step: Get Text from Textfile
                    $text = file_get_contents('contacts.txt', true);
                    //Second Step: Paste Text to Textfile, Note: has to be converted back to text first
                    $contacts = json_decode($text, true); //true defines transformation to array
                }

                //check if variables are set
                if(isset($_POST['name']) && ($_POST['number'])) {
                    echo 'Kontakt ' . $_POST['name'] . ' wurde hinzugef??gt.';
                    //create table entry
                    $newContact = [
                        'name' => $_POST['name'],
                        'number' => $_POST['number']
                    ];
                    //push new table entry to contacts array
                    array_push($contacts, $newContact);
                    //sort array by ascending name
                    $columns = array_column($contacts, 'name');
                    array_multisort($columns, SORT_ASC, $contacts);
                    //paste contacts array into textfile
                    //json_encode -> transfer array into text
                    file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT)); 
                }

                //check if delete request on contacts page exists
                if(($_GET['page'] == 'contacts') && isset($_GET['delete'])) {
                    //get index
                    $index = $_GET['delete'];
                    //get name and number of deleted contact
                    $delContact = null;
                    $delContactNum = null;
                    foreach($contacts as $i=>$row) {
                        if($i == $index) {
                            $delContact = $row['name'];
                            $delContactNum = $row['number'];
                        }
                    }
                    //display which contact was deleted
                    echo '<p class="delete-call-out">Der Kontakt ' . $delContact . ' (' . $delContactNum . ') wurde gel??scht.</p>';
                    //delete index fromm array
                    unset($contacts[$index]);
                    //sort array by ascending name
                    $columns = array_column($contacts, 'name');
                    array_multisort($columns, SORT_ASC, $contacts);
                    //save again/update textfile
                    file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));                        
                }

                //show headline according to ?page
                if($_GET['page'] == 'contacts') {
                    $headline =  'Deine Kontakte';
                } else if($_GET['page'] == 'addContact') {
                    $headline = 'Kontakt hinzuf??gen';
                } else if($_GET['page'] == 'delete'){
                    $headline = 'Kontakt gel??scht';
                } else if($_GET['page'] == 'impressum') {
                    $headline =  'Impressum';
                }

                //display headline
                echo '<h1>' . $headline . '</h1>';

                //show and display page content according to ?page
                if($_GET['page'] == 'contacts') {
                    echo "
                        <p>Auf dieser Seite hast du einen ??berblick ??ber deine <b>Kontakte</b>. <a class='add-btn' href='?page=addContact'>Hinzuf??gen</a></p>

                    ";

                    foreach($contacts as $index=>$row) {
                        $name = $row['name'];
                        $number = $row['number'];

                        echo "
                            <div class='contact-card'>
                                <img class='profile-picture' src='img/profile-picture.png'><br/>                                
                                <p class='contact-information'><b>$name</b><br/>
                                    $number
                                </p>
                                <a class='call-btn' href='tel:$number'>Anrufen</a>
                                <a class='delete-btn' href='?page=contacts&delete=$index'>L??schen</a>
                            </div>
                        ";
                    }
                } else if($_GET['page'] == 'addContact') {
                    echo "
                        <p>??ber diese Seite kannst du ganz einfach einen neuen Kontakt hinzuf??gen.</p>
                        
                        <form action='?page=contacts' method='POST'>
                            <div>
                                <input placeholder='Namen eingeben' name='name'>
                            </div>
                            <div>
                                <input placeholder='Telefonnummer eingeben' name='number'>
                            </div>
                            <button type='submit'>Absenden</button>
                        </form>
                    ";
                } else if($_GET['page'] == 'impressum') {
                    echo "
                        <p>Hier kommt das Impressum hin.</p>
                    ";
                } else {
                    echo 'Du bist gerade auf der Startseite!';
                }
            ?> <!-- End of dynamic content-->
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        2022 Nicole Gottschall by Developer Akamedie GmbH
    </div>

</body>
</html>