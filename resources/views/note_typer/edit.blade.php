<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Edit a NoteTyper</h2>
<form method="post">
    @csrf
    <input type="text" name="name" placeholder="edit name" required>
    <input type="text" name="description" placeholder="edit desription" required>
    <input type="submit" value="Edit">
</form>

</body>
</html>



