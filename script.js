document.getElementById('uploadForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const fileInput = document.getElementById('resumeUpload');
  const file = fileInput.files[0];

  if (!file) {
    alert('Please upload a resume.');
    return;
  }

  // Validate file type
  const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
  if (!validTypes.includes(file.type)) {
    alert('Invalid file type. Please upload a PDF or DOC file.');
    return;
  }

  // Show loading spinner
  document.getElementById('loadingSpinner').style.display = 'block';

  // Simulate processing time (for demo purposes)
  setTimeout(() => {
    document.getElementById('loadingSpinner').style.display = 'none';

    // Simulate bias detection report (for demo purposes)
    const mockReport = `
      Bias Detected:
      - Gender Bias: 3%
      - Ethnicity Bias: 0%
      - Age Bias: 5%
      
      Recommendations:
      1. Remove gendered language (e.g., 'he', 'she').
      2. Avoid mentioning age-related achievements.
    `;
    document.getElementById('biasReport').textContent = mockReport;
    document.getElementById('reportSection').style.display = 'block';
  }, 2000);
});
