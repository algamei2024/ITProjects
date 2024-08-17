@extends('index')
@section("content")
<div class="pagetitle">
      <h1>تعديل بيانات المشرف</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحة</li>
          <li class="breadcrumb-item active">برنامج مشرف</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">تعديل البيانات</h5>
      <!-- General Form Elements -->
      <form action="{{route('super.update',$super->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم المشرف</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$super->name}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">وصف المشرف</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="description" name="description">{{$super->description}}</textarea>
          </div>
        </div>

         <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">الايميل</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{$super->email}}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="phone" class="col-sm-2 col-form-label">رقم الهاتف</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" value="{{$super->phone}}">
          </div>
        </div>

         <div class="row mb-3">
          <label for="image" class="col-sm-2 col-form-label">صورة البرنامج</label>
          <div class="col-sm-10">
            <input type="hidden" name="oldImage" value="{{$super->image}}">
            <input id="image" name="image" class="form-control" type="file" id="formFile">
          </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">اختر البرنامج</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="program" name="program">
              @foreach($programs as $prgram)  
              <option value="{{$prgram->id}}" @selected($prgram->id == $super->program_id)>{{$prgram->name}}</option>
              @endforeach
            </select>
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