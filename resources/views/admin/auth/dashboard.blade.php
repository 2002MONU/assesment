@extends('admin.layout.app')
@section('maincontent')
    


<div class="container-fluid content-inner pb-0">
    <div class="row mb-4">
       <div class="col-lg-12">
             <div class="row align-items-center">
                <div class="col-xl-12 d-none d-md-block">
                   <div class="card mb-0">
                      <div class="card-body ">
                         <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex">
                               <img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                               <div class="dropdown mt-2 ms-2">
                                  <a href="#" class="text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                     <span class="mt-2">Litecoin</span>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                                                                                                                                                                                                                                 </svg>
                                  </a>
                                  <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/01.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/03.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/08.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                                  </ul>
                               </div>                    
                               <div class="dropdown mt-2 ms-2">
                                  <a href="#" class="text-white" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                     <span class="mt-2 ">BTC/USD</span>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                     </svg>
                                  </a>
                                  <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2">
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/01.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/03.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                     <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/08.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                                  </ul>
                               </div> 
                            </div>
                            <div class="d-none d-lg-block w-50">
                               <div class="d-flex justify-content-evenly flex-1">
                                  <span class=" text-primary">
                                     37,390.00<br>
                                     <small>$37,390.00</small>
                                  </span>
                                  <span class=" text-primary">
                                     129.51+0.8%<br>
                                     <small>24th changes</small>
                                  </span>
                                  <span class="">
                                     37,440.01<br>
                                     <small>24th high</small>
                                  </span>
                                  <span class="">
                                     37,327.30<br>
                                     <small>24th low</small>
                                  </span>
                                  <span class="d-none">
                                     37,390.00<br>
                                     <small>24th volume(BTC)</small>
                                  </span>                     
                               </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                               <span class="">
                                  <svg width="32" height="32" viewBox="0 0 34 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="6" width="1" height="53" rx="0.5" fill="white"/>
                                  <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" fill="#202022"/>
                                  <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" stroke="white"/>
                                  <rect x="27" width="1" height="53" rx="0.5" fill="white"/>
                                  <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" fill="#202022"/>
                                  <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" stroke="white"/>
                                  </svg>
                               </span>
                               <a href="#" class="bg-secondary rounded-1 p-2 ms-2">
                                  <svg width="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M26.3875 14.1244L16.8484 23.7653L5.99906 16.9795C4.44458 16.0069 4.76794 13.6457 6.5262 13.1315L32.2854 5.58795C33.8954 5.11605 35.3876 6.62138 34.9093 8.23666L27.2885 33.9779C26.7664 35.7387 24.4187 36.0533 23.4553 34.4921L16.8433 23.767" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>     
                </div>      
               
             </div>
       </div>
    </div>
 
     
   
          
              
               
               
              
                    
           @endsection