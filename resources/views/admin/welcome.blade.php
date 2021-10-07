<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Khởi tạo thiết lập cơ bản</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

     <style>
          #particles-js {
               position: absolute;
               width: 100%;
               z-index: 0;
               top: 0;
               left: 0;
               height: 100%;
               background-image: url("");
               background-repeat: no-repeat;
               background-size: cover;
               background-position: 50% 50%;
          }

          .wrap {
               position: relative;
               z-index: 10;
          }
     </style>
</head>

<body class="bg-dark">
     <div class="container d-flex justify-content-between align-items-center wrap" style="min-height: 100vh;">
          <form action="{{ route('welcome') }}" method="post" class="col-md-8 bg-light mx-auto py-3 px-4 rounded">
               @csrf
               <h3 class="text-dark text-center"><i class="fas fa-tools"></i>&nbsp;Welcome!</h3>
               <hr>
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="title"><i class="fas fa-feather"></i>&nbsp;Tiêu đề trang quản trị</label>
                         <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề" required>
                    </div>
                    <div class="form-group col-md-6">
                         <label for="default-city"><i class="fas fa-globe-americas"></i>&nbsp;Khu vực mặc định</label>
                         <select class="form-control" name="default-city" id="default-city" required>
                              <option value="">Chọn khu vực</option>
                         </select>
                    </div>
               </div>
               <hr>
               <div class="row">
                    <div class="col-md-3 ml-auto">
                         <button class="w-100 btn btn-dark btn-small" type="submit"><i class="fas fa-arrow-circle-right"></i></button>
                    </div>
               </div>
          </form>
     </div>
     <div id="particles-js"></div>
     <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script ipt src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <script>
          let provinces = [];
          let provinceSelectElement = $('#default-city');

          // init particlesjs
          particlesJS.load('particles-js', '/dist/particlesjs-config.json');

          axios.get('https://vapi.vnappmob.com/api/province/').then(response => {
               provinces = response.data.results ?? [];

               provinces.map(province => {
                    let option = document.createElement('option');
                    option.value = `${province.province_id}.${province.province_name}`;
                    option.innerHTML = province.province_name;
                    provinceSelectElement.append(option);
               });
          });
     </script>
</body>

</html>
