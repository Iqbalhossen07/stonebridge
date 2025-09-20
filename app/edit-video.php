<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['video_update_id'])) {
    $video_update_id = $_GET['video_update_id'];
    $video_update_id_result = $mysqli->query("SELECT * FROM videos WHERE id='$video_update_id' ");
    if (!empty($video_update_id_result)) {
        $row = $video_update_id_result->fetch_array();

        $v_title = $row['v_title'];
        $v_link = $row['v_link'];
        $v_des = $row['v_des'];
     
     
    }

   
}
?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Video - Dashboard</title>

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
            <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8 max-w-4xl mx-auto">
                <form action="logics.php" method="POST" class="space-y-6">
                    <input type="hidden" name="id" value="<?php echo $video_update_id ?>">


                    <div>
                        <label for="video-title" class="block text-sm font-medium text-slate-700 mb-2">Video
                            Title</label>
                        <input type="text" id="video-title" name="v_title" value="<?php echo $v_title ?>"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                            placeholder="Enter video title...">
                    </div>

                    <div>
                        <label for="video-link" class="block text-sm font-medium text-slate-700 mb-2">YouTube Video
                            Link</label>
                        <input type="url" id="video-link" name="v_link" value="<?php echo $v_link ?>"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                            placeholder="e.g., https://www.youtube.com/watch?v=5eBoRi-362E">
                        <p class="mt-2 text-xs text-slate-500">Paste the full YouTube video URL here. The thumbnail will
                            be generated automatically.</p>
                    </div>


                    <div>
                        <label for="video-description"
                            class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                        <textarea id="video-description" rows="4" name="v_des"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                            placeholder="Write a short description for the video..."><?php echo $v_des ?></textarea>
                    </div>

                    <div class="pt-5 flex items-center justify-end gap-3">
                        <a href="video.php" type="button"
                            class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg transition-colors duration-300">
                            Cancel</a>
                        <button type="submit" name="update_video"
                            class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Update
                            Video</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    </div>
</body>

</html>