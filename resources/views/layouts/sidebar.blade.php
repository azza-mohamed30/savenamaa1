<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/admin/images/12345.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link ">
            <i class="fa fa-th"></i>
            <p>
             قائمة ضبط الأخبار
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/news/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> إضافة الخبر</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/news" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>تعديل وحذف الخبر</p>
              </a>
            </li>
          </ul>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
                <i class="fa fa-th"></i>
              <p>
               قائمة ضبط الصور
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/photo/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> إضافة صورة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/photo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل وحذف صورة</p>
                </a>
              </li>
            </ul>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                    <i class="fa fa-th"></i>
                  <p>
                   قائمة ضبط الإحصائيات
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/statistic" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> التعديل على الإحصائيات </p>
                    </a>
                  </li>
                </ul>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="fa fa-th"></i>
                      <p>
                       قائمة ضبط الحوكمة
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/policie" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> تعديل السياسات واللوائح </p>
                        </a>
                      </li>

                        <li class="nav-item">
                          <a href="/financial_report" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> تعديل التقارير المالية </p>
                          </a>
                        </li>
                    </ul>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-th"></i>
                          <p>
                           قائمة ضبط التبرعات
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/donation" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>   عرض التبرعات </p>
                            </a>
                          </li>
                        </ul>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="fa fa-th"></i>
                              <p>
                               قائمة ضبط تواصل معنا
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="/contact_us" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>   عرض الرسائل </p>
                                </a>
                              </li>
                            </ul>

                            <li class="nav-item has-treeview">
                                <a href="" class="nav-link ">
                                    <i class="fa fa-th"></i>
                                  <p>
                                   قائمة ضبط الاجتماعات
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="/meetings/index" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>  التعديل على محاضر الاجتماع </p>
                                    </a>
                                  </li>
                                </ul>

                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-th"></i>
                          <p>
                           قائمة ضبط الألوان
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/color" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p> تغير اللون </p>
                            </a>
                          </li>
                        </ul>

                        <li class="nav-item has-treeview">
                            <a href="/almokhwa" class="nav-link ">
                                <i class="fa fa-th"></i>
                              <p>
                                الموقع التعريفي
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>

                      </li>
                    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
