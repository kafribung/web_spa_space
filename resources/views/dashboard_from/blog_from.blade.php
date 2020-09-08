<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control"  value="{{ $blog->title ?? old('title') }}" autocomplete="off" autofocus placeholder="input title" id="title">
    @if ($errors->has('title'))
        <p class="alert alert-danger">{{ $errors->first('title') }}</p>
    @endif
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" placeholder="description">{{ $blog->description ?? old('description') }}</textarea>
    @error('description')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
</div>
<button class="btn  {{ $blog ? 'btn-warning' : 'btn-primary'}} float-right">{{ $blog ? 'Edit' : 'Store' }}</button>