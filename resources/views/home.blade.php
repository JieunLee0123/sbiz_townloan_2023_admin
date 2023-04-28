<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>우리동네홍보페이지 관리자페이지</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="w-full h-full">
  <div class="flex flex-no-wrap">
      @livewire('component.side-bar')

      <div class="w-full">
          @livewire('component.header')
          
          <div class="container py-10 h-64 md:w-4/5 w-11/12 mx-5">
              <div class="w-full h-full">
                  
                <div class="relative overflow-x-auto sm:rounded-lg">
                    @livewire('component.page-title')  

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    @livewire('posts')
                </div>
              </div>
          </div>
      </div>
  </div>  
</div>
@livewireScripts
</body>
</html>
