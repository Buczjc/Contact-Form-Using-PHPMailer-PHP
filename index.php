

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="main-container">
            <div class="contact-form-wrapper">
                <div class="contact-header"><h1>Contacts</h1></div>
                <form action="sendmailfunc.php" method="POST">
                    <input type="email" name="email-php" placeholder="Email"> <br>
                    <input type="text" name="subject-header-php" placeholder="Subject"> <br>
                    <input type="text" name="message-body-php" placeholder="Message"> <br>
                    <input type="submit" name="submit-btn-php" value="Submit">
                </form>
            </div>
        </div>
    </main>
</body>
</html>


