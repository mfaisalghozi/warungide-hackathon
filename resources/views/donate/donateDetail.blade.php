@extends('layouts.app')

@section('content')

<div>
    <div class="jumbotron text-center">
        <h1 class="display-4"> Donating to {{$idea->ideaname}} </h1>
        <p class="lead">By {{$idea->joinWithUser->name}}</p>
    </div>
</div>

{{-- Show Detail Of Donating Amount And Confirmation Form --}}

<div class="row justify-content-center h-100">
    <div class="col-md-2">
        <form method="POST" action="/donate">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Tier Package Name :</label>
                <input type="text" readonly class="form-control-plaintext" name="tiername" id="formGroupExampleInput" placeholder="Example input" value="{{$tier->tiername}}">
            </div>
            <div class="form-group">
                <label label for="formGroupExampleInput2">Total Amount :</label>
                <input type="text" readonly class="form-control-plaintext" name="totalamount" id="formGroupExampleInput2" placeholder="Another input" value="{{$tier->tierprice}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="donation_type" value="2">
            </div>
            <button type="submit" class="btn btn-success">Donate</button>
        </form>
    </div>
</div>


@endsection