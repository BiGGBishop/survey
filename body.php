<style>
img {
  width: 100%;
  height: 10%;
  object-fit: cover;
  opacity: 0.5;
}

.container{
  display: grid;
  grid-template-areas: "overflow-content";
}

.hero_image{
  grid-area: overflow-content;
}


.hero_text{
  grid-area: overflow-content;
  color: black;
  margin: 0% auto 0% auto;
  text-align:center;
}
</style>
<div class="container" >
  <div class="hero_image style="background: linear-gradient(to top, #3204fdba, #9907facc), url(img/logo.png) no-repeat top center;">
    <img src="img/logo.png">
  </div>
  <div class="hero_text"> 
    <h3>THROUGH THE USE OF ADVANCED TECHNOLOGY, OUR STUDENTS ARE MAKING THE DIFFERENCE IN ALL FIELDS OF STUDY</h3>
  </div>
</div>