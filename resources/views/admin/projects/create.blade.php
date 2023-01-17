@extends('layouts.admin')

@section('content')


<div id="editproj">
    <div class="container">
        <h1>New Project</h1>
<div class="row bg-white">
    <div class="col-12">
        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
            @csrf
            @method('POST')

              <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="10" class="form-control" id="description" name="description"></textarea>
              </div>

              <div class="mb-3">
                <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                <label for="create_cover_image" class="form-label">Immagine</label>
                <input type="file" accept=".png, .jpeg .svg"name="cover_image" id="create_cover_image" class="form-control  @error('cover_image') is-invalid @enderror">
                @error('cover_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- <div class="mb-3">
                <label for="category_id" class="form-label">Seleziona categoria</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                  <option value="">Select category</option>
                  @foreach ($categories as $category)
                      <option value="{{$category->id}}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{$category->name}}</option>
                  @endforeach
                </select>
                @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div> --}}

              <button type="submit" class="btn btn-success">Submit</button>
              <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>
    </div>
</div>

{{-- <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript">
</script> --}}
<script type="text/javascript">
//   bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
    
@endsection