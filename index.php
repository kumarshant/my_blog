<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prashant Thinks</title>
    <?php include('./asset/css/styles.php');
     include('./asset/js/script.php') ?>
    
</head>
<body>
    <?php
         include('includes/header.php');
     
        if(isset($_GET['signup'])){
         include('./signup.php');
        }
        else if(isset($_GET['login'])){
            include('./login.php');
        }
        else{
         
        }
     ?><br><br>
       <div class="about">
          <h2>About This Blog</h2><hr>
           <p>Welcome to my corner of the internet, where curiosity meets exploration I am a thinker and learner passionate about unraveling the complexities of the world through the lenses of <strong>economics</strong>, <strong>physics</strong>, <strong>computer science</strong>, <strong>politics</strong>, and <strong>philosophy</strong>.</p>
            <p>This blog is a space to share my thoughts, analyses, and reflections on topics that shape our understanding of the universe and society. From the mechanics of markets to the mysteries of quantum physics, from coding challenges to the ethics of governance, I aim to spark meaningful conversations and offer fresh perspectives.</p>
            <p>Whether you’re here to dive into a technical breakdown, ponder a philosophical question, or explore the intersections of these fields, I hope you find something that inspires or challenges you. Join me in this journey of ideas—read, reflect, and feel free to share your thoughts in the comments!
          </p>
       </div>
     <style>
        body{
        background-color:rgb(252, 242, 195);
        }
        .navbar.navbar-expand-lg.navbar-light.bg-light {
        height: 70px;
        border-bottom: 2px solid transparent;
        margin: 3px;
        }
        .container{
           border: 2px solid rgb(170, 148, 52);
           border-radius:5px;
           padding:5px;
        }
        .header-h1{
            text-align:center;
            color:#e69119
        }
        .about{
            margin:10px;
        }
        
     </style>

</body>
</html>