@extends("layouts.app")

@section("title-blog")My home
@endsection

@section("content")
<h1>home</h1>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic doloremque dolorem eum, vel minima tempora dolore distinctio architecto maiores quia nam repudiandae debitis eius laboriosam pariatur mollitia cupiditate, inventore qui recusandae ipsam quo, aliquid ut! Alias sunt doloremque a dolore?
</p>
@endsection

@section("aside")
    @parent
    <p>дополнительный текст</p>
@endsection