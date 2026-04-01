<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobBoard | Job Details</title>
</head>

<body>
    <h1> {{$listing->title}} </h1>
    <h3> Job poster : {{$listing->user_id}} | Salary : {{$listing->salary}} </h3>
    <p> {{$listing->desc}} </p>
</body>

</html>