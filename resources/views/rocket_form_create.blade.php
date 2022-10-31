@extends('welcome')
@section('content')
    <form method="post" action="{{ route('rocket-date-store') }}">
        @csrf
        <div class="form-group mb-2">
            <label for="rocketName">Rocket Name:</label>
            <input type="text" class="form-control" name="rocket_name" id="rocketName" placeholder="Enter Rocket name">
        </div>

        <div class="form-group mb-2">
            <label for="rocket_launch_datetime">Rocket Launch Datetime:</label>
            <input type="datetime-local" class="form-control" name="rocket_launch_datetime" id="rocket_launch_datetime" placeholder="rocket launch datetime">
        </div>

        <div class="form-group mb-2">
            <label for="initial_spreed">Initial Spreed:</label>
            <input type="number" class="form-control" name="initial_spreed" id="initial_spreed">
        </div>

        <div class="form-group mb-2">
            <label for="last_spreed">Last Spreed:</label>
            <input type="number" class="form-control" name="last_spreed" id="last_spreed">
        </div>

        <div class="form-group mb-2">
            <label for="acceleration">Acceleration:</label>
            <input type="number" class="form-control" name="acceleration" id="acceleration">
        </div>

        <div class="form-group mb-2">
            <label for="linear_spreed_at_empty_space">Linear Spreed at Empty Space:</label>
            <input type="number" class="form-control" name="linear_spreed_at_empty_space" id="linear_spreed_at_empty_space">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
