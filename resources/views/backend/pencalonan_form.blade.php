@csrf

<div class="form-group row">
  <label class="col-sm-2 col-form-label">Sesi</label>
  <div class="col-sm-10">

    <select name="sesi_id" class="form-control">
      @foreach($sesis as $sesi)
        @if(isset($calon->sesi->id) && old('sesi_id', $sesi->id) == $calon->sesi->id)
          <option value="{{ $sesi->id }}" selected>{{ $sesi->name }}</option>
        @else
          <option value="{{ $sesi->id }}">{{ $sesi->name }}</option>
        @endif
      @endforeach
    </select>
    
  </div>
</div>


<fieldset>
  <legend>Calon</legend>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Nama Calon</label>
  <div class="col-sm-10">
    <input  class="form-control" name='name' type="text" value="{{ old('name', $calon->name) }}">
  </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">No IC</label>
  <div class="col-sm-10">
    <input  name='ic' type="text" class="form-control" placeholder="No IC" value="{{ old('ic', $calon->ic) }}">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input  class="form-control" name='email' type="email" class="form-control" placeholder="Email" value="{{ old('email', $calon->email) }}">
  </div>
</div>
</fieldset>


<div class="form-group row">
  <label class="col-sm-2 col-form-label">Asas</label>
  <div class="col-sm-10">
    <textarea class="form-control" name="asas">{{ old('asas', $calon->asas) }}</textarea>
  </div>
</div>