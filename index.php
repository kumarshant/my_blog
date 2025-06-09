 <?php
 session_start();
 ?>
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
     
        if(isset($_GET['signup']) && empty($_SESSION['user'])){
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
          <p><strong>Hey there, fellow thinker.</strong></p>

            <p>Welcome to my corner of the internet — a raw, unpolished, and evolving space where I share deep (sometimes messy) thoughts on <b>Physics</b>, <b>Technology</b>, <b>Economics</b>, <b>Mathematics</b>, and <b>Politics</b>.</p>

            <p>This blog began as part of my journey to learn web development (yes, PHP — judge me later). But what started as an assignment turned into something more personal: <em>a place to think, write, and connect with curious minds like you</em>.</p>

            <p>If you're a developer, a student, or just someone who loves ideas — consider signing up. Not because I’m begging for it. But because <b>real developers respect the grind</b>. And hey, as they say: <em>"Bandar kya jaane adrak ka swaad?"</em></p>

            <p>Now I know what you’re thinking…</p>
            <p><i>"Prashant, why the hell should I sign up for this blog in 2025?"</i></p>

            <p>Valid. Here’s why:
            <ul>
            <li>First of all it's not crappy if you are using php for the first time and within 1 day. It's version 1.0 . </li>
            <li>I believe every one of us is capable of greatness. All those childhood dreams — of becoming an astronaut, a pilot, a changemaker — they’re still possible. The only real limits are the mental barriers we build over time. This blog is my way of breaking those walls — one thought, one post, one idea at a time.</li>

            <li>right now <b>Elon Musk</b> is not allowing me to write full length paragraph on X, he wants money.</li>
            <li>You’ll get to watch the evolution — of a developer, a thinker, a rebel in the making.</li>
            <li>And yes, it’s FREE. Elon isn’t charging you here (yet).</li>
            </ul>
            </p>

            <p>So if you’re really aspirational— <a href="?signup=true"><b>sign up</b></a> and be part of this crazy ride.</p>

            <p>Oh, and follow me here too (because why not?):  
            <a href="https://x.com/_kumarshant">X</a> | <a href="https://www.instagram.com/_prashant0903/">Instagram</a> | <a href="https://www.linkedin.com/in/kumarshant/">LinkedIn</a>  
            </p>

            <p><b>Final promise:</b><br>
            You may forget a lot of names on the internet.<br>
            <b>Mine won’t be one of them.</b></p>
            
          <div class="comments">
    <form method="POST" action="/blog_app/handler/comment_handler.php">
        <div class="mb-3 text-area">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Comments</b></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="comments" placeholder="Put your comments here" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn bb submit">Submit</button>
    </form>
</div>
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
        .comments{
            margin-bottom:50px;
            padding:0px;
        }
        .submit{
            padding-top:0px;
            padding-left:0px;
        }
        .text-area,.mb-3{
            margin-bottom:0px;
        }
        
     </style>

</body>
</html>