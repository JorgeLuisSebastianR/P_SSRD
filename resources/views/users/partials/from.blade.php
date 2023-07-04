@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
    </div>
</div>
