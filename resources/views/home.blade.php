@extends('pagecontainer')

@section('content')

<div class="container h-100">
    <div class="row h-100 mt-5 d-flex justify-content-around">
        <div class="col-md-12">
            <h2 class="mb-5 text-center" style="color: #b32d2e;">Recent Predictions</h2>
            <table class="table table-striped table-hover table-responsive-md">
                <caption>List of Recent Predictions</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>Row</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($predictions as $index => $prediction)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $prediction->model }}</td>
                        <td>&#8358;  {{ number_format($prediction->price, 2) }}</td>
                        <td>{{ $prediction->year }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
         </div>

    </div>
</div>
@endsection
