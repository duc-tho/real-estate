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

               {{-- Start Case Area --}}
               @case('area.index')
               @include('admin.page.area.index')
               @break
               @case('area.detail')
               @include('admin.page.area.detail')
               @break
               {{-- End Case Area --}}

               {{-- Start Case District --}}
               @case('district.index')
               @include('admin.page.district.index')
               @break
               @case('district.detail')
               @include('admin.page.district.detail')
               @break
               {{-- End Case District --}}

               {{-- Start Case street --}}
               @case('street.index')
               @include('admin.page.street.index')
               @break
               @case('street.detail')
               @include('admin.page.street.detail')
               @break
               {{-- End Case street --}}

               {{-- Start Case Category --}}
               @case('category.index')
               @include('admin.page.category.index')
               @break
               @case('category.detail')
               @include('admin.page.category.detail')
               @break
               {{-- End Case Category --}}

               @case('post')
               @include('admin.page.post')
               @break

               @case('project')
               @include('admin.page.project')
               @break

               @case('user')
               @include('admin.page.user')
               @break
               @include('admin.page.dashboard')
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
