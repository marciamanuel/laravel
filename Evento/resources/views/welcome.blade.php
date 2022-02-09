@extends('layout.main')

@section('title', 'MM Events')

@section('content')


 
<div id="search-container" class="col-md-12">
<h1>Busque um evento</h1>

<form action="">

<input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
</form>
</div>

<div id="events-container" class="col-md-12">
<h2>Próximos Eventos</h2>
<p>Veja os eventos dos próximos dias</p>

<div id= "cards-container" class="row mb-5 container">
@foreach($events as $event)
<div class="card col-md-3 m-5">
    <img src="/img/5-erros-ao-aplicar-inteligência-artificial-e-robô-de-marketing.jpg" alt="{{$event->title}}">
    <div class="card-body">
    <p class="card-date">12/02/22</p>
<h5 class="card-title">{{$event->title}}</h5>
<p class="card-participantes">Xparticipantes</p>
<a href="#" class="btn btn-primary">Saber mais</a>
</div>
</div>
@endforeach

</div>
</div>





@endsection
