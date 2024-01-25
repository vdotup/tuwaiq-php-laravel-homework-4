@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="alert alert-success">تعديل بيانات مجموعات الأصناف</h1>
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <form action="{{ route('updateItem') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $row->id }}">
                            <label for="x1">الاسم</label>
                            <input type="text" name="itemName" id="itemName" value="{{ $row->itemName }}">

                            <label for="x1">السعر</label>
                            <input type="text" name="price" id="price" value="{{ $row->price }}">

                            <label for="x1">الكمية</label>
                            <input type="text" name="quantity" id="quantity" value="{{ $row->quantity }}">

                            <label for="x1">اللون</label>
                            <input type="text" name="color" id="color" value="{{ $row->color }}">

                            <label for="x1">المجموعة</label>
                            <input type="text" name="itemGroupID" id="itemGroupID" value="{{ $row->itemGroupID }}">

                            <div class="text-center">
                                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
