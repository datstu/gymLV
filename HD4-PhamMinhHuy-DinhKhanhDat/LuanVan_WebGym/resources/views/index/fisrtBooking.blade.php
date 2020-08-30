@extends('template.layout')
@section('content')

<script type="text/javascript">
    function F()
    {
            
    $.ajax({
        url:"{{route('apiTinh')}}",
        type:'json',
        method:'GET',
        success:function(s)
        {
            s= JSON.parse(s);
            listItem = s.LtsItem;
            
            $.each(listItem, function(k,v){
                tam= "<option value='"+ v.Title +"'>"+ v.Title +"</option>";
                $("#tinh").append(tam);

            });
        }
    })
    }  
</script>
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
                          
                        
                            
                        
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Vui lòng chọn phòng tập và ngày bắt đầu dịch vụ</h2>
                        <br>
                     <form action=" {{route('datlich_landau')}}" method="get">
                                    {{ csrf_field() }}
                                
                                
                                <input type="hidden" name="id_gt" value="{{$goitap}}">
                                <div class="mb-3">
                                    <label for="email">Ngày bắt đầu dịch vụ  *</label>
                                    <input type="date" class="form-control" id="date"name="date"  required> 
                                </div>
                                <div class="mb-3">
                                    <label for="phongtap">Phòng tập *</label>                      
                                        <select class="wide w-100" id="phongtap" name="phongtap" required>
                                        <option value="Choose..." data-display="Select">Choose...</option>
                                        @foreach($gym as $val)
                                        <option value="{{$val->id_gym}}">{{$val->address_gym}}</option>
                                        @endforeach
                                    </select>
                                        <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                        
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
                    <div class="table-main table-responsive ">
                        <table class="table">
                            <thead>
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
                             @for ($i = 2; $i <= 8; $i++)
                             @if($i==8)
                            <td>
                                <input type="radio" name="cn" id="ca1_t8" value="ca1">
                                <label for="ca1_t8">Chọn  </label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca1_t{{$i}}"  value="ca1">
                                <label for="ca1_t{{$i}}">Chọn </label>
                            </td>
                             @endif
                           
                            @endfor
                           
                        </tr>
                        <tr>
                            <td>Ca 2</td>
                            @for ($i = 2; $i <= 8; $i++)
                             @if($i==8)
                            <td>
                                <input type="radio" name="cn" id="ca2_t8" value="ca2">
                                <label for="ca2_t8">Chọn </label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca2_t{{$i}}"  value="ca2">
                                <label for="ca2_t{{$i}}">Chọn </label>
                            </td>
                             @endif
                           
                            @endfor
                            
                            
                        </tr>
                        <tr>
                            <td>Ca 3</td>
                             @for ($i = 2; $i <= 8; $i++)
                             @if($i==8)
                            <td>
                                <input type="radio" name="cn" id="ca3_t8" value="ca3">
                                <label for="ca3_t8">Chọn </label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca3_t{{$i}}"  value="ca3">
                                <label for="ca3_t{{$i}}">Chọn </label>
                            </td>
                             @endif
                           
                            @endfor
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