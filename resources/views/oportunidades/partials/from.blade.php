@csrf

<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Empresa:</label>
        <input type="text" class="form-control" name="Id_Empresa" value="{{isset($oportunidad)?$oportunidad->Id_Empresa :old('Id_Empresa')}}" required></div></div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="nombreProyecto">Nombre del Proyecto:</label>
            <input type="text" class="form-control" name="nombreProyecto" id="nombreProyecto" value="{{ isset($oportunidad) ? $oportunidad->nombreProyecto : old('nombreProyecto') }}" required></div></div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" name="Descripcion" id="descripcion" value="{{ isset($oportunidad) ? $oportunidad->Descripcion : old('Descripcion') }}" required></div></div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="requisitos">Requisitos:</label>
            <input type="text" class="form-control" name="Requisitos" id="requisitos" value="{{ isset($oportunidad) ? $oportunidad->Requisitos : old('Requisitos') }}" required></div></div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select class="form-control" name="Tipo" id="tipo" required>
                <option value="residencia" {{ (isset($oportunidad) && $oportunidad->Tipo == 'residencia') ? 'selected' : '' }}>Residencia</option>
                <option value="servicio social" {{ (isset($oportunidad) && $oportunidad->Tipo == 'servicio social') ? 'selected' : '' }}>Servicio Social</option>
            </select></div></div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="fechaInicio">Fecha de Inicio:</label>
            <input type="text" class="form-control" name="fechaInicio" id="fechaInicio" value="{{ isset($oportunidad) ? $oportunidad->fechaInicio : old('fechaInicio') }}" required></div></div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="fechaFin">Fecha de Fin:</label>
            <input type="text" class="form-control" name="fechaFin" id="fechaFin" value="{{ isset($oportunidad) ? $oportunidad->fechaFin : old('fechaFin') }}" required></div></div>
</div>
