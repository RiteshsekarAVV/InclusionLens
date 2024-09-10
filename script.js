document.getElementById('uploadForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const fileInput = document.getElementById('resumeUpload');
  const file = fileInput.files[0];

  if (!file) {
    alert("Please upload a resume!");
    return;
  }

  // Simulate sending the file to the server and receiving a report
  simulateUpload(file).then((report) => {
    document.getElementById('reportSection').style.display = 'block';
    document.getElementById('biasReport').innerText = JSON.stringify(report, null, 2);
  });
});

// Mock function to simulate uploading and receiving a bias report
function simulateUpload(file) {
  return new Promise((resolve) => {
    setTimeout(() => {
      const biasReport = {
        fileName: file.name,
        bias_found: true,
        indicators: [
          { term: "young", category: "age indicators", context: "We are looking for a young and dynamic individual" },
          { term: "man", category: "gendered terms", context: "A strong man for the position" }
        ]
      };
      resolve(biasReport);
    }, 2000);  // Simulate 2-second delay
  });
}
