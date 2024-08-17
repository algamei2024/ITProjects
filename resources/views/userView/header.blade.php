 <style>
  .nav-item{
    position: relative;
  }
  .nav-item> ul{
    display: none;
    position: absolute;
    left:5px;
    top:100%;
    padding:10px;
    margin:3px;
    background-color: white;
    border-radius: 15px;
  }
  .nav-item>ul>li{
    padding:5px;
    margin:3px;
  }
  .nav-item:hover ul{
    display: block;
    cursor: pointer;
  }
  .nav-item>ul>li:hover{
    background-color: chartreuse;
  }
</style>
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/ibbUniversity.png" alt="">
        <span class="d-none d-lg-block">كلية الحاسبات وتكنولوجيا المعلومات</span>
      </a>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="false" tabindex="-1">الرئيسية</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">عن الكلية</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="true">الاخبار</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">الاقسام</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">الكادر الاكاديمي</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">المشاريع</button>
                  @if(!empty($depts))
                      <ul>
                        @foreach ($depts as $dept)
                            <li><a href="#">{{$dept->name}}</a></li>
                        @endforeach
                      </ul>
                  @endempty
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">اتصل بنا</button>
                </li>
              </ul>
    </nav>
  </header><!-- End Header -->