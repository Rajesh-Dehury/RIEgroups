<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hexaphore</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="slim.js"></script>
	<script src="main.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
	
	
	
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">    
    
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/custom.css">
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	
	
	
<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.nav-height{
   height: 100px;
}
.margincls{
   margin-top: 6%;
   height: 50%;
}
.go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background-color: #00838d;
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #00838d;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
  }

  &:hover:before {
    transform: scale(21);
  }
}

.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
}

.card2 {
  display: block;
  top: 0px;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
  border: 1px solid #f2f8f9;

  &:hover {
    transition: all 0.2s ease-out;
    box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
    top: -4px;
    border: 1px solid #cccccc;
    background-color: white;
  }

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #00838d;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(2);
    transform-origin: 50% 50%;
    transition: transform 0.15s ease-out;
  }

  &:hover:before {
    transform: scale(2.15);
  }
}

.card3 {
  display: block;
  top: 0px;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  overflow: hidden;
  border: 1px solid #f2f8f9;
  
  .go-corner {
    opacity: 0.7;
  }

  &:hover {
    border: 1px solid #00838d;
    box-shadow: 0px 0px 999px 999px rgba(255, 255, 255, 0.5);
    z-index: 500;
  }
}

.card3:hover {
  p{color: #00838d}
  .go-corner {
    transition: opactiy 0.3s linear;
    opacity: 1;
  }
}
#container{
  box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
  background: rgba(255, 255, 255, 0.90);
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  margin: 5em auto;
  height: 300px;
  width: 400px;
  
}
.pinsize{
   width: 20px;
}
.txttrns{
   transform: translate(15%,-140%);
}
.ptags{
  margin-top: -7%;
  margin-right: -30%;
}
.txttrns2{
  transform: translate(15%,-140%); 
}
.trnsph{
   transform: translate(15%,-140%);
}
.containerOrbit {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact-txt input[type="text"],
#contact-txt input[type="email"],
#contact-txt input[type="tel"],
#contact-txt input[type="url"],
#contact-txt textarea,
#contact-txt button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact-txt {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact-txt {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact-txt {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact-txt input[type="text"],
#contact-txt input[type="email"],
#contact-txt input[type="tel"],
#contact-txt input[type="url"],
#contact-txt textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact-txt input[type="text"]:hover,
#contact-txt input[type="email"]:hover,
#contact-txt input[type="tel"]:hover,
#contact-txt input[type="url"]:hover,
#contact-txt textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact-txt textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact-txt button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact-txt button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact-txt button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}



#contact-txt input:focus,
#contact-txt textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
@media (max-width: 1200px) {
   .mapview{
      width: 100px
	  height: 100px;
} 
.mainImages{
   width: 50px;
}
}
.mapview{
   width: 100%;
   height:200%;
}


body {
  font-family: Lato, sans-serif;
  --col-deepblue: #4478e3;
 
}
svg {
  width:100%;
  overflow:visible;
}

.wave {
  animation: wave 3s linear;
  animation-iteration-count:infinite;
  fill: #4478e3;
}
.drop {
  fill: var(--col-deepblue);
  xfill: #99000055;
  animation: drop 3.2s linear infinite normal;
  stroke: var(--col-deepblue);
  stroke-width:0.5;
  transform: translateY(25px) ;
  transform-box: fill-box;
  transform-origin: 50% 100%;
}
.drop1 {
  
}
.drop2 {
  animation-delay: 3s;
  animation-duration:3s;
}
.drop3 {
  animation-delay: -2s;
  animation-duration:3.4s;
}
.drop4 {
  animation-delay: 1.7s;
}
.drop5 {
  animation-delay: 2.7s;
  animation-duration:3.1s;
}
.drop6 {
  animation-delay: -2.1s;
  animation-duration:3.2s;
}
.gooeff {
    filter: url(#goo);
}
#wave2 {
  animation-duration:5s;
  animation-direction: reverse;
  opacity: .6
}
#wave3 {
  animation-duration: 7s;
  opacity:.3;
}
@keyframes drop {
  0% {
    transform: translateY(25px); 
  }
  30% {
    transform: translateY(-10px) scale(.1);
  }
  30.001% {
    transform: translateY(25px) scale(1); 
  }
  70% {
    transform: translateY(25px); 
  }
  100% { 
    transform: translateY(-10px) scale(.1);  
  }
}
@keyframes wave {
  to {transform: translateX(-100%);}
}


.rswcard{
  margin-top: -8%;
}
.our-team-member {
  padding: 30px 0 40px;
  margin-bottom: 30px;
  background-color: #f7f5ec;
  text-align: center;
  overflow: hidden;
  position: relative;
  width: 300px;
}

.our-team-member .my-pic-m {
  display: inline-block;
  height: 130px;
  width: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}

.our-team-member .my-pic-m::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.9;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}

.our-team-member:hover .my-pic-m::before {
  height: 100%;
}

.our-team-member .my-pic-m::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #1369ce;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.our-team-member .my-pic-m img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}

.our-team-member:hover .my-pic-m img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}

.our-team-member .title {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}

.our-team-member .social_text {
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: #1369ce;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}

.our-team-member:hover .social_text {
  bottom: 0;
}

.our-team-member .social_text li {
  display: inline-block;
}

.our-team-member .social_text li a {
  display: block;
  padding: 10px;
  font-size: 17px;
  color: white;
  transition: all 0.3s ease 0s;
  text-decoration: none;
}
.our-team-member .social_text li a:hover {
  color: #1369ce;
  background-color: #f7f5ec;
}
.container_sys1{
   display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 4px 16px;
  
}
#slide-left-container-xfactor,
#slide-right-container-x {
  display: none;
}

#slide-left-container-xfactor.active,
#slide-right-container-x.active {
  display: block;
  cursor: pointer;
}
.slide-left-xfactor {
  border-width: 4px 0 0 4px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  margin-left: 40%;
}
.slide-left-xfactor,
.slide-right-x {
  border-color: black;
  border-style: solid;
  height: 20px;
  width: 20px;
  margin-top: 30%;
}
.slide-right-x {
  border-width: 4px 4px 0 0;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  margin-left: 22%;
}
#cards-container-xfactor {
  overflow: hidden;
  margin: 20px;
}
.introcards_factor {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 99999px;
}
.card-plus-minus {
  
  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background: #fff;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  width: 235px;
  margin: 15px 7.5px;
}

.card-plus-minus:hover {
  -webkit-box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.card-plus-minus .img {
  max-width: 220px;
  height: 220px;
  display: inline-block;
}
.mypopup {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 300px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}
.popup-content {
  background: linear-gradient(#141e30, #243b55);
  margin: auto;
  margin-top: -8%;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  height:500px;
  border-radius: 8px;
  box-shadow: 0 0 20px black;
}
.popclose {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose:hover,
.popclose:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose1 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose1:hover,
.popclose1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose2 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose2:hover,
.popclose2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose3 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose3:hover,
.popclose3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose4 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose4:hover,
.popclose4:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose5 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose5:hover,
.popclose5:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose6 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose6:hover,
.popclose6:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose7 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose7:hover,
.popclose7:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose8 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose8:hover,
.popclose8:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.popclose9 {
  color: #aaaaaa;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.popclose9:hover,
.popclose9:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.div-txt {
     display: block;
     position: relative;
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box
 }

 .bbb_viewed {
     padding-top: 51px;
     padding-bottom: 60px;
     background: #eff6fa
 }

 .bbb_main_container {
     background-color: #fff;
     padding: 11px
 }

 .bbb_viewed_title_container {
     border-bottom: solid 1px #dadada
 }

 .bbb_viewed_title {
     margin-bottom: 16px;
     margin-top: 8px
 }

 .bbb_viewed_nav_container {
     position: absolute;
     right: -5px;
     bottom: 14px
 }

 .bbb_viewed_nav {
     display: inline-block;
     cursor: pointer
 }

 .bbb_viewed_nav i {
     color: #dadada;
     font-size: 18px;
     padding: 5px;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_nav:hover i {
     color: #606264
 }

 .bbb_viewed_prev {
     margin-right: 15px
 }

 .bbb_viewed_slider_container {
     padding-top: 13px
 }

 .bbb_viewed_item {
     width: 100%;
     background: #FFFFFF;
     border-radius: 2px;
     padding-top: 25px;
     padding-bottom: 25px;
     padding-left: 30px;
     padding-right: 30px
 }

 .bbb_viewed_image {
     width: 150px;
     height: 150px
 }

 .bbb_viewed_image img {
     display: block;
     max-width: 100%
 }

 .bbb_viewed_content {
     width: 100%;
     margin-top: 25px
 }

 .bbb_viewed_price {
     font-size: 16px;
     color: #000000;
     font-weight: 500
 }

 .bbb_viewed_item.discount .bbb_viewed_price {
     color: #df3b3b
 }

 .bbb_viewed_price span {
     position: relative;
     font-size: 12px;
     font-weight: 400;
     color: rgba(0, 0, 0, 0.6);
     margin-left: 8px
 }

 .bbb_viewed_price span::after {
     display: block;
     position: absolute;
     top: 6px;
     left: -2px;
     width: calc(100% + 4px);
     height: 1px;
     background: #8d8d8d;
     content: ''
 }

 .bbb_viewed_name {
     margin-top: 3px
 }

 .bbb_viewed_name a {
     font-size: 14px;
     color: #000000;
     -webkit-transition: all 200ms ease;
     -moz-transition: all 200ms ease;
     -ms-transition: all 200ms ease;
     -o-transition: all 200ms ease;
     transition: all 200ms ease
 }

 .bbb_viewed_name a:hover {
     color: #0e8ce4
 }

 .item_marks {
     position: absolute;
     top: 18px;
     left: 18px
 }

 .item_mark {
     display: none;
     width: 36px;
     height: 36px;
     border-radius: 50%;
     color: #FFFFFF;
     font-size: 10px;
     font-weight: 500;
     line-height: 36px;
     text-align: center
 }

 .item_discount {
     background: #df3b3b;
     margin-right: 5px
 }

 .item_new {
     background: #0e8ce4
 }

 .bbb_viewed_item.discount .item_discount {
     display: inline-block
 }

 .bbb_viewed_item.is_new .item_new {
     display: inline-block
 }
.mainImages{
   width: 500px;
   margin-top: 30%;
}

.card-0 {
    color: #fff;
    background-color: #536DFE;
    position: relative;
    margin-left: 70px;
    border-radius: 10px;
    min-height: 312px
}

.carousel-indicators li {
    cursor: pointer;
    border-radius: 50% !important;
    width: 10px;
    height: 10px
}
.profile {
    color: #000;
    background-color: #FFD54F;
    position: absolute;
    left: -70px;
    top: 17%;
    border-radius: 8px;
    border-top-left-radius: 0px;
    border-bottom-right-radius: 0px
}

.profile-pic {
    width: 120px;
    height: 120px;
    border-bottom-left-radius: 10px;
    border-top-right-radius: 10px
}

.open-quotes {
    margin-left: 130px;
    margin-top: 100px
}

.content {
    margin-left: 150px;
    margin-right: 80px
}

.close-quotes {
    margin-bottom: 100px;
    margin-right: 60px
}

@media screen and (max-width: 600px) {
    .card-main {
        padding: 50px 10px
    }

    .card-0 {
        min-height: 432px
    }

    .profile {
        top: 24%
    }

    .profile-pic {
        width: 90px;
        height: 90px
    }

    .open-quotes {
        margin-left: 100px
    }

    .content {
        margin-left: 120px;
        margin-right: 50px
    }

    .close-quotes {
        margin-right: 30px
    }
}
.trnsCont{
   margin-top: -20%;
}
.trnsProfile{
     transform: translate(40%,0%);
}
.button {
  background-color: #6666ff;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
.button5 {border-radius: 50%;}
.myfas{
  font-size: 25px;
}
.tmoffice{
  transform: translate(12%,-150%);
}
.adOffice{
    transform: translate(13%,-100%);
	color: black;
}
.phoffice{
   transform: translate(12%,-130%);
}
.emailOffice{
   transform: translate(13%,-130%);
}







.footer-area {
  width: 100%;
  background-size: cover;
  font-family: raleway;
  background: #2D2C2C;
  color: white;  
}
.footer-copyright-pannel {
    background: #2D2C2C;
    text-align: center;
}
.footer-copyright-pannel p {
    margin: 0;
    padding: 16px 0;
    font-size: 15px;
    font-weight: 500;
    color: #ffff;
}
.footer-devlp-pannel span a {
     color: #4de4cf;
}
.footer-brand {
	color: #ffff66;
	font-size:35px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}




.icon-button {
	background-color: #ff0000;
	border-radius: 3.6rem;
	cursor: pointer;
	display: inline-block;
	font-size: 2.0rem;
	height: 3.6rem;
	line-height: 3.6rem;
	margin: 0 5px;
	position: relative;
	text-align: center;
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
	width: 3.6rem;
}


.icon-button span {
	border-radius: 0;
	display: block;
	height: 0;
	left: 50%;
	margin: 0;
	position: absolute;
	top: 50%;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 0;
}
.icon-button:hover span {
	width: 3.6rem;
	height: 3.6rem;
	border-radius: 3.6rem;
	margin: -1.8rem;
}
.twitter span {
	background-color: #4099ff;
}
.facebook span {
	background-color: #3B5998;
}
.google-plus span {
	background-color: #ff4d88;
}

.icon-button i {
	background: none;
	color: white;
	height: 3.6rem;
	left: 0;
	line-height: 3.6rem;
	position: absolute;
	top: 0;
	-webkit-transition: all 0.3s;
	   -moz-transition: all 0.3s;
	     -o-transition: all 0.3s;
	        transition: all 0.3s;
	width: 3.6rem;
	z-index: 10;
}
.icon-button .icon-twitter {
	color: #4099ff;
}
.icon-button .icon-facebook {
	color: #3B5998;
}
.icon-button .icon-google-plus {
	color: #ff99bb;
}
.icon-button:hover .icon-twitter,
.icon-button:hover .icon-facebook,
.icon-button:hover .icon-google-plus {
	color: white;
}
.input {
	position:relative;
	font-size: 1.5em;
	padding: 3px;
	display: inline-block;
	border-radius: 10%;
	*:not(span) {
		position: relative;
		display: inherit;
		border-radius: inherit;
		margin: 0;
		border: none;
		outline: none;
		padding: 0 .325em;
		z-index: 1; 
		&:focus + span {
			opacity: 1;
			transform: scale(1);
		}
	}
	span {
		transform: scale(.993, .94); 
		transition: transform .5s, opacity .25s;
		opacity: 0; 
		position:absolute;
		z-index: 0; 
		margin:4px; 
		left:0;
		top:0;
		right:0;
		bottom:0;
		border-radius: inherit;
		pointer-events: none; 
		box-shadow: inset 0 0 0 3px #fff,
			0 0 0 4px #fff,
			3px -3px 30px #1beabd, 
			-3px 3px 30px #10abff;
	}
	
}
.input {
	font-family: inherit;
	line-height:inherit;
	color:#2e3750;
	min-width:12em;
}
::placeholder {
	color:#cbd0d5;
}
.footer-links {
	color: #00ffff;
	font-size: 15px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}
.footer-links1 {
	color: #00ffff;
	font-size: 13px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
	font-weight:700;
	letter-spacing:0.1em;
}
.true{
   color: white;
}
.tag{
   width: 120px;
   height: 70px;
   margin-top: 20%;
}
.posi{
   margin-top: 3%;
}
:root {
  --white: #fff;
  --black: #221f1f;
  --lightpurple: #9e91f2;
}
.brt {
  background: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}
.tr {
  list-style: none;
}
.demot {
  text-decoration: none;
  color: inherit;
}
.tmp{
   color: black;
}
.trigger-menu-wrapper {
  position: fixed;
  top: 0;
  left: -800px;
  right: 0;
  display: flex;
  justify-content: center;
  padding: 20px;
  z-index: 2;
  background: var(--lightpurple);
  transition: transform 0.4s;
}
.page-header .trigger-menu {
  display: flex;
  align-items: center;
  font-size: 1.3rem;
  color: var(--white);
  letter-spacing: .2em;
}

.page-header .trigger-menu svg {
  fill: var(--white);
  margin-right: 8px;
  transition: transform 0.3s;
}

.page-header .menu {
  position: fixed;
  top: 0;
  left: -500px;
  right: 0;
  bottom: 0;
  display: none;
  text-align: center;
  padding: 15vh 0 5vh;
  overflow: auto;
  z-index: 1;
  background: var(--lightpurple);
}

.page-header .menu a {
  font-size: 3rem;
}

.page-header .sub-menu a {
  font-size: 1.5rem;
}

.menu-open {
  overflow: hidden;
}

.menu-open .trigger-menu-wrapper {
  background: transparent;
}

.menu-open .page-header .menu {
  display: block;
}

.menu-open .page-header svg {
  transform: rotate(45deg);
}

.scroll-down .trigger-menu-wrapper {
  transform: translate3d(0, -100%, 0);
}

.scroll-up .trigger-menu-wrapper {
  transform: none;
}

.scroll-up:not(.menu-open) .trigger-menu-wrapper {
  background: var(--lightpurple);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.35);
}
.hedcol{
   color: #b3fff0;
}
.colsp{
    color: #b3fff0;
}
</style>
<body>
<header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="image" style="height: 100Px; width: 200px;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link " href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#product">Products</a></li>
                        <li><a class="nav-link" href="#contactUs">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>	

<header id="home">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
     
      <div class="carousel-item active" style="background-image: url('images/sl7.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4 hedcol"><b>Rroshan India Export Private Limited</b></h2>
          <p class="lead colsp">Bhubaneswar</p>
        </div>
      </div>
     
      <div class="carousel-item" style="background-image: url('images/sl6.jpeg')">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      
      <div class="carousel-item" style="background-image: url('images/sl2.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
	  <div class="carousel-item" style="background-image: url('images/p21.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<div id="about">
<br><br><br><br><br><br>

  <div class="container rswcard">
    <div class="row">
	  <div class="col-sm-12 col-md-4 col-lg-4">
	     <a class="card1" href="#">
    <h3><i class="fa fa-certificate" aria-hidden="true"></i> Certified Products</h3>
    <p class="small">We Are Trusted Our Customers.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
	  </div>
	  <div class="col-sm-12 col-md-4 col-lg-4">
	    <a class="card2" href="#">
    <h3><i class="fa fa-clock-o" aria-hidden="true"></i> 24/7 Supports</h3>
    <p class="small">000 7845 114- 123 4567 890.</p>
    
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
	  </div>
	  <div class="col-sm-12 col-md-4 col-lg-4">
	     <a class="card3" href="#">
    <h3><i class="fa fa-gift" aria-hidden="true"></i> Expert & Professional</h3>
    <p class="small">We Are Trusted Our Customers.</p>
    <div class="dimmer"></div>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
	  </div>
	</div>
	</div>
	
	
	
	
	<div class="container trns">
		<center>   <h2><b><u>About Us</u></b></h2></center>

     <div class="row">
	    <div class="col-sm-12 col-md-6 col-lg-6">
		
		<h2><b>We are here to serve you the Best Quality Products.</b></h2>
			
	   <p>Rroshan India Export Private Limited is a Private incorporated on 15 May 2020. It is classified as Non-govt company and is registered at Registrar of Companies, Cuttack. It is involved in Manufacture of medical appliances and instruments and appliances for measuring, checking, testing, navigating and other purpose except optical instruments.
Rroshan India Export Private Limited’s Annual Generating Meeting(AGM) was last held on N/A and as per records from Ministry of Corporate Affairs(MCA), its balance sheet was last filed on N/A.
Directors of Rroshan India Exprt Private Limited are Rashmita Rautaraya and Ashok Kumar Rout.</p>

<h6><b>Call to ask any question: +91-9937993301</b></h6>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3">
		
		<img src="images/master.jpeg" class="mainImages" alt="Rroshan India Export Private Limited">
		  
		</div>
		
		</div>
		</div>		
</div>
</div>
<div id="product">
   <center><h2><b>......</b></h2></center>
</div>
<br><br>
<div class="container">
 <center> <h2><b><u>Our Products</u></b></h2></center>
 <div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="container_sys1">
    <div id="slide-left-container-xfactor">
      <div class="slide-left-xfactor">
      </div>
    </div>
    <div id="cards-container-xfactor">
      <div class="introcards_factor">
        <div class="card-plus-minus">
          <img src="images/p12.jpeg" alt="Animals" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn">Curry Masala</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p6.jpeg" alt="Nature" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn1">Jeera Powder</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p23.jpeg" alt="Architecture" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn2">Gulap Jamun</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p9.jpeg" alt="Technology" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn3">Veg Masala</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p10.jpeg" alt="People" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn4">Paneer Masala</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p11.jpeg" alt="Animals" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn5">NamKin</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p37.jpeg" alt="Nature" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn6">KetchUp</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p33.jpeg" alt="Architecture" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn7">Papad</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p14.jpeg" alt="Technology" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn8">Pickle</button>
            </h4>
          </div>
        </div>
        <div class="card-plus-minus">
          <img src="images/p21.jpeg" alt="People" style="width:100%">
          <div class="container_sys1">
            <h4>
              <button id="myBtn9">Garam Masala</button>
            </h4>
          </div>
        </div>
      </div>
    </div>

    <div id="slide-right-container-x">
      <div class="slide-right-x">
      </div>
    </div>

  </div>
    </div>
<div class="col-sm-12 col-md-2 col-lg-2"></div>	
 </div>
</div>
<div class="container">
   <div class="row">
     <div class="col-sm-12 col-md-12 col-lg-12">
	    <div class="bbb_viewed div-txt">
    <div class="container div-txt">
        <div class="row div-txt">
            <div class="col div-txt">
                <div class="bbb_main_container div-txt">
                    <div class="bbb_viewed_title_container div-txt">
                        <h3 class="bbb_viewed_title">Best selling products</h3>
                        <div class="bbb_viewed_nav_container div-txt">
                            <div class="bbb_viewed_nav bbb_viewed_prev div-txt"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next div-txt"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="bbb_viewed_slider_container div-txt">
                        <div class="owl-carousel owl-theme bbb_viewed_slider div-txt">
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p1.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
									<div class="bbb_viewed_price div-txt">₹30079</div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">KetchUp Section</a></div>
                                    </div>
                                    <ul class="item_marks div-txt">
                                        <li class="item_mark item_discount div-txt">-25%</li>
                                        <li class="item_mark item_new div-txt">new</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p2.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
                                        <div class="bbb_viewed_price div-txt">₹30079</div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">Samsung LED</a></div>
                                    </div>
                                    <ul class="item_marks div-txt">
                                        <li class="item_mark item_discount div-txt">-25%</li>
                                        <li class="item_mark item_new div-txt">new</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p3.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
                                        <div class="bbb_viewed_price div-txt">₹22250</div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">Samsung Mobile</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount div-txt">-25%</li>
                                        <li class="item_mark item_new div-txt">new</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p4.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
                                        <div class="bbb_viewed_price div-txt">₹1379</div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">Huawei Power</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p5.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
                                        <div class="bbb_viewed_price div-txt">₹225<span>₹300</span></div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">Sony Power</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="owl-item div-txt">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center div-txt">
                                    <div class="bbb_viewed_image div-txt"><img src="images/p19.jpeg" alt="" style ="height: 180px;"></div>
                                    <div class="bbb_viewed_content text-center div-txt">
                                        <div class="bbb_viewed_price div-txt">₹13275</div>
                                        <div class="bbb_viewed_name div-txt"><a href="#">Speedlink Mobile</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	 </div>
   </div>
</div>
<br><br>
<center><h4><b><a href="#">More About Products......</a></b></h4></center>

<center><h2><b>.........</b></h2></center>






<div class="container-fluid px-2 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
            <div class="card card-main border-0 text-center">
                <h5 class="font-weight-bold mb-4">What our clients are saying<br>about us.</h5>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center"> <img src="images/adash.jpeg" class="img-fluid profile-pic"> </div>
                                    <h6 class="mb-0 mt-2">Ashrumochan Dash</h6> <small>Bhubaneswar</small>
                                </div> <img class="img-fluid open-quotes" src="images/coma1.png" width="20" height="20">
                                <p class="content mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <img class="img-fluid close-quotes ml-auto" src="images/coma2.png" width="20" height="20">
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center"> <img src="images/amishra.jpeg" class="img-fluid profile-pic"> </div>
                                    <h6 class="mb-0 mt-2">RD.Ashutosh Mishra</h6> <small>Sambalpur</small>
                                </div> <img class="img-fluid open-quotes" src="images/coma1.png" width="20" height="20">
                                <p class="content mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.</p> <img class="img-fluid close-quotes ml-auto" src="images/coma2.png" width="20" height="20">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 card-0">
                                <div class="card profile py-3 px-4">
                                    <div class="text-center"> <img src="images/pmoharana.jpeg" class="img-fluid profile-pic"> </div>
                                    <h6 class="mb-0 mt-2">Pradipta Moharana</h6> <small>Cuttack</small>
                                </div> <img class="img-fluid open-quotes" src="images/coma1.png" width="20" height="20">
                                <p class="content mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <img class="img-fluid close-quotes ml-auto" src="images/coma2.png" width="20" height="20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container trnsCont">
<center><h3><b><u>Our Team Members</u></b></h3></center>
<div class="row">
  <div class="col-sm-12 col-md-1 col-lg-1"></div>
  
  <div class="col-sm-12 col-md-5 col-lg-5">
  
  <div class="our-team-member trnsProfile">
        <div class="my-pic-m">
          <img src="images/1.png">
        </div>
        <div class="team-content-x">
          <h3>Mr. Ashok Kumar Rout</h3>
          <h4>Director</h4>
        </div>
        <ul class="social_text">
          <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
  
  
</div>  
 
  
  <div class="col-sm-12 col-md-5 col-lg-5">
  
  <div class="our-team-member">
        <div class="my-pic-m">
          <img src="images/2.jpg" style=" height: 130px;">
        </div>
        <div class="team-content-x">
          <h3>Smt. Rasmita Rautaraya</h3>
          <h4>Director</h4>
        </div>
        <ul class="social_text">
          <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
          <li><a href="" class="fa fa-linkedin" aria-hidden="true"></a></li>
        </ul>
      </div>
  
  
</div>  
  
 <div class="col-sm-12 col-md-1 col-lg-1"></div> 
  
</div>

</div>


<div id="contactUs">
   <center><h2><b>......</b></h2></center>
</div>
<br><br>




<div id="mypop" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Curry Masala</b></h1>
	<br><br>
	<img src="images/p12.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop1" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose1">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Curry Masala</b></h1>
	<br><br>
	<img src="images/p6.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop2" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose2">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Gulap Jamun Powder</b></h1>
	<br><br>
	<img src="images/p23.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>

<div id="mypop3" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose3">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Veg Masala</b></h1>
	<br><br>
	<img src="images/p9.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop4" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose4">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Paneer Masala</b></h1>
	<br><br>
	<img src="images/p10.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop5" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose5">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Namkin</b></h1>
	<br><br>
	<img src="images/p11.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop6" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose6">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi KetchUp</b></h1>
	<br><br>
	<img src="images/p37.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop7" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose7">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Papad</b></h1>
	<br><br>
	<img src="images/p33.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop8" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose8">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Pickle</b></h1>
	<br><br>
	<img src="images/p14.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>
<div id="mypop9" class="mypopup">

  
  <div class="popup-content">
    <span class="popclose9">&times;</span>
	<br><br>
    <h1 style="color: white;"><b>Suruchi Garam Masala</b></h1>
	<br><br>
	<img src="images/p21.jpeg" alt="Animals" style="width:100%;height: 350px; margin-top: -5%">
  </div>
</div>

	<div class="banner1">
	  <div class="container">
	<center> <h2><b><u>Contact Us</u></b></h2></center>
	 <div class="row">
	   <div class="col-sm-12 col-md-6 col-lg-6">
	     <h3><b>Come Visit Us At</b></h3>
		 <h1><b><u>Our Address</u></b></h1>
		  <button class="button button5"><i class="fa fa-street-view myfas" aria-hidden="true"></i></button><h3 class="tmoffice"><b>Our Office Address:</b></h3>
		  <p class="adOffice">Plot no 657/6501, Phulnakhara, Dist. khorda,<br> Bhubaneswar, Odisha-754001</p>
		 <hr>
		 <button class="button button5"><i class="fa fa-phone myfas" aria-hidden="true"></i></button><h3 class="phoffice"><b>Phone Number:</b></h3>
		  <p class="adOffice">+91-9937993301</p>
		  <hr>
		  <button class="button button5"><i class="fa fa-envelope myfas" aria-hidden="true"></i></button><h3 class="emailOffice"><b>E-mail:</b></h3>
		  <p class="adOffice">info@rroshanindiaexport.com</p>
		 
	   </div>
	    <div class="col-sm-12 col-md-6 col-lg-6">
	     <h3><b>Send Message</b></h3>
		 <h1><b><u>Drop Us A Line</u></b></h1>
		 <div class="containerOrbit">  
  <form id="contact-txt" action="" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
  </div>
	   </div>
	   </div>
	   <div class="row">
	     <div class="col-sm-12 col-md-2 col-lg-2"></div>
		 <div class="col-sm-12 col-md-8 col-lg-8">
		 
		 <h3>Google Maps Address</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.1993960357!2d-0.119554!3d51.503297!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1620846034127!5m2!1sen!2sus" width="600" class="mapview" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		 </div>
		 <div class="col-sm-12 col-md-2 col-lg-2"></div>
	   </div>
	   </div>
	</div>
	
<svg viewBox="0 0 120 28">
 <defs> 
    <filter id="goo">
      <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0  
           0 1 0 0 0  
           0 0 1 0 0  
           0 0 0 13 -9" result="goo" />
      <xfeBlend in="SourceGraphic" in2="goo" />
    </filter>
     <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
  </defs> 

   <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use> 
   <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>
 <p></p>
 
  <g class="gooeff" filter="url(#goo)">
  <circle class="drop drop1" cx="20" cy="2" r="8.8"  />
  <circle class="drop drop2" cx="25" cy="2.5" r="7.5"  />
  <circle class="drop drop3" cx="16" cy="2.8" r="9.2"  />
  <circle class="drop drop4" cx="18" cy="2" r="8.8"  />
  <circle class="drop drop5" cx="22" cy="2.5" r="7.5"  />
  <circle class="drop drop6" cx="26" cy="2.8" r="9.2"  />
  <circle class="drop drop1" cx="5" cy="4.4" r="8.8"  />
  <circle class="drop drop2" cx="5" cy="4.1" r="7.5"  />
  <circle class="drop drop3" cx="8" cy="3.8" r="9.2"  />
  <circle class="drop drop4" cx="3" cy="4.4" r="8.8"  />
  <circle class="drop drop5" cx="7" cy="4.1" r="7.5"  />
  <circle class="drop drop6" cx="10" cy="4.3" r="9.2"  />
  
  <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8"  />
  <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5"  />
  <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2"  />
    <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8"  />
  <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5"  />
  <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2"  />
  <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
 </g>  
    

</svg>
<footer>
<div class="footer-area">
<br><br><br>
<div class="conatiner">
<div class="row">
<div class="col-md-3">
<div class="text-center">
<h1 class="footer-brand">Contact Us</h1>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-8">
<p class="footer-links1"><i class="fa fa-street-view" aria-hidden="true"></i>&nbspPlot no 657/6501, Phulnakhara, Dist. khorda,<br>Bhubaneswar, Odisha-754001</p>
<p class="footer-links1"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91-9937993301</p>
<p class="footer-links1"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;info@rroshanindiaexport.com</p>
</div>
</div>
</div>


<div class="col-md-3">
<h1 class="footer-brand">Quick Links</h1>
<div class="col-md-1"></div>
<div class="col-md-5">
<p><a href="#home" class="footer-links">Home</a></p>
<p><a href="#about" class="footer-links">About Us</p>
<p><a href="#product" class="footer-links">Products</a></p>
<p><a href="#contactUs" class="footer-links">Contact Us</a></p>
</div>
<div class="col-md-6"></div>
</div>



<div class="col-md-3">
<h1 class="footer-brand">Social Media</h1>
<a href="#" class="icon-button facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a>
<a href="#" class="icon-button twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a>
<a href="#" class="icon-button google-plus"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a>
</div>


<div class="col-md-3">
<h1 class="footer-brand">Stay tuned with updates</h1>
<p>
	<span class="input">
		<input type="text" placeholder="Enter Your E-mail">
		<span></span>	
	</span>
</p>
<button class="btn btn-success">Submit</button> 
</div>
</div>
<br><br>
<hr>
<div class="footer-copyright-pannel">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xs-12">
				<div class="footer-right-pannel">
		        </div>
			</div>
			<div class="col-sm-6 col-md-6 col-xs-12">
				<div class="footer-devlp-pannel">
			         <p>Developed By: <span><a href="https://.hexaphor.com">Hexaphor Technology</span></p>
		        </div>
			</div>
		</div>
		</div>
		
</div>
</div>
</footer>
 <script src="js/all.js"></script>
    
	<script src="js/main.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/swiper.min.js"></script>

</body>
  <script>
function updateSliderArrowsStatus(
  cardsContainer,
  containerWidth,
  cardCount,
  cardWidth
) {
  if (
    $(cardsContainer).scrollLeft() + containerWidth <
    cardCount * cardWidth + 15
  ) {
    $("#slide-right-container-x").addClass("active");
  } else {
    $("#slide-right-container-x").removeClass("active");
  }
  if ($(cardsContainer).scrollLeft() > 0) {
    $("#slide-left-container-xfactor").addClass("active");
  } else {
    $("#slide-left-container-xfactor").removeClass("active");
  }
}
$(function() {
  // Scroll products' slider left/right
  let div = $("#cards-container-xfactor");
  let cardCount = $(div)
    .find(".introcards_factor")
    .children(".card-plus-minus").length;
  let speed = 1000;
  let containerWidth = $(".container_sys1").width();
  let cardWidth = 250;

  updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);

  //Remove scrollbars
  $("#slide-right-container-x").click(function(e) {
    if ($(div).scrollLeft() + containerWidth < cardCount * cardWidth) {
      $(div).animate(
        {
          scrollLeft: $(div).scrollLeft() + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });
  $("#slide-left-container-xfactor").click(function(e) {
    if ($(div).scrollLeft() + containerWidth > containerWidth) {
      $(div).animate(
        {
          scrollLeft: "-=" + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });

  // If resize action ocurred then update the container width value
  $(window).resize(function() {
    try {
      containerWidth = $("#cards-container-xfactor").width();
      updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
    } catch (error) {
      console.log(
        `Error occured while trying to get updated slider container width: 
            ${error}`
      );
    }
  });
});

</script>
<script>
var modal = document.getElementById("mypop");


var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("popclose")[0];
 
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
var modal1 = document.getElementById("mypop1");


var btn1 = document.getElementById("myBtn1");

var span1 = document.getElementsByClassName("popclose1")[0];
 
btn1.onclick = function() {
  modal1.style.display = "block";
}

span1.onclick = function() {
  modal1.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal1.style.display = "none";
  }
}
</script>
<script>
var modal2 = document.getElementById("mypop2");


var btn2 = document.getElementById("myBtn2");

var span2 = document.getElementsByClassName("popclose2")[0];
 
btn2.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";
  }
}
</script>
<script>
var modal3 = document.getElementById("mypop3");


var btn3 = document.getElementById("myBtn3");

var span3 = document.getElementsByClassName("popclose3")[0];
 
btn3.onclick = function() {
  modal3.style.display = "block";
}

span3.onclick = function() {
  modal3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal3.style.display = "none";
  }
}
</script>
<script>
var modal4 = document.getElementById("mypop4");


var btn4 = document.getElementById("myBtn4");

var span4 = document.getElementsByClassName("popclose4")[0];
 
btn4.onclick = function() {
  modal4.style.display = "block";
}

span4.onclick = function() {
  modal4.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal4.style.display = "none";
  }
}
</script>
<script>
var modal5 = document.getElementById("mypop5");


var btn5 = document.getElementById("myBtn5");

var span5 = document.getElementsByClassName("popclose5")[0];
 
btn5.onclick = function() {
  modal5.style.display = "block";
}

span5.onclick = function() {
  modal5.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal5.style.display = "none";
  }
}
</script>
<script>
var modal6 = document.getElementById("mypop6");


var btn6 = document.getElementById("myBtn6");

var span6 = document.getElementsByClassName("popclose6")[0];
 
btn6.onclick = function() {
  modal6.style.display = "block";
}

span6.onclick = function() {
  modal6.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal6.style.display = "none";
  }
}
</script>
<script>
var modal7 = document.getElementById("mypop7");


var btn7 = document.getElementById("myBtn7");

var span7 = document.getElementsByClassName("popclose7")[0];
 
btn7.onclick = function() {
  modal7.style.display = "block";
}

span7.onclick = function() {
  modal7.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal7.style.display = "none";
  }
}
</script>
<script>
var modal8 = document.getElementById("mypop8");


var btn8 = document.getElementById("myBtn8");

var span8 = document.getElementsByClassName("popclose8")[0];
 
btn8.onclick = function() {
  modal8.style.display = "block";
}

span8.onclick = function() {
  modal8.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal8.style.display = "none";
  }
}
</script>
<script>
var modal9 = document.getElementById("mypop9");


var btn9 = document.getElementById("myBtn9");

var span9 = document.getElementsByClassName("popclose9")[0];
 
btn9.onclick = function() {
  modal9.style.display = "block";
}

span9.onclick = function() {
  modal9.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal9.style.display = "none";
  }
}
</script>
<script>
$(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}


});
</script>

</html>