<script>
    window.onload = function(){
      setTimeout(() => {
        var myAlert = document.getElementById('myAlert');
        if(myAlert){
          //myAlert.parentNode.removeChild(myAlert);
          myAlert.remove();
        }
      }, 5000);
    }
</script>
@extends('index')
@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
        <i class="bi bi-check-circle me-1"></i>
         {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php session()->forget('success');?>
@endif
<div class="pagetitle">
      <h1>إضافة قسم</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحة</li>
          <li class="breadcrumb-item active">قسم جديد</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">تعديل البيانات</h5>
      <!-- General Form Elements -->
      <form action="{{route('dept.update',$dept->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم القسم</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$dept->name}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">وصف القسم</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="description" name="description">{{$dept->description}}</textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="objectives" class="col-sm-2 col-form-label">النشاطات</label>
          <div class="col-sm-10">
            <textarea id="objectives" name="objectives" class="form-control" style="height: 100px">{{$dept->objectives}}</textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="outputs" class="col-sm-2 col-form-label">مخرجات القسم</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="outputs" name="outputs">{{$dept->outputs}}</textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">الايميل</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{$dept->email}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="phone" class="col-sm-2 col-form-label">رقم الهاتف</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" value="{{$dept->phone}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="logo" class="col-sm-2 col-form-label">شعار القسم</label>
          <div class="col-sm-10">
            <img class="imagin" src="{{url('depts/'.$dept->logo)}}" alt="image" style="width:50px; height:50px; border-radius:6px;">
            <input type="hidden" name="oldImage" value="{{$dept->logo}}">
            <input id="logo" name="logo" class="form-control" type="file" id="formFile">
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