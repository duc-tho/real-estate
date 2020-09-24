<form novalidate id="main" action="{{ Request::is('admin/category/add') ? route('adminCategoryPostAdd') : route('adminCategoryPutEdit', $data['category_info']->CategoryId) }}" method="post">
     @csrf

     @if (Request::is('admin/category/add'))
     @method('POST')
     @else
     @method('PUT')
     @endif

     <div class="card">
          <div class="card-header">
               <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
               <a href="{{route('adminCategory')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
          </div>
          <div class="card-body">
               <div class="form-group">
                    <label class="col-sm-2" for="Name" style="padding-top: 7px;">Danh mục cha</label>
                    <div class="w-100">
                         <select class="form-control" name="ParentId" id="ParentId">
                              <option value="0">Không thuộc danh mục nào</option>
                              @isset($data['category_list'])
                              @foreach ($data['category_list'] as $item)
                              @if ($item->CategoryId === ($data['category_info']->CategoryId ?? ''))
                              @continue
                              @endif
                              <option value="{{ $item->CategoryId }}" {{ $item->CategoryId === ($data['category_info']->ParentId ?? '') ? 'selected' : '' }}>{{ $item->Name }}</option>
                              @endforeach
                              @endisset
                         </select>
                    </div>
                    <div class="col-lg-12 messages text-danger"></div>
               </div>
               <div class="form-group">
                    <label class="col-sm-2" for="Name" style="padding-top: 7px;">Tên Danh Mục</label>
                    <div class="w-100">
                         <input id="Name" class="form-control" type="text" placeholder="Tên danh mục" name="Name" value="{{ $data['category_info']->Name ?? old('Name') }}">
                    </div>
                    <div class="col-lg-12 messages text-danger"></div>
               </div>
               <div class="form-group">
                    <label class="col-sm-2" for="Slug" style="padding-top: 7px;">Slug</label>
                    <div class="w-100">
                         <input id="Slug" class="form-control" type="text" placeholder="Slug" name="Slug" value="{{ old('Slug') }}">
                    </div>
                    <div class="col-lg-12 messages text-danger"></div>
               </div>
          </div>
     </div>
</form>

<script>
     let name = document.getElementById('Name');
     let slug = document.getElementById('Slug');
     slug.value = convertToSlug(name.value);
     name.addEventListener('input', () => slug.value = convertToSlug(name.value));

     var validateConstraints = {
          Name: {
               presence: {
                    allowEmpty: false,
                    message: "^Tên danh mục Không được để trống!"
               }
          },
          Slug: {
               presence: {
                    allowEmpty: false,
                    message: "^Slug Không được để trống!"
               }
          },
     };

     validateData('form#main', validateConstraints);
</script>
