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
@if(!($years->isEmpty() || $depts->isEmpty() || $programs->isEmpty() || $supers->isEmpty()))
<div class="pagetitle">
      <h1>مشروع</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
          <li class="breadcrumb-item">الصفحة</li>
          <li class="breadcrumb-item active">إضافة مشروع</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">الاضافات</h5>
      <!-- General Form Elements -->
      <form action="{{route('padd.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">اختر العام</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="year_id" name="year_id">
              @foreach($years as $year)  
              <option value="{{$year->id}}">{{$year->name}}</option>
              @endforeach
            </select>
            @error('year_id')
                {{$message}}
            @enderror
            </div>
        </div>
         <div class="row mb-3">
            <label class="col-sm-2 col-form-label">اختر البرنامج</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="program_id" name="program_id">
              @foreach($programs as $prgram)  
              <option value="{{$prgram->id}}" selected>{{$prgram->name}}</option>
              @endforeach
            </select>
            @error('program_id')
                {{$message}}
            @enderror
            </div>
        </div>
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم الشمروع</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <div>{{$message}}</div>
            @enderror
          </div>
        </div>
           <div class="row mb-3">
            <label class="col-sm-2 col-form-label">يرجى تحديد المشرفين</label>
            <div class="col-sm-10">
            <select multiple class="form-select" aria-label="Default select example" id="supervisor_id" name="supervisor_id[]">
              @foreach($supers as $super)  
              <option value="{{$super->id}}" selected>{{$super->name}}</option>
              @endforeach
            </select>
            </div>
        </div>
        <div class="row mb-3">
          <label for="team" class="col-sm-2 col-form-label">فريق المشروع</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="team" name="team"></textarea>
          </div>
        </div>
         <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">رفع صوره</label>
            <div class="col-sm-10">
                <input id="image" name="image" class="form-control" type="file" id="formFile">
                @error('image')
                    <div>{{$message}}</div>
                @enderror
            </div>
        </div>
         <div class="row mb-3">
          <label for="pdf" class="col-sm-2 col-form-label">رفع الملف</label>
          <div class="col-sm-10">
            <input name="pdf" class="form-control" type="file" id="pdf">
            @error('pdf')
                <div>{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label for="abstract" class="col-sm-2 col-form-label">ملخص المشروع</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="abstract" name="abstract"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="evaluation" class="col-sm-2 col-form-label">التقييم</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="evaluation" name="evaluation"></textarea>
          </div>
        </div>
         <div class="row mb-3">
            <label for="confirmed" class="col-sm-2 col-form-label">عرض المشروع</label>
            <input class="form-check-input" type="checkbox" id="confirmed"  name="confirmed">
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
     <h1>تاكد من هناك قسم و برنامج ومشرفين وعام دراسي ومن ثم يمكنك الاضافة</h1>
    </div>
@endif
@endsection