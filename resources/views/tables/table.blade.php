@extends('index')
@section('content')
<!-- table Program -->
@if(!(empty($programs)))
<div class="col-12">
    <h1 class="text-success pt-1 fw-bold">اخر البرامج المضافة</h1>
    <div class="card recent-sales overflow-auto">
    <div class="card-body top-selling">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">صورة</th>
            <th scope="col">الاسم</th>
            <th scope="col">وصف</th>
            <th scope="col">القسم</th>
            <th>تعديل</th>
            <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <a href="">
            <tr>
            <th scope="row"><img style="max-width: 60px;" src="{{url('programs/'.$program->image)}}" alt=""></th>
            <td>{{$program->name}}</td>
            <td>{{$program->description}}</td>
            <td><span class="badge bg-success">{{$program->dept->name}}</span></td>
            <td><a href="{{route('program.edit',$program->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
            <td>
                <form action="{{route('program.destroy',$program->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                </form>
            </td>
            </tr>
            </a>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div><!-- End table Program -->
 @endif

<!-- table depts -->
 @if(!(empty($depts)))
<div class="col-12">
    <h1 class="text-success pt-1 fw-bold">اخر الاقسام المضافة</h1>
    <div class="card recent-sales overflow-auto">
    <div class="card-body top-selling">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">صورة</th>
            <th scope="col">القسم</th>
            <th scope="col">وصف</th>
            <th scope="col">النشاطات</th>
            <th scope="col">مخرجات القسم</th>
            <th scope="col">الايميل</th>
            <th scope="col">جوال</th>
            <th>تعديل</th>
            <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($depts as $dept)
            <tr>
            <th scope="row"><img style="max-width: 60px;" src="{{url('depts/'.$dept->logo)}}" alt=""></th>
            <td>{{$dept->name}}</td>
            <td>{{$dept->description}}</td>
            <td>{{$dept->objectives}}</td>
            <td>{{$dept->outputs}}</td>
            <td>{{$dept->email}}</td>
            <td>{{$dept->phone}}</td>
            <td><a href="{{route('dept.edit',$dept->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
            <td><form action="{{route('dept.destroy',$dept->id)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit"><i class="bi bi-trash"></i></button>
            </form></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div><!-- End table depts -->
@endif
<!-- table supers -->
 @if(!(empty($supers)))
<div class="col-12">
    <h1 class="text-success pt-1 fw-bold">اخر المشرفين المضافة</h1>
    <div class="card recent-sales overflow-auto">
    <div class="card-body top-selling">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">صورة</th>
            <th scope="col">المشرف</th>
            <th scope="col">البرنامج</th>
            <th scope="col">وصف</th>
            <th scope="col">الايميل</th>
            <th scope="col">جوال</th>
            <th>تعديل</th>
            <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supers as $super)
            <a href="">
            <tr>
            <th scope="row"><img style="max-width: 60px;" src={{(file_exists(public_path('supervisor/'.$super->image))) == True?url('supervisor/'.$super->image):"images.png"}} alt=""></th>
            <td>{{$super->name}}</td>
            <td>{{$super->program->name}}</td>
            <td>{{$super->description}}</td>
            <td>{{$super->email}}</td>
            <td>{{$super->phone}}</td>
            <td><a href="{{route('super.edit',$super->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
            <td>
                <form action="{{route('super.destroy',$super->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                </form>
            </td>
            </tr>
            </a>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div><!-- End table supers -->
@endif


<!-- table news -->
 @if(!(empty($news)))
<div class="col-12">
    <h1 class="text-success pt-1 fw-bold">الاخبار</h1>
    <div class="card recent-sales overflow-auto">
    <div class="card-body top-selling">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">صورة</th>
            <th scope="col">العنوان</th>
            <th scope="col">وصف</th>
            <th scope="col">القسم</th>
            <th>تعديل</th>
            <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $new)
            <a href="">
            <tr>
            <th scope="row"><img style="max-width: 60px;" src={{(file_exists(public_path('deptnews/'.$new->image))) == True?url('deptnews/'.$new->image):"images.png"}} alt=""></th>
            <td>{{$new->title}}</td>
            <td>{{$new->description}}</td>
            <td>{{$new->dept->name}}</td>
            <td><a href="{{route('news.edit',$new->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
            <td>
                <form action="{{route('news.destroy',$new->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                </form>
            </td>
            </tr>
            </a>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div><!-- End table news -->
@endif

 @if(!(empty($years)))
<div class="col-12">
    <h1 class="text-success pt-1 fw-bold">الاعوام</h1>
    <div class="card recent-sales overflow-auto">
    <div class="card-body top-selling">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">الاسم</th>
            <th scope="col">تاريخ البدء</th>
            <th scope="col">تاريخ التسليم</th>
            <th>تعديل</th>
            <th>حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach($years as $year)
            <tr>
            <td>{{$year->name}}</td>
            <td>{{$year->start}}</td>
            <td>{{$year->end}}</td>
            <td><a href="{{route('year.edit',$year->id)}}" class="badge bg-warning text-dark">تعد<i class="bi bi-sm bi-pen"></i>يل</a></td>
            <td>
                <form action="{{route('year.destroy',$year->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-dark"><i class="bi bi-trash"></i></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div><!-- End table news -->
@endif
@endsection