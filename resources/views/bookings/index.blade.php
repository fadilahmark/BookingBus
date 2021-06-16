@extends('bookings.layout')

@section('content')
<div class="pull-left">

    <h2>Booking Bus System</h2>

</div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('bookings.create') }}">Create New Booking</a>
            </div>
        </div>
    </div>

<!-- error message -->

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Departure Date</th>
            <th>Pick-Up Point</th>
            <th>Destination</th>
            <th>Name</th>
            <th>IC No</th>
            <th>Action</th>
        </tr>
        @foreach($bookings as $booking)

        <tr>
            <td>{{ ++$i }}</td>
            <td> {{ $booking -> departure_date }}</td>
            <td> {{ $booking -> pickup_point }}</td>
            <td> {{ $booking -> destination }}</td>
            <td> {{ $booking -> name }}</td>
            <td> {{ $booking -> ic_no }}</td>
            <td> 
                <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('bookings.edit',$booking->id) }}">EDIT</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>