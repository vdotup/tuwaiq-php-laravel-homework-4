@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-4">
                        <form action="{{ route('saveItemGroup') }}" method="post">
                            @csrf
                            <label for="itemGroupName" class="p-2">اسم المجموعة</label>
                            <input type="text" class="form-control form-control-sm" name="itemGroupName"
                                id="itemGroupName">

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
                            <th>رقم المجموعة</th>
                            <th>اسم المجموعة</th>
                            <th colspan="2">اجراء</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->itemGroupName }}</td>
                                <td>
                                    <a href="{{ route('deleteItemGroup', ['id' => $row->id]) }}"><i
                                            class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('editItemGroup', ['id' => $row->id]) }}"><i
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
