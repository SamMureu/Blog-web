<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
   @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->
        @include('home.banner')
         <!-- banner section end -->
      
      <!-- header section end -->
      <!-- services section start -->
      @include('home.service')
      <!-- services section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
     
      <!-- blog section end -->

      <!-- footer section start -->
      @include('home.footer')   
   </body>
</html> 