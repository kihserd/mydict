<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create phrase</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>Create phrase.</h1>
        <form action="/phrases" method="POST">
            @csrf
            <div class="mb-3">
                <label for="engTextarea" class="form-label">Eng textarea</label>
                <textarea class="form-control" id="engTextarea" rows="3" name="engTextarea"></textarea>
            </div>
            <div class="mb-3">
                <label for="rusTextarea" class="form-label">Example textarea</label>
                <textarea class="form-control" id="rusTextarea" rows="3" name="rusTextarea"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typeWord" value="word">
                <label class="form-check-label" for="typeWord">
                    Word
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typePhrase" value="phrase" checked>
                <label class="form-check-label" for="typePhrase">
                    Phrase
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioType" id="typeExpression" value="expression">
                <label class="form-check-label" for="typeExpression">
                    Expression
                </label>
            </div>
            <button type="submit" class="btn">Create</button>
        </form>
    </div>
    @if ($flash = session('message')) 
        <div id="flash-message" role="alert">
    	    {{ $flash }}
        </div>
    @endif
</body>

</html>
