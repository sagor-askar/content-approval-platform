@extends('includes.userLayout')
@section('content')

<div class="container">
    <h1 class="mb-4">All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Categories</th>
                    <th>Tags</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->thumbnail_path)
                        <img src="{{ asset($post->thumbnail_path) }}" width="100" alt="thumbnail">
                        @else
                        N/A
                        @endif
                    </td>
                    <td>
                        @foreach ($post->categories as $category)
                        <span class="badge bg-secondary">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                        <span class="badge bg-info text-dark">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No posts found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
