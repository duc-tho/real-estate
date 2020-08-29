@include('index.components.head-import');
@include('index.components.header');
@include('index.index')

{{-- <div id="app">
     @switch($page ?? 'home')
     @case('project')
     @include('index.page.project.index')
     @break
     @case('project.detail')
     @include('index.page.project.detail')
     @break
     @case('home')
     @include('index.page.home.index')
     @break
     @default
     @include('index.page.home.index')
     @endswitch
</div> --}}

@include('index.components.footer')

