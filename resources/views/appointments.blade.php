@extends('layouts.main')

@section('content')
    <div class="container-lg" style="margin:0 auto; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:blueviolet;">
        <h2 class="text-center mt-2 mb-2">Appointments</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <th scope="row">{{ $appointment->id }}</th>
                        <td>{{ $appointment->department_name }}</td>
                        <td> {{ $appointment->appointment_date }}</td>
                        @if ($appointment->status)
                            <td>You cannot book right now, slot is taken!</td>
                        @else:
                            <td>
                                <form>
                                    <input type="submit" value="book" class="btn btn-primary">
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
