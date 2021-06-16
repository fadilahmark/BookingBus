@extends('bookings.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('bookings.index') }}">Back</a>
        </div>
    
    </div>
</div>

@if($errors->any())

<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input.<br><br>

    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>

</div>

@endif

<form action="{{ route('bookings.update',$booking->id) }}" method="POST">

@csrf
@method('PUT')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departure Date</strong>
                <input type="date" name="departure_date" value="{{ $booking->departure_date }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pick Up Point</strong>
                <input type="text" name="pickup_point" value="{{ $booking->pickup_point }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Destination</strong>
                <input type="text" name="destination" value="{{ $booking->destination }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" value="{{ $booking->name }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IC No</strong>
                <input type="text" name="ic_no" value="{{ $booking->ic_no }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">           
            <button type="submit" class="btn btn-primary">Submit</button>         
        </div>

    </div>

</form>

@endsection