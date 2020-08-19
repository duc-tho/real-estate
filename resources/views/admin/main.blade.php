@include('admin.components.navbar')

@include('admin.components.sidebar')


<div class="content-wrapper">
     @include('admin.components.page-header')

     <!-- Page -->
     <section class="content">
          <div class="container-fluid">
               @switch($page ?? '')
               @case('city')
               @include('admin.page.city')
               @break
               @case('area')
               @include('admin.page.area')
               @break
               @case('district')
               @include('admin.page.district')
               @break
               @case('street')
               @include('admin.page.street')
               @break
               @case('category')
               @include('admin.page.category')
               @break
               @case('post')
               @include('admin.page.post')
               @break
               @case('project')
               @include('admin.page.project')
               @break
               @case('user')
               @include('admin.page.user')
               @break
               @default
               @include('admin.page.dashboard')
               @endswitch
          </div>
     </section>
</div>

@include('admin.components.footer')
