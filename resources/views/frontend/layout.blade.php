<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Zalo @yield('title')
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('assets/img/Icon_of_Zalo.svg.png')}}" type="image/x-icon">
</head>

<body class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-16 bg-blue-600 text-white flex flex-col">
        <div class="flex items-center justify-between p-4">
            <img alt="User avatar" class="rounded-full w-20"
                src="https://storage.googleapis.com/a1aa/image/fBrreaJxulk450x6b4AK5ufdoOChiXgrKHpwD9d1M9fxM0WQB.jpg" />
        </div>
        <div class="flex flex-col space-y-4 mt-4">
            <div class="flex items-center space-x-2 px-4">
                <i class="fas fa-comment-dots">
                </i>
            </div>
            <div class="flex items-center space-x-2 px-4">
                <i class="fas fa-envelope-open-text">
                </i>
            </div>
            <div class="flex items-center space-x-2 px-4">
                <i class="fas fa-folder">
                </i>
            </div>
            <div class="flex items-center space-x-2 px-4">
                <i class="fas fa-ellipsis-h">
                </i>
            </div>
        </div>
        <div class="mt-auto flex flex-col space-y-4 p-4">
            <i class="fas fa-cloud">
            </i>
            <i class="fas fa-cloud-upload-alt">
            </i>
            <i class="fas fa-briefcase">
            </i>
            <i class="fas fa-cog">
            </i>
        </div>
    </div>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <div class="flex items-center justify-between  p-4 border-r w-1/4">
            <div class="flex items-center space-x-2">
                <i class="fas fa-search">
                </i>
                <input class="border-none focus:outline-none " placeholder="Tìm kiếm" type="text" />
            </div>
            <div class="flex ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>

            </div>

        </div>
        <div class="flex-1 flex">
            <!-- Messages List -->
            <div class="w-1/4 border-r">
                <div class="flex justify-between items-center border-b pb-2">
                    <div class="flex space-x-4 px-4">
                        <a class="text-blue-600 font-semibold" href="#">
                            Tất cả
                        </a>
                        <a class="text-gray-600" href="#">
                            Chưa đọc
                        </a>
                        <a class="text-gray-600" href="#">
                            Phân loại
                            <i class="fas fa-caret-down">
                            </i>
                        </a>
                    </div>
                    <i class="fas fa-ellipsis-h text-gray-600">
                    </i>
                </div>
                <div class="flex items-center space-x-4 p-4">
                    <img alt="Cloud icon" class="w-12 h-12 rounded-full" height="50"
                        src="https://storage.googleapis.com/a1aa/image/btGHpZcENPMG4hPBy1nnrcF55NIAgeHFc9_3y7M5vSo.jpg"
                        width="50" />
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold">
                                Cloud của tôi
                            </h2>
                            <span class="text-gray-500 text-sm">
                                16/11/24
                            </span>
                        </div>
                        <p class="text-gray-600 text-sm">
                            Bạn:
                            <i class="fas fa-paperclip">
                            </i>
                            Báo cáo thực tập Vũ Minh Chi...
                        </p>
                    </div>
                </div>
            </div>
            <!-- Welcome Content -->
            <div class="flex-1 flex flex-col items-center justify-center">
                <h1 class="text-2xl font-bold">
                    Chào mừng đến với Zalo PC!
                </h1>
                <p class="text-center mt-2">
                    Khám phá những tiện ích hỗ trợ làm việc và trò chuyện cùng người thân, bạn bè được tối ưu hóa cho
                    máy tính của bạn.
                </p>
                <img alt="Zalo PC Dark Mode Interface" class="mt-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/NfvfgHuLNNqePJEYHWNB0sUHZcBxXwrEpOvtf3XlLN7tM0WQB.jpg"
                    width="300" />
                <h2 class="text-xl font-bold text-blue-600 mt-4">
                    Giao diện Dark Mode
                </h2>
                <p class="text-center mt-2">
                    Thư giãn và bảo vệ mắt với chế độ
                    <span class="font-bold">
                        giao diện tối
                    </span>
                    mới trên Zalo PC
                </p>
                <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">
                    Thử ngay
                </button>
                <div class="flex space-x-2 mt-4">
                    <span class="w-2 h-2 bg-blue-600 rounded-full">
                    </span>
                    <span class="w-2 h-2 bg-gray-300 rounded-full">
                    </span>
                    <span class="w-2 h-2 bg-gray-300 rounded-full">
                    </span>
                    <span class="w-2 h-2 bg-gray-300 rounded-full">
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
