<?php 
echo 'processing <br>';
// atspausdinti visa post masyva
print_r($_POST);

echo '<hr>';

if (isset($_POST['sendBtn'])) {
    // buvo paspaustas send

    foreach ($_POST as $key => $val) {
        echo "
        <div>
            <span class='key'> $key - </span>
            <span> $val </span>
        </div>
        ";
    }




}







// echo "Name you entered is {$_POST['fname']}";


// pasitikrinti ar reiksme buvo ivesta
// if (isset($_POST['fname']) AND !empty($_POST['fname'])) {
//     // kazkokia reiksme buvo ivesta
//     echo "Name you entered is {$_POST['fname']} <br>";
// } else {
//     echo 'Jokia reiksme i varda nebuvo ivesta <br>';
// }

// // passwor handle
// if (isset($_POST['pass']) AND !empty($_POST['pass'])) {
//     // kazkokia reiksme buvo ivesta
//     echo "Pass you entered is {$_POST['pass']} <br>";
// } else {
//     echo 'Jokia reiksme i pass nebuvo ivesta <br>';
// }


function issSetAndNotEmpty($name) {
    if (isset($_POST[$name]) AND !empty($_POST[$name])) {
        // kazkokia reiksme buvo ivesta
        echo "$name you entered is {$_POST[$name]} <br>";
    } else {
        echo "Jokia reiksme i $name nebuvo ivesta <br>";
    }
}

// issSetAndNotEmpty('fname');
// issSetAndNotEmpty('pass');



?>