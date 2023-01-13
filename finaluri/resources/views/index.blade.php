<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <header>
        <nav >
          <div >
              @if(Auth::check())
              <form  method="POST" action="/logout">
                @csrf
                <a id="sign-in-btn"  href="/acc">My Quizzes</a>
                <button type='submit' id="register-btn" >Log out</button>
              </form>
              @else
              <form >
                <a id="login-btn"  href="/login">Login</a>
                <a id="register-btn"  href="/register">Register</a>
              </form>
              @endif
            </div>
          </div>
        </nav>
      </header>
              <div >
                  <a type="button" href='/create'>Create Quiz</a>
              
              </div>
    
       <div id="quiz-go" style="display:flex; flex-direction:column;">
        @foreach($quizzes as $quiz)
          <div >
            <div >
              <img src="{{ $quiz->img }}"  alt="Card image cap">
              <div >
                {{-- <a href="{{ route('quiz', ['id' => $quiz->id]) }}"><h5 class="card-title">{{ $quiz->title }}</h5></a> --}}
                <p class="card-text">{{ $quiz->desc }}</p>
              </div>
              <div >
                <small >Questions: {{ $questions->where('quiz_id', $quiz->id)->count() }}</small>
              </div>
            </div>
            @endforeach
       </div>
      </main>
      <footer>
      </footer>
</body>
</html>