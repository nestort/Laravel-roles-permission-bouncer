@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('reactivos.index') }}">Reactivo</a>
            </li>
            <li class="breadcrumb-item active">Detalle</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Detalles</strong>
                                 
                             </div>
                             <div class="card-body">
                                 @include('reactivos.show_fields')
                                 <a href="{{ route('reactivos.index') }}" class="btn btn-secondary">Atrás</a>
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
