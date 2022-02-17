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
    .exerciseimg {
        height: auto;
        width: auto;
    }

    body h1 {
        font-weight: 500;
        text-align: center;
        margin: 20px;
        font-size: 37px;
    }

    footer.text-gray-600.body-font {
        background-color: black;
    }

    nav a {
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
    <h1>Calf Workout</h1>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1. Standing calf raise on elevated surface</h1>
            <img src="fitness_images/calfimg/standing-calf-raise.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“This is a great exercise to stretch and strengthen the calves (primarily the gastrocnemius) through a full range of motion,” Kelley says.

<br>Holding a dumbbell in your left hand, stand with the ball of your left foot on an elevated surface with your heel hanging off, and your right toes resting on your left ankle.
<br>Keeping your core engaged, raise your left heel as high as possible.
<br>Slowly lower your heel down below the raised surface until you feel a stretch in your calf.
<br>Repeat and do equal reps on both legs.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2. Seated calf raise</h1>
            <img src="fitness_images/calfimg/Seated-Calf-Raise.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“This exercise is great for soleus isolation,” Kelley says.

 <br>Sit tall on a bench or chair with your feet flat on the ground holding two heavy dumbbells on top of your thighs.
 <br>Keeping your core engaged, lift your heels off the ground as high as possible.
 <br>Slowly lower your heels back down to the ground, and repeat.
 <br>To increase your range of motion and work your muscles even more while doing a seated calf raise, Kelley suggests elevating the balls of your feet with a block.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3. Farmer’s walk on toes</h1>
            <img src="fitness_images/calfimg/farmer-walk.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This variation on a traditional farmer’s walk is excellent for functional calf strengthening and balance, Kelley says.

<br>Hold a dumbbell in each hand with your feet hip-width apart.
<br>Keeping your shoulders down and your core engaged, lift your heels so you’re standing on your toes.
<br>Without letting your heels touch the ground, walk forward on your toes for a set number of reps or time.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4. Jump rope</h1>
            <img src="fitness_images/calfimg/jump-rope.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">Jumping rope is a good endurance exercise for your calves, and also helps improve total-body coordination, Kelley says.

<br>Holding the handles of a jump rope in each hand, jump with both feet as you spin the rope under you and over your head. Keep your core engaged and your shoulders lowered.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">5. Dumbbell jump squat</h1>
            <img src="fitness_images/calfimg/dumbbell-jump-squat.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This plyometric exercise gets power from the calf muscles during the ascension part of the jump squat, Braun says, as well as stabilization during the landing.

<br>Holding a dumbbell in each hand, stand tall with your feet shoulder-width apart.
<br>Push your hips back to lower down until your thighs are parallel with the ground and you’re in squat position.
<br>In one explosive movement, straighten your legs to come out of the squat position and jump off the ground.
<br>Land softly with bent knees as you lower back into the squat position. Repeat.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">6. Downward dog</h1>
            <img src="fitness_images/calfimg/Downward-Dog.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">The classic yoga pose is a great calf stretch.

<br>Begin in a tabletop position with your hands planted on the ground beneath your shoulders and your knees below your hips.
<br>Pressing firmly into your palms, tuck your toes, lift your knees off the ground, and slowly extend your hips upward.
<br>Without locking your knees, carefully straighten your legs until your body creates a triangle shape with the ground.
<br>Remember to engage your core as you continue to lengthen your spine and lift your hips as high as possible.
<br>To deepen the stretch, bend one knee and then the other to peddle the feet.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">7. Straight-leg calf stretch against wall</h1>
            <img src="fitness_images/calfimg/Straight-leg-Calf-Stretch.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This is a good stretch to target your gastrocnemius and simultaneously improve ankle flexibility, Braun says.

<br>Standing arm’s distance away from a wall, step one foot back and slightly bend your front knee.
<br>Lean forward to push your hands against the wall, and press your back heel down into the ground for a deep stretch. Make sure your leg is straight.
<br>Switch legs and repeat.
<br>To isolate the soleus, try a variation with your back leg slightly bent.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">8. Standing wall calf stretch</h1>
            <img src="fitness_images/calfimg/Standing-Wall-Calf-Stretch.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">Another wall stretch variation, this hits your gastrocnemius and can also help relieve tension in your Achilles tendon. “It also doubles as a good stretch for the plantar fascia,” Kelley adds, which is a common cause of heel pain.

<br>Standing in front of a wall, put one foot forward so your heel is on the ground and the ball of your foot is against the wall.
<br>Resting your hands on the wall, gently straighten your front leg and lean forward until you feel a deep stretch in your calf.
<br>Switch legs and repeat.</p>
            </div>
        </div>
       
    </section>


    <!-- exercise end -->

    <!-- about start -->
    <h1>About us</h1>
    <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="fitness_images/mypic.jpg" alt="" style="
    height: 80px;
    width: 80px;
    border-radius: 41px;">
                    <span class="ml-3 text-xl">MR. Ravi(Owner)</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">I have created this website for fitness .</p>
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
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
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