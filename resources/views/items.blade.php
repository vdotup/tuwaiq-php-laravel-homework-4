<style>
    .justify-content-center {
        justify-content: center !important;
        margin-right: 17% !important;
    }
</style>


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-10">
                        <form action="{{ route('saveItem') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <label for="itemName" class="p-2">الاسم</label>
                                    <input type="text" class="form-control" placeholder="الاسم" name="itemName">
                                </div>
                                <div class="col">
                                    <label for="price" class="p-2">السعر</label>
                                    <input type="number" step="0.01" min="0" max="20000" class="form-control"
                                        placeholder="السعر" name="price">
                                </div>
                                <div class="col">
                                    <label for="quantity" class="p-2">الكمية</label>
                                    <input type="number" class="form-control" placeholder="الكمية" name="quantity">
                                </div>
                                <div class="col">
                                    <label for="color" class="p-2">اللون</label>
                                    <input type="text" class="form-control" placeholder="اللون" name="color">
                                </div>
                                <div class="col">
                                    <label for="itemGroupID" class="p-2">المجموعة</label>
                                    <input type="number" class="form-control" placeholder="المجموعة" name="itemGroupID">
                                </div>
                            </div>



                            <div class="row">
                                <div class="text-center">
                                    <button class="btn btn-primary mt-2" type="submit" onclick="showMessage()">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>رقم العنصر</th>
                            <th>الاسم</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                            <th>اللون</th>
                            <th>المجموعة</th>
                            <th colspan="2">اجراء</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->itemName }}</td>
                                <td>{{ $row->price }}</td>
                                <td>{{ $row->quantity }}</td>
                                <td>{{ $row->color }}</td>
                                <td>{{ $row->itemGroupID }}</td>
                                <td>
                                    <a href="{{ route('deleteItemGroup', ['id' => $row->id]) }}"><i
                                            class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('editItem', ['id' => $row->id]) }}"><i
                                            class="fa-regular fa-pen-to-square text-success"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function showMessage() {
            Swal.fire({
                title: "تم الحفظ",
                icon: "success",
                timer: 1500
            });
        }
    </script>
@endsection
