@extends('candidate.layouts.default')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/assets/candidate/img/web-1-scaled.jpg" alt="Slide 1">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">Tìm việc làm nhanh 24h, việc làm mới nhất tại Venesa.</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="/jobs" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInRight">Tìm việc làm</a>
                            <!-- <a href="/dashboard" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Tuyển ứng viên</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="/assets/candidate/img/web-4-scaled.jpg" alt="Slide 2">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">Tìm việc làm phù hợp nhất với năng lục của bạn</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="/jobs" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tìm việc làm</a>
                            <!-- <a href="/dashboard" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Tuyển ứng viên</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <form method="POST" action="/jobs">
            @csrf
            <div class="row g-2">
                <div class="col-md-10">
                    @php
                    $provinces = [
                    "Hà Nội", "Hồ Chí Minh", "Bình Dương", "Bắc Ninh", "Đồng Nai", "Hưng Yên", "Hải Dương", "Đà Nẵng",
                    "Hải Phòng", "An Giang", "Bà Rịa-Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bến Tre",
                    "Bình Định", "Bình Phước", "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "Đắk Lắk",
                    "Đắk Nông", "Điện Biên", "Đồng Tháp", "Gia Lai", "Hà Giang", "Hà Nam", "Hà Tĩnh",
                    "Hậu Giang", "Hoà Bình", "Khánh Hoà", "Kiên Giang", "Kon Tum", "Lai Châu", "Lâm Đồng",
                    "Lạng Sơn", "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận",
                    "Phú Thọ", "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị",
                    "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình", "Thái Nguyên", "Thanh Hoá", "Thừa Thiên Huế",
                    "Tiền Giang", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc", "Yên Bái"
                    ];
                    @endphp
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" name="title" class="form-control border-0" placeholder="Vị trí tuyển dụng" />
                        </div>
                        <div class="col-md-6">
                            <select class="form-select border-0" name="location">
                                <option value="" selected disabled>Chọn địa điểm</option>
                                @foreach($provinces as $province)
                                <option value="{{$province}}">{{$province}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100" type="submit">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search End -->


<!-- Category Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Top ngành nghề nổi bật</h1>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h6 class="mb-3">Marketing</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h6 class="mb-3">Tư vấn</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h6 class="mb-3">Nguồn nhân lực</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="mb-3">Quản lý dự án</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    <h6 class="mb-3">Business Development</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                    <h6 class="mb-3">Kinh doanh / Bán hàng</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                    <h6 class="mb-3">Giáo dục / Đào tạo</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="">
                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                    <h6 class="mb-3">Thiết kế / Sáng tạo</h6>
                    <p class="mb-0">123 việc làm</p>
                </a>
            </div>
        </div>
    </div>
</div> -->
<!-- Category End -->


<!-- About Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="/assets/candidate/img/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="/assets/candidate/img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="/assets/candidate/img/about-3.jpg" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="/assets/candidate/img/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div> -->
<!-- About End -->


<!-- Jobs Start -->
<div class="container-xxl py-5">
    <div class="container">
        @if ($latest_jobs->count() > 0)
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Việc làm hấp dẫn</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <h6 class="mt-n1 mb-0">Mới nhất</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Phổ biến nhất</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    @foreach($latest_jobs as $latest_job)
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <!-- <img class="flex-shrink-0 img-fluid border rounded" src="/assets/candidate/img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;"> -->
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$latest_job->name}}</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$latest_job->location}}</span>
                                    <span class="text-truncate me-3"><i class="fa fa-clock text-primary me-2"></i>{{$latest_job->employment_type}}</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$latest_job->salary}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="/jobs/{{$latest_job->id}}#job-detail">Xem chi tiết</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Hạn ứng tuyển: {{$latest_job->deadline}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a class="btn btn-primary py-3 px-5" href="/jobs">Xem tất cả</a>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    @foreach($popular_jobs as $popular_job)
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$popular_job->name}}</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$popular_job->location}}</span>
                                    <span class="text-truncate me-3"><i class="fa fa-clock text-primary me-2"></i>{{$popular_job->employment_type}}</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$popular_job->salary}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="/jobs/{{$popular_job->id}}#job-detail">Xem chi tiết</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Hạn ứng tuyển: {{$popular_job->deadline}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a class="btn btn-primary py-3 px-5" href="/jobs">Xem tất cả</a>
                </div>
            </div>
        </div>
        @else
        <h3 class="text-center mb-0 wow fadeInUp" data-wow-delay="0.1s">Hiện không có tin tuyển dụng nào trên hệ thống</h3>
        @endif
    </div>
</div>
<!-- Jobs End -->


<!-- Testimonial Start -->
<!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="text-center mb-5">Our Clients Say!!!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/assets/candidate/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/assets/candidate/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/assets/candidate/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/assets/candidate/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<button id="chatbot-button" class="chatbot-btn">
    <i class="fa fa-comments"></i> <!-- Icon chat -->
</button>

<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="chatbot-container">
    <div class="chatbot-header">
        <h5 class="mb-0">Chatbot Thẩm Mỹ Viện Venesa</h5>
        <button class="btn-close" id="close-chatbot"></button>
    </div>
    <div class="chatbot-body" id="chatbot-body">
        <!-- Nội dung trả lời chatbot sẽ hiển thị ở đây -->
    </div>
    <div class="chatbot-footer">
        <input type="text" name="message" id="user-input" class="form-control" placeholder="Hỏi tôi điều gì...">
        <button class="btn btn-primary" id="send-message">Gửi</button>
    </div>
</div>

<style>
/* Style cho chatbot button */
.chatbot-btn {
    position: fixed;
    bottom: 30px; /* Đặt cách đáy trang một khoảng cách */
    right: 30px; /* Đặt cách phải trang một khoảng cách */
    background-color: #007bff; /* Màu nền */
    color: white; /* Màu icon */
    border: none; /* Không có viền */
    border-radius: 50%; /* Làm cho button hình tròn */
    width: 60px; /* Kích thước button */
    height: 60px; /* Kích thước button */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px; /* Kích thước icon */
    cursor: pointer; /* Thêm dấu chuột khi hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Thêm bóng cho button */
    z-index: 9999; /* Đảm bảo button luôn nằm trên cùng */
    transition: background-color 0.3s ease; /* Hiệu ứng khi hover */
}

.chatbot-btn:hover {
    background-color: #0056b3; /* Màu nền khi hover */
}

.chatbot-btn i {
    pointer-events: none; /* Không cho phép tương tác với icon */
}


    /* Chatbot Style */
.chatbot-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    display: none;
}

.chatbot-header {
    background-color: #28a745;
    color: white;
    padding: 10px;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.chatbot-body {
    padding: 10px;
    height: 250px;
    overflow-y: auto;
}

.chatbot-footer {
    padding: 10px;
    display: flex;
    gap: 10px;
}

.chatbot-footer input {
    flex: 1;
}

.chatbot-footer button {
    flex: 0;
}

/* Hiển thị khi chatbot mở */
.chatbot-container.show {
    display: block;
}

</style>

<script>
// Dữ liệu câu hỏi và trả lời
const faq = {
    "xin chào": "Chào bạn! Tôi là chatbot của Thẩm mỹ viện Venesa. Tôi có thể giúp gì cho bạn hôm nay?",
    "chào bạn": "Xin chào! Rất vui được hỗ trợ bạn tại Venesa.",
    "hello": "Chào bạn! Tôi sẵn sàng hỗ trợ bạn.",
    "hi": "Xin chào! Bạn cần hỏi gì về dịch vụ hoặc tuyển dụng tại Venesa?",
    "bạn là ai": "Tôi là chatbot của Thẩm mỹ viện Venesa. Tôi có thể giúp bạn tìm hiểu thông tin về các dịch vụ của chúng tôi.",
    "dịch vụ của bạn": "Chúng tôi cung cấp các dịch vụ chăm sóc sắc đẹp như phẫu thuật thẩm mỹ, chăm sóc da, điều trị mụn, và nhiều dịch vụ khác.",
    "giờ làm việc": "Thẩm mỹ viện Venesa mở cửa từ 9:00 sáng đến 6:00 chiều, từ thứ 2 đến thứ 7. Luôn có nhân viên hỗ trợ khách hàng 24/7!",
    "địa chỉ": "Chúng tôi có mặt tại số 123, Phố ABC, Quận XYZ, Hà Nội.",
    "liệu trình chăm sóc da": "Các liệu trình chăm sóc da tại Venesa tùy thuộc vào nhu cầu của bạn, thường kéo dài từ 30 phút đến 2 giờ.",
    "venesa là gì": "Venesa là thẩm mỹ viện hàng đầu cung cấp dịch vụ chăm sóc sắc đẹp và sức khỏe làn da.",
    "thông tin việc làm": "Venesa hiện đang tuyển dụng nhiều vị trí hấp dẫn. Bạn muốn tìm hiểu vị trí nào cụ thể?",
    "vị trí tuyển dụng": "Chúng tôi đang tuyển các vị trí: nhân viên chăm sóc khách hàng, kỹ thuật viên da, lễ tân, quản lý chi nhánh và chuyên viên marketing.",
    "lương": "Mức lương tại Venesa cạnh tranh, dao động từ 7 triệu đến hơn 20 triệu tùy vị trí và kinh nghiệm. Ngoài ra còn có hoa hồng và thưởng theo hiệu suất.",
    "chính sách phúc lợi": "Venesa cung cấp BHYT, BHXH, thưởng lễ/tết, du lịch thường niên, và môi trường làm việc chuyên nghiệp.",
    "cách ứng tuyển": "Bạn có thể nộp CV qua email: tuyendung@venesa.vn hoặc liên hệ trực tiếp phòng nhân sự qua số 1900 123 456.",
    "hỗ trợ trực tiếp": "Bạn có thể yêu cầu nhân viên liên hệ lại bằng cách để lại số điện thoại hoặc nhắn trực tiếp trên Fanpage của Venesa.",
    "hẹn lịch tư vấn": "Vui lòng cung cấp số điện thoại và khung giờ mong muốn, chúng tôi sẽ liên hệ để xác nhận lịch tư vấn.",
    "khuyến mãi": "Hiện tại Venesa có nhiều chương trình ưu đãi hấp dẫn, ví dụ: trị liệu da giảm 40%, tặng bộ mỹ phẩm cao cấp cho liệu trình > 5 triệu.",
    "thẩm mỹ viện venesa": "Venesa là một trong những thương hiệu hàng đầu về làm đẹp tại Việt Nam, được hàng nghìn khách hàng tin tưởng mỗi năm.",
    "đào tạo nghề": "Venesa có các khóa đào tạo nghề spa và chăm sóc da chuyên nghiệp dành cho học viên muốn theo ngành thẩm mỹ.",
};

function findAnswer(userInput) {
    const lowerInput = userInput.toLowerCase();

    for (const key in faq) {
        if (lowerInput.includes(key)) {
            return faq[key];
        }
    }

    return null;
}

// Hiển thị chatbot khi click vào nút
document.getElementById('chatbot-button').addEventListener('click', () => {
    document.querySelector('.chatbot-container').classList.add('show');
});

// Đóng chatbot khi click vào nút đóng
document.getElementById('close-chatbot').addEventListener('click', () => {
    document.querySelector('.chatbot-container').classList.remove('show');
});

// Xử lý gửi tin nhắn
document.getElementById('send-message').addEventListener('click', () => {
    const userInput = document.getElementById('user-input').value.trim();
    const chatbotBody = document.getElementById('chatbot-body');

    if (userInput) {
        // Thêm tin nhắn người dùng vào chatbot
        chatbotBody.innerHTML += `<div class="user-message">${userInput}</div>`;
        document.getElementById('user-input').value = ''; // Xóa input

        const localAnswer = findAnswer(userInput);

        if (localAnswer) {
            // Thêm câu trả lời từ chatbot vào
            setTimeout(() => {
                chatbotBody.innerHTML += `<div class="chatbot-message">${localAnswer}</div>`;
                chatbotBody.scrollTop = chatbotBody.scrollHeight; // Cuộn đến cuối
            }, 500);
        } else {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch('/chatbot/ask', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken},
                body: JSON.stringify({ message: userInput })
            })
            .then(res => res.json())
            .then(data => {
                chatbotBody.innerHTML += `<div class="chatbot-message">${data.reply}</div>`;
                chatbotBody.scrollTop = chatbotBody.scrollHeight;
            })
            .catch(err => {
                console.log(err);
                chatbotBody.innerHTML += `<div class="chatbot-message">Xin lỗi, hiện tại tôi không thể trả lời câu hỏi của bạn.</div>`;
            });
        }

    }
});

</script>

@endsection
