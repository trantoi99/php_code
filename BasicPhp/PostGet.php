<html>
    <head>
        <title>Post and Get</title>
        <meta charset="UTF-8">
        <meta name = "viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head> 
    <body>
        <!-- phuong thuc GET -->
        <a href="get.php?user_name=abc&title=dd">get</a>
        <!-- phuong thuc post -->
        <form action = "post.php">
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="txt" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>