<form action="{{ Request::is('admin/category/add') ? route('adminCategoryPostAdd') : route('adminCategoryPutEdit') }}" method="post">
     @csrf

     @if (Request::is('admin/category/add'))
     @method('POST')
     @else
     @method('PUT')
     @endif

     <div class="card">
          <div class="card-header">
               <input class="btn btn-success" type="submit" value="Lưu">
               <a href="{{route('adminCategory')}}" class="btn btn-danger">Hủy bỏ</a>
          </div>
          <div class="card-body">
               <div class="form-group d-flex">
                    <label class="col-sm-2" for="Name" style="padding-top: 7px;">Danh mục cha</label>
                    <div class="w-100">
                         <select class="form-control" name="ParentId" id="ParentId">
                              <option value="0">Không thuộc danh mục nào</option>
                              @isset($data['category_list'])
                              @foreach ($data['category_list'] as $item)
                              <option value="{{ $item->CategoryId }}" {{ $item->CategoryId === ($data['category_info']->ParentId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                              @endforeach
                              @endisset
                         </select>
                    </div>
               </div>
               <div class="form-group d-flex">
                    <label class="col-sm-2" for="Name" style="padding-top: 7px;">Tên Danh Mục</label>
                    <div class="w-100">
                         <input id="Name" class="form-control" type="text" placeholder="Tên danh mục" name="Name" value="{{ $data['category_info']->Name ?? old('Name') }}">
                    </div>
               </div>
               <div class="form-group d-flex">
                    <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                    <div class="w-100">
                         <input id="Slug" class="form-control" type="text" placeholder="Slug" name="Slug" value="{{ old('Name') }}" readonly>
                    </div>
               </div>
          </div>
     </div>
</form>

<script>
     let name = document.getElementById('Name');
     let slug = document.getElementById('Slug');
     let convertToSlug = () => slug.value = name.value.trim().replace(/\s+/g, '-');

     convertToSlug();
     name.addEventListener('input', convertToSlug);
</script>
