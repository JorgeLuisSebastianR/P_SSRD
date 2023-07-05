@csrf
<input type="hidden" name="Id_Oportunidad" value="{{ $oportunidad->Id_Oportunidad}}">
<input type="hidden" name="Id_Validador" value="{{ Auth::user()->id}}">
<input type="hidden" name="fechaRevicio" value="{{ date('Y-m-d') }}">