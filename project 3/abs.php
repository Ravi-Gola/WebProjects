<?php
session_start();
if(!isset($_SESSION['logedin']) || $_SESSION['logedin'] != true)
{
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <title>Exercise</title>
    <link rel="stylesheet" href="exercise.css">
    <style>
    .exerciseimg{
    height: auto;
    width: auto;
}
body h1{
    font-weight: 500;
    text-align: center;
    margin: 20px;
    font-size: 37px;
}
footer.text-gray-600.body-font{
    background-color: black;
}
nav a{
    color: white;
}
    </style>
    

</head>
<body>
    <!-- header start -->
    <div class="header">
        <!-- navigation start -->
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <img src="fitness_images/fitnesslogo1.png" class="logo" alt="">
                    <span class="ml-3 text-xl">fitness</span>
                </a>
                <nav
                    class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
                    <a class="mr-5 hover:text-gray-900" href="supplement.php">Supplement</a>
                    <a class="mr-5 hover:text-gray-900" href="exercise.php">Exercise</a>
                    <a class="mr-5 hover:text-gray-900" href="blog.php">Blog</a>
                    <a class="mr-5 hover:text-gray-900" href="contact.php">contact</a>

                </nav>
                <?php
    if(isset($_SESSION['logedin']) || $_SESSION['logedin'] == true){
        echo '<p>'.$_SESSION['email'].'</p>
        <a href="logout.php" style="
        background-color: black;
        color: white;
        padding: 6px;
        margin-left: 15px;
        border-radius: 9px;">logout</a>';
       
    }
    
    ?>
            </div>
        </header>
        <h1 id="heading">Exercise</h1>

    </div>
    <!-- exercise start -->
    <h1>Abs Workout</h1>
    <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Upper Abs Workout:</h2>
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1.Dumbbell Crunch</h1>
   <img src="fitness_images/absimg/dumbellcrunch.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 10 Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Lie on your back, holding a dumbbell or weight plate across your chest in both hands. Raise your torso, then lower it, maintaining tension in your uppers abs throughout.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2.Tuck and crunch</h1>
   <img src="fitness_images/absimg/tuck_crunch.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 15 Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Lie down with your hands by your head and your legs raised with your knees bent at a 90° angle. Simultaneously raise your torso and draw your knees towards your chest. Keep your fingers by your temples throughout and initiate each rep smoothly without jerking your torso up. Don’t let your feet touch the floor between reps.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3.Modified-V-Sit</h1>
   <img src="fitness_images/absimg/modified_v_sit.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 12 Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Lie with your legs raised off the floor and extended away from you so they’re parallel with the floor, and your arms straight by your sides, held off the floor. Keep your arms straight as you raise your torso and bring your legs in, bending at the knees, so that your chest meets your knees at the top of the move. Then lower under control.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4.Crunch</h1>
   <img src="fitness_images/absimg/crunch.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 20 Rest 90sec</p>
      <p class="mb-8 leading-relaxed">Lie on your back with your knees bent and feet planted, and your arms crossed across your chest. Raise your torso using your abs, then lower. Your upper abs will already be close to fatigue but try to hold the top position of each rep for at least one second to make them work as hard as possible.</p>
    </div>
  </div>
</section>
<!-- lower abs -->
<h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Lower Abs Workout:</h2>
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1.Hanging Leg Raise</h1>
   <img src="fitness_images/absimg/hanging_leg_raise.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 10 Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Fair warning, this tough exercise sets the tone for what is going to be a brutal workout involving four different hanging exercises. Start in a dead hang with your legs straight and your knees and ankles touching. Keep them together as your use your lower abs to raise them, then lower back to the start under control.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2.Hanging Knee Raise Twist</h1>
   <img src="fitness_images/absimg/hanging_knee_raise_twist.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 12 each side Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Start in a dead hang with your legs straight and knees together. Twist your body and raise your knees to one side, then return to the start. Continue, alternating sides</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3.Hanging Knee Raise</h1>
   <img src="fitness_images/absimg/hanging_knee_raise.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 15 Rest 10sec</p>
      <p class="mb-8 leading-relaxed">This slightly easier variation on the hanging leg raise still puts a lot of pressure on your lower abs. Start in a dead hang and raise your knees powerfully to activate more of the muscle fibres in the lower abs. Lower back to the start under control to prevent swinging.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4.Garhammeer Raise</h1>
   <img src="fitness_images/absimg/garhammer_raise.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 20 Rest 90sec</p>
      <p class="mb-8 leading-relaxed">Start hanging from the bar but with your knees already raised to around your midsection, then lift them as high as you can. Lower back to the start under control, keeping your abs engaged throughout.</p>
    </div>
  </div>
</section>
<!-- Obliques And Core Workout -->
<h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Obliques And Core Workout:</h2>
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1.Decline plank with foot touch</h1>
   <img src="fitness_images/absimg/decline_plank_foot_touch.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 10 each side Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Get into a decline plank position, supporting yourself on your forearms with your feet raised on a bench. Your body should form a straight line from heels to head and the aim is to maintain that position throughout the exercise. Lift one foot off the bench and move it to the side to touch the floor, then return it to the bench. Continue, alternating sides.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2.Seated Russian Twist</h1>
   <img src="fitness_images/absimg/seated_russian_twist.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 12 each side Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Sit on the floor with your knees bent and heels on the ground. Your torso should be at the top of the crunch position, forming a 45° angle to the ground. Twist your torso from side to side, moving in a smooth and controlled manner.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3.Bicycle crunches</h1>
   <img src="fitness_images/absimg/bicycle.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Reps 15 each side Rest 10sec</p>
      <p class="mb-8 leading-relaxed">Lie on your back with your hands by your temples and your legs raised with your knees bent at a 90° angle. Bring your right knee up towards your chest while raising your torso and twisting so your left elbow comes to meet your knee. Then lower and do the same on the opposite side. Keep your shoulders and feet off the ground to force your abs to work hard to stabilise your torso.</p>
    </div>
  </div>
  <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
  <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4.Plank</h1>
   <img src="fitness_images/absimg/plank.jpg" alt="" class="exerciseimg">
    <div class="text-center lg:w-2/3 w-full">
       <p style="color: black;
    font-weight: bold;
    font-size: larger;">Time Max Rest 90sec</p>
      <p class="mb-8 leading-relaxed">Maintain a strict plank position, with your hips up, your glutes and core braced, and your head and neck relaxed. Breathing slowly and deeply, hold the position for as long as possible.</p>
    </div>
  </div>
</section>

    <!-- exercise end -->

<!-- about start -->
<h1>About us</h1>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
       <img src="fitness_images/mypic.jpg" alt=""  style="
    height: 80px;
    width: 80px;
    border-radius: 41px;">
        <span class="ml-3 text-xl">MR. Ravi(Owner)</span>
      </a>
      <p class="mt-2 text-sm text-gray-500">I have created this website for fitness  .</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Explore</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Company</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">Nutrabay</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Amazon</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">security</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
        <?php
        if(isset($_GET['alreadysubscribe']) && $_GET['alreadysubscribe'] == "true"){
                   echo '<p style="color: white;
                   border: 2px solid;
                   text-align: center;
                   border-radius: 21px;">Already Subscribed</p>';
        }
  if(isset($_GET['subscribe']) && $_GET['subscribe'] == "true")
  {
    echo '<p style="color: white;
    border: 2px solid;
    text-align: center;
    border-radius: 21px;">Successfully <br>Subscribed</p>';
  }
  else
  {
    echo '<form action="subscribe.php" method="post">
    <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
      <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">subscribe</button>   
    </div>
    </form>
    <p class="text-gray-500 text-sm mt-2 md:text-left text-center">subscribe our websites for latest updates ';
  }
  ?>
        
        
          <br class="lg:block hidden">Thank you!
        </p>
      </div>
    </div>
  </div>
    </div>
  </div>
  
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
<!-- about end -->

</body>

</html>