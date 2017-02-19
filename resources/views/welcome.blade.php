<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> Hello, <?php echo $name; ?> </h1>

    <ul>

        @foreach($tasks as $task)

            <li> <?php echo $task; ?> </li>

        @endforeach        

    </ul>

    
</body>
</html>