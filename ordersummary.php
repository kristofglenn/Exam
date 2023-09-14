<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            background-color: #fff;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        th, td {
            border-bottom: 1px solid #ccc;
        }

    </style>
</head>
<body>
    <header>
       TICKET SHOP
    </header>
    <table>
        <tr>
            <th>Info</th>
            <th>Record</th>
        </tr>
        <tr>
            <td>Customer Name:</td>
            <td><?php echo $_POST["customerName"]; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $_POST["gender"]; ?></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><?php echo $_POST["age"]; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $_POST["address"]; ?></td>
        </tr>
        <tr>
            <td>Cinema to Watch:</td>
            <td><?php echo $_POST["cinema"]; ?></td>
        </tr>
        <tr>
            <td>Number of Tickets to Purchase:</td>
            <td><?php echo $_POST["ticketCount"]; ?></td>
        </tr>
        <tr>
            <td>Add Ons (optional)</td>
            <td>
                <?php 
                if(isset($_POST["addons"])) {
                    foreach($_POST["addons"] as $addon) {
                        echo $addon . "<br>";
                    }
                } else {
                    echo "None";
                }
                ?>
            </td>
        </tr>
    </table>

    <footer>
    <video src="video.mp4" autoplay muted width="320" height="240"></video>
    </footer>

</body>
</html>
