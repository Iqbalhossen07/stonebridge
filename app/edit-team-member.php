<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['team_update_id'])) {
    $team_update_id = $_GET['team_update_id'];
    $team_update_id_result = $mysqli->query("SELECT * FROM teams WHERE id='$team_update_id' ");
    if (!empty($team_update_id_result)) {
        $row = $team_update_id_result->fetch_array();

        $t_name = $row['t_name'];
        $t_designation = $row['t_designation'];
        $t_des = $row['t_des'];
        $t_linkedln = $row['t_linkedln'];
        $t_twitter = $row['t_twitter'];
        $t_facebook = $row['t_facebook'];
        $t_image = $row['t_image'];
     
    }

   
}
?>
<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Member - Dashboard</title>

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

    .custom-input-clear {
        @apply block w-full rounded-lg border-2 border-transparent bg-slate-100 py-2 px-4 text-slate-800 placeholder: text-slate-400 shadow-sm transition-all duration-300;
    }

    .custom-input-clear:focus {
        @apply border-primary bg-white ring-2 ring-primary/30;
    }
    </style>
</head>

<body class="bg-secondary font-body text-slate-800 antialiased">
    <div class="flex h-screen bg-secondary overflow-hidden">
        <?php include('nav.php') ?>

        <main class="flex-1 p-6">
            <div class="bg-white rounded-xl shadow-soft-1 p-6 lg:p-8">
                <form action="logics.php" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-8" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $team_update_id ?>">

                    <div class="lg:col-span-2 space-y-6">
                        <div>
                            <label for="member-name" class="block text-sm font-medium text-slate-700 mb-2">Full
                                Name</label>
                            <input type="text" id="member-name" name="t_name" value="<?php echo $t_name ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Enter member's full name">
                        </div>
                        <div>
                            <label for="member-role" class="block text-sm font-medium text-slate-700 mb-2">Role /
                                Designation</label>
                            <input type="text" id="member-role" name="t_designation" value="<?php echo $t_designation ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="e.g., Solicitor, Barrister & FCILEX">
                        </div>
                        <div>
                            <label for="member-bio" class="block text-sm font-medium text-slate-700 mb-2">Short
                                Bio</label>
                            <textarea id="member-bio" rows="6" name="t_des"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
                                placeholder="Write a short introduction about the team member..."><?php echo $t_des ?></textarea>
                        </div>
                        <div class="space-y-4">
                            <label class="block text-sm font-medium text-slate-700">Social Links</label>
                            <div class="relative"><i
                                    class="fab fa-linkedin-in absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input
                                    type="text" name="t_linkedln" value="<?php echo $t_linkedln ?>"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm pl-10"
                                    placeholder="LinkedIn URL"></div>
                            <div class="relative"><i
                                    class="fab fa-twitter absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input
                                    type="text" name="t_twitter" value="<?php echo $t_twitter ?>"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm pl-10"
                                    placeholder="Twitter URL"></div>
                            <div class="relative"><i class="fab fa-facebook absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i><input
                                    type="text" name="t_facebook" value="<?php echo $t_facebook ?>"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm pl-10"
                                    placeholder="Facebook Address"></div>
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
                        <div class="border-t border-slate-200 pt-6 flex items-center justify-end gap-3">
                            <a href="team.php" type="button"
                                class="bg-slate-200 hover:bg-slate-300 text-slate-800 font-bold py-2 px-4 rounded-lg transition-colors duration-300">Cancel</a>
                            <button type="submit" name="update_team"
                                class="bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300">Update
                                Member</button>
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