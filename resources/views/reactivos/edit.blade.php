@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('reactivos.index') !!}">Reactivo</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Reactivo</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($reactivo, ['route' => ['reactivos.update', $reactivo->id], 'method' => 'patch']) !!}

                              @include('reactivos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection