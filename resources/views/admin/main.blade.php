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

                    @default
                    @include('admin.page.dashboard')
               @endswitch
          </div>
     </section>
</div>

@include('admin.components.footer')
