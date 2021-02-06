<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
form .btn {
    /*background-color: red;*/
    /*margin-top: 10px;*/
    text-transform: capitalize;
    padding: 1px 7px;
    border: 1px solid rgb(118, 118, 118);
    border-radius: 2px;
}
</style>
<body style="padding-top: 20px">
    <div class="container">
        <h1>File upload</h1>
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Lesson's number</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="lesson" placeholder="Enter lesson's number...">
            </div>
            <div class="form-group">
                <input type="file" accept=".xlsx" class="form-control-file" id="customFile" name="filename">
            </div>
            <button type="submit" class="btn">upload</button>
        </form>
  </div>
</body>
</html>
