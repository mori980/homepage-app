<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>つぶやき作成ページ</title>
</head>
<body>
    <h1>つぶやき作成ページ</h1>
    <p>つぶやいてね</p>
    <form action="{{ route('homepage.create.post') }}" method="post">
        @csrf
        <label for="tweet-content">つぶやき</label>
        <span>140字まで</span>
        <textarea id="tweet-content" type="text" name="tweet"
        placeholder="つぶやきを入力"></textarea>
        @error('tweet')
        <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">投稿</button>
    </form>
    <a href="{{ route('homepage') }}">戻る</a>
</body>
</html>