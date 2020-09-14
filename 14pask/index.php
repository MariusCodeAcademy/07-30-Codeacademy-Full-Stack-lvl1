<?php // procesai pries uzkraunant faila



// ar buvo paspausta send 
if (isset($_POST['sendBtn'])) {

    // tikrinam fname
    if (isset($_POST['fname']) and !empty($_POST['fname'])) {
        // kazkokia reiksme buvo ivesta
        $fname = $_POST['fname'];
    } else {
        $fnameErr = true;
    }
    // tikrinam pass
    if (isset($_POST['pass']) and !empty($_POST['pass'])) {
        // kazkokia reiksme buvo ivesta
        $pass = $_POST['pass'];
    } else {
        $passErr = true;
    }
}


// issSetAndNotEmpty('fname');
// issSetAndNotEmpty('pass');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP forms</title>
</head>

<body>
    <pre>
    <?php 
    print_r($_POST);
    ?>
    </pre>

    <h1>Intro into forms</h1>

    <form action="index.php" method="post">
        <input type="text" placeholder="First name" name='fname'>

        <?php if (isset($fnameErr)) {  ?>
            <!-- rodom tik jei yra klaida -->
            <span style="color: tomato">Laukas privalomas</span>
        <?php } ?>

        <br>
        <input type="password" name="pass" placeholder="Enter password">

        <?php if (isset($passErr)) {  ?>
            <!-- rodom tik jei yra klaida -->
            <span style="color: tomato">Laukas privalomas</span>
        <?php } ?>

        <br>
        <label for="male">Male</label>
        <input type="checkbox" name="male" id="male" value="male" >
        <label for="female">Female</label>
        <input type="checkbox" name="female" id="female" value="female" >
        <label for="other">Other</label>
        <input type="checkbox" name="other" id="other" value="other" >
        
        
        
        <input type="text" placeholder="extra info" disabled>
        <!-- <input type="submit" value="Send"> -->
        <button type="submit" name='sendBtn'>Send</button>
    </form>

    <?php

    ?>

</body>

</html>