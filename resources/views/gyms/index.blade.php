@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($boulderGyms as $boulderGym)
        <div class="col-md-8" >
            <a href="{{ route('gyms.show', ['gym' => $boulderGym->id]) }}">
                <div class="card">
                    <div class="card-header">{{ $boulderGym->name }}</div>

                    <div class="card-body">

                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
