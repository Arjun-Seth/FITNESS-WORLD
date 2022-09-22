<?php
if(isset($_POST['submit'])){
$Name = "Username: ".$_POST['Name']."
";
$Phone = "Mobile-No: ".$_POST['mobile-no']."
";
$Email = "Email: ".$_POST['email']."
";
$age = "Age: ".$_POST['age']."
";
$gender = "Gender: ".$_POST['gender']."
";
$plan = "Plan-type: ".$_POST['choose-plan']."
";
$file=fopen("form-info.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fwrite($file, $Phone);
fwrite($file, $Email);
fwrite($file, $age);
fwrite($file, $gender);
fwrite($file, $plan);
fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/form.css">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Merriweather+Sans:wght@300;400&family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@500&family=Roboto:wght@300;400;700&family=Vujahday+Script&family=Work+Sans:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="background">

        <!-- Navigation Section -->
        <nav>
            <div id="navbar">
                <div class="nav-start">
                    <div class="brand">
                        <div id="brand-logo">
                            <span><a href="/Landing page/index-landing.html"><img src="asset/logo.png" alt="logo"
                                        id="logo"></a></span>
                            <span><a href="/Landing page/index-landing.html" class="brand-name">fitness world</a></span>
                        </div>
                    </div>
                </div>
                <div class="nav-end">
                    <a href="/Classes/index-Classes.html" id="Classes">Classes</a>
                    <a href="#" id="training">Personal Training</a>
                    <a href="#" id="plans">Prices & Plans</a>
                </div>
            </div>
        </nav>

        <!-- Form -->
        <form method="post">
            <div class="form">
                <div class="fill-details">fill your details</div>
                <div class="name-mobile">
                    <div class="name">
                        <label for="name">Name</label><br>
                        <input type="text" name="Name" id="name" required>
                    </div>
                    <div class="mobile">
                        <label for="phoneMob">Mobile No.</label><br>
                        <input type="tel" name="mobile-no" id="phoneMob" required>
                    </div>
                </div>

                <div class="email-age">
                    <span class="emails">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" required>
                    </span>

                    <div class="age">
                        <label for="age">Age</label><br>
                        <input type="number" name="age" id="age" required>
                    </div>
                </div>
                <div class="gender-choosePlan">
                    <div id="gender">
                        <div class="gender">gender</div>
                        <div class="male">
                            <input type="radio" name="gender" value="Male" id="male" required>
                            <label for="male">Male</label><br>
                        </div>
                        <div class="female male">
                            <input type="radio" name="gender" value="Female" id="female" required>
                            <label for="female">Female</label><br>
                        </div>
                        <div class="other male">
                            <input type="radio" name="gender" value="Other" id="other" required>
                            <label for="other">Other</label><br>
                        </div>
                    </div>

                    <div id="choose-plan">
                        <div class="choose-plan">choose your plan</div>
                        <div class="plan-type">
                            <div class="beginner-plan plan">
                                <input type="radio" name="choose-plan" value="beginner-plan" id="beginner-plan" required>
                                <label for="beginner-plan">beginner plan</label><br>
                            </div>
                            <div class="premium-plan plan">
                                <input type="radio" name="choose-plan" value="premium-plan" id="premium-plan" required>
                                <label for="premium-plan">premium plan</label><br>
                            </div>
                            <div class="ultimate-plan plan">
                                <input type="radio" name="choose-plan" value="ultimate-plan" id="ultimate-plan" required>
                                <label for="ultimate-plan">ultimate plan</label><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn">
                    <button type="submit" name="submit" class="primary-btn">submit</button>
                </div>

            </div>
        </form>
        <!-- Footer Section -->
        <footer>

            <div class="brands">
                <div id="brand-logos">
                    <span><a href="/Landing page/index-landing.html"><img src="png/logo.png" alt="logo"
                                id="logos"></a></span>
                    <span><a href="/Landing page/index-landing.html" class="brand-names">fitness world</a></span>
                </div>
            </div>

            <div id="address-social">
                <div class="contact-address">
                    <div class="email-phone">
                        <div class="mail">
                            <img src="png/gmail.png" alt="email" class="email-icon">
                            <p class="email">username@email.com</p>
                        </div>
                        <div class="phone">
                            <img src="png/phone.png" alt="phone" class="phone-icon">
                            <p class="call">123-456-7890</p>
                        </div>
                    </div>

                    <div class="address">
                        <p class="email">Rampur Jagir,</p>
                        <p class="call">Greater Noida, India</p>
                    </div>
                </div>

                <div class="social-icons">
                    <img src="png/facebook.png" alt="facebook" class="icons">
                    <img src="png/instagram.png" alt="instagram" class="icons">
                    <img src="png/twitter.png" alt="twitter" class="icons">
                </div>
            </div>


            <div class="working">
                <div class="working-hours">Working Hours</div>
                <div class="timing">
                    <p class="email">Monday - Friday 5:00 AM - 12:00 AM</p>
                    <p class="call">Sunday - Saturday 8:00 AM - 10:00 PM</p>
                </div>
            </div>
            <div class="line"><img src="png/Line 3.png" alt="line"></div>
            <div class="copyright">
                <div class="end"> © 2022 Fitness world</div>
            </div>

        </footer>


    </div>


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="form.js"></script>
</body>

</html>
