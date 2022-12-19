@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit New Contact</div>

          <div class="card-body">
            <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
              @csrf
              <!--El método post no esta soportado para la ruta de "update" put, 
                no se puede enviar directamente un método PUT, por lo que primero 
                se pone el metódo POST y después se indica el método PUT-->
              @method("PUT")
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input value="{{ old('name') ?? $contact->name }}" id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" autocomplete="name" autofocus>


                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Phone Number</label>

                <div class="col-md-6">
                  <input value="{{ old('phone_number') ?? $contact->phone_number }}" id="phone_number"
                    type="tel"
                    class="@error('phone_number') is-invalid @enderror form-control"
                    name="phone_number" autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                  <input id="email" type="text"
                    class="@error('email') is-invalid @enderror form-control"
                    name="email" value="{{ old('email') ?? $contact->email }}"
                    autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Age</label>

                <div class="col-md-6">
                  <input value="{{ old('age') ?? $contact->age }}" id="age" type="tel"
                    class="@error('age') is-invalid @enderror form-control"
                    name="age" autocomplete="age">

                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
