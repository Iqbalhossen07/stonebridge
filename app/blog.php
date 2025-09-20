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
    <title>Manage Blog - Dashboard</title>

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

    #mobile-sidebar {
        transition: transform 0.3s ease-in-out;
    }

    .blog-card {
        background-color: white;
    }

    @media (min-width: 768px) {
        .blog-card {
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
            <div class="flex justify-between items-center mb-6" data-aos="fade-down">
                <h2 class="font-heading text-2xl font-bold">All Blog Posts</h2>
                <a href="add-blog.php"
                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300"><i
                        class="fas fa-plus"></i><span>Add New Post</span></a>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <?php


                $blog = $mysqli->query("SELECT * FROM blog_table");


                // Fetch and display the titles
                while ($row = $blog->fetch_assoc()):

                ?>

                <div class="blog-card rounded-xl shadow-soft-1 overflow-hidden group transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="blogImage/<?php echo ($row['b_image']) ?>" alt="Blog Post Image"
                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="font-heading text-lg font-bold text-primary mb-2"><a href="#"
                                class="text-primary hover:text-primary-dark transition-colors"><?php echo ($row['b_title']) ?>
                                Visa</a></h3>
                        <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><span><i
                                    class="fas fa-user mr-1 text-xs"></i><?php echo ($row['b_author']) ?></span><span><i
                                    class="far fa-calendar-alt mr-1 text-xs"></i><?php echo ($row['b_date']) ?></span>
                        </div>
                        <p class="text-slate-600 text-sm mb-4 flex-grow line-clamp-2"><?php 
                                                $text = strip_tags($row['b_des']); 
                                                $trimmed_text = mb_strimwidth($text, 0, 70, '...');
                                                echo nl2br($trimmed_text); 
                                                ?>...</p>
                        <div class="border-t border-slate-200 mt-auto pt-4 flex justify-end gap-3"><a
                                href="blog-view.php?blog_des_id=<?php echo $row['id']; ?>" title="View Post"
                                class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-eye text-sm"></i></a>

                            <a href="blog-edit.php?blog_update_id=<?php echo $row['id']; ?>" title="Edit Post"
                                class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-pencil-alt text-sm"></i></a>

                            <a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)" title="Delete Post"
                                class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300">
                                <i class="fas fa-trash-alt text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>

            <nav class="flex items-center justify-between pt-4" aria-label="Blog Pagination" data-aos="fade-up"
                data-aos-delay="400">
                <span class="text-sm font-normal text-slate-500">Showing <span
                        class="font-semibold text-slate-900">1-3</span> of <span
                        class="font-semibold text-slate-900">100</span></span>
                <ul class="inline-flex -space-x-px text-sm h-8">
                    <li><a href="#"
                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-slate-500 bg-white border border-slate-300 rounded-l-lg hover:bg-slate-100 hover:text-slate-700">Previous</a>
                    </li>
                    <li><a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">1</a>
                    </li>
                    <li><a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-primary bg-primary/10 border border-primary hover:bg-primary/20 hover:text-primary-dark">2</a>
                    </li>
                    <li><a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 hover:bg-slate-100 hover:text-slate-700">3</a>
                    </li>
                    <li><a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-slate-500 bg-white border border-slate-300 rounded-r-lg hover:bg-slate-100 hover:text-slate-700">Next</a>
                    </li>
                </ul>
            </nav>
        </main>
    </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-out-cubic'
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
                window.location.href = 'logics.php?blog_delete_id=' + id;
            }
        })
    }
    </script>
</body>

</html>