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
      <h1>إضافة عام</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحة</li>
          <li class="breadcrumb-item active">عام جديد</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">إضافة عام جديد</h5>
      <!-- General Form Elements -->
      <form action="{{route('year.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">الاسم</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
          </div>
        </div>

        <div class="row mb-3">
                  <label for="start" class="col-sm-2 col-form-label">تاريخ البدء</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="start">
                  </div>
                </div>
          </div>
          
        <div class="row mb-3">
                  <label for="end" class="col-sm-2 col-form-label">تاريخ التسليم</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="end">
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