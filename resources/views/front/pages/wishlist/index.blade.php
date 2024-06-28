@extends('front.layout.auth')
@section('title','wishlsit')
@section('userContent')

<main>
    <div
      class="page-top d-flex justify-content-center align-items-center flex-column text-center"
    >
      <div class="page-top__overlay"></div>
      <div class="position-relative">
        <div class="page-top__title mb-3">
          <h2>المفضلة</h2>
        </div>
        <div class="page-top__breadcrumb">
          <a class="text-gray" href="index.html">الرئيسية</a> /
          <span class="text-gray">المفضلة</span>
        </div>
      </div>
    </div>

    <div class="my-5 py-5">
      <section class="section-container favourites">
        <table class="w-100">
          <thead>
            <th class="d-none d-md-table-cell"></th>
            <th class="d-none d-md-table-cell"></th>
            <th class="d-none d-md-table-cell">الاسم</th>
            <th class="d-none d-md-table-cell">السعر</th>
            <th class="d-none d-md-table-cell">تاريخ الاضافه</th>
            <th class="d-none d-md-table-cell">المخزون</th>
            <th class="d-table-cell d-md-none">product</th>
          </thead>
          <tbody class="text-center">
            @forelse ($wishlists as $wishlist)
            <tr>
                <td class="d-block d-md-table-cell">
                  <span class="favourites__remove m-auto">
                    <a href="{{ route('deleteWishlist',$wishlist->product_id) }}"><i class="fa-solid fa-xmark"></i></a>
                  </span>
                </td>
                <td class="d-block d-md-table-cell favourites__img">
                  <img src="{{ asset('admin/products') }}/{{ $wishlist->product->image }}" alt="" />
                </td>
                <td class="d-block d-md-table-cell">
                  <a href="{{ route('showproduct',$wishlist->product_id) }}"> {{ $wishlist->product->name }}</a>
                </td>
                <td class="d-block d-md-table-cell">
                    @if($wishlist->product->discount>0)
                        <span class="product__price product__price--old">{{ $wishlist->product->price }} جنية</span>
                    @endif
                        <span class="product__price">{{ $wishlist->product->price_after_discount }} جنية</span>
                </td>

                <td class="d-block d-md-table-cell">{{ \carbon\carbon::parse($wishlist->created_at)->format('d-m-Y') }}</td>
                <td class="d-block d-md-table-cell">
                  @if($wishlist->product->stock>0)
                    <span class="me-2"><i class="fa-solid fa-check"></i></span>
                    <span class="d-inline-block d-md-none d-lg-inline-block">متوفر بالمخزون</span>
                  @else
                    <span class="d-inline-block d-md-none d-lg-inline-block" style="color:red">غير متوفر بالمخزون</span>
                  @endif
                </td>
              </tr>
            @empty
            <h1>you dont have products in wishlist</h1>
            @endforelse

          </tbody>
        </table>
      </section>
    </div>
  </main>
@endsection
