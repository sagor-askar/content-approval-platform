@extends('includes.userLayout')
@section('content')

<div class="container">
    <h1 class="mb-4">All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th></th>
                    <th>SL.</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Categories</th>
                    <th>Tags</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td></td>
                    <td>{{ $post->id ?? '' }}</td>
                    <td>{{ $post->title ?? '' }}</td>
                    <td>{{ $post->content ?? '' }}</td>

                    <td>
                        @foreach ($post->categories as $category)
                        <span class="badge bg-secondary text-white">{{ $category->name }}</span>
                        @endforeach
                    </td>

                    <td>
                        <span class="badge bg-info text-dark">{{ $post->tags }}</span>
                    </td>

                    <td>{{ $post->user->name }}</td>

                    @if($post->status === 'pending')
                    <td>Pending</td>
                    @elseif($post->status === 'approved')
                    <td>Approved</td>
                    @elseif($post->status === 'rejected')
                    <td>Rejected</td>
                    @else
                    <td>Archived</td>
                    @endif

                    <td>
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
