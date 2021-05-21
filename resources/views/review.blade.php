@extends("layouts.app")

@section("title-blog")My review
@endsection


@section("content")
<h1>review</h1>
 
@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form method="post" action="/review/check" >
@csrf

    <div class="form-group">
    <label for="name">введите имя</label>
    <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="email">введите Email</label>
    <input type="text" name="email" placeholder="введите емаил" id="email" class="form-control">
    </div>
    <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" placeholder="введите тему" id="subject" class="form-control">
    </div>

    <div class="form-group">
    <label for="message">Cообщения</label><br>
    <textarea type="text" name="message" placeholder="введите сообщение" id="message" class="form-control">
    </textarea>
    </div>

    <button type="submit" class="btn btn-success">Отпарвить</button> 

</form>
<br>
<h1>все отзывы</h1>
@foreach($reviews as $el)
<div class="alert alert-warning">
<h3>{{$el->subject}}</h3>
<b>{{$el->email}}</b>
<p>{{$el->message}}</p>
</div>
@endforeach

@endsection