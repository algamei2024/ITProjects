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
@if(!($programs->isEmpty()))
<div class="pagetitle">
      <h1>إضافة مشرف</h1>
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
      <h5 class="card-title">إضافة مشرف جديد</h5>
      <!-- General Form Elements -->
      <form action="{{route('super.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم المشرف</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">وصف المشرف</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="description" name="description"></textarea>
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
          <label for="image" class="col-sm-2 col-form-label">صورة البرنامج</label>
          <div class="col-sm-10">
            <input id="image" name="image" class="form-control" type="file" id="formFile">
          </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">اختر البرنامج</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="program" name="program">
              @foreach($programs as $prgram)  
              <option value="{{$prgram->id}}" selected>{{$prgram->name}}</option>
              @endforeach
            </select>
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
@else
   <div class="alert alert-success">
        <h1>يجب اولاً ان يكون لديك برنامج لكي تعمل برنامج</h1>
    </div>
@endif
@endsection