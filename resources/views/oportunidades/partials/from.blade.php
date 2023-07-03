@csrf
<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Empresa</label>
        <input type="text" class="form-control" name="Id_Empresa" value="{{isset($oportunidad)?$oportunidad->Id_Empresa :old('Id_Empresa')}}" required></div></div>

<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion" value="{{isset($oportunidad)?$oportunidad->Descripcion:old('Descripcion')}}" required></div></div>
 
<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Requisitos</label>
        <input type="text" class="form-control" name="Requisitos" value="{{isset($oportunidad)?$oportunidad->Requisitos:old('Requisitos')}}" required></div></div>

<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Duracion</label>
        <input type="text" class="form-control" name="Duracion" value="{{isset($oportunidad)?$oportunidad->Duracion:old('Duracion')}}" required></div></div>

<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Perfil</label>
        <input type="text" class="form-control" name="Perfil" value="{{isset($oportunidad)?$oportunidad->Perfil:old('Perfil')}}" required></div></div>

<div class="row">
    <div class="col-12" ><div class="form-group">
        <label for="">Tipo</label>
        <input type="text" class="form-control" name="Tipo" value="{{isset($oportunidad)?$oportunidad->Tipo:old('Tipo')}}" required></div></div>