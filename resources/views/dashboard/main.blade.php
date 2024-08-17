@extends('index')
@section('content')
<div class="pagetitle">
      <h1>لوحة المعلومات</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
          <li class="breadcrumb-item active">لوحة المعلومات</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<body>
<div class="card">
            <div class="card-body">
              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <h6 class="card-title">اخر الاخبار</h6>
                <div class="carousel-indicators">
                  @foreach($news as $new)
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$loop->index}}" aria-label="Slide {{$loop->index+1}}" class="active" aria-current="true"></button>
                  @endforeach
                </div>
                <div class="carousel-inner">
                  @foreach($news as $new)
                  <div class="carousel-item active">
                    <img src="deptnews/{{$new->image}}" class="d-block w-100" alt="..." style="height: 1000px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="font-weight:bolder;">{{$new->title}}</h1>
                        <p style="">{{$new->description}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: olive; border-radius:5px;"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: olive; border-radius:5px;"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with captions -->

            </div>
</div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <h3 class="text-success pt-1 fw-bold">اخر الاخبار</h3>
            <!-- Sales Card -->
            @if(!($news->isEmpty()))
            @foreach($news as $new)
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>الخيارات</h6>
                    </li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="dropdown">عرض<span class="btn"><i class="bi bi-info-circle"></i></span></a></li>
                    <li><a class="dropdown-item" href="{{route('news.edit',$new->id)}}">تعديل<span class="btn"><i class="ri-edit-2-fill"></i></span></a></li>
                    <li>
                      <form action="{{route('news.destroy',$new->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button class="dropdown-item" type="submit">حذف  <i class="bx bxs-trash"></i></button>
                      </form>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">الاخبار <span>| {{$new->created_at}}</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="deptnews/{{$new->image}}" alt="image" style='width:55px;height:55px;border-radius:50px'>
                    </div>
                    <div class="ps-3">
                      <h6>{{$new->title}}</h6>
                      <span class="text-success small pt-1 fw-bold">قسم {{$new->dept->name}} |</span> <span class="text-muted small pt-2 ps-1">{{strlen($new->description)>=50?substr($new->description,0,50)."...":$new->description}}</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            @endforeach
            @endif

            <!-- Recent Sales -->
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
                      @if(!($programs->isEmpty()))
                      @foreach($programs as $program)
                      <a href="">
                      <tr>
                        <th scope="row"><img src="programs/{{$program->image}}" alt=""></th>
                        <td>{{$program->name}}</td>
                        <td>{{strlen($program->description)>=90?substr($program->description,0,89)."...":$program->description}}</td>
                        <td><span class="badge bg-success">{{$program->dept->name}}</span></td>
                        <td><a href="{{route('program.edit',$program->id)}}" class="badge bg-warning text-dark">تعـ<i class="bi bi-sm bi-pen"></i>ـديل</a></td>
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
                      @endif
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->
        
        <!-- Right side columns -->
        <div class="col-lg-4">
          
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h3 style="color:brown;">الاقسام</h3>
            <div class="news">
              @if(!($depts->isEmpty()))
                @foreach($depts as $dept)
                <div class="post-item clearfix" style="position: relative;">
                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>الخيارات</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">عرض<span class="btn"><i class="bi bi-info-circle"></i></span></a></li>
                    <li><a class="dropdown-item" href="{{route('dept.edit',$dept->id)}}">تعديل<span class="btn"><i class="ri-edit-2-fill"></i></span></a></li>
                    <li>
                      <form action="{{route('dept.destroy',$dept->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button class="dropdown-item" type="submit">حذف  <i class="bx bxs-trash"></i></button>
                      </form>
                    </li>
                  </ul>
                </div>
                  <img src="depts/{{$dept->logo}}" alt="">
                  <h4><a href="#">{{$dept->name}}</a></h4>
                  <p>{{strlen($dept->description)>=50?substr($dept->description,0,50)."...":$dept->description}}</p>
                </div>
                  @endforeach
                @endif
              </div><!-- End sidebar recent posts-->
            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->
      </div>
    </section>
    <section class="section">
      <div class="row align-items-top">
        <h1 style="color:brown;">اخر المشرفين المضافين</h1>
          @if(!$supers->isEmpty())
          @foreach($supers as $super)
          <div class="col-lg-3">
            <div class="card" style="box-shadow:0 0 3px rgba(148, 32, 32, 0.747);">
                <img src={{(file_exists(public_path('supervisor/'.$super->image))) == True?'supervisor/'.$super->image:"images.png"}} class="card-img-top" alt="..." style="height:200px;">
                <div class="card-body">
                  <h5 class="text-success pt-1 fw-bold">{{$super->name}}</h5>
                  <p class="card-text">{{strlen($super->description)>=50?substr($super->description,0,50)."...":$super->description}}</p>
                  <div>
                    البرنامج/
                    <span class="badge bg-success">{{$super->program->name}}</span>
                  </div>
                  <a href="tel:{{$super->phone}}">
                    <div>
                    <i class="bi bi-telephone"></i>
                    {{$super->phone}}
                  </div>
                  </a>
                  <a href="mailto:{{$super->email}}">
                    <div>
                    <i class="bi bi-envelope"></i>
                    {{$super->email}}
                  </div>
                  </a>
                </div>
              </div>
          </div>
          @endforeach
          @endif
      </div>
          <link href={{asset('file/style.css')}} rel="stylesheet">
          
      <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
    <div class="datatable-dropdown">
            <label>
                <select class="datatable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page
            </label>
        </div>
    <div class="datatable-search">
            <input class="datatable-input" placeholder="Search..." type="search" title="Search within table">
        </div>
</div>
<div class="datatable-container"><table class="table datatable datatable-table"><thead><tr><th data-sortable="true" style="width: 5.499276410998553%;"><a href="#" class="datatable-sorter">#</a></th><th data-sortable="true" style="width: 28.21997105643994%;"><a href="#" class="datatable-sorter">Name</a></th><th data-sortable="true" style="width: 37.192474674384954%;"><a href="#" class="datatable-sorter">Position</a></th><th data-sortable="true" style="width: 9.55137481910275%;"><a href="#" class="datatable-sorter">Age</a></th><th data-sortable="true" style="width: 19.536903039073806%;"><a href="#" class="datatable-sorter">Start Date</a></th></tr></thead><tbody><tr data-index="0"><td>1</td><td>Brandon Jacob</td><td>Designer</td><td>28</td><td>2016-05-25</td></tr><tr data-index="1"><td>2</td><td>Bridie Kessler</td><td>Developer</td><td>35</td><td>2014-12-05</td></tr><tr data-index="2"><td>3</td><td>Ashleigh Langosh</td><td>Finance</td><td>45</td><td>2011-08-12</td></tr><tr data-index="3"><td>4</td><td>Angus Grady</td><td>HR</td><td>34</td><td>2012-06-11</td></tr><tr data-index="4"><td>5</td><td>Raheem Lehner</td><td>Dynamic Division Officer</td><td>47</td><td>2011-04-19</td></tr></tbody></table></div>
<div class="datatable-bottom">
    <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
    <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
</div></div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </section>
  </body>
@endsection
<script>
  let menu = document.querySelector('.bi-list');
  menu.addEventListener('click',function(){
    document.body.classList.toggle("toggle-sidebar");
  });
</script>