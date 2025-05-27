@extends('includes.userLayout')

@section('content')
<div class="container">
    <h1 class="mb-4">Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Content -->
        <div class="mb-3">
            <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Categories -->
        <div class="mb-3">
            <label class="form-label">Categories</label>
            <div class="form-check">
                @foreach ($categories as $category)
                <div>
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="form-check-input" id="category_{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                    <label for="category_{{ $category->id }}" class="form-check-label">
                        {{ $category->name }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
