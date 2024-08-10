<?php include './frontend.php'; ?>

<?php  
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
if (!$result) {
  die('Query failed: ' . mysqli_error($conn));
}

$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <h2>Past Feedback</h2>
    <?php if(empty($feedback)): ?>
      <p class="lead mt-3">There is no feedback</p>
    <?php else: ?>
      <?php foreach($feedback as $item): ?>
        <div class="card my-3 w-75">
          <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($item['name']); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($item['email']); ?></h6>
            <p class="card-text"><?php echo htmlspecialchars($item['body']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</main>

<?php include './backend.php'; ?>
