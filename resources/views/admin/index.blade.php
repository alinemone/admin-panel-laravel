<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--begin::Theme Color-->
    <meta name="theme-color" content="#27293d">
    <!--end::Theme Color-->

    <!--begin::Favicons-->

{{--    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon.png" sizes="180x180">--}}
{{--    <link rel="icon" href="assets/images/favicons/sw.png" sizes="32x32" type="image/png">--}}
{{--    <link rel="icon" href="assets/images/favicons/favicon-16x16.png" sizes="16x16" type="image/png">--}}
{{--    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#7952b3">--}}
{{--    <link rel="icon" href="assets/images/favicons/favicon.ico">--}}

    <!--end::Favicons-->

    <!--begin::Style-->

    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">

    <title>پنل مدیریت</title>

</head>

<body>

<!--begin::Sidebar-->
<div class="sidebar__nav">
    <span class="bars d-none px-4"></span>
    <div class="navbar-brand d-flex justify-content-center">
        <a class=" d-inline-block my-2" href="">
            <img class="img-fluid" src="{{asset('/images/logo.png')}}" alt="">
        </a>
    </div>
    <ul>
        <li class="item-li i-dashboard"><a href="index.html">پیشخوان</a></li>

        <li class="item-li i-courses has-sub-ui"><a class="has-arrow-ui" href="#">دوره ها</a>
            <ul class="collapse show">
                <li><a href="create-new-course.html">ایجاد محصول</a></li>
                <li><a href="courses.html">لیست محصول</a></li>
            </ul>
        </li>

        <li class="item-li i-users has-sub-ui"><a class="has-arrow-ui" href="#"> کاربران</a>
            <ul class="collapse show">
                <li><a href="users.html">لیست کاربران</a></li>
            </ul>
        </li>
        <li class="item-li i-user-permissions has-sub-ui"><a class="has-arrow-ui" href="#"> مدیریت کاربران</a>
            <ul class="collapse show">
                <li class="i-roles"><a href="">نقش های کاربری</a></li>
                <li class="i-permissions"><a href="">مجوز ها</a></li>
            </ul>
        </li>
        <li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>
        <li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>
        <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
        <li class="item-li i-articles"><a href="articles.html">مقالات</a></li>
        <li class="item-li i-ads"><a href="ads.html">تبلیغات</a></li>
        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
        <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
        <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
        <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
        <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
        <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
        </li>

        <li class="item-li i-web-apps has-sub-ui"><a class="has-arrow-ui" href="#"> وب اپلیکشن ها</a>
            <ul class="collapse show">
                <li class="i-email"><a href="email-box.html"> ایمیل</a></li>
                <li class="i-messenger"><a href="">پیامرسان</a></li>
            </ul>
        </li>


        <li class="item-li i-setting"><a href="notification-management.html">تنظیمات</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="profile.html">اطلاعات کاربری</a></li>

    </ul>
</div>
<!--end::Sidebar-->

<!--begin::Content-->
<div class="content">

    <!--begin::Header-->
    <div class="header-ui d-flex item-center w-100">
        <div class="header__right d-flex flex-grow-1 align-items-center">
            <span class="bars"></span>
        </div>
        <div class="header__left d-flex flex-end align-items-center">

            <!--begin::Setting-->
            <div class="setting-ui position-relative me-3" id="js-setting-ui">
                <a class="setting__icon"></a>
            </div>
            <!--end::Setting-->

            <!--begin::Notification-->
            <div class="notification position-relative me-3">
                <a class="notification__icon dropdown-toggle" data-bs-auto-close="outside"
                   id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,15"></a>
                <!--                <span class="notification-dot">3</span>-->
                <ul class="dropdown-menu dropdown-menu-start feeds_widget" aria-labelledby="dropdownMenuOffset">
                    <li class="header blue">3 اعلان جدید</li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="feeds-left bg-danger"><i class="ri-check-line"></i></div>
                            <div class="feeds-body">
                                <h4 class="title text-danger">کاربر جدید <small class="float-left text-muted">9:10
                                        AM</small></h4>
                                <small>من احساس خوبی دارم !</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="feeds-left bg-warning"><i class="ri-settings-4-line"></i></div>
                            <div class="feeds-body">
                                <h4 class="title text-warning">هشدار سرور <small class="float-left text-muted">9:17
                                        AM</small></h4>
                                <small>ارتباط شما شخصی نمی باشد</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="feeds-left bg-success"><i class="ri-thumb-up-line"></i></div>
                            <div class="feeds-body">
                                <h4 class="title text-success">2 فیدبک جدید <small class="float-left text-muted">9:22
                                        AM</small></h4>
                                <small>ممنون از سایت خوب و باحال شما !</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--end::Notification-->

            <!--begin::Profile-->
            <div class="profile-content-ui position-relative mr-3">
                <div class="profile-content__thumb  dropdown-toggle" data-bs-auto-close="outside"
                     id="profile-content-ui"
                     data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,15">
                    <img class="img-fluid" src="{{asset('/images/150-11.jpg')}}" alt="">
                </div>
                <div class="dropdown-menu dropdown-menu-start feeds_widget" aria-labelledby="profile-content-ui">
                    <div class="header blue d-flex align-items-center">

                        <div class="symbol symbol-40px mx-2 py-5">
                            <img alt="Logo" src="{{asset('/images/150-11.jpg')}}">
                        </div>

                        <div>
                            <span class="text-white  fs-5">امیر</span>
                            <a href="#" class="link-white fs-6 d-block opacity-75 opacity-100-hover">hilsonxhero@gmail.com</a>
                        </div>

                    </div>

                    <div class="row row-cols-2 g-0">
                        <!--begin::Col-->
                        <a href=""
                           class="border-bottom border-end text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">

                            <i class="ri-profile-line ri-2x"></i>

                            <span class="fw-bolder fs-6 d-block pt-3">پروفایل من</span>
                        </a>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <a href=""
                           class="col border-bottom text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">
                            <!--begin::Svg Icon | path: icons/duotone/Interface/Settings-02.svg-->
                            <i class="ri-settings-4-line ri-2x"></i>
                            <!--end::Svg Icon-->
                            <span class="fw-bolder fs-6 d-block pt-3">تنظیمات</span>
                        </a>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col text-center border-end py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0"
                             data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
                             data-kt-menu-flip="center, top">
                            <!--begin::Svg Icon-->
                            <i class="ri-apps-2-line ri-2x"></i>
                            <!--end::Svg Icon-->
                            <span class="fw-bolder fs-6 d-block pt-3">دوره ها</span>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <a href=""
                           class="col text-center py-10 btn btn-text-dark btn-icon-gray-400 btn-active-color-primary rounded-0">

                            <i class="ri-logout-box-r-line ri-2x"></i>

                            <span class="fw-bolder fs-6 d-block pt-3">خروج</span>
                        </a>
                        <!--end::Col-->
                        <!--begin::balance account-->
                        <span class="account-balance me-2 col w-100 d-flex justify-content-center align-items-center">  2,500,000 تومان</span>
                        <!--begin::balance account-->
                    </div>
                </div>
            </div>
            <!--end::Profile-->

        </div>
    </div>
    <!--end::Header-->

    <!--begin::Theme Setting-->
    <div class="theme-setting__nav">
        <div class="card setting_switch">
            <div class="header my-3 text-dark">تنظیمات</div>
            <div class="list-group">
                <div class="list-group-item text-dark">
                    تم دارک
                    <div class="float-left">
                        <div class="form-check form-switch">
                            <input class="form-check-input lv-btn" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="form-group">
                <label class="d-block">ترافیک این ماه <span class="float-left">77%</span></label>
                <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="d-block">حجم سرور <span class="float-left">50%</span></label>
                <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Theme Setting-->

    <!--begin::Main Content-->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">داشبورد</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html" title="پیشخوان">داشبورد</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">42,145,000 تومان</h5>
                                <small class="text-muted">کل فروش 30 روز گذشته</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">25,145,000 تومان</h5>
                                <small class="text-muted">درامد خالص ۳۰ روز گذشته</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">38,145,000 تومان</h5>
                                <small class="text-muted">کل فروش </small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">25,145,000 تومان</h5>
                                <small class="text-muted">کل درآمد مدرسین</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">50,000</h5>
                                <small class="text-muted"> تعداد کاربران</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">470,000</h5>
                                <small class="text-muted"> تعداد کل تراکنش ها</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">470,000</h5>
                                <small class="text-muted"> تعداد کل دوره ها</small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col">
                                <h5 class="mb-2">470,000</h5>
                                <small class="text-muted"> تعداد کل مقاله ها </small>
                            </div>
                            <div class="col-12">
                                <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                    <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47"
                                         style="width: 47%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end::Main Content-->

</div>
<!--end::Content-->

<!--begin::Scripts-->
<script src="{{asset('/js/admin.js')}}"></script><!-- App Js -->
<!--end::Scripts-->

</body>

</html>
