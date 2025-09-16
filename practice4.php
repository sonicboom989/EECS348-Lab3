<!DOCTYPE html>
<html lang="en">
<header class="site-header">
  <nav class="nav">
    <a href="index.html">Home</a>
    <a href="practice1.html">Practice 1</a>
    <a href="practice2.html">Practice 2</a>
    <a href="practice3.html">Practice 3</a>
    <a href="practice4.php">Practice 4</a>
  </nav>
</header>

<head>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <title>PHP Multiplication Table</title>
  <style>

  </style>
</head>
<body>
  <h2>Multiplication Table Generator</h2>
  <form method="post" action="">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" min="1" required>
    <input type="submit" value="Generate">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $n = intval($_POST["number"]);

      if ($n > 0) {
          echo "<h3>Multiplication Table from 1 to $n</h3>";
          echo "<table>";

          // Header row
          echo "<tr><th class='index-cell'>×</th>";
          for ($col = 1; $col <= $n; $col++) {
              echo "<th class='index-cell'>$col</th>";
          }
          echo "</tr>";

          // Table rows
          for ($row = 1; $row <= $n; $row++) {
              echo "<tr>";
              echo "<th class='index-cell'>$row</th>"; // row index
              for ($col = 1; $col <= $n; $col++) {
                  echo "<td>" . ($row * $col) . "</td>";
              }
              echo "</tr>";
          }

          echo "</table>";
      } else {
          echo "<p>Please enter a number greater than 0.</p>";
      }
  }
  ?>
</body>
</html>
