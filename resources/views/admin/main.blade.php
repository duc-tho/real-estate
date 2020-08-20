@include('admin.components.navbar')

@include('admin.components.sidebar')


<div class="content-wrapper">
     @include('admin.components.page-header')

     <!-- Page -->
     <section class="content">
          <div class="container-fluid">
               @switch($page ?? '')
               @case('city')
               @include('admin.page.city.index')
               @break
               @case('city_detail')
               @include('admin.page.city.detail')
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
               @include('admin.page.post.index')
               @break
               @case('post_detail')
               @include('admin.page.post.detail')
               @break
               @case('project')
               @include('admin.page.project.index')
               @break
               @case('project_detail')
               @include('admin.page.project.detail')
               @break
               @case('user')
               @include('admin.page.user.index')
               @break
               @case('user_detail')
               @include('admin.page.user.detail')
               @break
               @default
               @include('admin.page.dashboard')
               @endswitch
          </div>
     </section>
</div>

@include('admin.components.footer')
