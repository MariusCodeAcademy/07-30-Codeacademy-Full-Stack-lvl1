<?php 

$currentPage = 'index';

// susikuriam kad nereiketu tikrinti ar isset()
$name = $email = $website = $message = $gender = '';

function test_input($input){
    $safeInput = trim($input);
    $safeInput = htmlspecialchars($safeInput);
    return $safeInput;
}

// ar forma buvo issiusta 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // forma buvo issiusta
    $name = test_input($_POST['name']);

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
                <form action="index.php" method="POST" >
                    <div class="input-group input-group50">
                        <label for="name">First name</label>
                        <input id="name" name="name" type="text" value='<?php echo $name ?>'>
                        <?php echo $name ?>
                    </div>

                    <div class="input-group input-group50 float-right">
                        <label for="lname">Last name</label>
                        <input id="lname" name="lname" type="text">
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div class="input-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website">
                    </div>

                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Your message goes here..."></textarea>
                    </div>

                    <button class="submit read-link" type="submit">Send Message</button>

                </form>
            </div>
            <div class="col contact-col-right">
                <div class="col-right-inner">
                    <img class="contact-col-right__img" width="30" src="./img/paw.png" alt="image of a paw">
                    <h2 class="contact-col-right__title">CONTACT US</h2>
                    <p class="contact-info">
                        Address:
                        <span class="contact-value">
                            Melbourne St,South Birbane 4101 Austraila
                        </span>
                    </p>

                    <p class="contact-info">
                        Tel:
                        <a class="contact-value" href="tel:+000123456789">+(000) 123 4567 89</a>
                    </p>

                    <p class="contact-info">
                        Email:
                        <a class="contact-value" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contat End -->


<?php require './inc/footer.php';  