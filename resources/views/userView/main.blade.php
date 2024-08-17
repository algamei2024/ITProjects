<!-- ======= Header ======= -->
   @extends('userView/base')
  <!-- ======= Sidebar ======= -->
  <style>
    .dashboard .news p{
      font-size:20px !important ;
      color:black;
    }
    .dashboard .news h4 a {
    color: #ffc107;
    transition: 0.3s;
    font-size: 40px;
    }
    .contact .info-box{
      text-align: center;
    }
    .row .pt-1{
      
    }
  </style>
  <!-- this in top for main-->
@section("main")
  <div class="card">
      <div class="card">
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
              <img src={{url("deptnews/$new->image")}} class="d-block w-100" alt="..." style="height: 1000px;">
              <div class="carousel-caption d-none d-md-block">
                  <h1 style="box-shadow:0 0 5px rgb(255, 255, 255); background-color:rgb(220, 187, 20);color:white; border-radius: 13px;"><b>{{$new->title}}</b></h1>
                  <p style="background-color:transparent;box-shadow:0 0 5px rgb(220, 187, 20);border:2px solid white;border-radius: 15px;padding:10px;;font-weight:bold;">{{strlen($new->description)>=50?substr($new->description,0,50)."...":$new->description}}</p>
              </div>
            </div>
            @endforeach
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div><!-- End Slides with captions -->
      </div>
  </div>
<a href="{{route('padd.edit','1')}}">Mohammed</a>
<section class="section dashboard">
<div class="row">
    <div class="col-lg-8">
            <div class="card-body pb-0">
              <div class="news">
                <div class="post-item clearfix">
                  <img src={{url("assets/img/news-1.jpg")}} alt="">
                  <h4><a href="#">روية الكلية</a></h4>
                  <p>ان تكون كلية العلوم رائدة في مجال التعليم والبحث في العلوم الاساسية والتطبيقية لخدمة المجتمع ومركزاً للابتكار والابداع من خلال تطوير برامجها التعليمية وبجودة عالية وضمن المعايير الدولية.</p>
                </div>

                <div class="post-item clearfix">
                  <img src={{url("assets/img/news-2.jpg")}} alt="">
                  <h4><a href="#">رسالة الكلية</a></h4>
                  <p>تقدم كلية العلوم برامج دراسية متميزة ومنظومة للبحث العلمي لتحقيق طموحات المستفيدين وتساهم كبيت خبرة علمي في خدمة المجتمع تكنولوجياً وصناعياً من خلال أعداد خريجين ذوي كفاءة عالية الجودة لدعم التنمية الوطنية وضمان التوظيف الامثل للشراكة العامة.</p>
                </div>

                <div class="post-item clearfix">
                  <img src={{url("assets/img/news-3.jpg")}} alt="">
                  <h4><a href="#">اهداف الكلية</a></h4>
                  <p>
تقديم برامج تعليمية متميزة ذات جودة تسهم بتزويد الطلبة بأصول المعرفة وتنمية قدرات الطلبة على التفكير التحليلي والتأصيلي لأعداد رواد من الشباب المبدع والموهوب في مجالات العلوم والتقنية.
مواكبة التقدم العلمي والتقني من خلال تطوير الخطط التعليمية والمناهج الدراسية ذات الجودة بما يسهم في تكوين كوادر اكاديمية وبحثية قادرة على المساهمة في خدمة المجتمع.
تأهيل الطلبة لأكاسبهم المهارات التطبيقية التي تحتاجها سوق العمل وذلك من خلال توفير مختبرات علمية وبحثية وحاسوبية متطورة، بالإضافة الى تجهيز مختبرات اللغة الإنكليزية بالتقنيات الحديثة.
تطبيق نظام ضمان جودة الاداء الجامعي على جميع مفاصل الكلية من اجل ضبط مخرجاتها التعليمية والبحثية ما يكسبها ثقة المجتمع والمؤسسات التعليمية الاخرى.
تطوير وتنمية مهارات الكادر التدريسي من خلال توفير تكنولوجيا تدريس حديثة ودعمهم للمشاركة في الدورات والمؤتمرات المحلية والعالمية المتميزة.
إعداد ونشر البحوث العلمية القيمة من خلال الخطط البحثية التي تتبناها اللجان البحثية في اقسام الكلية العلمية والتي تساهم في حل المشاكل العملية على الصعيد المحلي والدولي.
تقديم الاستشارات والدراسات العلمية والبحثية لحل المشاكل الفنية والعملية للجهات المستفيدة من المؤسسات الحكومية والاهلية.</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div>
    <div class="col-lg-4">
      <div class="card card-info">
        <img src={{asset("assets/img/profile-img.jpg")}} alt="Profile">
        <h2>جامعة اب</h2>
        <h3>كلية العلوم</h3>
      </div>
    </div>
</div>
</section>




 <section class="section">
      <div class="row align-items-top" style="padding:30px;">
        <!-- Left side columns -->
          <div class="row">
            <h3 class="pt-1 fw-bold" style="text-align:center; font-size:40px; color:royalblue;">البرامج الاكاديمية</h3>
            <!-- Sales Card -->
            @if(!($programs->isEmpty()))
            @foreach($programs as $program)
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src={{asset("programs/$program->image")}} alt="image" style='width:100px;height:100px;margin:10px; border-radius: 7px;'>
                    </div>
                    <div class="ps-3" style="padding:10px;">
                      <h3><b>{{$program->name}}</b></h3>
                      <span class=" small pt-1 fw-bold">{{$program->description}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            @endforeach
            @endif
          </div>
      </div>
        </div>
  </section>
  <section class="section contact">
    <div class="card p-4" style="padding:25px;">
      <!-- maps -->
      <div class="card">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d739.273870719977!2d44.1745704928321!3d13.960113377535082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161ce925fdd6dfc5%3A0x80482634a7ff1dd9!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNiq2YLZhtmK2Kkg2KfZhNmF2LnZhNmI2YXYp9iq!5e0!3m2!1sar!2s!4v1713822183292!5m2!1sar!2s" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
      </div>
     <!-- End maps -->
        <!---->
         <div class="row">
            <div class="col-lg-4">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>الموقع:</h3>
                <p>اليمن - الظهار - جامعة اب</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>إتصال:</h3>
                <p>777777000</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>البريد الالكتروني:</h3>
                <p>collage@gmail.com</p>
              </div>
            </div>
          </div>
         <!---->
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="اسمك الكريم" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="بريدك الالكتروني" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="موضوع الرساله" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="نص الرساله" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading" hidden>Loading</div>
                  <div class="error-message" hidden></div>
                  <div class="sent-message" hidden>Your message has been sent. Thank you!</div>
                  <button type="submit">إرســـال</button>
                </div>
              </div>
            </form>
          </div>
</section>
@endsection