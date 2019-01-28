@extends('layouts.template')
@section('content')
<section class="dashboard">
                <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>CREATE APP</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                {!! Form::open(['route' => 'apps.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>APP NAME</label>
                                            <input name="name" type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>APP LINK</label>
                                            <input name="link" type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                        
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>APP DESC</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>APP IMAGE</label>
                                            <input name="image" type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-group">
                                            <label>APP VERSION</label>
                                            <input name="version" type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                        <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" onclick="document.getElementById(['name', 'version', 'description', 'image', 'link']).value = ''" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                        </div>
                                        
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection