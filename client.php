<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application -Inclusion Lens</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-database.js"></script>
    <link rel="stylesheet" href="client.css">

</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <a href="index.php"> 
                <img src="download-removebg-preview.png" alt="Company Logo">
            </a>
         </div>
    </header>

    <!-- Job Application Form -->
    <section class="content">
        <h1>Apply for a Job</h1>
        <form id="jobForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="job">Select Job Position:</label>
            <select id="job" name="job" required></select>

            <label for="resume">Upload Resume (PDF only):</label>
            <input type="file" id="resume" name="resume" accept=".pdf" required>

            <button type="submit">Submit Application</button>
        </form>
        <div id="message"></div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Inclusion Lens. All Rights Reserved.</p>
    </footer>
</body>
</html>
