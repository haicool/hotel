@extends('layouts.admin')
@section('title', 'Tg Real estate')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">لوحة التحكم</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                هذا الأسبوع
            </button>
        </div>
    </div>

    <h2>عنوان القسم</h2>
    <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>رقم الغرفة</th>
                        <th>نوع الغرفة</th>
                        <th>الحالة</th>
                        <th>النزيل</th>
                        <th>إدارة</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tr>
                    @php($n=1)
                    @foreach($rooms as $room)
                        <tr>
                            <td><?= $n++ ?></td>
                            <td><?= $room->name ?></td>
                            <td><?= $room->Category->name ?></td>
                            <td><?= $room->Status->name ?></td>
                            <td>
                                @if(!empty($room->Client))
                                {{$room->Client->name}}
                                @endif
                            </td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
