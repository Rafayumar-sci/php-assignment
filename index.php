
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>assignment</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <p id="Para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga ratione maxime corporis culpa nesciunt eum iure doloribus ducimus eveniet! Quidem?</p>
    <button id="Btn">read more</button>

    <script>
        $(document).ready(function(){
            $("#Btn").click(function(){
                $("#Para").text("This is the new message after clicking the button.");
            });
        });
    </script>


</body>
</html>

<?php
date_default_timezone_set("Asia/Karachi");

$currentHour = date("H");

if ($currentHour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>

    



