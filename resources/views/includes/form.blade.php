@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>    
    </div>
@endif

<form action="{{route('contact-form')}}" method="post">
    @csrf <!--защита в стиле laravel-->
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Почта</label>
        <input type="text" name="email" id="email" placeholder="Введите почту" class="form-control">
    </div>
    <div class="form-group">
        <label for="theme">Тема обращения</label>
        <input type="text" name="theme" id="theme" placeholder="Введите тему" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Текст обращения</label>
        <textarea type="text" name="message" id="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
</form>