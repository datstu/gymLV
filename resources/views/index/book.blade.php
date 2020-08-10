@extends('template.layout')
@section('content')


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Đặt lịch tập</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Đặt lịch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        
        <div class="container">
            <div class="row">
       
                <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Đặt lịch cho tuần sau, chốt lịch vào 0h thứ 7 mỗi tuần</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                            <li class="list-group-item " style="font-size: 18px;">Ca 1: 6h sáng - 12h trưa.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 2: 12h trưa - 18h tối.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 3: 18h tối - 00h</li>
                          <li class="list-group-item " style="font-size: 18px;">Bạn muốn bỏ chọn thứ mấy thì chọn vào tên thứ.(vd: hủy chọn 1 trong 3 ca ngày thứ 2 thì chọn tên thứ 2)</li>
                          @if($ac=='show')
                           <li class="list-group-item " style="font-size: 18px;"><strong>Bạn đã đăng ký lịch trước đó. Nếu bạn muốn đổi lịch thì mời bạn chọn ca tập mới.</strong></li>
                           @endif
                           @if($ac1=='show')
                           <li class="list-group-item " style="font-size: 18px;"><strong>Chú ý: Gói có phục vụ HLV sẽ không được đổi lịch tập</strong></li>
                           @endif
                        </ul>
                    </div>
                </div>
                 <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right collapse {{$ac}}{{$ac1}}">
                        <h2>Lịch bạn đã đặt trước đó:</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                           
                            <li class="list-group-item " style="font-size: 18px;">Thứ 2 : @if($listcus->thu2!='null'){{$listcus->thu2}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 3 : @if($listcus->thu3!='null'){{$listcus->thu3}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 4 : @if($listcus->thu4!='null'){{$listcus->thu4}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 5 : @if($listcus->thu5!='null'){{$listcus->thu5}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 6 : @if($listcus->thu6!='null'){{$listcus->thu6}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Thứ 7 : @if($listcus->thu7!='null'){{$listcus->thu7}}@else Trống @endif</li>
                            <li class="list-group-item " style="font-size: 18px;">Chủ nhật : @if($listcus->chunhat!='null'){{$listcus->chunhat}}@else Trống @endif</li>                         
                        </ul>
                    </div>
                </div>
           
    
        
 
    </div> <?php 
    $mess  = Session::get('message');
    if($mess) {
        echo $mess;
        Session::put('message',null);
    }

    ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive collapse {{$ac}}{{$ac2}}">
                        <table class="table">
                            <thead>
                                <form action="@if($ac=='show')
                                {{route('doilich')}}@else {{route('datlich')}}
                                @endif" method="get">
                                    {{ csrf_field() }}
                                <input type="hidden" name="id_gym" value="{{$phonggym}}">
                                
                                <input type="hidden" name="id_gt" value="{{$goitap}}">
                        <tr>
                            <th></th>
                            <th>
                                <label for="ca1_null">Thứ 2</label>
                                <input style="display: none;" type="radio" checked 
                                name="t2" id="ca1_null" checked value="null">
                            </th>
                            <th>
                                <label for="ca2_null">Thứ 3</label>
                                <input style="display: none;" type="radio" checked 
                                name="t3" id="ca2_null" value="null">
                            </th>
                            <th>
                                <label for="ca3_null">Thứ 4</label>
                                <input style="display: none;" type="radio" checked 
                                name="t4" id="ca3_null" value="null">
                            </th>
                            <th>
                                <label for="ca4_null">Thứ 5</label>
                                <input style="display: none;" type="radio" checked 
                                name="t5" id="ca4_null" value="null">
                            </th>
                            <th>
                                <label for="ca5_null">Thứ 6</label>
                                <input style="display: none;" type="radio" checked 
                                name="t6" id="ca5_null" value="null">
                            </th>
                            <th>
                                <label for="ca6_null">Thứ 7</label>
                                <input style="display: none;" type="radio" checked 
                                name="t7" id="ca6_null" value="null">
                            </th>
                            <th>
                                <label for="ca7_null">Chủ nhật</label>
                                <input style="display: none;" type="radio" checked 
                                name="cn" id="ca7_null" value="null">
                            </th>
                        </tr>
                            </thead>
                            <tbody>
                        <tr>
                            <td>Ca 1</td>
                            <td>
                                <input type="radio" name="t2" id="ca1_t2"  value="ca1">
                                <label for="ca1_t2">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t3" id="ca1_t3" value="ca1">
                                <label for="ca1_t3">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t4" id="ca1_t4" value="ca1">
                                <label for="ca1_t4">Chọn</label>
                            </td>
                            <td><input type="radio" name="t5" id="ca1_t5" value="ca1">
                                <label for="ca1_t5">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t6" id="ca1_t6" value="ca1">
                                <label for="ca1_t6">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t7" id="ca1_t7" value="ca1">
                                <label for="ca1_t7">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="cn" id="ca1_t8" value="ca1">
                                <label for="ca1_t8">Chọn</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Ca 2</td>
                            <td>
                                <input type="radio" name="t2" id="ca2_t2" value="ca2">
                                <label for="ca2_t2">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t3" id="ca2_t3" value="ca2">
                                <label for="ca2_t3">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t4" id="ca2_t4" value="ca2">
                                <label for="ca2_t4">Chọn</label>
                            </td>
                            <td><input type="radio" name="t5" id="ca2_t5" value="ca2">
                                <label for="ca2_t5">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t6" id="ca2_t6" value="ca2">
                                <label for="ca2_t6">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t7" id="ca2_t7" value="ca2">
                                <label for="ca2_t7">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="cn" id="ca2_t8" value="ca2">
                                <label for="ca2_t8">Chọn</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Ca 3</td>
                            <td>
                                <input type="radio" name="t2" id="ca3_t2" value="ca3">
                                <label for="ca3_t2">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t3" id="ca3_t3" value="ca3">
                                <label for="ca3_t3">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t4" id="ca3_t4" value="ca3">
                                <label for="ca3_t4">Chọn</label>
                            </td>
                            <td><input type="radio" name="t5" id="ca3_t5" value="ca3">
                                <label for="ca3_t5">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t6" id="ca3_t6" value="ca3">
                                <label for="ca3_t6">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="t7" id="ca3_t7" value="ca3">
                                <label for="ca3_t7">Chọn</label>
                            </td>
                            <td>
                                <input type="radio" name="cn" id="ca3_t8" value="ca3">
                                <label for="ca3_t8">Chọn</label>
                            </td>
                        </tr>
                        
                            </tbody>
                        </table>
                        <div class="update-box ">
                        <input value="Đặt lịch" type="submit">
                    </div>
                    </div>
                </div>
            </div>

            

           </form>

        
    
 
<div class="row">
       
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2>CHÚ Ý</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                            <li class="list-group-item " style="font-size: 18px;">Bạn nên đặt lịch sớm để có nhiều sự lựa chọn hơn.</li>
                          <li class="list-group-item " style="font-size: 18px;">Những ô không được phép chọn vì đã đủ số lượng người đặt.</li>
                          <li class="list-group-item " style="font-size: 18px;" >Trong 1 ngày chỉ được chọn 1 trong 3 ca.</li>
                          <li class="list-group-item " style="font-size: 18px;">Bạn có thể không chọn nếu không phù hợp. </li>
                          <li class="list-group-item " style="font-size: 18px;">Sau khi bạn chọn lịch hệ thống sẽ tự chọn huấn luận viên cho bạn.</li>
                           
                        </ul>
                    </div>
                </div>
           
    
    </div>
</div>
    <!-- End Cart -->

    @stop