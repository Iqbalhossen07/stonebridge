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
    <title>Manage Gallery - Dashboard</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    #image-upload-modal {
        transition: opacity 0.3s ease;
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-heading text-2xl font-bold">All Images</h2>
                <button id="open-modal-btn"
                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                    <i class="fas fa-plus"></i>
                    <span>Add New Image</span>
                </button>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                      <?php


                $gallery = $mysqli->query("SELECT * FROM gallery_images");


                // Fetch and display the titles
                while ($row = $gallery->fetch_assoc()):

                ?>
                <div class="group relative rounded-lg overflow-hidden" data-aos="fade-up">
                    <img src="gallery_image/<?php echo ($row['g_image']) ?>"
                        class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                        <a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)"
                            class="h-10 w-10 rounded-full bg-red-600/80 hover:bg-red-600 text-white flex items-center justify-center shadow-md"><i
                                class="fas fa-trash-alt text-sm"></i></a>
                    </div>
                </div>
                    <?php endwhile; ?>
             
            </div>
        </main>
    </div>
    </div>

    <div id="image-upload-modal"
        class="fixed inset-0 bg-black/70 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-xl shadow-soft-2 w-full max-w-lg" data-aos="fade-up">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="font-heading text-xl font-bold text-slate-800">Add New Image to Gallery</h3>
                <button id="close-modal-btn"
                    class="h-8 w-8 rounded-full hover:bg-slate-100 flex items-center justify-center">&times;</button>
            </div>
            <?php
// সেশনে কোনো মেসেজ সেট করা থাকলে, তা SweetAlert হিসেবে দেখানো হবে
if (isset($_SESSION['message']) && $_SESSION['message'] != '') {
?>
            <script>
            Swal.fire({
                title: "<?php echo $_SESSION['message']; ?>",
                icon: "<?php echo $_SESSION['message_type']; ?>",
                confirmButtonText: "OK"
            });
            </script>
            <?php
    // মেসেজ দেখানোর পর সেশনটি মুছে ফেলা হচ্ছে
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}
?>
            <form class="p-6 space-y-4" action="logics.php" method="post" enctype="multipart/form-data">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Image Preview & Upload</label>
                    <div id="image-upload-box"
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-lg">
                        <div class="space-y-1 text-center">
                            <img id="image-preview" src="" alt="Image preview"
                                class="hidden w-40 h-40 object-cover mx-auto mb-4 rounded-md">
                            <div id="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt text-4xl text-slate-400"></i>
                                <div class="flex text-sm text-slate-600"><label for="file-upload"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark"><span>Upload
                                            a file</span><input id="file-upload" name="g_image" type="file"
                                            class="sr-only"></label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-slate-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="image-caption" class="block text-sm font-medium text-slate-700 mb-2">Image Caption
                    </label>
                    <input type="text" id="image-caption" name="g_name"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                        placeholder="e.g., Office Opening Ceremony">
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" id="cancel-btn"
                        class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg">Cancel</button>
                    <button type="submit" name="add_image"
                        class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg">Upload
                        Image</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-out-cubic'
    });

    // --- Modal & Image Preview Functionality ---
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('image-upload-modal');
        const openModalBtn = document.getElementById('open-modal-btn');
        const closeModalBtn = document.getElementById('close-modal-btn');
        const cancelBtn = document.getElementById('cancel-btn');

        const fileUpload = document.getElementById('file-upload');
        const imagePreview = document.getElementById('image-preview');
        const uploadPlaceholder = document.getElementById('upload-placeholder');

        function showModal() {
            modal.classList.remove('hidden');
        }

        function hideModal() {
            modal.classList.add('hidden');
        }

        openModalBtn.addEventListener('click', showModal);
        closeModalBtn.addEventListener('click', hideModal);
        cancelBtn.addEventListener('click', hideModal);
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                hideModal();
            }
        });

        fileUpload.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imagePreview.src = event.target.result;
                    imagePreview.classList.remove('hidden');
                    uploadPlaceholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    });


       function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            // যদি ব্যবহারকারী 'Yes' বাটনে ক্লিক করে
            if (result.isConfirmed) {
                // তাহলে ডিলিট করার জন্য logics.php ফাইলে রিডাইরেক্ট করা হবে
                window.location.href = 'logics.php?gallery_delete_id=' + id;
            }
        })
    }
    </script>
</body>

</html>