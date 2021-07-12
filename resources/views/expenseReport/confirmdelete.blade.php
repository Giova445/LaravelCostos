@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Eliminar Reporte" {{$report->title}} "</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary" href="/expense_reports">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/expense_reports/{{$report->id}}" method="post">
            @csrf
            @method('delete')
            <button class=" btn btn-primary" onclick="return confirm('¿Realmente desea eliminar este recurso')" type="submit">Delete</button>
        </form>
    </div>
</div>



</div>
@endsection