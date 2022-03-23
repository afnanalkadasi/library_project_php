<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-libirty-details</title>
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
                         

        <section class="section">

                        <ul class="breadcrumb">
                                        <li><a href="#">الرئيسية</a></li>
                                        <li><a href="#">الكتب العربية</a></li>
                                        <li><a href="#">    كتب الكترونية </a></li>
                                        <li>  لأنك الله (كتاب إلكتروني)</li>
                        </ul>
                      
                <div class="row">
                                <div  class=" div1 ">
                                                <div class="div_ch">
 
                                                                <div class="column_im2">
                                                                   <img src="img/book (1).jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                                                                 </div>

                                                                 <div class="row_im">
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (1).jpg" style="width:100%"  onclick="openModal();currentSlide(1)">
                                                                                </div>
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (2).jpg" style="width:100%"  onclick="openModal();currentSlide(2)" >
                                                                                </div>
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (3).jpg" style="width:100%"  onclick="openModal();currentSlide(3)" >
                                                                                </div>
                                                                </div>
                                                </div>
                                                               
                                                               <div id="myModal_im" class="modal_im">
                                                                 <span class="close_im cursor" onclick="closeModal()">&times;</span>
                                                                 <div class="modal-content_im">
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (1).jpg" style="width:100%">
                                                                   </div>
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (2).jpg" style="width:100%">
                                                                   </div>
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (3).jpg" style="width:100%">
                                                                   </div>
                                                                
                                                                   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                                                   <a class="next_im" onclick="plusSlides(1)">&#10095;</a>
                                                               
                                                               <div class="line_im"></div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (1).jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                                                                   </div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (2).jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                                                                   </div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (3).jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                                                               
                                </div>
                                <div class="div2">
                                      <div class="ch_div2">
                                          <h2> لأنك الله (كتاب إلكتروني)</h2>
                                        <a>عرض المزيد<img src="svg/svgexport-51.svg" width="15px" height="15px"></a>
                                        <br> <strong class="price">19.39ر.س.</strong>
                                    <p class="p_lig">شامل الضريبة</p>
                                      </div>
                                      <div class="ch_div2_l">
                                          <p class="p_lig">وحدة البيع Each</p>
                                         <div>
                                            <i class="fa fa-star check " ></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            &nbsp; &nbsp;
                                          <a>(15 المراجعات)</a>
                                         </div>
                                         <div class="p_lig">
                                           رقم الصنف JBB410156 &nbsp; &nbsp; رقم المتج 4
                                         </div>
                                      </div>
                                       <h4> الصيغ المتوفرة</h4>
                                      <div class="ch_div2_b">
                                        <div class="it_r">
                                            <input type="radio" checked > &nbsp;كتاب الكتروني
                                           <br>
                                            <input type="radio" > &nbsp;كتاب مطبوع
                                        </div>
                                        <div class="it_l">
                                            <strong class="price">12.99ر.س.</strong>
                                             <p>شامل الضريبة</p>
                                             <strong class="price">17.25ر.س.</strong>
                                             <p>شامل الضريبة</p>
                                        </div>
                                      </div>
                                </div>
                                <div class="div3">
                                      <div class="div3_d1"> 
                                        <div class="note">
                                                        <p><strong>ملاحظة:</strong> سيتم إضافة هذا الكتاب الإلكتروني الى مكتبتك في قارئ جرير
                                                                <span id="dots">.</span><span id="more"> سيتم إضافة هذا الكتاب الإلكتروني الى مكتبتك في قارئ جرير</span></p>
                                                        <a onclick="myFunction()" id="myBtn" style="color: blue; cursor: pointer;" > اقرا المزيد</a>
                                                </div>
                                               
                                                <div class="sal_but">
                                             
                                                        <select>
                                                          <option value="">1</option>
                                                          <option value="">2</option>
                                                          <option value="">3</option>
                                                        </select>
                                                
                                                      <div>
                                                         <a href="sal.html">   <button class="add_bt add_card"><img  src="svg/cart-1.svg" style="margin-left: 5px;">اضف الى السلة</button></a>
                                                      </div>
                                                </div>
                                                <div class="ico_bt">
                                                    <span><img src="svg/svgexport-23 (2).svg" > تسوق آمن<img src="svg/svgexport-9 (2).svg" ></span>
                                                    <span><img src="svg/svgexport-10 (2).svg" > أصلي ومضمون<img src="svg/svgexport-9 (2).svg" ></span>
                                                    <span><img src="svg/svgexport-24 (2).svg" > شحن سريع ومجاني<img src="svg/svgexport-9 (2).svg" ></span>
                                                </div>
                                                        <hr>
                                                      <div class="div3_d2">
                                                          <button class="bt_svg"><img src="svg/svgexport-31 (1).svg" >مشاركة</button>
                                                          <button class="bt_svg"><img src="svg/svgexport-3 (2).svg" >المفضلة</button>
                                                          <button class="bt_svg"><img src="svg/svgexport-55.svg" width="17px" height="17px" >مقارنة</button>
                                                      </div>
                                        </div>
                                       
                         
                
                </div>
     </section>
     <section class="section_div">
       <p>
         كتاب يتحدث عن بعض أسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف أن يكون الكتاب مناسبا للمحتاج والمريض والسليم
       </p>
     </section>
   
            <section class="section1" dir="rtl" style="overflow-x: auto; ">
                        <div  >
                            <h2 class="section-title">المواصفات</h2>
                                        <table>                                           
                                          <tr>
                                             <td>رقم الصنف</td>
                                             <td>JBB410156</td>
                                          </tr>
                                          <tr>
                                            <td>رقم المنتج</td>
                                            <td>4</td>
                                          </tr>
                                          <tr>
                                            <td>المولف</td>
                                            <td>علي جابر الفيفي</td>
                                          </tr>
                                          <tr>
                                                        <td>الناشر</td>
                                                        <td>  دار الحضارة للنشر والتوزيع</td>
                                           </tr>
                                           <tr>
                                                        <td>تاريخ النشر</td>
                                                        <td>2016</td>
                                            </tr>
                                            <tr>
                                                        <td>صيغة الكتاب</td>
                                                        <td>Ebook</td>
                                        </tr>
                                        <tr>
                                                        <td> عدد الصفحات</td>
                                                        <td>  182</td>
                                        </tr>
                                        <tr>
                                                        <td> وزن الشحن(كجم)</td>
                                                        <td> 0.0100 </td>
                                        </tr>
                                        <tr>
                                                        <td>صيغة الملف</td>
                                                        <td>  ePub</td>
                                        </tr>
                                        <tr>
                                                        <td>صيغة الكتاب</td>
                                                        <td>عربي  </td>
                                        </tr>
                                        </table>
                                      </div>
                                      <div class="btn_to">
                                        عرض اقل  <img src="svg/svgexport-31 (2).svg" width="15px" height="15px">
                                      </div>
                </section>
                <hr>

                <section class="section2">
                  <div class="tab2">
                      <h2 class="section-title">مراجعات العملاء</h2>
                    <button class="butn_tab" >+ اكتب مراجعاتك </button>
                  </div>
                    <table>
                     
                        <tr>
                          <td >
                            <h3>good</h3>
                            <p>من قبل reem</p>
                          </td>
                          <td></td>  <td></td>
                          <td>2021/11/16</td>
                        </tr>
                        <tr>
                          <td>Good</td>
  <td></td>  <td></td>                          <td></td>
                        </tr>
                        <tr>
                            <td>
                              <h3>كتاب رائع</h3>
                              <p>من قبل خالد ابو جميلة</p>
                            </td>
                            <td></td>  <td></td>
                    <td>2021/9/25</td>
                          </tr>
                          <tr>
                            <td>جميل جداً</td>
                            <td></td>
                            <td></td>  <td></td>
                          </tr>
                          <tr>
                              <td>
                                <h3> لانك الله</h3>
                                <p>من قبل باسل </p>
                              </td>
                              <td></td>  <td></td>
                              <td>2021/9/20</td>
                            </tr>
                            <tr>
                              <td> جميل جداً ومفيد</td>
                              <td></td>  <td></td>
                              <td></td>
                            </tr>
                      </table>   
                      <div class="btn_to">
                          اظهار جميع المراجعات(15)  &nbsp;  <strong>&#10095;</strong>
                        </div>                   
                    </section>
                    <hr>
<section class="product">
  
  <h2 class="section-title" > منتجات مشابهة</h2>
  <div class="row ">
      <div class="card_sal">
            <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a>  
              <h1>الصلاة وحكم تاركها</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
              
             
      </div>
      <div class="card_sal">
               <a href="details.html"><img class="im_book" src="img/book (1).jpg" ></a> 
              <h1>الله</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
           
          
      </div>

      <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>علامات القيامة الكبرى مجلد مقاس صغير</h1>
             
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
         
           
      </div>

      <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>ويبدا العد التنازلي</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
            
           
      </div>
      <div class="card_sal">
                  <img class="im_book" src="img/book (1).jpg" >
                  <h1>(ضعف الامة النفسية المشكلة )</h1>
                 
                   <strong class="price">19.39ر.س.</strong>
                  <p>شامل الضريبة</p>
               
          </div>
          <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>جهنم الصغرى</h1>
             <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
           
      </div>
</div>
</section>
<section>
  <br>
  <br>
  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>
</section>
<br>
    </main>
    <footer>
      <div class="row">
              <div class="fact-col">
                      
                      <h3> انضم الى نشرتنا البريدية</h3>
                      
                      <form class="fo_form">
                      <input type="email" class=" input_em" placeholder="ادخل بريدك الالكتروني ">
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
<script src="js/script.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>