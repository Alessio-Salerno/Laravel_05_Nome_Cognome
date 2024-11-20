
<x-layout>


   <div class="container-fluid vh-100 bg-background">

   @if (session()->has('emailSent'))
   <div class="alert alert-success">
    {{session('emailSent')}}
   </div>
   @endif


   @if (session()->has('emailError'))
   <div class="alert alert-danger">
    {{session('emailError')}}
   </div>
   @endif


    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-12">
            <h1 class="text-center display-4 py-5 title ">
            Hello  {{$titolo}}
            </h1>
        </div>
    </div>
   </div>
    

   </x-layout>

