{{-- Extends layout --}}
@extends('layout.default')
{{-- Content --}}
@section('content')
<div class="card card-custom">
   <div class="card-header flex-wrap border-0 pt-6 pb-0">
      <div class="card-title">
         <h3 class="card-label">
         Edit Stylish 
         <!-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div></h3> -->
      </div>
      <div class="card-toolbar">
         <!--begin::Dropdown-->
         <div class="dropdown dropdown-inline mr-2">
            <!-- <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="svg-icon svg-icon-md"> -->
            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                   <rect x="0" y="0" width="24" height="24" />
                   <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                   <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
               </g>
               </svg> -->
            <!--end::Svg Icon-->
            <!-- </span>Export</button> -->
            <!--begin::Dropdown Menu-->
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
               <!--begin::Navigation-->
               <ul class="navi flex-column navi-hover py-2">
                  <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                     <span class="navi-icon">
                     <i class="la la-print"></i>
                     </span>
                     <span class="navi-text">Print</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                     <span class="navi-icon">
                     <i class="la la-copy"></i>
                     </span>
                     <span class="navi-text">Copy</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                     <span class="navi-icon">
                     <i class="la la-file-excel-o"></i>
                     </span>
                     <span class="navi-text">Excel</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                     <span class="navi-icon">
                     <i class="la la-file-text-o"></i>
                     </span>
                     <span class="navi-text">CSV</span>
                     </a>
                  </li>
                  <li class="navi-item">
                     <a href="#" class="navi-link">
                     <span class="navi-icon">
                     <i class="la la-file-pdf-o"></i>
                     </span>
                     <span class="navi-text">PDF</span>
                     </a>
                  </li>
               </ul>
               <!--end::Navigation-->
            </div>
            <!--end::Dropdown Menu-->
         </div>
         <!--end::Dropdown-->
         <!--begin::Button-->
         <a href="/stylish" class="btn btn-primary font-weight-bolder" >
            <span class="svg-icon svg-icon-md">
               <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect x="0" y="0" width="24" height="24" />
                     <circle fill="#000000" cx="9" cy="15" r="6" />
                     <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                  </g>
               </svg>
               <!--end::Svg Icon-->
            </span>
            Stylish List
         </a>
         <!--end::Button-->
      </div>
   </div>
   <div class="card-body">
      <!-- category form  -->
      <form class="form" method="POST" action="{{ route('stylish.update',$data->id) }}" enctype="multipart/form-data" >
      @csrf
      {{ method_field('PATCH') }}
         <div class="card-body">
            <div class="form-group row">
               <div class="col-lg-6">
                  <label>Full Name :</label>
                  <input type="text" name="stylish_name" class="form-control reset" value="{{$data->stylish_name}}" placeholder=" Enter Full Name."/>
                  @error('stylish_name')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
               <div class="col-lg-6">
                  <label>Salon Name:</label>
                  <input type="text" name="salon_name" class="form-control reset" value="{{$data->salon_name}}" placeholder=" Enter Salon Name."/>
                  @error('salon_name')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <div class="col-lg-6">
                  <label>Email :</label>
                  <input type="email" name="stylish_email" class="form-control reset" value="{{$data->stylish_email}}" placeholder=" Enter Email."/>
                  @error('stylish_email')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
               
               <div class="col-lg-6">
                  <label>Contact Number :</label>
                  <input type="number" name="stylish_mobile" class="form-control reset" value="{{$data->stylish_mobile}}" placeholder=" Enter Contact Number."/>
                  @error('stylish_mobile')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <div class="col-lg-6">
                  <label>Address :</label>
                  <input type="text" name="stylish_address" class="form-control reset" value="{{$data->stylish_address}}" placeholder=" Enter Address."/>
                  @error('stylish_address')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
               <div class="col-lg-6">
                  <label>Location :</label>
                  <select class="form-control select2"   id="kt_select2_1" name="location_id">
                  @foreach($location_data as $key=>$value)
                  @if($value->id==$data->location_id)
                 <option value="{{$value->id}}" selected> {{$value->location}} </option>
                 @else
                 <option value="{{$value->id}}"> {{$value->location}} </option>
                 @endif
                 @endforeach
                 </select>
                  @error('location_id')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
            </div>
            
            <div class="form-group row">
               
               <div class="col-lg-6">
                  <label>Which areas can Stylist Service? :</label>
                  <select class="form-control select2" id="kt_select2_2" multiple  name="location_id_1[]">
                 @foreach($location_data as $key=>$value)
                     <?php $flag=0; ?>
                     @foreach($data->location as $key_1=>$value_1)
                      @if($value->id==$value_1->id)
                      <?php $flag=1; ?>
                     <option value="{{$value->id}}" selected> {{$value->location}} </option>
                      @endif
                     @endforeach
                     @if($flag==0)
                      <option value="{{$value->id}}"> {{$value->location}} </option>
                     @endif
                 @endforeach
                 </select>
                  @error('location_id_1')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
               <div class="col-lg-6">
                  <label>Would you agree to std fee? :</label>
                  <input type="text" name="std_fee" class="form-control reset" value="{{$data->std_fee}}" placeholder=" Enter Stylish fee."/>
                  @error('std_fee')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
               </div>
               <div class="form-group row">
               <div class="col-lg-6">
                  <label>Payment Method from clients :</label>
                  <select class="form-control select2" id="kt_select2_3" name="payment_method">
                    <option>Cash</option>
                    <option>Speedpoint</option>
                    <option>EFT</option>
                    <option> CashSend Voucher </option>
                 </select>
                  @error('service_cost')
                  <span class="form-text text-muted">{{$message}}</span>
                  @enderror
               </div>
            </div>
            
            </div>
         <div class="card-footer">
            <div class="row">
               <div class="col-lg-6">
                  <button type="submit" class="btn btn-primary mr-2">Update</button>
                  <a href="{{url()->previous()}}" class="btn btn-secondary ">Cancel</a>
               </div>
            </div>
         </div>
      </form>
      <!-- category form  -->
   </div>
</div>
@endsection
@section('scripts')
<script>
$(function(){
   $('#kt_select2_1').select2({
   placeholder: "Select Service ",
   allowClear: true
  }); 
  $('#kt_select2_2').select2({
   placeholder: "Select Area ",
   allowClear: true
  }); 
  $('#kt_select2_3').select2({
   placeholder: "Select Location ",
   allowClear: true
  });
  });
  </script>
@endsection