<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Space Project</title>
</head>

<body>
    <header>

        <nav>
            <ul>
                <li>
                    <h2>Home</h2>
                    <a href="index.html"><img id="earth" src="/assets/earth.png" title="earth"
                            alt="image of the earth" /></a>
                </li>
                <li>
                    <h2>Experiences</h2>
                    <a href="experiences.html"><img id="moon" src="/assets/moon.png" title="moon"
                            alt="image of the moon" /></a>
                </li>
                <li>
                    <h2>About me</h2>
                    <a href="about_me.html"><img id="mercury" src="/assets/mercury.png" title="mercury"
                            alt="image of the mercury" /></a>
                </li>
                <li>
                    <h2>Contact</h2>
                    <a href="contact.html"><img id="venus" src="/assets/venus.png" title="venus"
                            alt="image of the venus" /></a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- inclusion du formulaire de contact -->
    <?php include_once('login.php'); ?>
</body>

</html>