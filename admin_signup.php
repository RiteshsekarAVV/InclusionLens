<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Inclusion Lens</title>
    <link rel="stylesheet" href="admin_signup.css" />
  </head>
  <body>
    <header>
      <h1>Inclusion Lens</h1>
    </header>
    <main>
      <section class="dashboard-container">
        <h2>Admin Dashboard</h2>

        <!-- Submit Job Opening Section -->
        <div class="dashboard-section">
          <h3>Submit Job Opening</h3>
          <form action="submit_job_process.php" method="post">
            <label for="job-title">Job Title:</label>
            <input type="text" id="job-title" name="job_title" required />

            <label for="job-description">Job Description:</label>
            <textarea
              id="job-description"
              name="job_description"
              rows="4"
              required
            ></textarea>

            <button type="submit" class="submit-btn">Submit Job Opening</button>
          </form>
        </div>

        <!-- View Applicants Section -->
        <div class="dashboard-section">
          <h3>View Applicant Details</h3>
          <form action="view_applicants.php" method="post">
            <button type="submit" class="view-btn">View Applicants</button>
          </form>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; 2024 Inclusion Lens. All Rights Reserved.</p>
    </footer>
  </body>
</html>
