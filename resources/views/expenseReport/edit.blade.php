@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Editar reporte" {{$report->title}} "</h1>
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
        <form action="/expense_reports/{{$report->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Type in Title" value="{{ old('title', $report->title) }}">
            </div>
            <button class=" btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>



</div>
@endsection