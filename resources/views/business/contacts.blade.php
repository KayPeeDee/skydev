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
                        @forelse ($contacts as $contact)
                            <div class="row">
                                <div class="col-xs-6 col-md-3">
                                    {{$contact->client_name}} {{$contact->client_surname}}

                                </div>
                                <div class="col-xs-6 col-md-3">
                                    <div class="clearfix">
                                        <h5>{{$contact->company}}</h5>
                                        <h6 >{{$contact->position}}</h6>


                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3">
                                    <div class="clearfix">
                                        <h5>{{$contact->personal_mobile}}</h5>
                                        <h6 >{{$contact->work_mobile}}</h6>
                                        <h6 >{{$contact->whatsapp_number}}</h6>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-md-3">
                                    <a href="#" class="btn btn-secondary btn-sm float-right">
                                        View
                                    </a>

                                    <a href="#" class="btn btn-secondary btn-sm float-right">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="row">
                                <div class="alert alert-warning" role="alert">
                                    There are Contacts
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('register_my_contact') }}">
                    @csrf

                    <input  type="hidden"  name="added_by" value="{{ Auth::id() }}">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>

                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control{{ $errors->has('client_name') ? ' is-invalid' : '' }}" name="client_name" value="{{ old('client_name') }}" required autofocus>

                                @if ($errors->has('client_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('client_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="client_surname" class="col-md-4 col-form-label text-md-right">{{ __('Client Surname') }}</label>

                            <div class="col-md-6">
                                <input id="client_surname" type="text" class="form-control{{ $errors->has('client_surname') ? ' is-invalid' : '' }}" name="client_surname" value="{{ old('client_surname') }}" required>

                                @if ($errors->has('client_surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('client_surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Client Company') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required>

                                @if ($errors->has('company'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Client Position') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required>

                                @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="personal_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="personal_mobile" type="text" class="form-control{{ $errors->has('personal_mobile') ? ' is-invalid' : '' }}" name="personal_mobile" value="{{ old('personal_mobile') }}" required>

                                @if ($errors->has('personal_mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('personal_mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="work_mobile" class="col-md-4 col-form-label text-md-right">{{ __('Work Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="work_mobile" type="text" class="form-control" name="work_mobile" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook_id" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook_id" type="text" class="form-control" name="facebook_id" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twitter_handler" class="col-md-4 col-form-label text-md-right">{{ __('Twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter_handler" type="text" class="form-control" name="twitter_handler" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram_id" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>

                            <div class="col-md-6">
                                <input id="instagram_id" type="text" class="form-control" name="instagram_id" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="whatsapp_number" class="col-md-4 col-form-label text-md-right">{{ __('WhatsApp Number') }}</label>

                            <div class="col-md-6">
                                <input id="whatsapp_number" type="text" class="form-control" name="whatsapp_number" >
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register My Contact</button>
                    </div>

                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
