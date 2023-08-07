@include('admin.components.navbar')
@include('admin.components.sidebar')


<div class="content-wrapper">
     @include('admin.components.page-header')

     <!-- Page -->
     <section class="content">
          <div class="container-fluid">
               @switch($page ?? '')

               {{-- Start Case Area --}}
               @case('area.index')
               @include('admin.page.area.index')
               @break
               @case('area.detail')
               @include('admin.page.area.detail')
               @break
               @case('area.edit')
               @include('admin.page.area.edit')
               @break
               {{-- End Case Area --}}

               {{-- Start Case District --}}
               @case('district.index')
               @include('admin.page.district.index')
               @break
               @case('district.detail')
               @include('admin.page.district.detail')
               @break
               @case('district.edit')
               @include('admin.page.district.edit')
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

               {{-- @case('post')
               @include('admin.page.post.index')
               @break
               @case('project')
               @include('admin.page.project.index')
               @break --}}

               {{-- start city --}}
               @case('city')
               @include('admin.page.city.index')
               @break
               @case('city.detail')
               @include('admin.page.city.detail')
               @break
               @case('city.edit')
               @include('admin.page.city.edit')
               @break
               {{-- start post --}}
               @case('post')
               @include('admin.page.post.index')
               @break
               @case('post.detail')
               @include('admin.page.post.detail')
               @break
               {{-- start project --}}
               @case('project.index')
               @include('admin.page.project.index')
               @break
               @case('project.detail')
               @include('admin.page.project.detail')
               @break
               {{-- start user --}}
               @case('user')
               @include('admin.page.user.index')
               @break
               @case('user.detail')
               @include('admin.page.user.detail')
               @break
               @case('dashboard')
               @include('admin.page.dashboard')
               @break
               @default
               @include('admin.page.dashboard')
               @endswitch
          </div>
     </section>
</div>

@include('admin.components.footer')
