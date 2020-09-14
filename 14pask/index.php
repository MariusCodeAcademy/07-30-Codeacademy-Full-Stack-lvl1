<?php // procesai pries uzkraunant faila

$fname = '';
$pass = '';

// ar buvo paspausta send 
if (isset($_POST['sendBtn'])) {
    $formSent = true;

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

    if (!isset($fnameErr) && !isset($passErr)) {
        // redidirect to sekme.html
        header('Location: sekme.html');
    }

}


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
    // atspausdinti tik jei forma buvo issiusta
    if (isset($formSent)) print_r($_POST);
    ?>
    </pre>

    <h1>Intro into forms</h1>

    <form action="process.php" method="post">
        <input type="text" placeholder="First name" name='fname' value="<?php echo $fname ?>">

        <?php if (isset($fnameErr)) {  ?>
            <!-- rodom tik jei yra klaida -->
            <span style="color: tomato">Laukas privalomas</span>
        <?php } ?>

        <br>
        <input type="password" name="pass" placeholder="Enter password" value="<?php echo $pass ?>">

        <?php if (isset($passErr)) {  ?>
            <!-- rodom tik jei yra klaida -->
            <span style="color: tomato">Laukas privalomas</span>
        <?php } ?>

        <br>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" >
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female" >
        <label for="other">Other</label>
        <input type="radio" name="gender" id="other" value="other" >
        <hr>

        <h3>Programuojate?</h3>
        <label for="html">Html</label>
        <input type="checkbox" id="html" name="exp_html">

        <label for="css">CSS</label>
        <input type="checkbox" id="css" name="exp_css">

        <label for="js">JavaScrip</label>
        <input type="checkbox" id="js" name="exp_js">

        
        <!-- <input type="text" placeholder="extra info" disabled> -->
        <!-- <input type="submit" value="Send"> -->
        <hr>
        <button type="submit" name='sendBtn'>Send</button>
    </form>

    <?php

    ?>

</body>

</html>