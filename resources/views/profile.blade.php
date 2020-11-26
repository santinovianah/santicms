
@extends('kuishome')

@section('profile')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Profile
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ ('user') }}">
                        @method('patch')
                        @csrf
                        
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Feature Image</label>

                            <div class="col-md-6">
                            <input type="file" class="form-control" required="required" name="image" id="image" type="file" class="form-control" required="required" name="image">
                        <br>
                        <button type="submit" name="add" class="btn btn-primary float-right">Tambah Foto</button>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                             
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                              
                            </div>
                        </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection