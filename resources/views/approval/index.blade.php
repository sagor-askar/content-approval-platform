@extends('includes.adminLayout')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-list">
                    </i>
                </div>
                <div>Content Approval
                    <div class="page-title-subheading">Approve Stories From Here
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <h5>New Content</h5>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
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
                    @forelse ($allContent as $post)
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
                            <form action="{{ route('posts.updateStatus', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')

                                <button type="submit" name="status" value="approved" class="btn btn-sm btn-success" onclick="return confirm('Approve this post?')">Approve</button>

                                <button type="submit" name="status" value="rejected" class="btn btn-sm btn-warning" onclick="return confirm('Reject this post?')">Reject</button>
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

        <hr>

        <div class="container">
            <h5>Approved Content</h5>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>SL.</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Categories</th>
                        <th>Tags</th>
                        <th>Author</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($approvedContent as $post)
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

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No posts found.</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

        <hr>

        <div class="container">
            <h5>Archived Content</h5>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>SL.</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Categories</th>
                        <th>Tags</th>
                        <th>Author</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($archivedContent as $post)
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

</div>
@endsection
