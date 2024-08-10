<?php include './config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
  <title>My Feedback Portal</title>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }
    nav.navbar {
      background-color: #343a40;
    }
    nav.navbar a.navbar-brand, nav.navbar a.nav-link {
      color: #ffffff;
    }
    nav.navbar a.nav-link:hover {
      color: #ffc107;
    }
    footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 10px 0;
    }
    footer a {
      color: #ffc107;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-comments"></i> FeedbackHub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php"><i class="fas fa-plus"></i> Add Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./feedback.php"><i class="fas fa-history"></i> Past Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php"><i class="fas fa-info-circle"></i> About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4">
    <div class="container">
