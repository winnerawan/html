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
                                            {{ $apps->count()}} App are <b class="text-red">completed</b> of 50                                   
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="progress mt-2">
                                                <div class="progress-bar" role="progressbar" style="width: {{$apps->count()/50*100}}%" aria-valuenow="{{$apps->count()}} /50*100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <ul class="list-unstyled">
                                        @foreach($apps as $app)
                                        <a href="{{url('/apps/'.$app->id.'/edit')}}">
                                        <li class="my-3 pl-3 p-1">
                                            <div class="d-inline-block">
                                            <h5 class="m-0 text-muted">{{ $app->name }}</h5>
                                                <span class="text-read"><b class="text-red">VERSION: {{$app->version}}</b> &#8226; Completed</span>
                                            </div>
                                            <div class="tools">
                                                {{-- <a class="btn btn-edit" href="{{url('/apps/'.$app->id.'/edit')}}">
                                                    <i class="la la-edit"></i>                                                
                                                </a> --}}
                                                {!! Form::open(['route' => ['apps.destroy', $app->id], 'method' => 'DELETE']) !!}
                                                <button class="btn btn-delete">
                                                    <i class="la la-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </li>
                                        </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
