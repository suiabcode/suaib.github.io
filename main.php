<<<<<<< HEAD


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Focus Study</title>
</head>
<body>
  <header>
    <h1>Focus Study</h1>
</header>
<?php
   include("navbar.php");
?>
<!-- <nav>
    <a href="#">Home</a>
    <a href="#">College Reviews</a>
    <a href="#">Courses</a>
    <a href="#">Study Materials</a>
    <a href="login_singup.html">Login/SignUp</a>
    <div id="contect" ><a href="contect_us.html"> Contect us</a></div>
</nav> -->
<main>
    <section>
        <h2>Courses</h2>
        <video src="video/electrochemistry.mp4" width="33%" poster="img/electrochemistry.jpg" controls></video>
        <video src="video/html.m4v" width="33%" poster="img/webdev.png" controls></video>
        <video src="video/maths.mp4" width="33%" poster="img/maths.jpg" controls></video>
        <br>
        <br>
        <br>
        <video src="video/Electrochemistry Lecture 3.mp4" width="33%" poster="img/electrochemistry l3.jpg" controls></video>
        <video src="video/cpp.mp4" width="33%" poster="img/cpp.jpg" controls></video>
        <video src="video/maths2.mp4" width="33%" poster="img/maths2.jpg" controls></video>
    </section>
    <section>
        <h2>College Reviews</h2>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/FXHh7m7LXcg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/eKES72hU6Mk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/Nl02hCFYNtQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <section>
        <h2>Study Material</h2>
        <a target="_blank" href="notes/5_6134017088932545836.pdf"><img src="notes/27hMN5RrtXtXo1ESgjVBd0nBJqodOkoRwIww3kDxs78YnKJ5tfj9usxxe3P6cq5yLRXrULq26I21W26OmaXijXSZtS4x4pAYDH2SOqdssXL0qTni9Km59JQEyh85Vo1S3t0ooTVqXwVQq6mZmoVAWIA34ABJ7FnQqVMIqoOCKqjHDAGJ305vS4a0WmBiRHxIxNuBCJBEaQRAQiKRMhEUiAkJMiQEIQgEIQgTGAkARxKACMICSIABGAgBGAgAEnEBGAgeW8tukULuIyQyngykYIPrmvt2RkUoQUxhccBjdj0jGMeabrE4Ry8o3" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545837.pdf"><img src="Notes/Solid State New Complete Chapter Notes-01.jpg" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545838.pdf"><img src="Notes/Electrochemistry  Complete NCERT-01.jpg" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545839.pdf"><img src="Notes/Coordination Compound 3-page-001 (1).jpg" alt="" width="24%" height="60%"></a>
    </section>
    <section>
        <h2>
            Our Founder
        </h2>
        <img src="data:image/jpeg;base64,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" alt="This is Suiab saifi ">
        <h3>Suiab saifi</h3>
        <a href="http://www.youtube.com/amandhattarwal" target="_blank" rel="noopener noreferrer">YouTube</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://www.linkedin.com/in/dhattarwalaman" target="_blank" rel="noopener noreferrer">LinkedIn</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://www.instagram.com/dhattarwalaman" target="_blank" rel="noopener noreferrer">Instagram</a>

        <h4>Young TEDx speaker and #1 Online JEE Educator | Founder of 5 YouTube Channels with 2.5 million young hustlers. </h4>
        <h5>I help students across India find their right career path. I have been a guest speaker at 22 Colleges including Top IITs, BITS Pilani, IIIT's, NIT's, SRCC, Jadavpur University etc. I am the #1 Educator of JEE on India's biggest online platform
            and I believe that everyone has the right to quality education and with the help of my social media platforms, I have helped millions of students find their path to success in the last 5 years. In the next few decades, India will rise
            as the leader of the world with the maximum young workforce, but for this, we need some good pilots who can take us through this. I help these young hustlers find their true potential so that they can fly us to victory.</h5>
    </section>
</main>

<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Refund Policy</a>
    <a href="#">&copy; 2020 | Focus study</a>
</footer>


</body>
</html>

=======


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Focus Study</title>
</head>
<body>
  <header>
    <h1>Focus Study</h1>
</header>
<?php
   include("navbar.php");
?>
<!-- <nav>
    <a href="#">Home</a>
    <a href="#">College Reviews</a>
    <a href="#">Courses</a>
    <a href="#">Study Materials</a>
    <a href="login_singup.html">Login/SignUp</a>
    <div id="contect" ><a href="contect_us.html"> Contect us</a></div>
</nav> -->
<main>
    <section>
        <h2>Courses</h2>
        <video src="video/electrochemistry.mp4" width="33%" poster="img/electrochemistry.jpg" controls></video>
        <video src="video/html.m4v" width="33%" poster="img/webdev.png" controls></video>
        <video src="video/maths.mp4" width="33%" poster="img/maths.jpg" controls></video>
        <br>
        <br>
        <br>
        <video src="video/Electrochemistry Lecture 3.mp4" width="33%" poster="img/electrochemistry l3.jpg" controls></video>
        <video src="video/cpp.mp4" width="33%" poster="img/cpp.jpg" controls></video>
        <video src="video/maths2.mp4" width="33%" poster="img/maths2.jpg" controls></video>
    </section>
    <section>
        <h2>College Reviews</h2>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/FXHh7m7LXcg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/eKES72hU6Mk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="33%" height="75%" src="https://www.youtube.com/embed/Nl02hCFYNtQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <section>
        <h2>Study Material</h2>
        <a target="_blank" href="notes/5_6134017088932545836.pdf"><img src="notes/27hMN5RrtXtXo1ESgjVBd0nBJqodOkoRwIww3kDxs78YnKJ5tfj9usxxe3P6cq5yLRXrULq26I21W26OmaXijXSZtS4x4pAYDH2SOqdssXL0qTni9Km59JQEyh85Vo1S3t0ooTVqXwVQq6mZmoVAWIA34ABJ7FnQqVMIqoOCKqjHDAGJ305vS4a0WmBiRHxIxNuBCJBEaQRAQiKRMhEUiAkJMiQEIQgEIQgTGAkARxKACMICSIABGAgBGAgAEnEBGAgeW8tukULuIyQyngykYIPrmvt2RkUoQUxhccBjdj0jGMeabrE4Ry8o3" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545837.pdf"><img src="Notes/Solid State New Complete Chapter Notes-01.jpg" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545838.pdf"><img src="Notes/Electrochemistry  Complete NCERT-01.jpg" alt="" width="24%" height="60%"></a>
        <a target="_blank" href="notes/5_6134017088932545839.pdf"><img src="Notes/Coordination Compound 3-page-001 (1).jpg" alt="" width="24%" height="60%"></a>
    </section>
    <section>
        <h2>
            Our Founder
        </h2>
        <img src="data:image/jpeg;base64,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" alt="This is Suiab saifi ">
        <h3>Suiab saifi</h3>
        <a href="http://www.youtube.com/amandhattarwal" target="_blank" rel="noopener noreferrer">YouTube</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://www.linkedin.com/in/dhattarwalaman" target="_blank" rel="noopener noreferrer">LinkedIn</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="http://www.instagram.com/dhattarwalaman" target="_blank" rel="noopener noreferrer">Instagram</a>

        <h4>Young TEDx speaker and #1 Online JEE Educator | Founder of 5 YouTube Channels with 2.5 million young hustlers. </h4>
        <h5>I help students across India find their right career path. I have been a guest speaker at 22 Colleges including Top IITs, BITS Pilani, IIIT's, NIT's, SRCC, Jadavpur University etc. I am the #1 Educator of JEE on India's biggest online platform
            and I believe that everyone has the right to quality education and with the help of my social media platforms, I have helped millions of students find their path to success in the last 5 years. In the next few decades, India will rise
            as the leader of the world with the maximum young workforce, but for this, we need some good pilots who can take us through this. I help these young hustlers find their true potential so that they can fly us to victory.</h5>
    </section>
</main>

<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Refund Policy</a>
    <a href="#">&copy; 2020 | Focus study</a>
</footer>


</body>
</html>

>>>>>>> 7ad374bb8c40d062f8d2281cc6e4f4cd0d118f49
