<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="iee=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ホームページ</title>
</head>
<body>
    <div class="container">
    <br>
    <br>
    <br>
      <div class="border">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">bootstrap-test</a>
                </div>
            </nav>
        </header>
        </br>
        <h1>morizou1130</h1>
        <a href="{{ route('homepage.create') }}" >つぶやき作成ページへ</a>
        <h1>つぶやきたち</h1>
          <div class="col">
            <div>
            @foreach($tweets as $tweet)
              @foreach($comments as $comment)
                <div class="border">
                     <p> {{ $tweet -> content }}</p>
                       <form action="{{ route('homepage.goodCount') }}" label="good" method="post">
                          @csrf
                          <button name="good" type="submit" value= "{{ $tweet -> id }}" >
                            いいね！ {{ $tweet -> goodCount }}
                          </button>
                       </form>
                     <p>{{ $tweet -> good_count }}</p>
                     <details>
                        <summary>
                          {{$comment_count[$tweet -> id]}} 
                        </summary>
                          <p>
                            
                          <br></br>
                            <p>
                              <?php
                                if($tweet->id===$comment->tweet_id){
                                  echo $comment->id;
                                  echo ' : ';
                                  echo $comment->content;
                                  echo '<br>';
                                }
                              ?>
                            </p>
                            <form action=" {{ route('homepage.createComment') }} " method="post" ravel="comment">
                              @csrf
                              <input id="comment" type="text" name="name" placeholder="名前を入力してください(匿名も可能)" value="匿名"></input>
                              <textarea id="comment" type="text" name="comment" placeholder="コメントを入力"></textarea>
                              <button name="tweet_id" value="{{ $tweet -> id }}"type="submit" >
                                コメントを投稿！
                              </button>
                            </form>
                          </p>
                     </details>
                </div>
                </br>
              @endforeach
            @endforeach
            </div>
          </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </div>
    </div>
</body>
</html>