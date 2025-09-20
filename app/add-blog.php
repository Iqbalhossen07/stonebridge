<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}

?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add New Blog - Dashboard</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#87550D',
                },
                fontFamily: {
                    heading: ['Merriweather', 'serif'],
                    body: ['Lora', 'serif'],
                },
                boxShadow: {
                    'soft-1': '0 6px 24px -8px rgba(0,0,0,.15)',
                    'soft-2': '0 12px 36px -10px rgba(0,0,0,.20)',
                    'soft-3': '0 18px 48px -12px rgba(0,0,0,.28)',
                    glow: '0 0 0 2px rgba(135,85,13,.2), 0 12px 40px -6px rgba(135,85,13,.35)'
                }
            }
        }
    }
    </script>
 <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #c4c4c4;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #a17b3f;
    }

    .sidebar-link {
        transition: background-color 0.3s, color 0.3s, padding-left 0.3s;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background-color: rgba(255, 255, 255, 0.05);
        color: #ffffff;
        padding-left: 1.75rem;
    }

    .sidebar-link.active {
        border-left: 4px solid #f59e0b;
    }

    .form-card {
        background-color: white;
    }

    @media (min-width: 768px) {
        .form-card {
            background-color: rgba(255, 255, 255, 0.80);
            backdrop-filter: blur(10px);
        }
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="form-card rounded-xl shadow-soft-1 p-6 lg:p-8">
                <form action="logics.php" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8"
                    enctype="multipart/form-data">

                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="post-title" class="block text-sm font-medium text-slate-700 mb-1">Blog
                                Title</label>
                            <input type="text" id="post-title" name="b_title"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Enter post title...">

                        </div>
                        <div>
                            <label for="post-content" class="block text-sm font-medium text-slate-700 mb-1">Blog
                                Content</label>
                            <textarea id="post-content" rows="12" name="b_des"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Write your blog post here..."></textarea>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Featured Image</label>
                            <div id="image-upload-box"
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg bg-slate-50">
                                <div class="space-y-1 text-center">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-slate-400"></i>
                                    <div class="flex text-sm text-slate-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer bg-transparent rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="b_image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-slate-500" id="file-name">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="post-tags" class="block text-sm font-medium text-slate-700 mb-1">Date</label>
                            <input type="date" id="post-tags" name="b_date"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="e.g., visa, settlement, law">
                        </div>
                        <div>
                            <label for="post-tags" class="block text-sm font-medium text-slate-700 mb-1">Author
                                Name</label>
                            <input type="text" id="post-tags" name="b_author"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="e.g., John doe">
                        </div>
                        <div class="border-t border-slate-200 pt-6 flex items-center justify-end gap-3">

                            <button type="submit" name="add_blog"
                                class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Submit Blog</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
    </div>

    <script>
    const fileUpload = document.getElementById('file-upload');
    const fileNameDisplay = document.getElementById('file-name');
    if (fileUpload) {
        fileUpload.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                fileNameDisplay.textContent = e.target.files[0].name;
            } else {
                fileNameDisplay.textContent = 'PNG, JPG, GIF up to 10MB';
            }
        });
    }
    </script>
</body>

</html>