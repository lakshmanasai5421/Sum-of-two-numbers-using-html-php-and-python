<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];

    // Check if both inputs are numeric
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Error: Invalid input. Please enter numeric values.";
        exit;
    }

    // Call the Python script to calculate the sum
    $command = escapeshellcmd("python sum.py $a $b");
    $result = shell_exec($command);

    // Output the result safely
    echo "Result: " . htmlspecialchars($result);
} else {
    echo "Invalid request method.";
}
?>
