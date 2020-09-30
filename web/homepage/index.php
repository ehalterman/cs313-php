<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elise Halterman Home</title>
    <link href="main.css" rel="stylesheet">
</head>
<body>
   <header>
       <h1>Elise Halterman CSE 341</h1>
       <nav>
           <ul>
               <li id="current"><a href="index.php">Home</a></li>
               <li><a href="assignments.php">Assignments</a></li>
           </ul>
       </nav>
   </header>
   <main>
       <img src="disney.jpg" alt="Family Photo">
       <p>I am currently aching for Disneyland. Although I was just there in November 2020, something about Corona Virus and it not being open has fueled the Disney itch. </p>
       <p>We went to Disney World in April 2019 for the first time! Take your guess, how did I like it?</p>
       <button onclick="world()">Blown Away!<br> Take me back now!</button>
       <button onclick="land()">Meh...<br>Disneyland is better!</button>
       <div>
           <p id="response"></p>
       </div>
       <h2>Countdown to the end of the semester</h2>
       <p>We're hoping to go to Disneyland with our kids as soon as this semester is over!</p>
       <?php
       $today = time();
       $disney = mktime(0,0,0,12,16,2020);
       $countdown = round(($disney - $today)/86400);
       echo "$countdown days until 12/16/2020";
       ?>
   </main>
   <script src="main.js"></script>
</body>
</html>