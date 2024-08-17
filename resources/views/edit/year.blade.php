@extends('index')
@section('content')
<div class="pagetitle">
      <h1>تعديل العام</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحة</li>
          <li class="breadcrumb-item active">معلومات</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">تعديل البيانات</h5>
      <!-- General Form Elements -->
      <form action="{{route('year.update',$year->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">الاسم</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$year->name}}">
          </div>
        </div>

        <div class="row mb-3">
                  <label for="start" class="col-sm-2 col-form-label">تاريخ البدء</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="start" value="{{$year->start}}">
                  </div>
                </div>
          </div>
          
        <div class="row mb-3">
                  <label for="end" class="col-sm-2 col-form-label">تاريخ التسليم</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="end" value="{{$year->end}}">
                  </div>
                </div>
          </div>

        </fieldset>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">زر التعديل</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">تعديل</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->
  </div>
</div>
@endsection