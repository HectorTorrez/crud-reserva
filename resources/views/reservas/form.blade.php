@include('reservas.navegacion')
<div class="container  ">
	<div class="row mt-5">
        <form class="form-horizontal">
        <h2 class="">Nueva Reservacion</h2>
        <hr>
<fieldset>
            <div class=" d-flex justify-content-center w-100">
                <div class="form-group col-md-5 fw-bold ">
                        <label class="col-md-4 control-label" for="name">Name:</label>
                    <input class="form-control input-md" placeholder="Tu nombre completo" type="text" name="name" id= "" value="{{ isset($reserva->name)?$reserva->name:'' }}">
                    <label class="col-md-4 control-label" for="age">Age:</label>
                    <input class="form-control input-md" placeholder="Tu edad" type="text" name="age" id="" value="{{ isset($reserva->age)?$reserva->age:'' }}">
                    <label class="col-md-4 control-label" for="phone">Phone:</label>
                    <input class="form-control input-md" placeholder="Tu numero de celular" type="text" name="phone" id= "" value="{{ isset($reserva->phone)?$reserva->phone:'' }}">
                    <label class="col-md-4 control-label" for="dui">DUI:</label>
                    <input class="form-control input-md" placeholder="Tu DUI sin guiones(-)" type="text" name="dui" id= "" value="{{ isset($reserva->dui)?$reserva->dui:'' }}">
                    <label class="col-md-4 control-label" for="date">Date:</label>
                    <input class="form-control input-md" placeholder="Tu fecha" type="date" name="date" id= "" value="{{ isset($reserva->date)?$reserva->date:'' }}">
                    <label class="col-md-4 control-label" for="gender">Gender:</label>
                    <input class="form-control input-md" placeholder="Tu genero" type="text" name="gender" id= "" value="{{ isset($reserva->gender)?$reserva->gender:'' }}">
                    <button class="btn btn-success mt-2" type="submit"><i class="glyphicon glyphicon-ok"> </i> Agregar</button> 
                    <a href="{{url('reserva')}}" class="btn btn-default-btn-xs btn-primary mt-2 mx-4 pull-right"><i class="glyphicon glyphicon-plus"></i> Ver listado</a>
                </div>
 
            </div>
</fieldset>
        </form>
    </div>
</div>

