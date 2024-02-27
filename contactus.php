<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Contact Form</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>


        <div class="contact-section">
            <div class="contact-info">
                <div><i class="fa-thin fa-location-smile"></i>Address, City, Country</div>
                <div><i class="fa-thin fa-envelope"></i>contact@gmail.com</div>
                <div><i class="fa-thin fa-phone"></i>+00 0000000000</div>
                <div><i class="fa-thin fa-time"></i>Mon-Fri 9:00 AM to 5:00 PM</div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Yor name" required>
                    <input type="email" name="email" class="text-box" placeholder="Yor email" required>
                    <textarea name="message" rows="5" placeholder="Yor message" required>></textarea>
                    <input type="submit" name="submit" class="send-btn" value="Send">
        </div>
    </body>
</html