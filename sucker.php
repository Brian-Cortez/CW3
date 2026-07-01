<?php
echo "<h1>Get robbed sucker!<h1><br>";

echo "<h2>Current info stolen:<h2><br>";

print_r($_POST);
echo "<h1>Raw Form Data</h1>";
echo "<pre><?php print_r($_POST); ?></pre>";

echo "<h1>Form input values</h1>";
echo "<p>Your Name: <?= {htmlspecialchars($_POST['name'] ?? '')} ?></p>";
echo "<p>Section: <?= htmlspecialchars($_POST['section'] ?? '') ?></p>";
echo "<p>Card Number: <?= htmlspecialchars($_POST['cardnumber'] ?? '') ?></p>";
echo "<p>Card Type: <?= htmlspecialchars($_POST['cardtype'] ?? '') ?></p>";

?>