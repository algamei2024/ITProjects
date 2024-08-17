<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>لوحة المعلومات</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>فورمات الاضافة</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('dept.create')}}">
              <i class="bi bi-circle"></i><span>قسم جديد</span>
            </a>
          </li>
          <li>
            <a href="{{route('program.create')}}">
              <i class="bi bi-circle"></i><span>إضافة برنامج</span>
            </a>
          </li>
          <li>
            <a href="{{route('super.create')}}">
              <i class="bi bi-circle"></i><span>مشرف جديد</span>
            </a>
          </li>
          <li>
            <a href="{{route('padd.create')}}">
              <i class="bi bi-circle"></i><span>رفع مشروع</span>
            </a>
          </li>
          <li>
            <a href="{{route('year.create')}}">
              <i class="bi bi-circle"></i><span>عام جديد</span>
            </a>
          </li>
          <li>
            <a href="{{route('news.create')}}">
              <i class="bi bi-circle"></i><span>خبر جديد</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>الجداول</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('tables','dept')}}">
              <i class="bi bi-circle"></i><span>جدول الاقسام</span>
            </a>
          </li>
          <li>
            <a href="{{route('tables','program')}}">
              <i class="bi bi-circle"></i><span>جدول البرامج</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>جدول المشاريع</span>
            </a>
          </li>
          <li>
            <a href="{{route('tables','super')}}">
              <i class="bi bi-circle"></i><span>جدول المشرفين</span>
            </a>
          </li>
          <li>
            <a href="{{route('tables','news')}}">
              <i class="bi bi-circle"></i><span>جدول الاخبار</span>
            </a>
          </li>
          <li>
            <a href="{{route('tables','years')}}">
              <i class="bi bi-circle"></i><span>جدول الاعوام</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>الحساب</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.contact')}}">
          <i class="bi bi-envelope"></i>
          <span>إتصال</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside>