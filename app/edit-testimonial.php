<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['testimonial_update_id'])) {
    $testimonial_update_id = $_GET['testimonial_update_id'];
    $testimonial_update_id_result = $mysqli->query("SELECT * FROM testimonials WHERE id='$testimonial_update_id' ");
    if (!empty($testimonial_update_id_result)) {
        $row = $testimonial_update_id_result->fetch_array();

        $t_name = $row['t_name'];
        $t_desgination = $row['t_desgination'];
        $t_des = $row['t_des'];
        $t_image = $row['t_image'];
     
    }

   
}
?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add New Testimonial - Dashboard</title>

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

    .input-final {
        @apply block w-full rounded-md border-slate-300 bg-white py-2 px-3 shadow-sm placeholder: text-slate-400;
    }

    .input-final:focus {
        @apply border-primary ring-1 ring-primary/50;
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8">
                <form action="logics.php" method="POST" class="space-y-6" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $testimonial_update_id ?>">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="author-name" class="block text-sm font-medium text-slate-700 mb-2">Author's
                                Name</label>
                            <input type="text" id="author-name" name="t_name" value="<?php echo $t_name ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm "
                                placeholder="e.g., Sheldon Jackson">
                        </div>
                        <div>
                            <label for="author-designation"
                                class="block text-sm font-medium text-slate-700 mb-2">Author's Designation</label>
                            <input type="text" id="author-designation" name="t_desgination" value="<?php echo $t_desgination ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="e.g., Software Engineer">
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
                                            <input id="file-upload" name="t_image" type="file" class="sr-only">
                                            <input type="hidden" name="old_image" value="<?php echo $t_image ?>">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-slate-500" id="file-name">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>


                        <div>
                            <label for="testimonial-content"
                                class="block text-sm font-medium text-slate-700 mb-2">Testimonial Content</label>
                            <textarea id="testimonial-content" rows="6" name="t_des"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Write the testimonial here..."><?php echo $t_des ?></textarea>
                        </div>



                        <div class="pt-5 flex items-center justify-end gap-3">
                        
                            <button type="submit" name="update_testimonial"
                                class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Update
                                Testimonial</button>
                        </div>
                </form>
            </div>
        </main>
    </div>
    </div>

    <script>
    // --- Star Rating Functionality ---
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('#star-rating i');
        const ratingValueInput = document.getElementById('rating-value');
        let currentRating = 0;

        function highlightStars(rating) {
            stars.forEach(star => {
                star.classList.toggle('text-accent', parseInt(star.dataset.value) <= rating);
                star.classList.toggle('text-slate-300', parseInt(star.dataset.value) > rating);
            });
        }

        stars.forEach(star => {
            star.addEventListener('mouseover', () => highlightStars(parseInt(star.dataset.value)));
            star.addEventListener('mouseout', () => highlightStars(currentRating));
            star.addEventListener('click', () => {
                currentRating = parseInt(star.dataset.value);
                ratingValueInput.value = currentRating;
                highlightStars(currentRating);
            });
        });
    });

    // --- Image Preview Functionality ---
    const fileUpload = document.getElementById('file-upload');
    const imagePreview = document.getElementById('image-preview');
    if (fileUpload && imagePreview) {
        fileUpload.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    imagePreview.src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    }
    </script>
</body>

</html>