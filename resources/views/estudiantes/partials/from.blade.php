@csrf

<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="Id_Empresa"
                value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">ApellidoPaterno:</label>
            <input type="text" class="form-control" name="Id_Empresa"
                value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">ApellidoMaterno:</label>
            <input type="text" class="form-control" name="Id_Empresa"
                value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">numControl:</label>
            <input type="text" class="form-control" name="Id_Empresa"
                value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">fechaNacimiento:</label>
            <input type="datetime-local" class="form-control" name="Id_Empresa"
                value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
        </div>
    </div>



    <div class="col-12">
        <div class="form-group">
            <label for="">Genero:</label>

            <select class="form-control" name="genero">
                <option value="0">Opciones: </option>
                @foreach($estudiantes as $estudiante)
                <option value="{{$estudiante->genero}}">
                    {{$estudiante->genero }}
                </option>
                @endforeach
            </select>
                </div>
                    </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">carrera:</label>
                        <select class="form-control" name="carrera">
                            <option value="0">Opciones: </option>
                            @foreach($estudiantes as $estudiante)
                            <option value="{{$estudiante->carrera}}">
                                {{$estudiante->carrera }}
                            </option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="">telefono:</label>
                    <input type="text" class="form-control" name="Id_Empresa"
                        value="{{--isset($estudiante)?$estudiante->Id_Empresa :old('Id_Empresa')--}}" required>
                </div>
            </div>
        </div>