@extends('templates.base')
@section('title', 'Crear causal')
@section('header', 'Crear causal')
@section('content')  
   
   @include('templates.messages')
   <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf

                <div class="row form-grouo">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control"
                        id="descriptin" name="description" required>

                    </div>
                </div>

                <div class="row form-grouo">
                    <div class="col-lg-6 mb-4">
                        <button class="btn btn-primary btn-block"
                                type="submit">
                            Guardar
                        </button>
                    </div>

                    <div class="col-lg-6 mb-4">
                         <a href="{{ route('causal.index') }}" class="btn btn-secondary btn-block" >
                            Cancelar
                                </a>
                    </div>

            
        
            </form>

    </div>

   </div>

@endsection