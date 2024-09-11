<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Sign Up - Inclusion Lens</title>
    <link rel="stylesheet" href="applicant_signup.css">
</head>
<body>
    <header>
        <h1>Inclusion Lens</h1>
    </header>
    <main>
        <section class="signup-form">
            <h2>Applicant Sign Up</h2>
            <form action="applicant_signup_process.php" method="post">
                <label for="applicant-email">Email:</label>
                <input type="email" id="applicant-email" name="email" required>

                <label for="applicant-password">Password:</label>
                <input type="password" id="applicant-password" name="password" required>

                <button type="button" onclick="window.location.href='client.php';">Sign Up</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Inclusion Lens. All Rights Reserved.</p>
    </footer>
</body>
</html>