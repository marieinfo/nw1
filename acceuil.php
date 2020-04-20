<?php  
include('menubar.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EPH</title>
     <!--   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
        
       
        <link rel="shortcut icon" type="image/x-icon" href="image/logof.png" sizes="16x16 32x32" /> 
    -->
    </head>
    <style>
        *{
            color :#383762;
            transition: 1s;

        }
        .landing{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(150deg, #66becc, #97dae9);
            overflow: hidden;
        }


        /* *******************  */
        /* start slider css */ 
        .sliderland{
            width: 100%;
            height: 100%;
        }
        #slider-wrapper {
  /*width: 940px;
  height: 470px;*/
  width: 100%;
  height: 100%;
  /*margin: 50px auto;*/
  position: relative;
  margin-bottom: 0px;
  background: rgba(0, 0, 0, 0.5);
  overflow: hidden;
}

#s1 {
  padding: 6px;
  background: #fff;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s2 {
  padding: 6px;
  background: #fff;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s3 {
  padding: 6px;
  background: #ffffff;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s4 {
  padding: 6px;
  background: #ffffff;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}
#s1,#s2,#s3,#s4{
  bottom: 120px;
}

#s1:hover,
#s2:hover,
#s3:hover,
#s4:hover {
  opacity: .50;
}

.inner-wrapper {
  /*width: 940px;
  height: 470px;*/
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  margin-bottom: 0px;
  overflow: hidden;
}

.control {
  display: none;
}

#Slide1:checked ~ .overflow-wrapper {
  margin-left: 0%;
}

#Slide2:checked ~ .overflow-wrapper {
  margin-left: -100%;
}

#Slide3:checked ~ .overflow-wrapper {
  margin-left: -200%;
}

#Slide4:checked ~ .overflow-wrapper {
  margin-left: -300%;
}

#Slide1:checked + #s1 {
  opacity: 1;
}

#Slide2:checked + #s2 {
  opacity: 1;
}

#Slide3:checked + #s3 {
  opacity: 1;
}

#Slide4:checked + #s4 {
  opacity: 1;
}

.overflow-wrapper {
  width: 400%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  overflow-y: hidden;
  z-index: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.slide img {
  width: 25%;
  height : 100%;
  float: left;
}
/* ************ start animation *******************/
.slide .animation {
    
    position: absolute;
    top: 30%;
    left: 100px;
    color: #fff;
    font-family: Montserrat;
    text-transform: capitalize;
    letter-spacing: 1.5;
    text-align: center;
  
    
}
.animation span{
  text-transform: uppercase;
  display: block;
}
.text1{
  color: white;
  font-size: 48px;
  /*font-weight: 700;*/
  letter-spacing: 1px;
  margin-bottom: 10px;
  position: relative;
  animation: text 3s 1;
}
.text2{
    opacity: 1;
  font-size: 30px;
  color: #eff1ee;
  animation: text2 3s 1;
  
}

@keyframes text {
  0%{
    margin-bottom: -40px;
  }
  30%{
    letter-spacing: 20px;
    margin-bottom: -40px;
  }
  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
}

@keyframes text2{
    0%{
        opacity : 0;
       
    }
    100%{
        opacity: 1;
    }
}


/**************  start search box****************/
.search-bar{
  width: 100%;
 
  height :20vh;
}
.search-bar .container{
  height: 100%;
}

.container .box{
  height: 100%;
    width: 100%;
    background: #31609f;
    margin-top: -50px;
    z-index: 1000 !important;
    position: relative;
    border-radius: 3px;
}
.box h3{
  color : #fff;
  padding: 10px 40px;
    text-transform: capitalize;
}
.fil{
  width: 20vw;
    padding-top: 30px;
}
.box .bts{
  position: absolute;
  background-color: #4cb8e0;
  right: 30px;
  padding-left: 10px;
  transition: 1s;
}
.bts i {
  color: white;
  outline: none;
  cursor: pointer;
  transition: 1s;
}
.bts:hover{
  background-color:white ;
    color:#4cb8e0;
}
.bts:hover #search,.bts:hover i{
  background-color:white ;
    color:#4cb8e0;
}
.box #search{
  
  transition: 1s;
    /* margin-top: -48px; */
    /* margin-right: 50px; */
    /* margin-right: 50px; */
    border: none;
    padding: .6rem 1.5rem;
    text-transform: capitalize;
    background-color: #4cb8e0;
    color:white;
    font-family : Montserrat;
    outline: none;


}





/**** select box */
.select-box {
  display: flex;
  width: 400px;
  flex-direction: column;
  margin-left: 40px;
  position : absolute;
}

.select-box .options-container {
  background: #fff;
  color: #383762;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 0.4s;
  border-radius: 3px;
  overflow: hidden;

  order: 1;
}

.selected {
  background: #fff;
  border-radius: 3px;
  margin-bottom: 8px;
  color: #383762;
  position: relative;

  order: 0;
}

.selected::after {
  content: "";
  background: url("img/arrow-down.svg");
  background-size: contain;
  background-repeat: no-repeat;

  position: absolute;
  height: 100%;
  width: 32px;
  right: 10px;
  top: 5px;

  transition: all 0.4s;
}

.select-box .options-container.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box .options-container.active + .selected::after {
  transform: rotateX(180deg);
  top: -6px;
}

.select-box .options-container::-webkit-scrollbar {
  width: 8px;
  background: #fff;
  border-radius: 0 8px 8px 0;
}

.select-box .options-container::-webkit-scrollbar-thumb {
  background: #525861;
  border-radius: 0 8px 8px 0;
}

.select-box .option,
.selected {
  padding: 12px 24px;
  cursor: pointer;
}

.select-box .option:hover {
  background: #5897fb;
}

.select-box label {
  cursor: pointer;
}

.select-box .option .radio {
  display: none;
}

/*************************************/
/* start departt ************/
.depart{
  width: 100%;
  height: 300px;
  /*background: #31609f;*/
  margin-top: 20px;
}
.depart h3{
  color: #3262a1;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom: 15px;
    position: relative;
}
.depart h3::before{
    content: "";
    width: 57px;
    height: 3px;
    background: #3262a1;
    position: absolute;
    top: 50%;
    left: -122px;

}
/*.depart .container{
  height: 100%;
  
}
.depart .gall{
  height: 100%
  
}

.depart .col-4{
  height: 100%;
    overflow: hidden;
    height: 100%;
    overflow: hidden;
    padding: 0;
    margin-right: 30px;
    max-width: 30%;
    
}*/
.col-4{
  overflow: hidden;
}
.col-4:hover img{
  cursor: pointer;
  transform :scale(1.1);
}
.grow{
  height: 100%;
  width: 100%;
  overflow: hidden;
  position: relative;
  
}
.grow img{
  height: 100%;
  width: 100%;
}
.grow .text{
  position : absolute;
  left: 20px;
  bottom: 15px;
  text-transform:uppercase;
  
}
.text h4,.text p{
  color: #fff;
  font-weight: 500;
  font-family: montserrat;
  opacity: 0;
  transform : translateY(-16px);
}
.col-4:hover .text h4,.col-4:hover  .text p{
  opacity: 1;
  transform : translateY(0px);
}



/************* end **********/

/**** start tobe */
.tobe{
  height: 200px;
  width: 100%;
  background: #eee;
  margin-top: 60px;
}
.tobe h3{
  text-transform: uppercase;

}





        
    </style>
    <body>

        <div  class="landing">


        <!-- start nav bar -->
          <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end mr-5 " id="navbarNavDropdown">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>

            </div>

          </nav>

          <!-- end nav bar -->

          <!--  start landing-->
          

          <div class="sliderland">



            <div id="slider-wrapper">
                <div class="inner-wrapper">
                  <input checked type="radio" name="slide" class="control" id="Slide1" />
                  <label for="Slide1" id="s1"></label>
                  <input type="radio" name="slide" class="control" id="Slide2" />
                  <label for="Slide2" id="s2"></label>
                  <input type="radio" name="slide" class="control" id="Slide3" />
                  <label for="Slide3" id="s3"></label>
                  <input type="radio" name="slide" class="control" id="Slide4" />
                  <label for="Slide4" id="s4"></label>
                  <div class="overflow-wrapper">
                    <a class="slide" >
                        <!-- text animation****************************-->
                        <div class="animation">
                            <span class="text1">bringing health </span>
                            <span class="text2">it's life</span>

                      
                        </div>
                          <!--end text animation******************************-->
                        <img src="image/image61.jpg" />
                    </a>
                    <a class="image/slide" ><img src="image/image73-1.jpg" /></a>
                    <a class="slide" href=""><img src="image/toph1.jpg" /></a>
                    <a class="slide" href=""><img src="image/blocop.jpg" /></a>
                  </div>
                </div>
              </div>

          </div>
              




          



        </div>
          <!-- end landig-->


          <div class="search-bar">
              <div class="container">
                <div class="box">
                  <h3>i need to find</h3>
                  <!---  start filter box departement-->
                  <div class="select-box">
                    <div class="options-container">
          
            
                      <div class="option">
                        <input type="radio" class="radio" id="film" name="category" />
                        <label for="film">Film & Animation</label>
                      </div>
            
                      <div class="option">
                        <input type="radio" class="radio" id="science" name="category" />
                        <label for="science">Science & Technology</label>
                      </div>
            
                      <div class="option">
                        <input type="radio" class="radio" id="art" name="category" />
                        <label for="art">Art</label>
                      </div>
            
                
                    </div>
            
                    <div class="selected">
                      Select Video Category
                    </div>
                  </div>
                  
                <!---  end filter box departement-->
                <div class="bts">
                  <i class="fas fa-search"></i>
                  <input type="submit" value="search" id="search">
                  
                </div>
                  
               
              

                </div>

              </div>
          </div>


          <!--end search engine \(o-o)/-->
          <!--/////////////////////////////////////////////////////-->
          <!--start departement image-->
          <div class="depart">

            <div class="container gallery-container">
              <h3>DEPARTMENTS</h3>
              <div class="row gall mb-3">
                <div class="col-4 ">
                  <div class="grow">
                    <img src="image/ok1.jpg">

                        <div class="text">
                          <h4>orthopedics</h4>
                          <p>thearapy</p>
                        </div>
                        
                  </div>
                  
                </div>
                <div class="col-4">
                  <div class="grow">
                    <img src="image/ok1.jpg">

                        <div class="text">
                          <h4>orthopedics</h4>
                          <p>thearapy</p>
                        </div>
                        
                  </div>
                </div>
                <div class="col-4 ">
                  <div class="grow">
                    <img src="image/ok1.jpg">

                        <div class="text">
                          <h4>ortopedics</h4>
                          <p>thearapy</p>
                        </div>
                        
                  </div>
                </div>

              </div>
            </div>

            </div>

            <!--end departement image-->

            <div class="tobe">
              <h3>to be continue</h3>

            </div>



         


    




         
       <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        -->
       <script>
         const selected = document.querySelector(".selected");
          const optionsContainer = document.querySelector(".options-container");

            const optionsList = document.querySelectorAll(".option");

          selected.addEventListener("click", () => {
            optionsContainer.classList.toggle("active");
          });

          optionsList.forEach(o => {
            o.addEventListener("click", () => {
              selected.innerHTML = o.querySelector("label").innerHTML;
              optionsContainer.classList.remove("active");
            });
          });
       </script>

        </div>           
        <?php  
include('footer.php');

?>

    </body>

</html>