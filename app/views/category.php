<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-libirty-category</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='all' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='all' href='css/style2.css'>

</head>
<body dir="rtl" class="grid-container">
    <header class="header" >
        <nav class="navbar ">
            <div class="header-1" id="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item"  onclick="document.getElementById('idlog').style.display='block' " ><a href="#" class="nav_link " ><img src="svg/svgexport-1.svg" class="nav_icon"> أدخل لحسابك أو سجل الان </a></li>
                    <li class="nav_item"><a href="#" class="nav_link "><a href="index.html" class="nav_link " ><img src="svg/svgexport-2.svg" class="nav_icon">الرئيسية</a></li>
                    <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-3.svg" class="nav_icon">من نحن</a></li>
                    <li class="nav_item"><a href="#" class="nav_link "><img src="svg/svgexport-4.svg" class="nav_icon">اتصل بنا</a></li>
                    <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-5.svg" class="nav_icon">المساعدة</a></li>
                    <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-11.svg" class="nav_icon">سياسية الخصوصية</a></li>
                    <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-12.svg" class="nav_icon"> اليمن</a></li>
                    <li class="nav_item"><a href="#"class="nav_link " ><img src="svg/svgexport-14.svg" class="nav_icon">English</a></li>
                </ul> 
            </div>
            <div class="header-2">
                   <div class="logo"> 
                    <a href="index.html"> <img src="img/img.png"></a>
                </div>
                   <div> 
                        <form action="" class="search-form">
                                <input type="search" id="searchbar" onkeyup="search_ele()" name="search" placeholder="البحث"  >
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

        <section class="section_ca">
                        <ul class="breadcrumb">
                                        <li><a href="index.html">الرئيسية</a></li>
                                        <li><a href="#">الكتب العربية</a></li>
                                        <li><a href="#">    كتب الكترونية </a></li>
                        </ul>
                   <div class="category1">
                        <div class="cate1">
                           <span> الترتيب حسب: </span> 
                               <select>
                                   <option>الرجاء الاختيار</option>
                                   <option>كتب دينية</option>
                                   <option>كتب اقتصادية</option>
                                   </select>
                        </div>
                          
                            <div class="cate2 book_card">
                                    <img src="svg/svgexport-34.svg" style="margin-left: 10px;" >كتب الالكترونية
                             </div>
                   </div>
                        
<div class="cate-container" id='list' dir="rtl">

                            <div class="card_sal book_card cate3 ">
                                                            
                                <div class="cate_right c3_item">
                                <span> تصفية النتائج</span>
                                
                                </div >  
                                <div class="c3_item">
                                <span>علامة تجارية</span>  
                                <span class="min_span">ـــ</span>
                                </div>
                                <div class="c3_item">
                                <span>السعر</span>    
                                <span class="min_span">ـــ</span>
                            </div>
                                <div class="c3_item">
                            <span> صيغة الكتاب </span>  
                            <span class="min_span">ـــ</span>
                            </div>
                        </div>
                        
                        <div class="card_sal book_card">
                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                 <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                  <span> كلي ونامي وابهري الاخرين</span>
                                  <br><br>
                                  <strong class="price">ر.س.24.99</strong>
                                  <p>شامل الضريبة</p>
                                  <span>صيغ أخرى:</span>
                                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                  <div >
                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
                                <div class="card_sal book_card">
                                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                         <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <br>
                                          <span>ن النسوية(كتاب إلكتروني)</span>
                                          <br><br>
                                          <strong class="price">ر.س.34.99</strong>
                                          <p>شامل الضريبة</p>
                                          <span>صيغ أخرى:</span>
                                          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                          <div >
                                              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                          </div>    
                        </div>
                        <div class="card_sal book_card">
                                <a href="details.html"><img  class="im_book"  src="img/book (1).jpg" ></a>  
                                  <h1>كتاب إلكتروني</h1>
                                  <span>ابـابيـل(كتاب الـكتـروني)</span>
                                  <br><br>
                                  <strong class="price">ر.س.49.99</strong>
                                  <p>شامل الضريبة</p>
                                  <span>صيغ أخرى:</span>
                                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                  <div >
                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
              
                                <div class="card_sal book_card">
                                                <a href="details.html"><img class="im_book"  src="img/book (1).jpg" ></a>  
                                                 <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                 <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <br>
                                                  <span>لانك الله (كتاب الكتروني)</span>
                                                  <br>
                                                  <br>
                                                  <strong class="price">ر.س.12.99</strong>
                                                  <p>شامل الضريبة</p>
                                                  <span>صيغ أخرى:</span>
                                                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                                  <div >
                                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                  </div>    
                                </div>
                                <div class=" book_card">
                                  
                         </div>            
                                <div class="card_sal book_card">
                                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                         <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                          <span>(كتاب الكتروني)تخاريف ساخرة</span>
                                          <br><br>
                                           <strong class="price">19.39ر.س.</strong>
                                          <p>شامل الضريبة</p>
                                          <div >
                                              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                          </div>    
                        </div>


                   <div class="card_sal book_card">
                                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                                 <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                                 <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <br>
      
                                                  <span>(كتاب الكتروني)شمس المعارف</span>
                                                  <br><br>
                                                   <strong class="price">19.39ر.س.</strong>
                                                  <p>شامل الضريبة</p>
                                                  <div >
                                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                                  </div>    
                                </div>
                                <div class="card_sal book_card">
                                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                         <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                          <span>(كتاب الكتروني)مستقبل النسوية</span>
                                          <br><br>
                                           <strong class="price">19.39ر.س.</strong>
                                          <p>شامل الضريبة</p>
                                          <span>صيغ أخرى:</span>
                                          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                          <div >
                                              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                          </div>    
                        </div>
              
                                <div class="card_sal book_card">
                                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                         <div class="card_im" > <img src="svg/svgexport-990.svg" width="20px" height="20px" ><h2 >كتاب إلكتروني</h2></div>
                                         <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <br>
                                          <span>فكرة يجب ان تعرفهاعن علم النفس </span>
                                          <br><br>
                                          
                                           <strong class="price">19.39ر.س.</strong>
                                          <p>شامل الضريبة</p>
                                          <span>صيغ أخرى:</span>
                                          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                          <div >
                                              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                          </div>    
                        </div>
                <div class="cate12 book_card"></div>
                <div class="card_sal book_card">
                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                  <h1>كتاب إلكتروني</h1>
                                  <i class="fa fa-star  " ></i>
                                  <i class="fa fa-star "></i>
                                  <i class="fa fa-star "></i>
                                  <i class="fa fa-star "></i>
                                  <i class="fa fa-star "></i>
                                  <br>
                                  <span>احمد ورحلة الصف (كتاب الكتروني)</span>
                                  <br><br>
                                   <strong class="price">19.39ر.س.</strong>
                                  <p>شامل الضريبة</p>
                                  <div >
                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
                <div class="card_sal book_card">
                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                  <h1>كتاب إلكتروني</h1>
                                  <span>غدا اجمل (كتاب الكتروني) </span>
                                  <br><br>
                                   <strong class="price">19.39ر.س.</strong>
                                  <p>شامل الضريبة</p>
                                  <span>صيغ أخرى:</span>
                                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                  <div >
                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                                                            <a href="sal.html"> <button class="card_icon"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
                <div class="card_sal book_card">
                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                  <h1>كتاب إلكتروني</h1>
                                  <span>البداية والنهاية الجزء الاول</span>
                                  <br><br>
                                   <strong class="price">19.39ر.س.</strong>
                                  <p>شامل الضريبة</p>
                                  <span>صيغ أخرى:</span>
                                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                                  <div >

                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
             
                <div class="card_sal book_card">
                                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                                  <h1>كتاب إلكتروني</h1>
                                  <span>اربعون(كتاب الكتروني)</span>
                                  <br><br>
                                   <strong class="price">19.39ر.س.</strong>
                                  <p>شامل الضريبة</p>
                                  <div >
                                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                                  </div>    
                </div>
                <div class=" book_card">
                   
         </div>
                <div class="card_sal book_card">
                        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                          <h1>كتاب إلكتروني</h1>
                          <i class="fa fa-star  " ></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <br>
                          <span>عملية الحصول على العمل (كتاب الكتروني)</span>
                          <br><br>
                           <strong class="price">19.39ر.س.</strong>
                          <p>شامل الضريبة</p>
                          <span>صيغ أخرى:</span>
                          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                          <div >
                              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                          </div>    
        </div>
        <div class="card_sal book_card">
                <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
                  <h1>كتاب إلكتروني</h1>
                  <i class="fa fa-star  " ></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <br>
                  <span>الحصضور التنفيذي (كتاب الكتروني)</span>
                  <br><br>
                   <strong class="price">19.39ر.س.</strong>
                  <p>شامل الضريبة</p>
                  <span>صيغ أخرى:</span>
                  <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
                 
                  <div >
                      <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
                      <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
                      <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
                  </div>    
</div>
<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>
 
          <span>  (كتاب الكتروني)فن اللامبالاة </span>
          <br><br>
           <strong class="price">19.39ر.س.</strong>
          <p>شامل الضريبة</p>
          <span>صيغ أخرى:</span>
          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>    
</div>

<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>
          <i class="fa fa-star  " ></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <i class="fa fa-star "></i>
                                                 <br>
          <span>why the third floor  (كتاب الكتروني)</span>
          <br><br>
           <strong class="price">19.39ر.س.</strong>
          <p>شامل الضريبة</p>
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>             
</div>
<div class=" book_card">
        <br>
        <br>
</div>
<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>

          <span>انت كل اشيائي الجميلة  (كتاب الكتروني)</span>
          <br><br>
           <strong class="price">19.39ر.س.</strong>
          <p>شامل الضريبة</p>
          <span>صيغ أخرى:</span>
          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
         
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>    
</div>
<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>
          <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <br>
          <span>عودة شيرلوك هولمز  (كتاب الكتروني)</span>
          <br><br>
           <strong class="price">19.39ر.س.</strong>
          <p>شامل الضريبة</p>
          <span>صيغ أخرى:</span>
          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
         
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>    
</div>
<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>
          <i class="fa fa-star check " ></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <i class="fa fa-star check"></i>
                                                 <br>
          <span>ليتها تسال  (كتاب الكتروني)</span>
          <br><br>
          <strong class="price">ر.س.29.99</strong>
          <p>شامل الضريبة</p>
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>    
</div>
<div class="card_sal book_card">
        <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
          <h1>كتاب إلكتروني</h1>
          <i class="fa fa-star check " ></i>
          <i class="fa fa-star check"></i>
          <i class="fa fa-star check"></i>
          <i class="fa fa-star check"></i>
          <i class="fa fa-star check"></i>
          <br>
          <span>مغامرات شيرلوك هولموز(كتاب الكتروني)   (كتاب الكتروني)</span>
          <br><br>
           <strong class="price">19.39ر.س.</strong>
          <p>شامل الضريبة</p>
          <span>صيغ أخرى:</span>
          <a style="color: blue; font-size: 18px; font-weight: bold;"> كتاب مطبوع</a>
          <div >
              <button class="card_icon2" ><img src="svg/svgexport-54.svg"></button>
              <a href="sal.html"> <button class="card_icon add_card"><img  src="svg/cart-1.svg" ></button></a> 
              <button class="card_icon2"><img src="svg/svgexport-55.svg" ></button>
          </div>    
        </div>
        <div class="cate22">
           
            </div> 
            <div class="cate21">
                    عرض المزيد
                   
                </div>  
          
   
        <div class="cate23">
             
            </div>  
            
                <div class="cate25">
             اشتر من كتب إلكترونية على متجر جرير الإلكتروني
                    </div>   

                        </div>    
</div>

              
</section>
  

                <section class="section1">
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br>   <br><br><br><br><br><br><br><br><br><br><br>
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
<script src="js/main.js" ></script>
 <script src="js/cate.js" ></script>
 
</body>
</html>