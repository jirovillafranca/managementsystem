<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Footer Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
    }

    .wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content {
      flex: 1; /* Ensures content takes up remaining space */
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 15px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="content">
      <div class="container py-4">
        <h1>Welcome to My Page</h1>
        <p>This is the main content of the page. Add more content here.</p>
        <p>With a sticky footer, the footer will remain at the bottom of the page even if the content is not enough to fill the screen.</p>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        © 2024 Your Website. All rights reserved.
      </div>
    </footer>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
