<?php

$currentPage = 'index';

// susikuriam kad nereiketu tikrinti ar isset()
$name = $email = $website = $message = $gender = '';
$nameErr = $emailErr = $websiteErr = $messageErr = $genderErr = '';

function test_input($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars($safeInput);
    return $safeInput;
}

// ar forma buvo issiusta 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // forma buvo issiusta

    // pirmiausia pasitikrinam ar buvo kazkas ivesta i name
    if (empty($_POST['name'])) {
        $nameErr = 'Please fill in name';
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email cant be blanc';
    } else {
        $email = test_input($_POST['email']);
    }

    if (empty($_POST['website'])) {
        $websiteErr = 'Please fill in your website';
    } else {
        $website = test_input($_POST['website']);
    }

    if (empty($_POST['gender'])) {
        $genderErr = 'Please select one';
    } else {
        $gender = $_POST['gender'];
    }
}



// isikeliame visa headeri
// require();
require './inc/header.php';

?>


<!-- Contat Start -->
<section class="contact">
    <div class="container flex">
        <div class="col contact-col-left">
            <h2 class="contact-title">Contact Form</h2>
            <form action="index.php" method="POST">
                <div class="input-group input-group50">
                    <label for="name">First name</label>
                    <input id="name" name="name" type="text" value='<?php echo $name ?>'>
                    <span class="error"><?php if ($nameErr) echo $nameErr ?></span>
                </div>

                <div class="input-group input-group50 float-right">
                    <label for="lname">Last name</label>
                    <input id="lname" name="lname" type="text">
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <span class="error"><?php if ($emailErr) echo $emailErr ?></span>
                </div>

                <div class="input-group">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website">
                    <span class="error"><?php if ($websiteErr) echo $websiteErr ?></span>
                </div>

                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Your message goes here..."></textarea>
                </div>

                <div class="input-group input-group--radio">
                    <h4>Gender</h4>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="Male" id='male'>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="Female" id="female">
                    <label for="notsay">Prefer not to say</label>
                    <input type="radio" name="gender" value="NotSay" id="notsay">
                    <span class="error"><?php if ($genderErr) echo $genderErr ?></span>
                </div>

                <button class="submit read-link" type="submit">Send Message</button>

            </form>
        </div>
        <?php include './inc/c_col_right.php'; ?>
    </div>
</section>
<!-- Contat End -->


<?php require './inc/footer.php';
