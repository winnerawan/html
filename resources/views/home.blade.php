@extends('layouts.template')

@section('content')
            <section class="dashboard">
                    <div class="container-fluid py-4 todo-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>App List</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-header text-read bg-transparent">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            5 List are <b class="text-red">completed</b> of 50                                    
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-2">
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <ul class="list-unstyled">
                                        @foreach($apps as $app)
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">
                                            <h5 class="m-0 text-muted">{{ $app->name }}</h5>
                                                <span class="text-read"><b class="text-red">VERSION: {{$app->version}}</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                <button class="btn btn-edit">
                                                    <i class="la la-edit"></i>                                                
                                                </button>
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
