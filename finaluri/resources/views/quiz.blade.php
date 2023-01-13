<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <img src="{{ $quiz->img }}" alt="f">
        <div>
            <h1>
                {{ $quiz->title }}
            </h1>
        </div>
        
        <div>
            <p>
                {{ $quiz->desc }}
            </p>
        </div>
        <div>
            @foreach ($questions as $question)
                <form action="">
                    <p>{{ $question->question }}</p>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">{{ $question->answers }}</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">CSS</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">JavaScript</label>
                </form>
                <p>{{ $question }}</p>
            @endforeach
        </div>
    </div>    
</body>
</html>