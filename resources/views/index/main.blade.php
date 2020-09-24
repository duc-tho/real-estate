@include('index.components.head-import')
@include('index.components.header')

<div id="app">
     @switch($page ?? 'home')
     @case('project.index')
     @include('index.page.project.index')
     @break
     @case('project.detail')
     @include('index.page.project.detail')
     @break
     @case('post.index')
     @include('index.page.post.index')
     @break
     @case('post.detail')
     @include('index.page.post.detail')
     @break
     @case('addPost.index')
     @include('index.page.add-post.index')
     @break
     @case('home')
     @include('index.page.home.index')
     @break
     @default
     @include('index.page.home.index')
     @endswitch
</div>

@include('index.components.footer')
