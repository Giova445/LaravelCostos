@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Enviar Reporte</h1>
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
        <form action="/expense_reports/{{$report->id}}/sendMail" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email:" value="{{old('email')}}">
            </div>
            <button class="btn btn-primary" type="submit">Enviar Email</button>
        </form>
    </div>
</div>



</div>
@endsection