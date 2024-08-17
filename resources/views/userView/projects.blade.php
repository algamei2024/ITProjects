<style>
    .row{
       margin-top: 70px !important;
       margin-right: 30px !important;
       margin-left: 30px !important;
    }
    .mb-3{
        padding-bottom:10px;
    }
    .fade{
        display: none;
        position: absolute !important;
        right:0%;
        top:30%;
    }
    .col-md-4{
      text-align: center;
    }
    .name-p{
      border: 2px solid;
      border-radius: 34px;
      padding: 10px;
      text-align: center;
    }
    .name-p:hover{
      background-color: orange;
      border-color: transparent;
      color:white;
    }
</style>
@extends('userView/base')
@section('main')
<div class="row">
    <div class="col-lg-4">
        <div class="card-body">
            <h2 class="card-title">الاعوام الدراسي</h2>
            <!-- Default List group -->
            <ul class="list-group">
                @foreach ($years as $year)
                <li class="list-group-item" align=center><a href="#">{{$year->name}}</a></li>   
                @endforeach
            </ul><!-- End Default List group -->
        </div>
    </div>
    <div class="col-lg-8">
        @foreach ($projects as $project)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{asset("project/$project->image")}} class="img-fluid rounded-start" alt="...">
                    <h1>التقييم: <span>{{$project->evaluation}}</span></h1>
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title name-p">اسم المشروع: {{$project->name}}</h5>
                            <h5 class="card-title">القسم <span>{{$id}}</span></h5>
                            <h4 style="background-color:tomato;border-radius:10px;color:white;">العام الدراسي: <span>{{$project->year->name}}</span></h4>
                            <h4>الطلاب</h4>
                            <p class="card-text">{{$project->team}}</p>
                        </div>
                        <button type="button" class="btn btn-light rounded-pill btn-show">عرض <span><i class="ri-eye-off-fill"></i></span></button>
                        <!--show-->
                          <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <h2>{{$project->name}}</h2>
                                <p>{{$project->abstract}}</p>
                                <hr>
                                <p class="mb-0">لقد تم تقييم هذا المشروع ب: {{$project->evaluation}}</p>
                                <button type="button" class="btn-close" aria-label="Close"></button>
                           </div>
                        <!---->
                        <a class="btn btn-secondary rounded-pill" href={{asset("project/$project->pdf")}} >تنزيل ملف pdf
                            <i class="bi bi-arrow-down"></i>
                        </a>
                </div>
            </div>
          </div>
          @endforeach
    </div>
</div>
<script>
const targetElements = document.querySelectorAll('.btn-show');

targetElements.forEach(element => {
  element.addEventListener('click', () => {
    const nextElement = element.nextElementSibling;
    if (nextElement) {
      nextElement.style.display = 'block';
       const closeButton = nextElement.querySelector('.btn-close');
      if (closeButton) {
        closeButton.addEventListener('click', () => {
          nextElement.style.display = 'none';
        });
      }
    }
  });
});

</script>
@endsection