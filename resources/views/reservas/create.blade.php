@include('reservas.navegacion')



<form class="container" action="{{url('reserva')}}" method="POST">
    @csrf
    @include('reservas.form')
</form>
