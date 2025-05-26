@extends('dashboard.adminLayout')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-list">
                        </i>
                    </div>
                    <div>Edit Category Details
                        <div class="page-title-subheading">Manage categories from here...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                {{-- Form --}}
                <form method="POST" action="{{ route('categories.update', $category->id) }}">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label>Category Name</label>
                        <input name="name" value="{{ $category->name }}" class="form-control" required>
                    </div>
                    <button class="btn btn-primary mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
