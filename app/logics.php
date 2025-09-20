<?php
include('db.php');

// PHPMailer দিয়ে ইমেইল পাঠানো
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// admin lawyer logic

if (isset($_POST['adminlogin'])) {


  $email = $_POST['email'];
  $password = $_POST['password'];

  // ডাটাবেজ থেকে ইউজারের তথ্য যাচাই
  $login_query = "SELECT * FROM `admin_table` WHERE email = '$email'";
  $login_run = mysqli_query($mysqli, $login_query);

  if (mysqli_num_rows($login_run) > 0) {
    $login_row = mysqli_fetch_array($login_run);

    // ডাটাবেজ থেকে পাওয়া পাসওয়ার্ড ও অন্যান্য তথ্য
    $db_pass = $login_row['password'];
    $user_id = $login_row['id'];
    $user_type = $login_row['user_type'];

    // পাসওয়ার্ড ভেরিফিকেশন
    if ($password == $db_pass) {
      // সেশন সেট করা
      $_SESSION['email'] = $email;
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_type'] = $user_type;

      // user_type অনুসারে রিডিরেক্ট
      if ($user_type == 'applicant') {
        header('Location: ../index.php');
        exit();
      } elseif ($user_type == 'admin' || $user_type == 'lawyer') {
        header('Location: index.php');
        exit();
      }
    } else {
      // পাসওয়ার্ড ভুল হলে এরর মেসেজ সেট করে লগইন পেজে পাঠানো
      $_SESSION['error'] = "Incorrect password!";
      header('Location: login.php');
      exit();
    }
  } else {
    // ইমেইল না থাকলে এরর মেসেজ সেট করে লগইন পেজে পাঠানো
    $_SESSION['error'] = "Email not found!";
    header('Location: login.php');
    exit();
  }
}




// Add gallery  Logic

if (isset($_POST['gallery_add'])) {

  $g_image = $_FILES['g_image']['name'];
  $tmpName = $_FILES['g_image']['tmp_name'];
  $folder = 'g_images/' . $g_image;



  $mysqli->query("INSERT INTO gallery_images (g_image) VALUES ('$g_image')");

  move_uploaded_file($tmpName, $folder);


  $_SESSION['message'] = "Gallery has been added";
  $_SESSION['message_type'] = 'success';
  header("location:gallery.php");
}


// delete gallery logic 

if (isset($_GET['gallery_delete_id'])) {
  $id = $_GET['gallery_delete_id'];

  $mysqli->query("DELETE FROM gallery_images WHERE id=$id");

  $_SESSION['message'] = "Gallery has been Deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:gallery.php");
}




// --------------- Blog crud start ---------------------

// Add Blog Logic
if (isset($_POST['add_blog'])) {
    // ডেটাবেস কানেকশন ভ্যারিয়েবল ($mysqli) এখানে আছে বলে ধরে নেওয়া হচ্ছে
    
    $b_title = $_POST['b_title'];
    $b_author = $_POST['b_author'];
    $b_date = $_POST['b_date'];
    $b_des = $_POST['b_des']; // mysqli_real_escape_string এর প্রয়োজন নেই এখানে

    // --- Image Upload Logic ---
    $b_image = $_FILES['b_image']['name'];
    $tmpName = $_FILES['b_image']['tmp_name'];
    $folder  = 'blogImage/' . $b_image;

    // --- Database Insert using Prepared Statements (নিরাপদ পদ্ধতি) ---
    $query = "INSERT INTO blog_table (b_title, b_author, b_date, b_des, b_image) VALUES (?, ?, ?, ?, ?)";
    
    // 1. স্টেটমেন্ট প্রস্তুত করা
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 2. প্যারামিটার বাইন্ড করা (s = string)
        // ডেটার ধরন অনুযায়ী 's' (string), 'i' (integer), 'd' (double), 'b' (blob) ব্যবহার হয়
        $stmt->bind_param("sssss", $b_title, $b_author, $b_date, $b_des, $b_image);

        // 3. স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // সফলভাবে ডেটা ইনসার্ট হলে
            move_uploaded_file($tmpName, $folder); // ছবিটি ফোল্ডারে সরানো হচ্ছে
            
            $_SESSION['message'] = "Blog has been added successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            // যদি কোনো সমস্যা হয়
            $_SESSION['message'] = "Error: Could not add the blog.";
            $_SESSION['message_type'] = 'danger';
        }
        
        // 4. স্টেটমেন্ট বন্ধ করা
        $stmt->close();

    } else {
        $_SESSION['message'] = "Error: Database query could not be prepared.";
        $_SESSION['message_type'] = 'danger';
    }

    header("location:blog.php");
    exit();
}




// Update Blog Logic
if (isset($_POST['update_blog'])) {
    $blog_update_id = $_POST['id'];
    $b_title        = $_POST['b_title'];
    $b_author       = $_POST['b_author'];
    $b_date         = $_POST['b_date'];
    $b_des          = $_POST['b_des']; // Prepared statement এ mysqli_real_escape_string এর প্রয়োজন নেই
    $old_image      = $_POST['old_image'];
    $new_image      = $_FILES['b_image']['name'];

    $update_filename = "";

    // যদি নতুন ছবি আপলোড করা হয়
    if ($new_image != '') {
        $update_filename = $new_image;
    } 
    // যদি নতুন ছবি না দেওয়া হয়, তবে পুরনোটিই থাকবে
    else {
        $update_filename = $old_image;
    }

    // UPDATE কোয়েরি প্রস্তুত করা
    $query = "UPDATE `blog_table` SET `b_title`=?, `b_author`=?, `b_date`=?, `b_des`=?, `b_image`=? WHERE `id`=?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // প্যারামিটার বাইন্ড করা (s = string, i = integer)
        $stmt->bind_param("sssssi", $b_title, $b_author, $b_date, $b_des, $update_filename, $blog_update_id);
        
        // স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // কোয়েরি সফল হলে, নতুন ছবি আপলোড এবং পুরনো ছবি ডিলিট করা হবে
            if ($new_image != '') {
                // নতুন ছবিটি নির্দিষ্ট ফোল্ডারে সরানো হচ্ছে
                move_uploaded_file($_FILES['b_image']['tmp_name'], 'blogImage/' . $new_image);
                
                // যদি পুরনো ছবিটি সার্ভারে থাকে, তবে তা ডিলিট করে দেওয়া হচ্ছে
                if (file_exists('blogImage/' . $old_image)) {
                    unlink('blogImage/' . $old_image);
                }
            }
            $_SESSION['message'] = "Blog has been updated successfully!";
            $_SESSION['message_type'] = 'success'; // সফল আপডেটের জন্য 'success' ব্যবহার করা ভালো
        } else {
            $_SESSION['message'] = "Failed to update the blog.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header('location:blog.php');
    exit();
}



// Delete Blog  Logic


// Delete Blog Logic
if (isset($_GET['blog_delete_id'])) {
    $id = $_GET['blog_delete_id'];

    // Prepared Statement ব্যবহার করে নিরাপদ ডিলিট কোয়েরি
    $query = "DELETE FROM blog_table WHERE id = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 'i' মানে হলো id একটি Integer (পূর্ণ সংখ্যা)
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Blog has been deleted successfully!";
            $_SESSION['message_type'] = 'success'; // সফলতার জন্য 'success' ব্যবহার করা ভালো
        } else {
            $_SESSION['message'] = "Could not delete the blog.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header("location:blog.php");
    exit();
}


// --------------- Blog crud end ---------------------



// add_testimonial




// Add Testimonial Logic
if (isset($_POST['add_testimonial'])) {
    $t_name        = $_POST['t_name'];
    $t_desgination = $_POST['t_desgination'];
    $t_des         = $_POST['t_des'];

    // --- Image Upload Logic ---
    $t_image = $_FILES['t_image']['name'];
    $tmpName = $_FILES['t_image']['tmp_name'];
    $folder  = 'testimonial_image/' . $t_image;

    // --- Database Insert using Prepared Statements (নিরাপদ পদ্ধতি) ---
    $query = "INSERT INTO testimonials (t_name, t_desgination, t_des, t_image) VALUES (?, ?, ?, ?)";
    
    // 1. স্টেটমেন্ট প্রস্তুত করা
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 2. প্যারামিটার বাইন্ড করা (এখানে সবগুলোই স্ট্রিং, তাই "ssss")
        $stmt->bind_param("ssss", $t_name, $t_desgination, $t_des, $t_image);

        // 3. স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // ডেটাবেসে সফলভাবে যোগ হলেই কেবল ছবিটি ফোল্ডারে সরানো হবে
            move_uploaded_file($tmpName, $folder);
            
            $_SESSION['message'] = "Testimonial has been added successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            // যদি কোনো সমস্যা হয়
            $_SESSION['message'] = "Error: Could not add the testimonial.";
            $_SESSION['message_type'] = 'error';
        }
        
        // 4. স্টেটমেন্ট বন্ধ করা
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error: Database query could not be prepared.";
        $_SESSION['message_type'] = 'error';
    }

    header("location:testimonial.php");
    exit();
}


// Update Testimonial  Logic

if (isset($_POST['update_testimonial'])) {
    $testimonial_update_id = $_POST['id'];
    $t_name        = $_POST['t_name'];
    $t_desgination = $_POST['t_desgination'];
    $t_des         = $_POST['t_des'];
    $old_image     = $_POST['old_image'];
    $new_image     = $_FILES['t_image']['name'];

    $update_filename = "";
    // যদি নতুন ছবি আপলোড করা হয়, তবে তার নাম ব্যবহার করা হবে
    if ($new_image != '') {
        $update_filename = $new_image;
    } 
    // অন্যথায়, পুরনো ছবির নামটিই থাকবে
    else {
        $update_filename = $old_image;
    }

    // নিরাপদ UPDATE কোয়েরি প্রস্তুত করা
    $query = "UPDATE `testimonials` SET `t_name`=?, `t_desgination`=?, `t_des`=?, `t_image`=? WHERE `id`=?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // প্যারামিটার বাইন্ড করা (s = string, i = integer)
        $stmt->bind_param("ssssi", $t_name, $t_desgination, $t_des, $update_filename, $testimonial_update_id);
        
        // স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // কোয়েরি সফল হলে, নতুন ছবি আপলোড এবং পুরনো ছবি ডিলিট করা হবে
            if ($new_image != '') {
                // নতুন ছবিটি নির্দিষ্ট ফোল্ডারে সরানো হচ্ছে
                move_uploaded_file($_FILES['t_image']['tmp_name'], 'testimonial_image/' . $new_image);
                
                // যদি পুরনো ছবিটি সার্ভারে থাকে, তবে তা ডিলিট করা হচ্ছে
                if (file_exists('testimonial_image/' . $old_image)) {
                    unlink('testimonial_image/' . $old_image);
                }
            }
            $_SESSION['message'] = "Testimonial has been updated successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = "Failed to update the testimonial.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header('location:testimonial.php');
    exit();
}


// Delete testimonial  Logic



if (isset($_GET['testimonial_delete_id'])) {
    $id = $_GET['testimonial_delete_id'];

    // Prepared Statement ব্যবহার করে নিরাপদ ডিলিট কোয়েরি
    $query = "DELETE FROM testimonials WHERE id = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 'i' মানে হলো id একটি Integer (পূর্ণ সংখ্যা)
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Testimonial has been deleted successfully!";
            $_SESSION['message_type'] = 'success'; // সফলতার জন্য 'success' ব্যবহার করা ভালো
        } else {
            $_SESSION['message'] = "Could not delete the blog.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header("location:testimonial.php");
    exit();
}



// add_team




// Add team  Logic

// Add Team Member Logic
if (isset($_POST['add_team'])) {
    $t_name        = $_POST['t_name'];
    $t_designation = $_POST['t_designation'];
    $t_des         = $_POST['t_des'];
    $t_linkedln    = $_POST['t_linkedln'];
    $t_twitter     = $_POST['t_twitter'];
    $t_facebook    = $_POST['t_facebook'];

    // --- Image Upload Logic ---
    $t_image = $_FILES['t_image']['name'];
    $tmpName = $_FILES['t_image']['tmp_name'];
    $folder  = 'team_image/' . $t_image;

    // --- Database Insert using Prepared Statements (নিরাপদ পদ্ধতি) ---
    $query = "INSERT INTO teams (t_name, t_designation, t_des, t_linkedln, t_twitter, t_facebook, t_image) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // 1. স্টেটমেন্ট প্রস্তুত করা
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 2. প্যারামিটার বাইন্ড করা (এখানে ৭টিই স্ট্রিং, তাই "sssssss")
        $stmt->bind_param("sssssss", $t_name, $t_designation, $t_des, $t_linkedln, $t_twitter, $t_facebook, $t_image);

        // 3. স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // ডেটাবেসে সফলভাবে যোগ হলেই কেবল ছবিটি ফোল্ডারে সরানো হবে
            move_uploaded_file($tmpName, $folder);
            
            $_SESSION['message'] = "Team member has been added successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = "Error: Could not add the team member.";
            $_SESSION['message_type'] = 'error';
        }
        
        // 4. স্টেটমেন্ট বন্ধ করা
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error: Database query could not be prepared.";
        $_SESSION['message_type'] = 'error';
    }

    header("location:team.php");
    exit();
}



// Update team  Logic


if (isset($_POST['update_team'])) {
    $team_update_id = $_POST['id'];
    $t_name         = $_POST['t_name'];
    $t_designation  = $_POST['t_designation'];
    $t_des          = $_POST['t_des'];
    $t_linkedln     = $_POST['t_linkedln'];
    $t_twitter      = $_POST['t_twitter'];
    $t_facebook     = $_POST['t_facebook'];
    $old_image      = $_POST['old_image'];
    $new_image      = $_FILES['t_image']['name'];

    $update_filename = "";
    // যদি নতুন ছবি আপলোড করা হয়
    if ($new_image != '') {
        $update_filename = $new_image;
    } 
    // অন্যথায়, পুরনো ছবির নামটিই থাকবে
    else {
        $update_filename = $old_image;
    }

    // নিরাপদ UPDATE কোয়েরি প্রস্তুত করা
    $query = "UPDATE `teams` SET `t_name`=?, `t_designation`=?, `t_des`=?, `t_linkedln`=?, `t_twitter`=?, `t_facebook`=?, `t_image`=? WHERE `id`=?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // প্যারামিটার বাইন্ড করা (s = string, i = integer)
        $stmt->bind_param("sssssssi", $t_name, $t_designation, $t_des, $t_linkedln, $t_twitter, $t_facebook, $update_filename, $team_update_id);
        
        // স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // কোয়েরি সফল হলে, নতুন ছবি আপলোড এবং পুরনো ছবি ডিলিট করা হবে
            if ($new_image != '') {
                // নতুন ছবিটি নির্দিষ্ট ফোল্ডারে সরানো হচ্ছে
                move_uploaded_file($_FILES['t_image']['tmp_name'], 'team_image/' . $new_image);
                
                // যদি পুরনো ছবিটি সার্ভারে থাকে, তবে তা ডিলিট করা হচ্ছে
                if (file_exists('team_image/' . $old_image)) {
                    unlink('team_image/' . $old_image);
                }
            }
            $_SESSION['message'] = "Team member has been updated successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = "Failed to update the team member.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header('location:team.php');
    exit();
}



// Delete team  Logic


if (isset($_GET['team_delete_id'])) {
    $id = $_GET['team_delete_id'];

    // Prepared Statement ব্যবহার করে নিরাপদ ডিলিট কোয়েরি
    $query = "DELETE FROM teams WHERE id = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 'i' মানে হলো id একটি Integer (পূর্ণ সংখ্যা)
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Team Member has been deleted successfully!";
            $_SESSION['message_type'] = 'success'; // সফলতার জন্য 'success' ব্যবহার করা ভালো
        } else {
            $_SESSION['message'] = "Could not delete the blog.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header("location:team.php");
    exit();
}




// Add  gallery Logic
if (isset($_POST['add_image'])) {
    $g_name        = $_POST['g_name'];


    // --- Image Upload Logic ---
    $g_image = $_FILES['g_image']['name'];
    $tmpName = $_FILES['g_image']['tmp_name'];
    $folder  = 'gallery_image/' . $g_image;

    // --- Database Insert using Prepared Statements (নিরাপদ পদ্ধতি) ---
    $query = "INSERT INTO gallery_images (g_name, g_image) VALUES (?, ?)";
    
    // 1. স্টেটমেন্ট প্রস্তুত করা
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 2. প্যারামিটার বাইন্ড করা (এখানে 2টিই স্ট্রিং, তাই "ss")
        $stmt->bind_param("ss", $g_name, $g_image);

        // 3. স্টেটমেন্ট এক্সিকিউট করা
        if ($stmt->execute()) {
            // ডেটাবেসে সফলভাবে যোগ হলেই কেবল ছবিটি ফোল্ডারে সরানো হবে
            move_uploaded_file($tmpName, $folder);
            
            $_SESSION['message'] = "Gallery picture has been added successfully!";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = "Error: Could not add the team member.";
            $_SESSION['message_type'] = 'error';
        }
        
        // 4. স্টেটমেন্ট বন্ধ করা
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error: Database query could not be prepared.";
        $_SESSION['message_type'] = 'error';
    }

    header("location:gallery.php");
    exit();
}

// Delete gallery  Logic


if (isset($_GET['gallery_delete_id'])) {
    $id = $_GET['gallery_delete_id'];

    // Prepared Statement ব্যবহার করে নিরাপদ ডিলিট কোয়েরি
    $query = "DELETE FROM gallery_images WHERE id = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // 'i' মানে হলো id একটি Integer (পূর্ণ সংখ্যা)
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = "Gallery Picture has been deleted successfully!";
            $_SESSION['message_type'] = 'success'; // সফলতার জন্য 'success' ব্যবহার করা ভালো
        } else {
            $_SESSION['message'] = "Could not delete the blog.";
            $_SESSION['message_type'] = 'error';
        }
        $stmt->close();
    }
    
    header("location:gallery.php");
    exit();
}




// Add contact  Logic
if (isset($_POST['contact_added'])) {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];


  // Insert query
  $mysqli->query("INSERT INTO contact_table (email, phone, location ) VALUES ('$email', '$phone', '$location')");

  // Flash message
  $_SESSION['message'] = "Contact Informaiton has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:contact.php");
  exit();
}


// Delete contact  Logic

if (isset($_GET['contact_delete_id'])) {
  $id = $_GET['contact_delete_id'];

  $mysqli->query("DELETE FROM contact_table WHERE id=$id");

  $_SESSION['message'] = "Contact has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:contact.php");
}








// Add job  Logic
if (isset($_POST['add_job'])) {
  $j_title = $_POST['j_title'];
  $j_company = $_POST['j_company'];
  $j_type = $_POST['j_type'];
  $j_des = $_POST['j_des'];


  // Insert query
  $mysqli->query("INSERT INTO career (j_title, j_company, j_type, j_des ) VALUES ('$j_title', '$j_company', '$j_type', '$j_des')");

  // Flash message
  $_SESSION['message'] = "Job has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:job.php");
  exit();
}


// Update job  Logic

if (isset($_POST['update_job'])) {
  $job_update_id = $_POST['id'];
  $j_title = $_POST['j_title'];
  $j_company = $_POST['j_company'];
  $j_type = $_POST['j_type'];
  $j_des = $_POST['j_des'];


  $mysqli->query("UPDATE `career` SET `j_title` = '$j_title', `j_title` = '$j_title', `j_company` = '$j_company', `j_type` = '$j_type', `j_des` = '$j_des' WHERE id=$job_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Job has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:job.php');
}



// Delete job  Logic

if (isset($_GET['job_delete_id'])) {
  $id = $_GET['job_delete_id'];

  $mysqli->query("DELETE FROM career WHERE id=$id");

  $_SESSION['message'] = "Job has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:job.php");
}




// Add booking  Logic
if (isset($_POST['add_booking'])) {
  $u_name = $_POST['u_name'];
  $u_email = $_POST['u_email'];
  $u_phone = $_POST['u_phone'];
  $u_message = $_POST['u_message'];
  $booking_id = $_POST['j_id'];

  $uniqueId = date("YmdHis");
    // Image upload
  $u_cv = $_FILES['u_cv']['name'];
  $tmpName = $_FILES['u_cv']['tmp_name'];
  $folder  = 'user_cv/' . $u_cv;





  // Insert query
  $mysqli->query("INSERT INTO booking (u_name, u_email, u_phone, u_message, u_cv,j_id ) VALUES ('$u_name', '$u_email', '$u_phone', '$u_message', '$u_cv', '$booking_id')");


  move_uploaded_file($tmpName, $folder);

 try {
        require '../vendor/autoload.php';
        require '../vendor/phpmailer/phpmailer/src/Exception.php';
        require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require '../vendor/phpmailer/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'stonebridgeofficial01@gmail.com';  
        $mail->Password   = 'dsagmuhyivobtouo'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // ================= USER MAIL =================
        $mail->setFrom('stonebridgeofficial01@gmail.com', 'Mountenna Group');
        $mail->addAddress($u_email, $u_name);
        $mail->isHTML(true);
        $mail->Subject = "Your Application has been Received - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>Thank you for your application!</h2>
            <p>Dear <strong>$u_name</strong>,</p>
            <p>We have successfully received your application for your desired course. Below are the details we have received:</p>
            <ul>
                <li><strong>Email:</strong> $u_email</li>
            </ul>
          
            <p>Your application is currently under review, and we will get back to you with the next steps shortly.</p>
            <p>Thank you for choosing Mountenna Group. We look forward to assisting you with your educational journey.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        // ================= ADMIN MAIL =================
        $mail->clearAddresses();
        $mail->addAddress('stonebridgeofficial01@gmail.com', 'Admin');

        // CV attach
        $mail->addAttachment($folder, $newFileName);

        $mail->Subject = "New Application Received - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>New Application Received</h2>
            <p>Dear Admin,</p>
            <p>A new application has been submitted. Below are the details provided by the applicant:</p>
            <ul>
                <li><strong>Applicant Name:</strong> $u_name</li>
                <li><strong>Email:</strong> $u_email</li>
                <li><strong>Phone Number:</strong> $u_phone</li>
                <li><strong>Message:</strong> $u_message</li>
            </ul>
            <p>The application status is currently marked as <strong>'pending'</strong>.</p>
            <p>Kindly review the application details and proceed with the necessary actions.</p>
            <p>Thank you for your attention to this matter.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        $_SESSION['message'] = "Application has been successfully added, and emails have been sent.";
        $_SESSION['message_type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = "Application has been added, but email sending failed: " . $mail->ErrorInfo;
        $_SESSION['message_type'] = 'warning';
    }

    // Flash message
    $_SESSION['message'] = "Application has been added successfully!";
    $_SESSION['message_type'] = 'success';

    header("location:../confirmation.php");
    exit();
}

 
// contact_form_submit

if (isset($_POST['contact_form_submit'])) {
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_address = $_POST['user_address'];
  $user_message = $_POST['user_message'];

  $uniqueId = date("YmdHis");




  // Insert query
  $mysqli->query("INSERT INTO user_message (user_name, user_email, user_address, user_message ) VALUES ('$user_name', '$user_email', '$user_address', '$user_message')");



 try {
        require '../vendor/autoload.php';
        require '../vendor/phpmailer/phpmailer/src/Exception.php';
        require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require '../vendor/phpmailer/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'stonebridgeofficial01@gmail.com';  
        $mail->Password   = 'dsagmuhyivobtouo'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->isHTML(true);


  

        // ================= ADMIN MAIL =================
        $mail->clearAddresses();
        $mail->addAddress('stonebridgeofficial01@gmail.com', 'Admin');

   

        $mail->Subject = "New User message - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>New user message Received</h2>
            <p>Dear Admin,</p>
            <p>A new message has been submitted. Below are the details provided by the applicant:</p>
            <ul>
                <li><strong>Applicant Name:</strong> $user_name</li>
                <li><strong>Email:</strong> $user_email</li>
                <li><strong>Address:</strong> $user_address</li>
                <li><strong>Message:</strong> $user_message</li>
            </ul>
            <p>Kindly review the application details and proceed with the necessary actions.</p>
            <p>Thank you for your attention to this matter.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        $_SESSION['message'] = "Application has been successfully added, and emails have been sent.";
        $_SESSION['message_type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = "Application has been added, but email sending failed: " . $mail->ErrorInfo;
        $_SESSION['message_type'] = 'warning';
    }

    // Flash message
    $_SESSION['message'] = "Application has been added successfully!";
    $_SESSION['message_type'] = 'success';

    header("location:../confirmations.php");
    exit();
}






// Delete message  Logic

if (isset($_GET['user_delete_id'])) {
  $id = $_GET['user_delete_id'];

  $mysqli->query("DELETE FROM user_message WHERE id=$id");

  $_SESSION['message'] = "User has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:user_message.php");
}



// Delete admin message  Logic

if (isset($_GET['admin_user_delete_id'])) {
  $id = $_GET['admin_user_delete_id'];

  $mysqli->query("DELETE FROM user_message WHERE id=$id");

  $_SESSION['message'] = "User has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:index.php");
}