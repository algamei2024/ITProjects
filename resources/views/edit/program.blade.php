@extends('index')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">تعديل البرنامج</h5>
      <!-- General Form Elements -->
      <form action="{{route('program.update',$program->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
         @method('PUT')
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">اسم البرنامج</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$program->name}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">وصف البرنامج</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" id="description" name="description">{{$program->description}}</textarea>
          </div>
        </div>
 
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">اختر القسم</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="dept" name="dept">
              @foreach($depts as $dept)  
              <option value="{{$dept->id}}" @selected($program->dept_id == $dept->id)>{{$dept->name}}</option>
              @endforeach
            </select>
            </div>
        </div>

        <div class="row mb-3">
          <label for="image" class="col-sm-2 col-form-label">صورة البرنامج</label>
          <div class="col-sm-10">
            <input type="hidden" name="oldImage" value="{{$program->image}}">
            <input id="image" name="image" class="form-control" type="file" id="formFile">
          </div>
        </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">زر التعديل</label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">تـعديل</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->
  </div>
</div>
@endsection