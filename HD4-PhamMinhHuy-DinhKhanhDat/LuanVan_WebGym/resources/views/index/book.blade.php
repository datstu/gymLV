@extends('template.layout')
@section('content')
<?php date_default_timezone_set('Asia/Ho_Chi_Minh');
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
       
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Đặt lịch cho tuần sau, chốt lịch vào 0h thứ 7 mỗi tuần</h2>
                       
                        <ul class="list-group" style="font-size: 16px;">
                            <li class="list-group-item " style="font-size: 18px;">Ca 1: 6h sáng - 12h trưa.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 2: 12h trưa - 18h tối.</li>
                          <li class="list-group-item " style="font-size: 18px;">Ca 3: 18h tối - 00h</li> <li class="list-group-item " style="font-size: 18px;">Bạn đang chọn lịch tại phòng gym <strong>{{$phonggym->name}} - {{$phonggym->address_gym}}</strong></li>
                          <li class="list-group-item " style="font-size: 18px;">Bạn muốn bỏ chọn thứ mấy thì chọn vào tên thứ.(vd: hủy chọn 1 trong 3 ca ngày thứ 2 thì chọn tên thứ 2)</li>
                          
                         
                        </ul>
                    </div>
                </div>
                 <div class="col-lg-7 col-sm-12">
                    
                     <div class="table-responsive table-responsive-data2">
                         
        <table class="table table-data2">
            <thead>
                <tr>
                    {{-- <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th> --}}
                    <th>Ngày đặt</th>
                    <th>Thứ 2</th>
                    <th>Thứ 3</th>
                    <th>Thứ 4</th>
                    <th>Thứ 5</th>
                    
                    <th>Thứ 6</th>
                 
                    <th>Thứ 7</th>
                    <th>Chủ nhất</th>
                    <th></th>
                  
                </tr>
            </thead>
            
            <tbody>
                 <?php
                    $nowDate = strtotime(date('d-m-Y'));
                    $showdate = date('N',$nowDate);
                   

                    //output 2014-11-08 14:10
                   // echo $nowDate;
                   
                     $dayOfPre =  '';
                    if(isset($listScheofOneCus)){
                        foreach ($listScheofOneCus as $keySch => $valueSch) {

                           {{-- if($nowDate == strtotime($valueSch->DateBook)) --}}
                           if(($nowDate -  strtotime($valueSch->DateBook) +1)/ (60 * 60 * 24) <=14  &&
                           ($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) >7 )
                               {
                                 $flag = true;
                                 $dayOfPre = strtotime($valueSch->DateBook);
                                $strCss = 'style="background: antiquewhite;color: brown;"';

                            }
                            ?>
                <style type="text/css">
                    #tblSche:hover {
                        background-color: #deb37a;
                        color: #730606;
                    }
                </style>
                <tr class="tr-shadow" id="tblSche" <?php if(isset($strCss)) 
                {echo $strCss; } ?>>
                    
                    
                   
                            
                    
                    <td>
                        <?php $time = strtotime($valueSch->DateBook);
                    echo  date('d-m-Y',$time);
                  {{--   echo '<br>'.$nowDate.'-'.$time; --}}
                     
                     ?></td>
                    <td>
                         <?php

                         if($showdate == 1 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu2 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu2}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                        } else {
                        ?>
                        @if($valueSch->thu2 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu2}} @endif

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 2 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu3 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu3}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                             } else {
                        ?>
                        @if($valueSch->thu3 == 'null'){{'Trống'}}
                                    @else {{$valueSch->thu3}} @endif

                                    <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 3 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu4 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu4}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            @if($valueSch->thu4 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu4}} @endif

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 4 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu5 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu5}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
                         @if($valueSch->thu5 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu5}} @endif

                        <?php

                     }?>
                    </td>  
                    <td>
                         <?php
                         if($showdate == 5 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu6 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu6}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
                        @if($valueSch->thu6 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu6}} @endif

                        <?php

                     }?>
                 </td>  
                     
                    <td>
                      
                    <?php
                         if($showdate == 6 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->thu7 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu7}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            @if($valueSch->thu7 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu7}} @endif

                        <?php

                     }?>
                   
                         </td>            
                    <td>
                         <?php
                         if($showdate == 7 && isset($strCss)){?>
                         <u style="display: block;">
                         @if($valueSch->chunhat == 'null'){{'Trống'}}
                        @else {{$valueSch->chunhat}} @endif
                        </u>
                         <?php
                         echo date('d-m');
                        $strCss = null;
                     } else {
                        ?>
            @if($valueSch->thu7 == 'null'){{'Trống'}}
                        @else {{$valueSch->thu7}} @endif

                        <?php

                     }?>
                    </td>
                 <td><?php
                if(($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) >=0
                    && ($nowDate -  strtotime($valueSch->DateBook))/ (60 * 60 * 24) < 6 ){
                  ?>
                    <a href="{{url('/doi-lich/'.$valueSch->id_schedule.'/'.$valueSch->id_gym.'/'.$goitap)}}"><i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <?php } ?>
                    </td> 
                </tr>
                <?php
                        }
                    }
                     ?>
                   
                <tr class="spacer"></tr>

            </tbody>
           {{-- @endforeach  --}}
        </table>
        </div>
       {{--  <?php 
            if($flagSche){
        ?>
                <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-9">
                            <a href="{{url('/them-khach-hang')}}">
                                <button type="button" id="btn-add-customer" class="btn btn-md btn-primary" style=" font-size: 20px; background-color: #b0b435;border-color: #b0b435">
                            
                             <i class="zmdi zmdi-plus"></i>+ Đặt lịch cho tuần sau nữa </button></a>
                            
                            <br />
                            
                        </div>

                    
                
                    </div>
                
                </div>
            </div>
        </div>
        <?php } ?> --}}
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
                    <?php 
                    if(!$flagSche){
                        ?>
                    <div class="table-main table-responsive ">
                        <table class="table">
                            <thead>
                                <form action=" {{route('datlich')}}
                                " method="get">
                                    {{ csrf_field() }}
                                <input type="hidden" name="id_gym" value="{{$phonggym->id_gym}}">
                                
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
                             @for ($i = 2; $i <= 8; $i++)
                             @if($i==8)
                            <td>
                                <input type="radio" name="cn" id="ca1_t8" value="ca1">
                                <label for="ca1_t8">Chọn ({{$val['chunhat']['ca1']}}/{{$phonggym->MAX}})</label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca1_t{{$i}}"  value="ca1">
                                <label for="ca1_t{{$i}}">Chọn ({{$val['thu'."$i"]['ca1']}}/{{$phonggym->MAX}})</label>
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
                                <label for="ca2_t8">Chọn ({{$val['chunhat']['ca2']}}/{{$phonggym->MAX}})</label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca2_t{{$i}}"  value="ca2">
                                <label for="ca2_t{{$i}}">Chọn ({{$val['thu'."$i"]['ca2']}}/{{$phonggym->MAX}})</label>
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
                                <label for="ca3_t8">Chọn ({{$val['chunhat']['ca3']}}/{{$phonggym->MAX}})</label>
                            </td>
                             @else 
                             <td>
                                <input type="radio" name="t{{$i}}" id="ca3_t{{$i}}"  value="ca3">
                                <label for="ca3_t{{$i}}">Chọn ({{$val['thu'."$i"]['ca3']}}/{{$phonggym->MAX}})</label>
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
                    <?php
                            }
                         ?>
                </div>
            </div>

            

           </form>

        
    
 
<div class="row">
        <?php 
        //kiem tra
           
        if(!$flagSche){

            
                        ?>
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
           
        <?php } ?>
    </div>
</div>
                <?php
                $messSche = Session::get('msSche');
                if($messSche){
                    echo $messSche;
                    Session::put('msSche',null);
                }  ?>
    <!-- End Cart -->

    @stop