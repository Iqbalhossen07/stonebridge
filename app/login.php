<?php include('db.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login / Sign Up - Stonebridge Legal</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600&family=Merriweather:wght@700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#87550D',
                        'primary-light': '#a17b3f',
                        'primary-dark': '#6d450a',
                        'accent': '#f59e0b',
                    },
                    fontFamily: {
                        heading: ['Merriweather', 'serif'],
                        body: ['Lora', 'serif'],
                    },
                    boxShadow: {
                        'soft-1': '0 6px 24px -8px rgba(0,0,0,.15)',
                        'soft-2': '0 12px 36px -10px rgba(0,0,0,.20)',
                        'soft-3': '0 18px 48px -12px rgba(0,0,0,.28)',
                    }
                }
            }
        }
    </script>
    <style>
        .page-background {
            background: linear-gradient(135deg, #fefce8 0%, #ffe9c4 50%, #d8b48f 100%);
        }
        
        .login-form-card {
            background-color: white;
        }
        
        @media (min-width: 768px) {
            .login-form-card {
                background-color: rgba(255, 255, 255, 0.85);
                backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }
        }
        
        .input-underline {
            border: none;
            border-bottom: 2px solid rgba(135, 85, 13, 0.4);
            background-color: transparent;
            transition: border-color 0.3s ease;
        }
        .input-underline:focus {
            border-color: #87550D;
            outline: none;
        }
        .btn-primary-gradient {
            background: linear-gradient(45deg, #a17b3f, #87550D);
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(135, 85, 13, 0.3);
        }
        .btn-primary-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(135, 85, 13, 0.4);
        }
    </style>
</head>
<body class="font-body text-slate-800 antialiased page-background min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md"> 
        <div class="login-form-card p-8 md:p-10 rounded-2xl shadow-soft-3 text-center">
            
            <img src="../img/logo.png" alt="Stonebridge Legal Logo" class="w-36 mx-auto mb-6">
            <h2 class="font-heading text-3xl font-bold mb-3 text-slate-900">Sign In to Your Account</h2>
            <p class="text-slate-600 mb-8">Welcome back! Please enter your details.</p>
               <?php 
                if (isset($_SESSION['error'])) {
                    echo "<p id='error-msg' style='color:red;'>".$_SESSION['error']."</p>";
                    unset($_SESSION['error']); // সেশন থেকে এরর মুছে ফেলা
                }
            ?>

            <form action="logics.php" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="sr-only">Email Address</label>
                    <div class="relative">
                        <input type="email" id="email" name="email" placeholder="Email Address" required 
                               class="input-underline w-full py-3 text-slate-700 placeholder-slate-400 focus:outline-none">
                        <i class="fas fa-envelope absolute right-0 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    </div>
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Password" required 
                               class="input-underline w-full py-3 text-slate-700 placeholder-slate-400 focus:outline-none">
                        <i id="togglePassword" class="fas fa-eye absolute right-0 top-1/2 -translate-y-1/2 text-slate-400 cursor-pointer"></i>
                    </div>
                </div>
                
               

                <div>
                    <button type="submit" name="adminlogin" class="btn-primary-gradient w-full py-3 rounded-full font-semibold text-white text-lg focus:outline-none focus:ring-4 focus:ring-primary/40">
                        Sign In
                    </button>
                </div>
            </form>

       
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const togglePasswordIcon = document.getElementById('togglePassword');

            if (togglePasswordIcon) {
                togglePasswordIcon.addEventListener('click', function () {
                    // Toggle the type attribute of the password input
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle the icon class
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }
        });
    </script>

</body>
</html>