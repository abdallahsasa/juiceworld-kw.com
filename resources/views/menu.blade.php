@extends('layouts.app')
@section('content')
    <section class="sb-menu-section sb-p-90-60">
        <div class="sb-bg-1">
            <div></div>
        </div>
        <div class="container">
            <!-- filter -->
            <div class="sb-filter mb-30">
                <a href="#." STYLE="display: none;"  id="ALL" data-filter="*" class="sb-filter-link sb-active scroll">All </a>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <a href="#." id="{{str_replace(' ', '', $category->name)}}" data-filter=".{{str_replace(' ', '', $category->name)}}"
                           class="sb-filter-link scroll" >{{$category->name}}</a>
                    @endforeach
                @endif
            </div>

            <!-- filter end -->
            <div class="sb-masonry-grid" id="main">
                <div class="sb-grid-sizer"></div>
                @if(isset($products))
                    @foreach($products as $product)
                        <div class="sb-grid-item sb-item-25 {{str_replace(' ', '', $product->category->name)}}">
                            <a data-fancybox="menu" data-no-swup href="{{$product->image_url}}"
                               class="sb-menu-item sb-mb-2">
                                <div class="sb-cover-frame">
                                    <img src="{{$product->image_url}}" alt="{{$product->image_name}}">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">{{$product->name}}</h4>
                                    <div class="sb-price">
                                        @foreach($product->prices as $price)
                                            @if($price->size=='Regular')
                                                {{$price->price}}
                                                @break
                                            @else
                                                {{$price->price}}
                                                @break
                                            @endif
                                        @endforeach
                                        <sub>{{$product->currency}}</sub></div>
                                </div>
                                <a style="width: 100%;justify-content: center;" href="/product/{{$product->id}}"
                                   class="sb-btn sb-ppc">
                      <span class="sb-icon">
                        <img src="{{asset('img/ui/icons/search.svg')}}" alt="icon">
                      </span><span>View sizes</span></a>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- menu end -->
@endsection
