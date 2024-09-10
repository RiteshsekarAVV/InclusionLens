document.getElementById("jobForm").addEventListener("submit", function(event) {
  event.preventDefault();

  // Gather form data
  let formData = new FormData();
  formData.append("fullName", document.getElementById("fullName").value);
  formData.append("email", document.getElementById("email").value);
  formData.append("phone", document.getElementById("phone").value);
  formData.append("position", document.getElementById("position").value);
  formData.append("resume", document.getElementById("resume").files[0]);

  // Display status message
  const statusMessage = document.getElementById("statusMessage");
  statusMessage.textContent = "Submitting your application...";

  // Simulate form submission (AJAX request)
  setTimeout(function() {
      // Simulate success response
      statusMessage.textContent = "Application submitted successfully!";
  }, 2000);
});
