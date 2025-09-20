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
    <title>Manage Team - Dashboard</title>

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
                <h2 class="font-heading text-2xl font-bold">Team Members</h2>
                <a href="add-team-member.php"
                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300"><i
                        class="fas fa-plus"></i><span>Add New Member</span></a>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                     <?php


                $team = $mysqli->query("SELECT * FROM teams");


                // Fetch and display the titles
                while ($row = $team->fetch_assoc()):

                ?>

                <div class="relative bg-white rounded-xl shadow-soft-1 text-center p-6 group hover:-translate-y-1.5 hover:shadow-soft-2 transition-all duration-300 overflow-hidden"
                    data-aos="fade-up">
                    <div
                        class="absolute inset-y-0 left-0 w-16 bg-primary/90 backdrop-blur-sm flex flex-col items-center justify-center gap-4 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-in-out">
                        <a href="#" class="text-white/80 hover:text-white transition-colors"><i
                                class="fab fa-linkedin-in text-xl"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition-colors"><i
                                class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-white/80 hover:text-white transition-colors"><i class="fab fa-facebook text-xl"></i>
                            
                            </a>
                                
                    </div>
                    <img src="team_image/<?php echo ($row['t_image']) ?>"
                        alt="Team Member"
                        class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-slate-200 group-hover:border-primary/50 transition-colors duration-300">
                    <h3 class="font-heading text-xl font-bold text-slate-900"> <?php echo ($row['t_name']) ?></h3>
                    <p class="text-primary text-sm mb-6"><?php echo ($row['t_designation']) ?></p>
                    <div class="border-t border-slate-200 pt-4 flex items-center justify-center gap-3">
                     <a
                                href="team-view.php?blog_des_id=<?php echo $row['id']; ?>" title="View Post"
                                class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-blue-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-eye text-sm"></i></a>

                            <a href="edit-team-member.php?team_update_id=<?php echo $row['id']; ?>" title="Edit team"
                                class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-green-200 hover:-translate-y-0.5 transition-all duration-300"><i
                                    class="fas fa-pencil-alt text-sm"></i></a>

                            <a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)" title="Delete team"
                                class="h-8 w-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shadow-md hover:shadow-lg hover:bg-red-200 hover:-translate-y-0.5 transition-all duration-300">
                                <i class="fas fa-trash-alt text-sm"></i>
                            </a>
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
                window.location.href = 'logics.php?team_delete_id=' + id;
            }
        })
    }
    </script>
</body>

</html>