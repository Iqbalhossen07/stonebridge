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
    <title>Manage Events - Dashboard</title>

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
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-heading text-2xl font-bold">All Events</h2>
                <a href="add-event.php"
                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300">
                    <i class="fas fa-plus"></i>
                    <span>Add New Event</span>
                </a>
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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <?php


                $blog = $mysqli->query("SELECT * FROM events");


                // Fetch and display the titles
                while ($row = $blog->fetch_assoc()):

                ?>
                <div class="bg-white rounded-xl shadow-soft-1 flex overflow-hidden hover:shadow-soft-2 hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up">
                    <div class="relative flex-shrink-0 w-32 sm:w-40"><img
                            src="event_image/<?php echo ($row['e_image']) ?>"
                            class="absolute inset-0 w-full h-full object-cover" alt="Webinar Image">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-3 text-white">
                            <p class="font-heading text-3xl font-bold leading-none">
                                <?php echo date('d', strtotime($row['e_date'])); ?>
                            </p>

                            <p class="text-sm font-semibold uppercase">
                                <?php echo date('M', strtotime($row['e_date'])); ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex items-center justify-between p-4 pl-5">
                        <div class="flex-1">
                            <h3 class="font-heading text-lg font-bold text-slate-800"><?php echo ($row['e_title']) ?>
                            </h3>
                            <div
                                class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 text-sm text-slate-500 mt-1">
                                <span><i class="far fa-clock mr-1"></i> <?php echo ($row['e_time']) ?></span><span><i
                                        class="fas fa-map-marker-alt mr-1"></i>
                                    <?php echo ($row['e_location']) ?></span>
                            </div>
                            <div class="mt-2 md:hidden"><span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span>
                            </div>
                        </div>
                        <div class="hidden md:block mx-4"><span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full">Upcoming</span>
                        </div>
                        <div class="flex items-center gap-2"><a href="edit-event.php?event_update_id=<?php echo $row['id']; ?>" title="Edit"
                                class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-pencil-alt text-sm"></i></a><a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)" title="Delete"
                                class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-trash-alt text-sm"></i></a></div>
                    </div>
                </div>
                <?php endwhile; ?>


            </div>
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
                window.location.href = 'logics.php?event_delete_id=' + id;
            }
        })
    }
    </script>
</body>

</html>