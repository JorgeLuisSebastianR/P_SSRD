@csrf
<div class="row">
    <div class="col-12" ><div class="form-group">
    <label for="">Nombre:</label>
    <input type="text" class="form-control" name="name" value="{{isset($user)?$user->name :old('name')}}" required></div></div>

    <div class="col-12" ><div class="form-group">
    <label for="">Email:</label>
    <input type="text" class="form-control" name="email" value="{{isset($user)?$user->email  :old('email')}}" required></div></div>
     
    <div class="col-12" ><div class="form-group">
    <label for="">Password:</label>
    <input type="text" class="form-control" name="password" value="{{isset($user)?$user->password :old('password')}}" required></div></div>
