<div class="form-group">
    <label for="description">About</label>
    <textarea  name="description" class="form-control" id="description">{{ $about->description ?? old('description') }}</textarea>
</div>