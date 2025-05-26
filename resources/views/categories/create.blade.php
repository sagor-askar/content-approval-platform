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
                    <div>Add Category Details
                        <div class="page-title-subheading">Manage categories from here...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                {{-- Form --}}
                <form method="POST"
                    action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}">
                    @csrf
                    @if (isset($category))
                        @method('PUT')
                    @endif

                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $category->name ?? '') }}" placeholder="Enter Category Name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Save' }}</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                </form>

            </div>
        </div>


    </div>
@endsection
