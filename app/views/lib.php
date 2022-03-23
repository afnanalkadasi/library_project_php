<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-libirty</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='all' href='../public/css/style.css'>

</head>
<body dir="rtl" class="grid-container" id="index">
        <header class="header" >
                <nav class="navbar ">
                    <div class="header-1" id="nav_menu">
                        <ul class="nav_list">
                            <li class="nav_item"  onclick="document.getElementById('idlog').style.display='block' " ><a href="#" class="nav_link " ><img src="svg/svgexport-1.svg" class="nav_icon"> أدخل لحسابك أو سجل الان </a></li>
                            <li class="nav_item"><a href="#" class="nav_link "><img src="svg/svgexport-2.svg" class="nav_icon">الرئيسية</a></li>
                            <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-3.svg" class="nav_icon">من نحن</a></li>
                            <li class="nav_item"><a href="#" class="nav_link "><img src="svg/svgexport-4.svg" class="nav_icon">اتصل بنا</a></li>
                            <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-5.svg" class="nav_icon">المساعدة</a></li>
                            <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-11.svg" class="nav_icon">سياسية الخصوصية</a></li>
                            <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-12.svg" class="nav_icon"> اليمن</a></li>
                           
                            <li class="nav_item" onclick="togglestyle()" id="en"  ><a href="#"class="nav_link "  ><img src="svg/svgexport-14.svg" class="nav_icon">English</a></li>
                            <li class="nav_item" onclick="togglestyle()" id="ar"  style="display: none;"><a href="#"class="nav_link " ><img src="svg/svgexport-14.svg" class="nav_icon">عربي</a></li>
                        </ul> 
                    </div>
                    <div class="header-2">
                           <div class="logo"> 
                                <a href="index.html"> <img src="img/img.png"></a>
                        </div>
                           <div> 
                                        <form action="" class="search-form">
                                                        <input type="search" id="searchbar" onkeyup="search_ele()" name="search" placeholder="البحث" id="search-box" >
                                                        <i class="fas fa-search"></i>
                                         </form>
                           </div>
                           <div class="icon_shop">
                                        <span class="span_c" > 0</span> 
                                    <a href="sal.html"><img src="svg/svgexport-50.svg" ></a>    
                                </div>
                    </div>
                </nav>
            </header>
    <main>
 <!-- login -->
        <section>
         

<div id="idlog" class="modal">
 <span  onclick="document.getElementById('idlog').style.display='none' " class="close2" title="Close Modal">&times;</span>
 <form class="modal-content animate" action="#" method="post">
                <div class="textcontainer">
                          <h2>تسجيل الدخول</h2>
                          <hr>
                </div>
    <div class="container">
      <input type="email" placeholder="  البريد الإلكتروني أو رقم الجوال   " name="uname" required>

     <div style="display: inline;">
                <input type="password" placeholder="كلمة السر" name="psw" required> 
                <span class="psw"> <a href="#">نسيت؟</a></span> 
     </div> 
      
      <button class="login_btn" type="submit ">تسجيل الدخول  </button> 
    </div>
    <div class="container2">
         <p>ليس لديك  حساب؟</p>
         <button class="login_btn2" onclick="document.getElementById('id11').style.display='block'" > إنشاء حساب جديد </button>

     </div>
  </form>

</div>       
        </section>
         <!-- sign up -->
    <section>
                <div id="id11" class="modal">
                                <span onclick="document.getElementById('id11').style.display='none'" class="close3" title="Close Modal">&times;</span>
                                <form class="modal-content" action="#">
                                  <div class="container">
                                                <div class="textcontainer">
                                                        <h2>إنشاء حساب</h2>
                                                        <hr>
                                                 </div>
                                <input type="tel" placeholder="رقم الجوال" name="number" required>
                                <select id="country" name="country" aria-placeholder="رمز البلاد">
                                                <img src="svg/svgexport-12.svg"> <option dir="rtl"  value="australia">+970</option>
                                </select>
<br>
                                <a>سوف نرسل لك <b>رمز التحقق  عن طريق رسالة نصية</b></a>       
                                <button class="sign_btn3" > إرسال رمز التحقق  </button>
                                 <input type="text" placeholder="الاسم الاول" name="" required>
                                  <input type="text" placeholder="اسم العائلة" name="" required>
                                  <input type="email" placeholder="البريد الإلكتروني" name="email" required>
                                  <input type="email" placeholder="تأكيد البريد الالكتروني" name="email" required>
                                   <input type="password" placeholder="كلمة السر" name="psw" required>
                                     
                                    <label>
                                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> أوافق <strong style="color: blue;">على الشروط والاحكام</strong>
                                    </label>
                                      <br>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> التسجيل للانضمام للنشرة البريدية
                                    </label>
                                    <button class="sign_btn3" > إنشاء حساب </button>
                                    <div class="container2">
                                    <p>لديك حساب؟ 
                                            <!-- <a  style="color: blue; cursor: pointer;" onclick="document.getElementById('idlog').style.display='block'" >تسجيل الدخول<img src="svg/svgexport-17.svg"> </a> -->
                                            <span onclick="document.getElementById('id11').style.display='none'" style="color: blue; cursor: pointer;" >تسجيل الدخول<img src="svg/svgexport-17.svg"></span>

                                     </p>
                                     </div>
                                  </div>
                                </form>
                              </div>              
                    </section>
<!-- //slider image -->
      <section>
        <div class="slideshow-container">

                <div class="mySlides fade">
              
                  <img src="img/slider_img.webp" style="width:100%">
                  
                </div>
                
                <div class="mySlides fade">
          
                  <img src="img/slider_img2.webp" style="width:100%">
                 
                </div>
                
                <div class="mySlides fade">
                
                  <img src="img/slider_img3.jpg" style="width:100%">
                 
                </div>
                
                <a class="prev" onclick="plusSlides_he(+1)">&#10094;</a>
                <a class="next" onclick="plusSlides_he(1)">&#10095;</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide_he(1)"></span> 
                  <span class="dot" onclick="currentSlide_he(2)"></span> 
                  <span class="dot" onclick="currentSlide_he(3)"></span> 
                </div>
                
      </section> 

        <section class="section_dep">

                <div class="dep_row1">
                                <h2> تصفح حسب القسم </h2>
                                <a href="category.html"> عرض المزيد</a>
                </div>
                
                <div class="row">
                                <div id="container_im">
                                                <div id="slider-container_im">
                                                  <span onclick="slideRight()" class="btn_im"></span>
                                                    <div id="slider">
                                                                <div class="column slide_im">
                       
                                                                                <div class="card">
                                                                                       <img src="svg/svgexport-46.svg" class="cr_icon">
                                                                                   <h3 style="color:  hsl(355, 69%, 16%);"> دين</h3>
                                                                                 </div>
                                                                            
                                                                </div>
                                                                <div class="column slide_im">
                              
                                                                                <div class="card">
                                                                               <img src="svg/svgexport-42.svg" class="cr_icon">
                                                                           <h3 style="color: #ee7428">تاريخ</h3>
                                                                          
                                                                         </div>
                                                                      
                                                                       </div>
                                                                       
                                                                       <div class="column slide_im">
                                                                      
                                                                         <div class="card">
                                                                               <img src="svg/svgexport-40.svg" class="cr_icon">
                                                                           <h3 style="color: #726598">روايات</h3>
                                                                         </div>
                                                                   
                                                                       </div>
                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                               <div class="card">
                                                                                     <img src="svg/svgexport-43.svg" class="cr_icon">
                                                                                 <h3 style="color: #cb3378">سياسة</h3>
                                                                               </div>
                                                                           
                                                                       </div>
                                                                             
                                                                       <div class="column slide_im">
                                                                                     
                                                                               <div class="card">
                                                                                     <img src="svg/svgexport-45.svg" class="cr_icon">
                                                                                 <h3 style="color: #1d8ebd">اقتصاد</h3>
                                                                               </div>
                                                                              
                                                                       </div>
                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                                   <div class="card">
                                                                                         <img src="svg/svgexport-47.svg" class="cr_icon">
                                                                                     <h3 style="color: #61b22f">طبخ</h3>
                                                                                   </div>
                                                                                   
                                                                       </div>
                                                                               
                                                                       <div class="column slide_im">
                                                                                     
                                                                         <div class="card">
                                                                               <img src="svg/svgexport-48.svg" class="cr_icon">
                                                                           <h3 style="color: #a9163f;">تربية</h3>
                                                                        </div>
                                                                    
                                                                       </div>
                                                     
                                                  </div>
                                                  <span onclick="slideLeft()" class="btn_im"></span>
                                                </div>
                                </div>
                    </div>  


     </section>
     
     <section class="wrapper ">
        <div class="row_wr">
        <img class="myImg" src="img/slider_img.webp"  onclick="image(event)"  />

        <img class="myImg" src="img/slider_img2.webp"  onclick="image(event)" />

        <img class="myImg" src="img/slider_img3.jpg"  onclick="image(event)" />

        <img class="myImg" src="img/slider_img4.webp"  onclick="image(event)" />

        <img class="myImg" src="img/55.webp"  onclick="image(event)" style="width:100%; height: 150px;" />

        <!-- The Modal -->
        <div id="myModal1" class="modal_sh_ho">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content_sh" id="img01">

        </div>
</div>
    </section>
 
   <!-- //show books -->
        <section class="section1">
                        <div class="dep_row1">
                                        <h2 class="section-title">العروض الحالية</h2>   
                                        <a href="category.html"> عرض المزيد</a>
                        </div>
                      
                    <div class="row ">
                            <div class="card_sal">
                                  <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                   <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button  class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days"></div>:
                                            H<div id="hours"></div>:
                                            M  <div id="minutes"></div>:
                                            S<div id="seconds"></div>
                                    </div>
                            </div>
                            <div class="card_sal">
                                     <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                        <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days2"></div>:
                                            H<div id="hours2"></div>:
                                            M  <div id="minutes2"></div>:
                                            S<div id="seconds2"></div>
                                    </div>
                            </div>

                            <div class="card_sal">
                                    <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                    <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                        <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days3"></div>:
                                            H<div id="hours3"></div>:
                                            M  <div id="minutes3"></div>:
                                            S<div id="seconds3"></div>
                                    </div>
                            </div>

                            <div class="card_sal">
                                    <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                   <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                    <span>كبريا وهوى(كتاب إلكتروني)</span>
                                     <strong class="price">19.39ر.س.</strong>
                                    <p>شامل الضريبة</p>
                                    <div >
                                        <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                        <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                        <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                    </div>
                                    <div  class="counter-container " >
                                                <i class="far fa-clock"></i>    D <div id="days4"></div>:
                                            H<div id="hours4"></div>:
                                            M  <div id="minutes4"></div>:
                                            S<div id="seconds4"></div>
                                    </div>
                            </div>
                            <div class="card_sal">
                                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                       <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                        <span>كبريا وهوى(كتاب إلكتروني)</span>
                                         <strong class="price">19.39ر.س.</strong>
                                        <p>شامل الضريبة</p>
                                        <div >
                                            <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                            <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                            <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                        </div>
                                        <div  class="counter-container " >
                                                        <i class="far fa-clock"></i>    D <div id="days5"></div>:
                                                    H<div id="hours5"></div>:
                                                    M  <div id="minutes5"></div>:
                                                    S<div id="seconds5"></div>
                                            </div>
                                </div>
                    </div>
               
        </section>
     
     
      <section class="section">
               
                 <div class="dep_row1">
                                <h3 class="section-title"> الكتب الدينية </h3>  
                                <a href="category.html"> عرض المزيد</a>
                </div>
                                <div class="row ">
                                        <div class="card_sal">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                        </div>

                                        <div class="card_sal">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                   
                                        </div>
            
                                        <div class="card_sal">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                                     
                                        </div>
                                        <div class="card_sal">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                             
                                        </div>
            
                                        <div class="card_sal">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                               <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                 <strong class="price">19.39ر.س.</strong>
                                                <p>شامل الضريبة</p>
                                                <div >
                                                    <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                       <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                    <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                </div>
                           
                                        </div>
                                </div>
</section>
<section class="section">
              
                <div class="dep_row1">
                                <h3 class="section-title"> الكتب التاريخية </h3> 
                                <a href="category.html"> عرض المزيد</a>
                </div>       
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
                                             </section>     
                                             <section class="section">
                                                        <div class="dep_row1">
                                                                        <h3 class="section-title">  السياسية </h3>
                                                                        <a href="category.html"> عرض المزيد</a>
                                                        </div>               
                                                                       <div class="row ">
                                                                               <div class="card_sal">
                                                                                       <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                               </div>
                                        
                                                                               <div class="card_sal">
                                                                                       <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                          
                                                                               </div>
                                                   
                                                                               <div class="card_sal">
                                                                                       <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                            
                                                                               </div>
                                                                               <div class="card_sal">
                                                                                       <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                    
                                                                               </div>
                                                   
                                                                               <div class="card_sal">
                                                                                       <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                                                      <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                                                       <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                                        <strong class="price">19.39ر.س.</strong>
                                                                                       <p>شامل الضريبة</p>
                                                                                       <div >
                                                                                           <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                                              <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                                           <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                                                       </div>
                                                                  
                                                                               </div>
                                                                       </div>
                     </section>   
                     <section class="section">
                                <div class="dep_row1">
                                                <h3 class="section-title">  الاقتصاد </h3>
                                                <a href="category.html"> عرض المزيد</a>
                                </div>                 
                                               <div class="row ">
                                                       <div class="card_sal">
                                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                       </div>
                
                                                       <div class="card_sal">
                                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                  
                                                       </div>
                           
                                                       <div class="card_sal">
                                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                                    
                                                       </div>
                                                       <div class="card_sal">
                                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                            
                                                       </div>
                           
                                                       <div class="card_sal">
                                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                                <strong class="price">19.39ر.س.</strong>
                                                               <p>شامل الضريبة</p>
                                                               <div >
                                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                               </div>
                                          
                                                       </div>
                                               </div>
</section>          
<section class="section">
               
                <div class="dep_row1">
                                <h3 class="section-title">  الطبخ </h3>
                        <a href="category.html"> عرض المزيد</a>
                </div>           
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
</section>  
<section class="section">    
                <div class="dep_row1">
                                <h3 class="section-title">  أفضل الروايات الرومانسية </h3>
                        <a href="category.html"> عرض المزيد</a>
                </div>          
                               <div class="row ">
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                       </div>

                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                  
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                                    
                                       </div>
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                            
                                       </div>
           
                                       <div class="card_sal">
                                               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
                                              <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                               <span>كبريا وهوى(كتاب إلكتروني)</span>
                                                <strong class="price">19.39ر.س.</strong>
                                               <p>شامل الضريبة</p>
                                               <div >
                                                   <button class="card_icon2"><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon  add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                   <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                               </div>
                          
                                       </div>
                               </div>
</section>                                                    
    </main>
    <footer>
            <div class="row">
                    <div class="fact-col">
                            
                            <h3> انضم الى نشرتنا البريدية</h3>
                            
                            <form class="fo_form">
                                    <input type="email" class="fas fa-lock input_em" placeholder="ادخل بريدك الالكتروني ">
                                    <button type="submit" class="button">اشتراك</button>
                            </form>
                    </div>
                    <div class="fact-col">
                            <h3>خدمة العملاء  </h3>
                            
                            <ul>
                            <li><a href="#">مبيعات الشركات</a></li>
                            <li><a href="#">الأسئلة المتكررة
                        </a></li>
                            <li><a href="#">دليل التسوق والمطبوعات     </a></li>
                            <li><a href="#">مواقع المعارض      </a></li>
                            <li><a href="#">سياسة الضمان </a></li>
                            <li><a href="#">سياسة الاسترجاع والاستبدال</a></li>
                            <li><a href="#">اتصل بنا >
                                920000089
                                </a></li>
                              </ul>
                    </div>
                    <div class="fact-col">
                        <h3>خدمات جرير </h3>
                        
                        <ul>
                        <li><a href="#">تذاكر جرير</a></li>
                        <li><a href="#">خدمة تقسيط المشتريات </a></li>
                        <li><a href="#">خدمات ما بعد البيع    </a></li>
                        <li><a href="#">خدمة الحماية الشاملة</a></li>
                        <li><a href="#">خدمة تمديد الضمان</a></li>
                        <li><a href="#">حماية أجهزة آبل </a></li>
                        <li><a href="#">بطاقة خصم جرير  </a></li>
                        <li><a href="#">بطاقة جرير للهدايا  </a></li>
                          </ul>
                </div>
                    <div class="fact-col">
                        <h3>روابط سريعة</h3>
                        <ul>
                                <li><a href="#">إصدارات جرير    </a></li>
                                <li><a href="#">قارئ جرير</a></li>
                                <li><a href="#">شركاء برامج المكافئات</a></li>
                                <li><a href="#">خدمات شركات الإتصالات</a></li>
                                  </ul>
                   </div>
                   <div class="fact-col">
                        <h3>عن جرير </h3>
                        <ul>
                        <li><a href="#">من نحن </a></li>
                        <li><a href="#">الحوكمة</a></li>
                        <li><a href="#">علاقات المستثمرين والتقارير  </a></li>
                        <li><a href="#">الاستدامة</a></li>
                        <li><a href="#">الأخبار</a></li>
                          </ul>
                          <h3>فرص العمل</h3>
                    </div>
        </div>
                        
        <div class="row2">
                <h3>تواصل معنا</h3>
                <div class="footer_socials">                                
        
                                        <a href="#" class="footer_social" target="_blank">
                                                <img src="svg/svgexport-58.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-59.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-60.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-61.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-62.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-63.svg" class="nav_icons">
                                            </a>
                                            <a href="#" class="footer_social" target="_blank">
                                                    <img src="svg/svgexport-64.svg" class="nav_icons">
                                            </a>
                                
                </div>
        </div>

    </footer>
    <section class="row3">

        <div class="fact-col"> 
                <div class="footer_im">                                             
                              <img src="svg/svgexport-65.svg" >
                               <img src="svg/svgexport-66.svg" >
                                <img src="svg/svgexport-67.svg" >
                              <img src="svg/svgexport-68.svg" >
                             <img src="svg/svgexport-69.svg" >
                              <img src="svg/svgexport-70.svg" >             
                </div>
        </div>
        <div class="fact-col">
                <p>
                                سياسة الخصوصية  |  شروط الخدمة
                </p>
                <p>
                                .جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين س.ت. 1010654213
                </p>
        </div>
</section> 
<script src="js/slide.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>