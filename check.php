<!DOCTYPE html>
<html>
<title>Simpli Code Editor - Check Email</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body class="w3-container">

    <?php

    if (@$_GET['status'] == "ok") { ?>
        <div class="w3-panel w3-green">
            <h2>Check Your Emails</h2>
            <p>Red often indicates a dangerous or negative situation.</p>
        </div> <?php

                header("Refresh: 3; url=index.php");
            } else {
                header("Location:index.php");
            }
                ?>




</body>

</html>