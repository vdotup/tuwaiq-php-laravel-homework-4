@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="alert alert-success text-center">أهلاً بكم في موقعي</h1>
        <div class="row text-center d-flex align-items-center justify-content-center">
            <div class="col-sm-4 text-center">
                <a href="{{ route('items') }}">
                    <div class="card">
                        <div class="card-body">
                            <h4>العناصر</h4>
                            <h3><i class="bi bi-collection"></i></i></h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4 text-center">
                <a href="{{ route('itemgroup') }}">
                    <div class="card">
                        <div class="card-body">
                            <h4>مجموعات العناصر</h4>
                            <h3><i class="bi bi-collection"></i></i></h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
