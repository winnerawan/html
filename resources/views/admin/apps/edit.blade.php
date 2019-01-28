@extends('layouts.template')
@section('content')
<section class="dashboard">
                <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>EDIT APP</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    {!! Form::model($app, ['route' => ['apps.update', $app->id], 'method' => 'PUT', 'files' => true]) !!}
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>APP NAME</label>
                                            {{ Form::text('name', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>APP LINK</label>
                                            {{ Form::text('link', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                        
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>APP DESC</label>
                                            {{ Form::textarea('description', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>APP IMAGE</label>
                                            {{ Form::text('image', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>APP VERSION</label>
                                            {{ Form::text('version', null, array('id' => 'name','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
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