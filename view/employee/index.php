<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users from Database</title>
</head>
<body>
    <?php
        foreach($emps as $emp){
            echo "<p> {$emp['hovaten']} có chức vụ là {$emp['chucvu']}</p>";
        }
    ?>
</body>
</html>