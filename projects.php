<?php
$title = "My Projects";
include "header.php";
?>

    <section class="sub-section-alternative" id="projects">
      <h1>My Projects</h1>
      <div class="project-container">
        <div class="project-card">
          <img
            class="project-image"
            src="src/images/Project1.jpg"
            alt="Project-1 Image"
          />
          <h3>Intelligent-Web</h3>
          <p class="subtext">
            This was one of my first projects at University.</br>
            We developed a Site on Google Sites.</br>
            It gives some insight on Web 3.0 </br>
            It also provides a guide on how to use the WIKI and Slack. </br> 
          </p>
          <hr />
          <p class="subtext">
            <a
              class="project-link"
              target="_blank"
              href="https://sites.google.com/view/intelligent-web/"
            >
              View Here
            </a>
          </p>
        </div>
        <div class="project-card">
          <img
            class="project-image"
            src="src/images/Project_2.png"
            alt="Project-2 Image"
          />
         <h3>My Portfolio Website</h3>
          <p class="subtext">
            This is the Website you are currently browsing.</br> 
            I have used PHP, HTML and CSS on this site.  </br>
            This showcases my journey in Web development.</br>
          </p>
          <hr />
          <p class="subtext">
            <a
              class="project-link"
              target="_blank"
              href="https://github.com/angel-pandey/Portfolio"
              >View the repository here</a
            >
            <a
              class="project-link"
              target="_blank"
              href="https://angelpandey.com.np"
              >View the Live site here</a
            >
          </p>
        </div>
     <!-- <div class="project-card">
          <img src="project-image" alt="Project-3 Image" />
          <h3>Project Three</h3>
          <p class="subtext">
            This is my project and some text about it. I enjoyed making this
            project.
          </p>
          <hr />
          <p class="subtext">View Here</p>
        </div>
        <div class="project-card">
          <img src="project-image" alt="Project-4 Image" />
          <h3>Project Four</h3>
          <p class="subtext">
            This is my project and some text about it. I enjoyed making this
            project.
          </p>
          <hr />
          <p class="subtext">View Here</p>
        </div> -->
</div>
</section>
        <?php
include "footer.php";
?>