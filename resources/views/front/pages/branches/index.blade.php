@extends('front.layout.auth')
@section('title','wishlsit')
@section('userContent')

<main>
    <section
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>فروعنا</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="index.html">الرئيسية</a> /
          <span class="text-gray">فروعنا</span>
        </div>
      </div>
    </section>

    <section class="branches section-container my-5 py-5">
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="branches__item h-100">
            <h3>فرع: الاسكندرية</h3>
            <p>
              ش جمال عبد الناصر - تحت كوبرى 45 بجوار كوكى مان والاكاديميه
              ميامى - الاسكندرية.
            </p>
            <div
              class="branches__contact d-flex align-items-center gap-2 mb-3"
            >
              <div class="branches__icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div>
                <p class="mb-0 fw-bolder">اتصل بنا</p>
                <p class="mb-0">01063888667</p>
              </div>
            </div>
            <div class="branches__location d-flex align-items-center gap-2">
              <div class="branches__icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <p class="mb-0 fw-bolder">زورنا في الفرع</p>
                <p class="mb-0">ش جمال عبد الناصر - الاسكندرية.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="branches__item h-100">
            <h3>فرع: طنطا</h3>
            <p>ش بطرس مع سعيد امام المركز الطبى - طنطا.</p>
            <div
              class="branches__contact d-flex align-items-center gap-2 mb-3"
            >
              <div class="branches__icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div>
                614622
                <p class="mb-0 fw-bolder">اتصل بنا</p>
                <p class="mb-0">01063888667</p>
              </div>
            </div>
            <div class="branches__location d-flex align-items-center gap-2">
              <div class="branches__icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <p class="mb-0 fw-bolder">زورنا في الفرع</p>
                <p class="mb-0">ش بطرس - طنطا.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="branches__item h-100">
            <h3>فرع: المحلة</h3>
            <p>ش شكري الكواتلي مع ش عبد العزيز امام البنك الاهلي.</p>
            <div
              class="branches__contact d-flex align-items-center gap-2 mb-3"
            >
              <div class="branches__icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div>
                <p class="mb-0 fw-bolder">اتصل بنا</p>
                <p class="mb-0">01063888667</p>
              </div>
            </div>
            <div class="branches__location d-flex align-items-center gap-2">
              <div class="branches__icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <p class="mb-0 fw-bolder">زورنا في الفرع</p>
                <p class="mb-0">ش شكري الكواتلي - المحلة.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
