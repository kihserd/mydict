<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
    @csrf
        <h2 id="phrase">{{ $phrase->eng }}</h2>
        <div id="answer" style="display:none;">
            <h2>{{ $phrase->rus }}</h2>
            <button class="wrong" formaction='/statistic/{{$phrase->id}}/wrong'>Wrong</button>
            <button class="correct" formaction='/statistic/{{$phrase->id}}/right'>Correct</button>
        </div>    
    </form>
    @if ($flash = session('message')) 
        <div id="flash-message" role="alert">
    	    {{ $flash }}
        </div>
    @endif
    
</div>

</body>
<script>
    document.getElementById('phrase').onclick = function showAnswer() {
        document.getElementById('answer').style.display  = "block";
}
</script>
</html>
