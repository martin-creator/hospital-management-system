@extends('layouts.main')

@section('content')
    <div class="container-lg" style="margin:0 auto; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:blueviolet;">
        <h2 class="text-center mt-2 mb-2">My Bookings</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Booking id</th>
                    <th scope="col">Appointment id</th>
                    <th scope="col">Department name</th>
                    <th scope="col">Appointment Date</th>
                    <th> Want to cancel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <th scope="row">{{ $booking->appointment_id }}</th>
                        <td>{{ $booking->department_name }}</td>
                        <td> {{ $booking->appointment_date }}</td>
                        {{-- <td>Please call 0765434231</td> --}}
                        <td>
                            <form method="post" action="{{ route('cancelBooking')}}">
                                @csrf
                                <input type="hidden" value="{{$booking->id}}" name="booking_id" >
                                <input type="hidden" value="{{$booking->appointment_id}}" name="appointment_id" >
                                <input type="submit"  value="cancel" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
