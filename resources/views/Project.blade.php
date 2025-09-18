<x-layouts.app.header>
    <x-slot name="styles">

        <style>
            .hover-underline {
                position: relative;
                display: inline-block;
                cursor: pointer;
            }

            .hover-underline::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -4px;
                width: 0;
                height: 3px;
                background: #437FED;
                border-radius: 16px;
                transition: width 0.3s ease;
            }

            .hover-underline:hover::after {
                width: 100%;
            }

            .gradient-border {
                position: relative;
                display: inline-block;
                color: white;
                -webkit-text-stroke: 4px transparent;
                background: linear-gradient(90deg, #030D42, #437FED);
                background-size: 400% 100%;
                -webkit-background-clip: text;
                -webkit-text-stroke-color: transparent;
                animation: border-gradient 6s linear infinite;
            }

            @keyframes border-gradient {
                0% {
                    background-position: 0% 50%;
                }

                100% {
                    background-position: 400% 50%;
                }
            }
        </style>
    </x-slot>
    <section style="background: #f0f0f0">
        <section id="banner">
            <div class="relative">
                <video src="{{ asset('assets/videos/globe.mp4') }}" loop autoplay muted
                    class="w-full h-[525px] object-cover object-[center_70%]"></video>

                <div class="absolute inset-0 bg-black/10"></div>

                <div class="absolute bottom-[8rem] left-[10rem] flex flex-col w-3/5 gap-10 z-10">
                    <h1 class="relative text-7xl font-extrabold text-white">
                        <span class="gradient-border">Dự án</span>
                    </h1>
                    <p class="text-[#F2F0EE] text-2xl w-3/5">
                        Với hành trình không ngừng học hỏi của Skyline Digital, đội ngũ đã
                        có những dự án nổi bật trong quá trình trau dồi và phát triển.
                    </p>
                </div>

                <div class="absolute bottom-[8rem] right-[10rem] w-[450px] h-[350px] rounded-3xl overflow-hidden">
                    <img src="{{ asset('assets/images/tn.JPG') }}" alt="overlay image"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <main class="px-15 m-auto">
            <section id="project" class="mt-8">
                <div class="">
                    <h1 class="relative text-4xl font-semibold text-center mb-8">
                        <span class="underline-animate">Dự án Website</span>
                    </h1>

                    <div class="flex items-center justify-center gap-15">
                        <div class="flex flex-col items-center gap-3">
                            <div class="relative group overflow-hidden rounded-xl">
                                <img src="{{ asset('/assets/images/suwafumo.png') }}" alt="suwafumo"
                                    class="w-[610px] h-[415px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-110">

                                <div class="absolute inset-0 rounded-xl 
          bg-black/50 opacity-0 group-hover:opacity-100 
          transition-opacity duration-300 flex items-center justify-center">
                                    <a href="" class="border border-white rounded-3xl px-4 py-2 
          text-white text-lg font-bold 
          transition-all duration-300 
          hover:bg-white hover:text-[#161616]">
                                        Đang cập nhật..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col items-center gap-3">
                            <div class="relative group overflow-hidden rounded-xl">
                                <img src="{{ asset('/assets/images/beebook.png') }}" alt="beebook"
                                    class="w-[610px] h-[415px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-110">

                                <div class="absolute inset-0 rounded-xl 
          bg-black/50 opacity-0 group-hover:opacity-100 
          transition-opacity duration-300 flex items-center justify-center">
                                    <a href="https://www.beebook.shop/" target="_blank" class="border border-white rounded-3xl px-4 py-2 
          text-white text-lg font-bold 
          transition-all duration-300 
          hover:bg-white hover:text-[#161616]">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <section id="ecommerce" class="mt-8">
                <h1 class="text-4xl font-semibold ">Thương mại điện tử</h1>
                <div class="mt-6 py-10 flex  rounded-3xl justify-around"
                    style="background: linear-gradient(180deg, #437FED, #030D42)">
                    <div class="w-1/3 flex flex-col gap-4 font-semibold text-justify">
                        <p class="text-[#F2F0EE]">
                            Beebook là dự án website thương mại điện tử chuyên kinh doanh sách, được xây dựng với mục
                            tiêu
                            mang
                            đến một nền tảng hiện đại, tiện lợi và tối ưu trải nghiệm cho cả khách hàng lẫn nhà quản
                            trị.
                        </p>
                        <p class="text-[#F2F0EE]">
                            Hệ thống cho phép quản lý sản phẩm, biến thể, đơn hàng, tài khoản và phân quyền người dùng
                            một
                            cách
                            linh hoạt. Ngoài ra, Beebook được tích hợp trực tiếp với các đơn vị vận chuyển uy tín như
                            ViettelPost và Giao Hàng Nhanh, giúp việc giao hàng nhanh chóng, minh bạch.
                        </p>
                        <p class="text-[#F2F0EE]">
                            Không chỉ dừng lại ở sách giấy, Beebook còn mở rộng hệ sinh thái với ebook và sách nói
                            (audiobook),
                            mang đến lựa chọn phong phú cho độc giả ở mọi lứa tuổi, phù hợp với xu hướng đọc hiện đại.
                            Đây
                            không
                            chỉ là một nền tảng bán sách, mà còn là không gian số kết nối tri thức với công nghệ.
                        </p>
                    </div>
                    <div class="">
                        <img src="{{asset('/assets/images/beebook2.png')}}"
                            class="w-[600px] h-[430px] rounded-3xl object-cover" alt="">
                    </div>
                </div>
            </section>

        </main>
        <section id="subBanner" class="w-full relative mt-20">
            <img src="{{asset('/assets/images/contact.png')}}" class="w-full object-cover object-center" alt="">
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center gap-8">
                <div class="flex flex-col items-center gap-2">
                    <h1 class="text-4xl text-[#F2F0EE] font-semibold">Đã có quyết định?</h1>
                    <h1 class="text-4xl text-[#F2F0EE] font-semibold">Liên hệ hợp tác với chúng tôi ngay.</h1>
                </div>

                <a href="/lien-he" class="text-2xl text-[#F2F0EE] border-2  border-[#F2F0EE] rounded-2xl px-6 py-2
          transition-all duration-300 
          hover:bg-[#F2F0EE] hover:text-black">
                    Liên hệ ngay
                </a>
            </div>
        </section>

    </section>



</x-layouts.app.header>