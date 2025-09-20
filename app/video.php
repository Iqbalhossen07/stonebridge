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
    <title>Manage Videos - Dashboard</title>

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

    #videoModal {
        transition: opacity 0.3s ease;
    }

    /* Custom style to set background image dynamically */
    .video-thumbnail-bg {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-heading text-2xl font-bold">All Videos</h2>
                <a href="add-video.php"
                    class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition-colors duration-300"><i
                        class="fas fa-plus"></i><span>Add New Video</span></a>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                           <?php


                $video = $mysqli->query("SELECT * FROM videos");


                // Fetch and display the titles
                while ($row = $video->fetch_assoc()):

                ?>
                <div class="bg-white rounded-xl shadow-soft-1 overflow-hidden group" data-aos="fade-up">
                    <div class="relative play-video-button cursor-pointer w-full h-48 video-thumbnail-bg"
                        data-video-url="<?php echo ($row['v_link']) ?>"
                        style="background-image: url('https://img.youtube.com/vi/5eBoRi-362E/hqdefault.jpg');">
                        <div
                            class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-play-circle text-white text-5xl"></i></div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-heading font-bold text-slate-800 mb-2 truncate"><?php echo ($row['v_title']) ?>
                        </h3>
                        <div class="flex items-center text-slate-500 text-sm mb-4 space-x-4"><?php echo ($row['v_des']) ?></div>
                        <div class="border-t border-slate-200 pt-4 flex justify-end gap-3"><a href="edit-video.php?video_update_id=<?php echo $row['id']; ?>" title="Edit"
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

    <div id="videoModal"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
        <div class="relative w-full max-w-4xl bg-black rounded-lg shadow-2xl"><button id="closeModalBtn"
                class="absolute -top-3 -right-3 h-10 w-10 bg-white rounded-full text-slate-800 flex items-center justify-center text-2xl font-bold hover:bg-slate-200 transition-colors">&times;</button>
            <div class="aspect-video"><iframe id="videoPlayer" class="w-full h-full rounded-lg" src=""
                    title="Video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 700,
        once: true,
        easing: 'ease-out-cubic'
    });

    // Helper function to extract YouTube Video ID
    function getYouTubeVideoId(url) {
        let videoId = null;
        try {
            const embedMatch = url.match(/(?:youtube\.com\/(?:embed\/|v\/)|youtu\.be\/|\/(?:ytc|yts)\/)([\w-]{11})/);
            if (embedMatch && embedMatch[1]) {
                videoId = embedMatch[1];
            } else {
                const urlObj = new URL(url);
                if (urlObj.hostname === 'www.youtube.com' || urlObj.hostname === 'youtube.com') {
                    videoId = urlObj.searchParams.get('v');
                } else if (urlObj.hostname === 'youtu.be') {
                    videoId = urlObj.pathname.split('/')[1];
                }
            }
        } catch (e) {
            console.error("Invalid URL provided:", url, e);
        }
        return videoId;
    }

    // --- Video Modal Functionality ---
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('videoModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const videoPlayer = document.getElementById('videoPlayer');
        const playButtons = document.querySelectorAll('.play-video-button');

        // Set dynamic background image for each video card
        playButtons.forEach(button => {
            const videoUrl = button.dataset.videoUrl;
            const videoId = getYouTubeVideoId(videoUrl);
            if (videoId) {
                button.style.backgroundImage =
                    `url('https://img.youtube.com/vi/${videoId}/hqdefault.jpg')`;
            }
        });

        function openModal(videoUrl) {
            if (modal && videoPlayer) {
                const videoId = getYouTubeVideoId(videoUrl);
                if (videoId) {
                    videoPlayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                    modal.classList.remove('hidden');
                } else {
                    console.error("Could not extract video ID from URL:", videoUrl);
                }
            }
        }

        function closeModal() {
            if (modal && videoPlayer) {
                modal.classList.add('hidden');
                videoPlayer.src = '';
            }
        }

        playButtons.forEach(button => {
            button.addEventListener('click', function() {
                const videoUrl = this.dataset.videoUrl;
                if (videoUrl) {
                    openModal(videoUrl);
                }
            });
        });

        if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
        if (modal) modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
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
                window.location.href = 'logics.php?video_delete_id=' + id;
            }
        })
    }
    </script>
</body>

</html>