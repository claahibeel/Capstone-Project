<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>If you want a custom greeting message, please do the following: </h1>
    <fieldset>
        <ol>
            <li>In your address bar, append a '?' symbol </li>
            <li>Then write 'firstName=' with your first name next to it</li>
            <li>Then write '&' followed by 'lastName' with your last name next to it</li>
            <li>Hit ENTER and see your customized message in the greeting below</li>
        </ol>
    </fieldset>

    <?php
    if (isset($_GET['firstName']) && isset($_GET['lastName'])) {
        $firstName = htmlspecialchars($_GET['firstName']);
        $lastName = htmlspecialchars($_GET['lastName']);
        if (empty($firstName) && empty($lastName)) {
            echo "<h2>Howdy no names</h2>";
        } else if (empty($firstName)) {
            echo "<h2>Howdy $lastName</h2>";
        } else if (empty($lastName)) {
            echo "<h2>Howdy $firstName</h2>";
        } else {
            echo "<h2>Howdy $firstName $lastName</h2>";
        }
    } else if (isset($_GET['firstName'])) {
        $firstName = htmlspecialchars($_GET['firstName']);
        echo "<h2>Howdy $firstName</h2>";
    } else if (isset($_GET['lastName'])) {
        $lastName = htmlspecialchars($_GET['lastName']);
        echo "<h2>Howdy $lastName</h2>";
    } else {
        echo "<h2>Howdy no names</h2>";
    }
    ?>
</body>
</html>
