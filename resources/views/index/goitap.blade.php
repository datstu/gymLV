@extends('template.layout')
@section('content')
<script>
      function getback(){
           location.reload();
      }
  </script>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Gói tập</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Gói tập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start GOI-TAP Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 GOI-TAP-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @foreach( $product as $sp)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="{{url('public/uploads/product/'.$sp->img)}}" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                         <ul class="nav nav-tabs ml-auto">
                                                            <li>
                                                                 <a class="nav-link" href="#list{{$sp->id_combo}}" data-toggle="tab" data-placement="right" title="View"> <i class="fas fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                        <a class="cart" href="{{ route('thanhtoanGT',$sp->id_combo) }}">Đăng ký</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <ul class="nav nav-tabs ml-auto">
                                                      <li>
                                                          <a class="nav-link" href="#list{{$sp->id_combo}}" data-toggle="tab"><h4>{{$sp->ten}}</h4> </a>
                                                      </li>
                                                    </ul>
                                                      </a>
                                                    <h5>{{$sp->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                       
                                    </div>
                                </div>
                                @foreach($product as $sp)
                                <div role="tabpanel" class="tab-pane fade" id="list{{$sp->id_combo}}">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="{{url('public/uploads/product/'.$sp->img)}}" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>{{$sp->ten}}</h4>
                                                    <h5> {{$sp->price}}</h5>
                                                    <p>{{$sp->description}}</p>
                                                    <a class="btn hvr-hover" href="{{ route('thanhtoanGT',$sp->id_combo) }}">Đăng ký</a>
                                                    <a class="btn hvr-hover" href="#" onclick="getback()">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    
                                </div>
                                @endforeach 
                                  
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-GOI-TAP-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="{{URL::to('/SEARCH-GT')}}" >
                                <input class="form-control" name="keywords_submit" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            @if($loai=='vip')
                                   <?php $active1= 'active' ?>
                                @elseif($loai=='hlv') 
                                    <?php $active2= 'active' ?>
                                @else
                                    <?php $active3= 'active' ?>
                                @endif
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action " href="#sub-men1" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1">SHOP<small class="text-muted">(100)</small>
                                </a>
                               

                                    <div class="collapse " id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="{{URL::to('/SEARCH-PK?loai=phukien')}}" class="list-group-item list-group-item-action  {{$active1}} ">Phụ kiện <small class="text-muted">(50)</small></a>
                                            <a href="{{URL::to('/SEARCH-PK?loai=tpbs')}}" class="list-group-item list-group-item-action {{$active2}} ">tpbs <small class="text-muted">(10)</small></a>
                                           
                                        </div>
                                    </div>
                                </div>
                               <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action {{$active3}}" href="#sub-men2" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men2" >Gói tập <small class="text-muted">(100)</small>
                                </a>
                                    <div class="collapse show" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="{{URL::to('/SEARCH-GT?loai=hlv')}}" class="list-group-item ist-group-item-action {{$active2}}">Có HLV <small class="text-muted">(50)</small></a>
                                            <a href="{{URL::to('/SEARCH-GT?loai=vip')}}" class="list-group-item list-group-item-action {{$active1}}">Gói VIP <small class="text-muted">(10)</small></a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="list-group-item list-group-item-action"> Grocery  <small class="text-muted">(150) </small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Grocery <small class="text-muted">(11)</small></a>
                                <a href="#" class="list-group-item list-group-item-action"> Grocery <small class="text-muted">(22)</small></a>
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End GOI-TAP Page -->


@stop