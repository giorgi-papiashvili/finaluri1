<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Auth::id() !== 1)
        <div id='hide-quiz'>
        @foreach($curQuizzes as $quiz)
            <div>
                <div>
                    <h5>{{$quiz->title}}</h5>
                    <p >{{$quiz->desc}}</p>
    
                    <div >
                        <a href="/edit-quiz/{{$quiz->id}}">Edit</a>
                        <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" >Delete</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div id='hide-question'>
            @foreach($curQuestions as $question)
                <div>
                    
                    <div>
                        <h5 >{{$question->question}}</h5>
                        <p ><strong>FOR</strong>: {{$curQuizzes->where('id', $question->quiz_id)->first()->title}}</p>
        
                        <div >
                            <a href="/edit-question/{{$question->id}}">Edit</a>
                            <form action="/delete-question/{{$question->id}}" method="POST">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            @else
            <div id='hide-quiz'>
                @foreach($quizzes as $quiz)
                    @if($quiz->approved)
                    <div>
                        
                        <div>
                            <h5 >{{$quiz->title}}</h5>
                            <p >{{$quiz->description}}</p>
            
                            <div style="display: flex; flex-direction: row;">
                                <a href="/edit-page/{{$quiz->id}}" class="btn me-2 btn-outline-dark">Edit</a>
                                <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            
                <div id='dissapear-question'>
                    @foreach($questions as $question)
                        <div>
                            
                            <div>
                                <h5 >{{$question->question}}</h5>
                                <p ><strong>Of</strong>: {{$quizzes->where('id', $question->quiz_id)->first()->title}}</p>
                
                                <div>
                                    <a href="/edit-question/{{$question->id}}" >Edit</a>
                                    <form action="/delete-question/{{$question->id}}" method="POST">
                                        @csrf
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
                <div id='hide-approvals'>
                    @foreach($quizzes->where('approved', 0) as $quiz)
                        <div class="card m-3">
                            
                            <div>
                                <h5 >{{$quiz->title}}</h5>
                                <p >{{$quiz->desc}}</p>
                
                                <div>
                                    <form action="/approve/{{$quiz->id}}" method="POST">
                                        @csrf
                                        <button type="submit" >Approve</button>
                                    </form>
                                    <form action="/delete-quiz/{{$quiz->id}}" method="POST">
                                        @csrf
                                        <button type="submit" >Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    @endif   

</body>
</html>