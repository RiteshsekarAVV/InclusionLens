<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Inclusion Lens</title>
    <link rel="stylesheet" href="contact.css">
  
</head>
<body>
    <header>
        <h1>Inclusion Lens</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.php">Log In</a>
        </nav>
    </header>
    <main>
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form action="submit_contact_form.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
        <section class="contact-details">
            <h3>Contact Details</h3>
            <p>Email: <a href="mailto:contact@[Inclusion Lens].com">contact@Inclusion Lens.com</a></p>
            <p>Phone: +1 (123) 456-7890</p>
            <p>Address: 123 Hiring Street, Talent City, TX 12345, USA</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Inclusion Lens All Rights Reserved.</p>
    </footer>
</body>
</html>