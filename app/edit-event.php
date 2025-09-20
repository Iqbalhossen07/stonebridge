<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['event_update_id'])) {
    $event_update_id = $_GET['event_update_id'];
    $event_update_id_result = $mysqli->query("SELECT * FROM events WHERE id='$event_update_id' ");
    if (!empty($event_update_id_result)) {
        $row = $event_update_id_result->fetch_array();

        $e_title = $row['e_title'];
        $e_des = $row['e_des'];
        $e_date = $row['e_date'];
        $e_time = $row['e_time'];
        $e_location = $row['e_location'];
        $e_image = $row['e_image'];
    }

   
}
?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Event - Dashboard</title>

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
                <form action="logics.php" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $event_update_id ?>">

                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="event-title" class="block text-sm font-medium text-slate-700 mb-2">Event
                                Title</label>
                            <input type="text" id="event-title" name="e_title" value="<?php echo $e_title ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Enter the name of the event">
                        </div>
                        <div>
                            <label for="event-description"
                                class="block text-sm font-medium text-slate-700 mb-2">Description</label>
                            <textarea id="event-description" rows="8" name="e_des"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Write a short description about the event..."><?php echo $e_des ?></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Event Image</label>
                            <div id="image-upload-box"
                                class="mt-1 flex justify-center px-6 pt-8 pb-8 border-2 border-slate-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <img id="image-preview" src="" alt="Image preview"
                                        class="hidden w-full max-w-xs h-auto object-cover mx-auto mb-4 rounded-md">
                                    <div id="upload-placeholder">
                                        <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <div class="flex text-sm text-slate-600"><label for="file-upload"
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark"><span>Upload
                                                    a file</span><input id="file-upload" name="e_image" type="file"
                                                    class="sr-only">
                                                    <input type="hidden" name="old_image" value="<?php echo $e_image ?>">
                                                </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-slate-500">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="start-date" class="block text-sm font-medium text-slate-700 mb-2">Start
                                    Date</label>
                                <input type="date" id="start-date" name="e_date" value="<?php echo $e_date ?>"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                            </div>
                            <div>
                                <label for="start-time" class="block text-sm font-medium text-slate-700 mb-2">Start
                                    Time</label>
                                <input type="time" id="start-time" name="e_time" value="<?php echo $e_time ?>"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="location" class="block text-sm font-medium text-slate-700 mb-2">Location /
                                Venue</label>
                            <input type="text" id="location" name="e_location" value="<?php echo $e_location ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="e.g., Online (Zoom)">
                        </div>

                        <div class="border-t border-slate-200 pt-6 flex items-center justify-end gap-3">
                            <a type="button" href="event.php"
                                class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg transition-colors duration-300">Cancel</a>
                            <button type="submit" name="update_event"
                                class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Update
                                Event</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
    </div>

    <script>
    const fileUpload = document.getElementById('file-upload');
    const imagePreview = document.getElementById('image-preview');
    const uploadPlaceholder = document.getElementById('upload-placeholder');
    if (fileUpload && imagePreview) {
        fileUpload.addEventListener('change', (e) => {
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
    }
    </script>
</body>

</html>