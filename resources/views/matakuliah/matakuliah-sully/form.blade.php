<div class="form-group {{ $errors->has('kodeMatakuliah') ? 'has-error' : ''}}">
    <label for="kodeMatakuliah" class="control-label">{{ 'Kodematakuliah' }}</label>
    <input class="form-control" name="kodeMatakuliah" type="text" id="kodeMatakuliah" value="{{ isset($matakuliahsully->kodeMatakuliah) ? $matakuliahsully->kodeMatakuliah : ''}}" >
    {!! $errors->first('kodeMatakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('namaMatakuliah') ? 'has-error' : ''}}">
    <label for="namaMatakuliah" class="control-label">{{ 'Namamatakuliah' }}</label>
    <textarea class="form-control" rows="5" name="namaMatakuliah" type="textarea" id="namaMatakuliah" >{{ isset($matakuliahsully->namaMatakuliah) ? $matakuliahsully->namaMatakuliah : ''}}</textarea>
    {!! $errors->first('namaMatakuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <input class="form-control" name="sks" type="number" id="sks" value="{{ isset($matakuliahsully->sks) ? $matakuliahsully->sks : ''}}" >
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
