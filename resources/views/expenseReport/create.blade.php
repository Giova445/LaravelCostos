@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                <li>
                    {{$err}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/expense_reports" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="escribe un titulo" value="{{old('title')}}">
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>



</div>
@endsection