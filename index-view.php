<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/stylesheet.css">
    <title>Form Validation</title>
</head>
<body>
<div class="container" id="frm">
        <h2>PHP Form Validation</h2>
        <form action=""></form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="name">Bio</label>
            <textarea type="text" class="form-control" name="bio"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>