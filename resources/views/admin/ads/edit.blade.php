@extends('layouts.template')
@section('content')
<section class="dashboard">
                <div class="container-fluid py-4 forms">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>SETTING ADS &amp; APP</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body">
                                    {!! Form::model($ad, ['route' => ['ads.update', $ad->id], 'method' => 'PUT', 'files' => true]) !!}
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>BANNER ID</label>
                                            {{ Form::text('banner', null, array('id' => 'banner','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>INTERSTITIAL ID</label>
                                            {{ Form::text('interstitial', null, array('id' => 'interstitial','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>REWARD ID</label>
                                            {{ Form::text('reward', null, array('id' => 'reward','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>APP VERSION</label>
                                            {{ Form::text('app_version', null, array('id' => 'app_version','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>APP LINK</label>
                                            {{ Form::text('link', null, array('id' => 'link','class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                        </div>
                                        <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit <i class="ft-thumbs-up position-right"></i></button>
                                            <button type="reset" onclick="document.getElementById(['banner', 'reward', 'interstitial', 'app_version', 'link']).value = ''" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
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