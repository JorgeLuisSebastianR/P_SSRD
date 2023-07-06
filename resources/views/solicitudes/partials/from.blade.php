@csrf

<input type="hidden" class="form-control" name="Id_Estudiante" id="Id_Estudiante" value="{{ old('Id_Estudiante') }}" required>
<input type="hidden" class="form-control" name="Id_OportunidadValidador" id="Id_OportunidadValidador" value="" required>
<input type="hidden" class="form-control" name="fechaSolicitud" id="fechaSolicitud" value="{{date('Y-m-d')}}" required>
 
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="Semestre">Semestre:</label>
            <input type="text" class="form-control" name="Semestre" id="Semestre" value="{{ old('Semestre') }}" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="Habilidades">Habilidades:</label>
            <input type="text" class="form-control" name="Habilidades" id="Habilidades" value="{{ old('Habilidades') }}" required>
        </div>
    </div>
</div>
