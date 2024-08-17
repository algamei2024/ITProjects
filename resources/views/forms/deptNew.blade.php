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
      <h5 class="card-title">إضافة قســــم جديد</h5>
      <!-- General Form Elements -->
      <form action="{{route('dept.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم القسم</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">وصف القسم</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="description" name="description"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="objectives" class="col-sm-2 col-form-label">النشاطات</label>
          <div class="col-sm-10">
            <textarea id="objectives" name="objectives" class="form-control" style="height: 100px"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="outputs" class="col-sm-2 col-form-label">مخرجات القسم</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="outputs" name="outputs"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="email" class="col-sm-2 col-form-label">الايميل</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="row mb-3">
          <label for="phone" class="col-sm-2 col-form-label">رقم الهاتف</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
        </div>
        <div class="row mb-3">
          <label for="logo" class="col-sm-2 col-form-label">شعار القسم</label>
          <div class="col-sm-10">
            <input id="logo" name="logo" class="form-control" type="file" id="formFile">
          </div>
        </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">زر الاضافة</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">إضافة</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->
  </div>
</div>
@endsection