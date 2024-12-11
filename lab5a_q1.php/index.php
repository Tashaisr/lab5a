<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    <style>
        body {
            background-color: #f2f2f2; /* Light gray background */
            font-family: Arial, sans-serif;
        }

        table {
            background-color: #e6f7ff; /* Light blue background */
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            border: 1px solid #ccc;
        }

        td {
            border: 1px solid #ccc;
            padding: 12px;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #f0f8ff; /* Slightly lighter blue for alternating rows */
        }

        tr:first-child td {
            font-weight: bold;
            background-color: #d1ecf1; /* Slightly darker blue for header rows */
        }
    </style>
</head>
<body>
    <?php  
        $name = "Nur Atasha Binti Mohd Ramli";
        $matricNumber = "AI220216";
        $course = "Bachelor of Computer Science (Web Technology) with Honours";
        $yearOfStudy = "Year 3";
        $address = "Lot 657, Lorong Masjid Kampung Baung, Jalan Pengkalan Chepa, 16100, Kota Bharu, Kelantan";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
