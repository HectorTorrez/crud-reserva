
<h1>Editar datos de reservacion</h1>

<form action="{{ url('/reserva/'.$reserva->id) }}" method="POST">
@csrf
{{ method_field('PUT') }}
@include('reservas.form')
</form>