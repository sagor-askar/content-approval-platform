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
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>title</td>
                            <td>description</td>
                            <td>image</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Approve</a>
                                <form action="" method="POST" style="display:inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <hr>

            <div class="container">
                <h5>Approved Content</h5>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>title</td>
                            <td>description</td>
                            <td>image</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <hr>

            <div class="container">
                <h5>Archived Content</h5>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>title</td>
                            <td>description</td>
                            <td>image</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
