@extends('welcome')
@section('content')
    <div class="row mb-4">
        <a class="btn btn-success" style="width: 288px;" href="{{ URL::to('/') }}">Back to Rocket Lunch Page</a>
    </div>
    <div class="list">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Rocket Name</th>
                <th scope="col">Rocket launch Datetime</th>
                <th scope="col">Rocket Back Datetime</th>
                <th scope="col">Earth to SpaceX Reach Time</th>
                <th scope="col">SpaceX to Earth Back Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $value)
                <tr>
                    <td>{{ $value->rocket_name }}</td>
                    <td>{{ $value->rocket_launch_datetime }}</td>
                    <td>{{ $value->rocket_back_datetime }}</td>
                    <td>{{ $value->earth_to_space_reach_time }} s</td>
                    <td>{{ $value->space_earth_to_back_time }} s</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
