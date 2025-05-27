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
                    <div>Admin Dashboard
                        <div class="page-title-subheading">Manage contents from here...
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Categories</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>10</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Posts</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>68</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Archieved Posts</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>46</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
