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
        * {
            transition: .2s;
            scroll-behavior: smooth;
        }

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
        <div class="col-md-8 bg-light mx-auto py-3 px-4 rounded">
            @csrf
            <h3 id="title" class="text-dark text-center"><i class="fas fa-cog fa-spin"></i>&nbsp;Đang khởi tạo hệ
                thống!</h3>
            <p id="description" class="text-center w-100">Các cài đặt cơ bản đang được khởi tạo xin hãy chờ trong giây
                lát!</p>
            <button id="reload" class="btn btn-info d-none ml-auto mt-2"><i
                    class="fas fa-arrows-rotate"></i>&nbsp;&nbsp;Khởi tạo lại
        </div>
    </div>
    </div>
    <div id="particles-js"></div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script ipt src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        // init particlesjs
        particlesJS.load('particles-js', '/dist/particlesjs-config.json');

        const handleResponse = (response) => {
            if (response?.data?.status) {
                window.location = '/admin';
                return;
            }

            const titleElement = document.getElementById('title');
            const descriptionElement = document.getElementById('description');
            const reloadElement = document.getElementById('reload');

            titleElement.innerText = 'Khởi tạo hệ thống thất bại!';
            titleElement.classList.remove('text-dark');
            titleElement.classList.add('text-danger');

            descriptionElement.innerText = response?.data?.reason ?? response?.response?.data?.message;
            descriptionElement.classList.remove('text-center');
            descriptionElement.classList.add('text-left');

            reloadElement.classList.remove('d-none');
            reloadElement.classList.add('d-block', 'fw-bold');
            reloadElement.addEventListener('click', () => {
                window.location.reload();
            });
        }

        $(document).ready(function() {
            axios.post('/init')
                .then(handleResponse)
                .catch(handleResponse);
        });
    </script>
</body>

</html>
