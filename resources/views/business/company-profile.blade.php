@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        {{ __('Register My Clients') }}
                        <button type="button" class="pull-right btn btn-primary m-t-10 float-right" data-toggle="modal" data-target="#add-contact">Add New Contact</button>

                    </div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
