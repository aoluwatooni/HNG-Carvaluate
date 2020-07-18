@extends('pagecontainer')

@section('content')

@if($predictions->count() > 0)

    <div class="container h-100">
        <div class="row h-100 mt-5 d-flex justify-content-around">
            <div class="col-md-12">

                    <h2 class="mb-5 text-center" style="color: #b32d2e;">Recent Predictions</h2>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('input') }}" type="button" class="btn btn-info mr-1 mb-3">
                                Make A Prediction   <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-responsive-md">
                        <caption>List of Recent Predictions</caption>
                        <thead class="thead-dark">

                            <tr>
                                <th>#</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Price</th>
                                <th>Fuel</th>
                                <th>Mileage</th>
                                <th>Transmission</th>
                                <th>Seats</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($predictions as $index => $prediction)
                                @if ($prediction->user_id == Auth::id())
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $prediction->model }}</td>
                                        <td>{{ $prediction->year }}</td>
                                        <td>&#8358;  {{ number_format($prediction->price, 2) }}</td>
                                        <td>{{ $prediction->fuel }}</td>
                                        <td>{{ $prediction->km }}</td>
                                        <td>{{ $prediction->tt }}</td>
                                        <td>{{ $prediction->seats }}</td>
                                        <td>
                                            <a  href="{{ route('predict.delete', ['id' => $prediction->id]) }}"
                                                type="button" class="btn btn-lg btn-alt-danger">
                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @else

                                     <p></p>

                                     @endif

                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>


@else

    <div class="container h-100">
        <div class="row h-100 mt-5 d-flex justify-content-around">
            <div class="col-md-12 text-center">

                    <h2 class="mb-5 text-center" style="color: #b32d2e;">No Predictions Have Been Made Yet</h2>

                    <a href="{{ route('input') }}" type="button" class="btn btn-info mr-1 mb-3">
                    Make A Prediction   <i class="fa fa-plus"></i>
                    </a>
            </div>
        </div>
    </div>

@endif

@endsection

