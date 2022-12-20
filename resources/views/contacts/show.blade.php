@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Info</div>
                    <div class="card-body">
                        <p>Name: {{ $contact->name }}</p>
                        <!--Con mailto, se abre el correo para enviar directamente-->
                        <p>Email: <a href="mailto:"{{ $contact->email }}>{{ $contact->email }}</a></p>
                        <p>Phone: <a href="tel:"{{ $contact->phone_number }}>{{ $contact->phone_number }}</a></p>
                        <p>Age: {{ $contact->age }}</p>
                        <p>Created at: {{ $contact->created_at }}</p>
                        <p>Updated at: {{ $contact->update_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
