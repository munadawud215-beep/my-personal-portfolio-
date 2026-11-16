
<?php
$name = "Your Name";
$role = "Web Developer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Personal Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #101827;
            color: white;
        }

        header {
            padding: 25px 8%;
            background: #17243a;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            color: #38bdf8;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }

        .hero {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero h1 span {
            color: #38bdf8;
        }

        .hero p {
            color: #cbd5e1;
            font-size: 19px;
            margin-bottom: 25px;
        }

        .button {
            background: #38bdf8;
            color: #101827;
            padding: 13px 25px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }

        section {
            padding: 60px 10%;
            text-align: center;
        }

        section h2 {
            color: #38bdf8;
            margin-bottom: 20px;
        }

        footer {
            background: #17243a;
            text-align: center;
            padding: 25px;
            color: #cbd5e1;
        }
    </style>
</head>

<body>

    <header>
        <h2>My Portfolio</h2>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div class="hero" id="home">

        <h1>Hello, I'm
            <span><?php echo $name; ?></span>
        </h1>

        <p>Welcome to my personal portfolio website.</p>

        <p><?php echo $role; ?></p>

        <a href="#about" class="button">
            Discover More
        </a>

    </div>

    <section id="about">

        <h2>About Me</h2>

        <p>
            I am a student who loves technology,
            programming and learning new things.
            Welcome to my personal website!
        </p>

    </section>

    <section id="contact">

        <h2>Contact Me</h2>

        <p>Email: your-email@example.com</p>

    </section>

    <footer>

        <p>
            &copy; 2026 My Personal Portfolio.
            All rights reserved.
        </p>

    </footer>

</body>
</html>
