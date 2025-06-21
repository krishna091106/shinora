
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }
    h1,p{
        text-align: center;
        }
        button{
            border-radius: 12px;
            background-color: black;
            color: #fff;
            cursor: pointer;
        }
    </style>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $city = htmlspecialchars($_POST['city']);

    // Format data to save
    $entry = "Email: $email | Number: $number | City: $city" . PHP_EOL;

    // Save to file (append mode)
    file_put_contents("contacts.txt", $entry, FILE_APPEND);

    echo "
    <h1>| Contact |</h1>
    <p>Thank you! Your information has been saved.</p>
    ";
    
} else {
    echo "<h1>Invalid request.</h1>";
}
?>
    <button onclick="history.back()">Go Back</button>
</body>
</html>