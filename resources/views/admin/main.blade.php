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
               @case('indexarea')
               @include('admin.page.area.indexarea')
               @break
               @case('detailarea')
               @include('admin.page.area.detailarea')
               @break
               @case('detaileditarea')
               @include('admin.page.area.editarea')
               @break
               {{-- End Case Area --}}

               {{-- Start Case District --}}
               @case('indexdistrict')
               @include('admin.page.district.indexdistrict')
               @break
               @case('detaildistrict')
               @include('admin.page.district.detaildistrict')
               @break
               @case('detaileditdistrict')
               @include('admin.page.district.editdistrict')
               @break
               {{-- End Case District --}}

               {{-- Start Case street --}}
               @case('indexstreet')
               @include('admin.page.street.indexstreet')
               @break
               @case('detailstreet')
               @include('admin.page.street.detailstreet')
               @break
               @case('detaileditstreet')
               @include('admin.page.street.editstreet')
               @break
               {{-- End Case street --}}

               {{-- Start Case Category --}}
               @case('indexcategory')
               @include('admin.page.category.index')
               @break
               @case('detailcategory')
               @include('admin.page.category.detailcategory')
               @break
               @case('detaileditcategory')
               @include('admin.page.category.editcategory')
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
