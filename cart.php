@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

:root{
   --main-color:#2980b9;
   --orange:#f39c12;
   --red:#e74c3c;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-bg:#eee;
   --border:.2rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

*::selection{
   background-color: var(--main-color);
   color:var(--white);
}

::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

::-webkit-scrollbar-track{
   background-color: transparent;
}

::-webkit-scrollbar-thumb{
   background-color: var(--main-color);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

body{
   background-color: var(--light-bg);
}

section{
   padding:2rem;
   max-width: 1200px;
   margin:0 auto;
}

.heading{
   font-size: 4rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
   text-transform: uppercase;
}

.btn,
.delete-btn,
.option-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   border-radius: .5rem;
   padding:1rem 3rem;
   font-size: 1.7rem;
   text-transform: capitalize;
   color:var(--white);
   cursor: pointer;
   text-align: center;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
}

.btn{
   background-color: var(--main-color);
}

.option-btn{
   background-color: var(--orange);
}

.delete-btn{
   background-color: var(--red);
}

.flex-btn{
   display: flex;
   gap:1rem;
}

.message{
   position: sticky;
   top:0;
   max-width: 1200px;
   margin:0 auto;
   background-color: var(--light-bg);
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
   z-index: 1100;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   cursor: pointer;
   color:var(--red);
   font-size: 2.5rem;
}

.message i:hover{
   color:var(--black);
}

.empty{
   padding:1.5rem;
   background-color: var(--white);
   border: var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   color:var(--red);
   border-radius: .5rem;
   font-size: 2rem;
   text-transform: capitalize;
}

.disabled{
   pointer-events: none;
   user-select: none;
   opacity: .5;
}

@keyframes fadeIn{
   0%{
      transform: translateY(1rem);
   }
}

.header{
   position: sticky;
   top:0; left:0; right:0;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   position: relative;
}

.header .flex .logo{
   font-size: 2.5rem;
   color:var(--black);
}

.header .flex .logo span{
   color:var(--main-color);
}

.header .flex .navbar a{
   margin:0 1rem;
   font-size: 2rem;
   color:var(--black);
}

.header .flex .navbar a:hover{
   color:var(--main-color);
   text-decoration: underline;
}


.header .flex .icons > *{
   margin-left: 1rem;
   font-size: 2.5rem;
   cursor: pointer;
   color:var(--black);
}

.header .flex .icons > *:hover{
   color:var(--main-color);
}

.header .flex .icons a span{
   font-size: 2rem;
}

.header .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   background-color: var(--white);
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   padding:2rem;
   width: 30rem;
   padding-top: 1.2rem;
   display: none;
   animation:fadeIn .2s linear;
}

.header .flex .profile.active{
   display: inline-block;
}

.header .flex .profile p{
   text-align: center;
   color:var(--black);
   font-size: 2rem;
   margin-bottom: 1rem;
}

#menu-btn{
   display: none;
}

.home-bg .home .slide{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:1.5rem;
   padding-bottom: 6rem;
   padding-top: 2rem;
   user-select: none;
}

.home-bg .home .slide .image{
   flex:1 1 40rem;
}

.home-bg .home .slide .image img{
   height: 40rem;
   width: 100%;
   object-fit: contain;
}

.home-bg .home .slide .content{
   flex:1 1 40rem;
}

.home-bg .home .slide .content span{
   font-size: 2rem;
   color:var(--white);
}

.home-bg .home .slide .content h3{
   margin-top: 1rem;
   font-size: 4rem;
   color:var(--white);
   text-transform: uppercase;
}

.home-bg .home .slide .content .btn{
   display: inline-block;
   width: auto;
}

.swiper-pagination-bullet-active{
   background-color: var(--main-color);
}

.category .slide{
   margin-bottom: 5rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   text-align: center;
   padding:2rem;
   background: var(--white);
   border-radius: .5rem;
}

.category .slide:hover{
   background-color: var(--black);
}

.category .slide:hover img{
   filter:invert();
}

.category .slide:hover h3{
   color:var(--white);
}

.category .slide img{
   height: 7rem;
   width: 100%;
   object-fit: contain;
   margin-bottom: 1rem;
   user-select: none;
}

.category .slide h3{
   font-size: 2rem;
   color:var(--black);
   user-select: none;
}

.home-products .slide{
   position: relative;
   padding:2rem;
   border-radius: .5rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   margin-bottom: 5rem;
   overflow: hidden;
   user-select: none;
}

.home-products .slide img{
   width: 100%;
   height: 20rem;
   object-fit: contain;
   margin-bottom: 2rem;
}

.home-products .slide .name{
   font-size: 2rem;
   color:var(--black);
}

.home-products .slide .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1rem;
}

.home-products .slide .flex .qty{
   width: 7rem;
   padding:1rem;
   border:var(--border);
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.home-products .slide .flex .price{
   margin:1rem 0;
   font-size: 2rem;
   color:var(--red);
}

.home-products .slide .fa-heart,
.home-products .slide .fa-eye{
   position: absolute;
   top:1rem;
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.2rem;
   font-size: 2rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;
   text-align: center;
   color:var(--black);
   cursor: pointer;
   transition: .2s linear;
}

.home-products .slide .fa-heart{
   right: -6rem;
}

.home-products .slide .fa-eye{
   left: -6rem;
}

.home-products .slide .fa-heart:hover,
.home-products .slide .fa-eye:hover{
   background-color: var(--black);
   color:var(--white);
}

.home-products .slide:hover .fa-heart{
   right: 1rem;
}

.home-products .slide:hover .fa-eye{
   left: 1rem;
}

.quick-view form{
   padding:2rem;
   border-radius: .5rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   margin-top: 1rem;
}

.quick-view form .row{
   display: flex;
   align-items: center;
   gap:1.5rem;
   flex-wrap: wrap;
}

.quick-view form .row .image-container{
   margin-bottom: 2rem;
   flex:1 1 40rem;
}

.quick-view form .row .image-container .main-image img{
   height: 30rem;
   width: 100%;
   object-fit: contain;
}

.quick-view form .row .image-container .sub-image{
   display: flex;
   gap:1.5rem;
   justify-content: center;
   margin-top: 2rem;
}

.quick-view form .row .image-container .sub-image img{
   height: 7rem;
   width: 10rem;
   object-fit: contain;
   padding:.5rem;
   border:var(--border);
   cursor: pointer;
   transition: .2s linear;
}

.quick-view form .flex .image-container .sub-image img:hover{
   transform: scale(1.1);
}

.quick-view form img{
   width: 100%;
   height: 20rem;
   object-fit: contain;
   margin-bottom: 2rem;
}

.quick-view form .row .content{
   flex:1 1 40rem;
}

.quick-view form .row .content .name{
   font-size: 2rem;
   color:var(--black);
}

.quick-view form .row .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1rem;
   margin:1rem 0;
}

.quick-view form .row .flex .qty{
   width: 7rem;
   padding:1rem;
   border:var(--border);
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.quick-view form .row .flex .price{
   font-size: 2rem;
   color:var(--red);
}

.quick-view form .row .content .details{
   font-size: 1.6rem;
   color:var(--light-color);
   line-height: 2;
}  

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.products .box-container .box{
   position: relative;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   padding:2rem;
   overflow: hidden;
}

.products .box-container .box img{
   height: 20rem;
   width: 100%;
   object-fit: contain;
   margin-bottom: 1rem;
}

.products .box-container .box .fa-heart,
.products .box-container .box .fa-eye{
   position: absolute;
   top:1rem;
   height: 4.5rem;
   width: 4.5rem;
   line-height: 4.2rem;
   font-size: 2rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;
   text-align: center;
   color:var(--black);
   cursor: pointer;
   transition: .2s linear;
}

.products .box-container .box .fa-heart{
   right: -6rem;
}

.products .box-container .box .fa-eye{
   left: -6rem;
}

.products .box-container .box .fa-heart:hover,
.products .box-container .box .fa-eye:hover{
   background-color: var(--black);
   color:var(--white);
}

.products .box-container .box:hover .fa-heart{
   right:1rem;
}

.products .box-container .box:hover .fa-eye{
   left:1rem;
}

.products .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
}

.products .box-container .box .flex{
   display: flex;
   align-items: center;
   gap:1rem;
}

.products .box-container .box .flex .qty{
   width: 7rem;
   padding:1rem;
   border:var(--border);
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.products .box-container .box .flex .price{
   font-size: 2rem;
   color:var(--red);
   margin-right: auto;
}

.form-container form{
   background-color: var(--white);
   padding:2rem;
   border-radius: .5rem;
   border:var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   margin:0 auto;
   max-width: 50rem;
}

.form-container form h3{
   font-size: 2.5rem;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form p{
   font-size: 2rem;
   color:var(--light-color);
   margin:1.5rem 0;
}

.form-container form .box{
   margin:1rem 0;
   background-color: var(--light-bg);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);  
   width: 100%;
   border-radius: .5rem;
}

.about .row{
   display: flex;
   align-items: center;
   flex-wrap: wrap;
   gap:1.5rem;
}

.about .row .image{
   flex:1 1 40rem;
}

.about .row .image img{
   width: 100%;
}

.about .row .content{
   flex:1 1 40rem;
}

.about .row .content h3{
   font-size: 3rem;
   color:var(--black);
}

.about .row .content p{
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
   padding:1rem 0;
}

.about .row .content .btn{
   display: inline-block;
   width: auto;
}

.reviews .slide{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   margin-bottom: 5rem;
   user-select: none;
}

.reviews .slide img{
   height: 10rem;
   width: 10rem;
   border-radius: 50%;
   margin-bottom: .5rem;
}

.reviews .slide p{
   padding:1rem 0;
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
}

.reviews .slide .stars{
   display: inline-block;
   margin-bottom: 1rem;
   background-color: var(--light-bg);
   padding:1rem 1.5rem;
   border-radius: .5rem;
}

.reviews .slide .stars i{
   margin:0 .3rem;
   font-size: 1.7rem;
   color:var(--orange);
}

.reviews .slide h3{
   font-size: 2rem;
   color:var(--black);
}

.contact form{
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   border:var(--border);
   max-width: 50rem;
   margin:0 auto;
}

.contact form h3{
   margin-bottom: 1rem;
   text-transform: capitalize;
   font-size: 2.5rem;
   color:var(--black);
}

.contact form .box{
   margin:1rem 0;
   width: 100%;
   background-color: var(--light-bg);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   border-radius: .5rem;
}

.contact form textarea{
   height: 15rem;
   resize: none;
}

.search-form form{
   display: flex;
   gap:1rem;
}

.search-form form input{
   width: 100%;
   border:var(--border);
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding:1.4rem;
   font-size: 1.8rem;
   color:var(--black);
}

.search-form form button{
   font-size: 2.5rem;
   height: 5.5rem;
   line-height: 5.5rem;
   background-color: var(--main-color);
   cursor: pointer;
   color:var(--white);
   border-radius: .5rem;
   width: 6rem;
   text-align: center;
}

.search-form form button:hover{
   background-color: var(--black);
}

.wishlist-total{
   max-width: 50rem;
   margin:0 auto;
   margin-top: 3rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;;
   padding:2rem;
   text-align: center;
}

.wishlist-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.wishlist-total p span{
   color:var(--red);
}

.shopping-cart .fa-edit{
   height: 4.5rem;
   border-radius: .5rem;
   background-color: var(--orange);
   width: 5rem;
   font-size: 2rem;
   color:var(--white);
   cursor: pointer;
}

.shopping-cart .fa-edit:hover{
   background-color: var(--black);
}

.shopping-cart .sub-total{
   margin:2rem 0;
   font-size: 2rem;
   color:var(--light-color);
}

.shopping-cart .sub-total span{
   color:var(--red);
}

.cart-total{
   max-width: 50rem;
   margin:0 auto;
   margin-top: 3rem;
   background-color: var(--white);
   border:var(--border);
   border-radius: .5rem;;
   padding:2rem;
   text-align: center;
}

.cart-total p{
   font-size: 2.5rem;
   color:var(--black);
   margin-bottom: 2rem;
}

.cart-total p span{
   color:var(--red);
}

.display-orders{
   text-align: center;
   padding-bottom: 0;
}

.display-orders p{
   display: inline-block;
   padding:1rem 2rem;
   margin:1rem .5rem;
   font-size: 2rem;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.display-orders p span{
   color:var(--red);
}

.display-orders .grand-total{
   margin-top: 1.5rem;
   margin-bottom: 2.5rem;
   font-size: 2.5rem;
   color:var(--light-color);
}

.display-orders .grand-total span{
   color:var(--red);
}

.checkout-orders form{
   padding:2rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.checkout-orders form h3{
   border-radius: .5rem;
   background-color: var(--black);
   color:var(--white);
   padding:1.5rem 1rem;
   text-align: center;
   text-transform: uppercase;
   margin-bottom: 2rem;
   font-size: 2.5rem;
}

.checkout-orders form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   justify-content: space-between;
}

.checkout-orders form .flex .inputBox{
   width: 49%;
}

.checkout-orders form .flex .inputBox .box{
   width: 100%;
   border:var(--border);
   border-radius: .5rem;
   font-size: 1.8rem;
   color:var(--black);
   padding:1.2rem 1.4rem;
   margin:1rem 0;
   background-color: var(--light-bg);
}

.checkout-orders form .flex .inputBox span{
   font-size: 1.8rem;
   color:var(--light-color);
}

.orders .box-container{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
   align-items: flex-start;
}

.orders .box-container .box{
   padding:1rem 2rem;
   flex:1 1 40rem;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.orders .box-container .box p{
   margin:.5rem 0;
   line-height: 1.8;
   font-size: 2rem;
   color:var(--light-color);
}

.orders .box-container .box p span{
   color:var(--main-color);
}

.footer{
   background-color: var(--white);
   /* padding-bottom: 7rem; */
}

.footer .grid{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
   gap:1.5rem;
   align-items: flex-start;
}

.footer .grid .box h3{
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-transform: capitalize;
}

.footer .grid .box a{
   display: block;
   margin:1.5rem 0;
   font-size: 1.7rem;
   color:var(--light-color);
}

.footer .grid .box a i{
   padding-right: 1rem;
   color:var(--main-color);
   transition: .2s linear;
}

.footer .grid .box a:hover{
   color:var(--main-color);
}

.footer .grid .box a:hover i{
   padding-right: 2rem;
}

.footer .credit{
   text-align: center;
   padding: 2.5rem 2rem;
   border-top: var(--border);
   font-size: 2rem;
   color:var(--black);
}

.footer .credit span{
   color:var(--main-color);
}






@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      border-top: var(--border);
      border-bottom: var(--border);
      background-color: var(--white);
      transition: .2s linear;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      display: block;
      margin:2rem;
   }

   .home-bg .home .slide .content{
      text-align: center;
   }

   .home-bg .home .slide .content h3{
      font-size: 3rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .flex-btn{
      flex-flow: column;
      gap:0;
   }

   .quick-view form .row .image-container .sub-image img{
      width: 8rem;
   }

   .checkout-orders form .flex .inputBox{
      width: 100%;
   }

}
