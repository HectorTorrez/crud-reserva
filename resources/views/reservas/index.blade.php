@include('reservas.navegacion')



<h1>Listado de Reservaciones</h1>
<a href="{{url('reserva/create/')}}" class="btn btn-md  btn-success m-5 fw-bold"><i class="glyphicon glyphicon-plus-sign"></i> Reservaciones</a>




<table class="table table-bordered" >

    <thead class="text-monospace" >
        <tr>
            <th >#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Dui</th>
            <th>Fecha</th>
            <th>Genero</th>
            <th>Acciones</th>
            




        </tr>
    </thead>

    <tbody style="min-height:100px;">
        
    @foreach($reservas as $reserva)
        <tr>
            
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->name }}</td>
            <td>{{ $reserva->age }}</td>
            <td>{{ $reserva->phone }}</td>
            <td>{{ $reserva->dui }}</td>
            <td>{{ $reserva->date }}</td>
            <td>{{ $reserva->gender }}</td>

            
        

            <td>
            
                <form action="{{url('/reserva/'.$reserva->id)}}" method="POST">
            <a href="{{url('/reserva/'.$reserva->id.'/edit')}}"class="btn btn-default btn-sm "  style="border:none; bakcground-color:transparent;"> <i class="glyphicon glyphicon-edit text-primary"></i> </a></a>

                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-default btn-sm" type="submit" title="borrar" style="border:none; bakcground-color:transparent;"
                    onclick="return confirm ('desea eliminar el registro')"><i class="glyphicon glyphicon-trash text-danger"></i> </button>
                </form>
            </td>
        </tr>

       
        @endforeach
    </tbody>
</table>


