<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Example values for length and width
$length = 4; // You can use any value you prefer
$width = 2;  // You can use any value you prefer

// Calculate the area by calling the function
$area = calculateArea($length, $width);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area Calculation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d3d3d3; /* Light gray background */
            padding: 20px;
        }
        .result {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <p class="result">
        The area of a rectangle with a width of <?php echo $length; ?> and <?php echo $width; ?> is <?php echo $area; ?>
    </p>
</body>
</html>

