@if (Auth::guest())
      You are not loged in. Please sign up or login.
@else

@extends('layouts.form_wizard')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Profile</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li> <a href="index.html"> <i class="fa fa-home"></i> </a> </li>
                <li><span>Layouts</span></li>
                <li><span>Sidebar Size XS</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->    
    <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                        </div>
                        
                                        <h2 class="panel-title">About</h2>
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal form-bordered" method="get">
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-md">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        <input type="text" class="form-control" value="@if (Auth::guest()) 
                                        administrator
                                    @else
                                    {{ Auth::user()->name }}
                                    @endif" disabled="" >
                                                    </div>
                                                    <div class="input-group mb-md">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" class="form-control" value="@if (Auth::guest()) 
                                        administrator
                                    @else
                                    {{ Auth::user()->email }}
                                    @endif" disabled="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputRounded">Bio</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control input-rounded" id="inputRounded">
                                                </div>
                                            </div>
                        
                                            

                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">DOB</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                            <input id="date" data-plugin-masked-input data-input-mask="99/99/9999" placeholder="__/__/____" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Phone</label>
                                                    <div class="col-md-6 control-label">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone"></i>
                                                            </span>
                                                            <input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </section>
                        
                                <section class="panel">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                        </div>
                        
                                        <h2 class="panel-title">Education and experiences</h2>
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal form-bordered" method="get">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputFocus">College</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" id="inputFocus" type="text" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">From</label>
                                                <div class="col-md-6">
                                                    <div class="input-daterange input-group" data-plugin-datepicker>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="start">
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="form-control" name="end">
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputPlaceholder">Currently Working in</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Currently Working in..." id="inputPlaceholder">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">File Upload</label>
                                                <div class="col-md-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="input-append">
                                                            <div class="uneditable-input">
                                                                <i class="fa fa-file fileupload-exists"></i>
                                                                <span class="fileupload-preview"></span>
                                                            </div>
                                                            <span class="btn btn-default btn-file">
                                                                <span class="fileupload-exists">Change</span>
                                                                <span class="fileupload-new">Select file</span>
                                                                <input type="file" />
                                                            </span>
                                                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputPassword">Password</label>
                                                <div class="col-md-6">
                                                    <input type="password" class="form-control" placeholder="" id="inputPassword">
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </section>
                                
                                <section class="panel">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                        </div>
                        
                                        <h2 class="panel-title">Skills and Expertise</h2>
                                    </header>
                                    <div class="panel-body">
                                        <div class="form-group">
                                                <label for="tags-input-multiple" class="col-md-3 control-label">Select Skills</label>
                                                <div class="col-md-7">
                                                    <select id="tags-input-multiple" multiple data-role="tagsinput" data-tag-class="label label-primary">
                                                        <option value="Amsterdam">c</option>
                                                        <option value="Washington">c++</option>
                                                        <option value="Washington">Laravel</option>
                                                    </select>
                                                    <p>
                                                        Use comma to seperate tags  or just hit enter.
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                </section>
                            </div>
                        </div>
</section>
@endsection

@endif