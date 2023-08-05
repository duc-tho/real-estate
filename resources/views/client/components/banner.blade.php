<div class="re-banner-wrapper shadow">
    <div class="container-fluid position-relative">
        <div class="container">
            <div class="re-banner row">
                <div class="re-banner-info col-md-6 mr-0">
                    <h1 class="re-banner-title display-6 font-weight-bold text-light my-4">
                        Tìm kiếm căn nhà phù hợp với bạn.
                    </h1>
                    <p class="re-banner-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae,
                        mollitia quo ut porro doloribus veniam error at dolores dolore temporibus aperiam alias.
                        Voluptatibus laboriosam facere facilis accusamus delectus ratione aut?
                    </p>

                    <div class="position-relative h-auto">
                        <form action="/" class="re-banner-search shadow position-absolute p-3 mt-3 d-flex flex-column">
                            @csrf
                            <div>
                                <select class="selectpicker shadow-sm" name="loai-bat-dong-san">
                                    <option value="project">Dự án</option>
                                    <option value="thue">Thuê</option>
                                    <option value="ban">Bán</option>
                                </select>
                                <select class="selectpicker shadow-sm" name="thanh-pho">
                                    <option value="thanh-pho-ho-chi-minh">Thành phố Hồ Chí Minh</option>
                                    <option value="ha-noi">Hà Nội</option>
                                    <option value="thu-duc">Thủ Đức</option>
                                </select>
                                <select class="selectpicker shadow-sm" name="quan">
                                    <option value="quan-binh-thanh">Quận Bình Thạnh</option>
                                    <option value="quan-1">Quận 1</option>
                                </select>
                            </div>
                            <div class="w-100 input-group shadow-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-magnifying-glass"></i></span>
                                </div>
                                <input placeholder="Bạn cần tìm gì?" type="text" class="form-control" name="tu-khoa" id="search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="re-banner re-banner-image-wraper row position-absolute w-100">
            <div class="col-md-6 overflow-hidden ml-auto">
                <img class="re-banner-image position-absolute"
                    src="https://www.bproperty.com/blog/wp-content/uploads/2021/04/house-1867187_1920.jpg"
                    alt="Banner Image"
                >
            </div>
        </div>
    </div>
</div>
