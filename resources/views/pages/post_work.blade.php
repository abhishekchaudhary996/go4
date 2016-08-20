@extends('layouts.form_wizard')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li> <a href="index.html"> <i class="fa fa-home"></i> </a> </li>
                <li><span>Layouts</span></li>
                <li><span>Sidebar Size XS</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
                            <div class="col-xs-12">
                                <section class="panel form-wizard" id="w4">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                        </div>
                        
                                        <h2 class="panel-title">Fill the form to post your work</h2>
                                    </header>
                                    <div class="panel-body">
                                        <div class="wizard-progress wizard-progress-lg">
                                            <div class="steps-progress">
                                                <div class="progress-indicator"></div>
                                            </div>
                                            <ul class="wizard-steps">
                                                <li class="active">
                                                    <a href="#w4-account" data-toggle="tab"><span>1</span>Title</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-profile" data-toggle="tab"><span>2</span>Full Description</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-billing" data-toggle="tab"><span>3</span>Files Upload</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-confirm" data-toggle="tab"><span>4</span>Post</a>
                                                </li>
                                            </ul>
                                        </div>
                        
                                        <form class="form-horizontal" novalidate="novalidate">
                                            <div class="tab-content">
                                                <div id="w4-account" class="tab-pane active">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-username">Title of the work</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="username" id="w4-username" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-profile" class="tab-pane">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <section class="panel">
                                                                <div class="panel-body">
                                                                    <form class="form-horizontal form-bordered form-bordered" action="#">
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <section class="panel">
                                                                                        <header class="panel-heading">
                                                                                            <div class="panel-actions">
                                                                                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                                            </div>
                                                                                        </header>
                                                                                        <div class="panel-body">
                                                                                            <form class="form-horizontal form-bordered">
                                                                                                <div class="form-group">
                                                                                                    <label class="col-md-3 control-label">Full Description</label>
                                                                                                    <div class="col-md-9">
                                                                                                        <div class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>Start typing...</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-billing" class="tab-pane">
                                                    <section class="panel">
                                                        <header class="panel-heading">
                                                            <div class="panel-actions">
                                                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                            </div>
                                            
                                                            <h2 class="panel-title">Click or Drag and Drop to upload</h2>
                                                        </header>
                                                        <div class="panel-body">
                                                            <form action="/upload" class="dropzone dz-square" id="dropzone-example"></form>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div id="w4-confirm" class="tab-pane">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-email">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="email" id="w4-email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-3"></div>
                                                        <div class="col-sm-9">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="terms" id="w4-terms" required>
                                                                <label for="w4-terms">I agree to the terms of service</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">
                                        <ul class="pager">
                                            <li class="previous disabled">
                                                <a><i class="fa fa-angle-left"></i> Previous</a>
                                            </li>
                                            <li class="finish hidden pull-right">
                                                <a>Finish</a>
                                            </li>
                                            <li class="next">
                                                <a>Next <i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                        </section>

@endsection