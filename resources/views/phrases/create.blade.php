<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create phrase</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Create phrase.</h1>
        <form>
            <div class="mb-3">
                <label for="engTextarea" class="form-label">Eng textarea</label>
                <textarea class="form-control" id="engTextarea" rows="3" name="engTextarea"></textarea>
            </div>
            <div class="mb-3">
                <label for="rusTextarea" class="form-label">Example textarea</label>
                <textarea class="form-control" id="rusTextarea" rows="3" name="rusTextarea"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typeWord">
                <label class="form-check-label" for="typeWord">
                    word
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typePhrase" checked>
                <label class="form-check-label" for="typePhrase">
                    phrase
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typeExpression" checked>
                <label class="form-check-label" for="typeExpression">
                    Expression
                </label>
            </div>
        </form>
    </div>
</body>

</html>
