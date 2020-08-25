<html>
    <head>
        <title>Post and Get</title>
        <meta charset="UTF-8">
        <meta name = "viewport">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        
        <form action = "index.php" method="POST" style="width :500px;height:500px">
            <div class="form-group">
                <label for="exampleInputPassword1">UserName</label>
                <input type="Text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> 
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>           
            <div class="form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1" name = "isChecked">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>