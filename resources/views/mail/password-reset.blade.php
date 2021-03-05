<h2>こんにちは</h2>
<p>
  いつも、Youtodoをご利用頂きまして、ありがとうございます。<br>
  下記のURLからパスワードの再設定をお願い致します。<br>
</p>
<a href="{{ route('password.reset', ['token' => $token ?? '']) }}">
  パスワード再設定リンク
</a>
