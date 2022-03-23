<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/check_style.css" />
   
    
    <title>checkout</title>
  </head>
  <body>
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
                                  <input type="search" name="" placeholder="البحث" id="search-box" >
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
      <section>
    <form action="#" class="form">
      <h1 class="text-center">تاكيد التسوق</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="معلوماتك"></div>
        <div class="progress-step" data-title="الاتصال"></div>
        <div class="progress-step" data-title="التحقق"></div>
        <div class="progress-step" data-title=" تم الفحص"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">أسم المستخدم</label>
          <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
          <label for="position">العنوان</label>
          <input type="text" name="position" id="position" />
        </div>
        <div class="input-group">
          <label for="dob">  تاريخ الميلاد</label>
          <input type="date" name="dob" id="dob" />
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">التالي</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="phone">رقم الهاتف</label>
          <input type="text" name="phone" id="phone" />
        </div>
        <div class="input-group">
          <label for="email">البريد الالكتروني</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
          <div class="input-group">
              <label for="password">رمز السر</label>
              <input type="password" name="password" id="password" />
            </div>
            <div class="input-group">
              <label for="confirmPassword">التحقق من الرمز </label>
              <input
                type="password"
                name="confirmPassword"
                id="confirmPassword"
              />
            </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="#" class="btn btn-next">التالي</a>
        </div>
      </div>
      <div class="form-step">
          <div>
              <a  class="btn_scc ">تهانينا تم التسوق بنجاح</a>
            </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">السابق</a>
          <a href="index.html" class="btn"> موافق</a>
        </div>
      </div>
    </form>
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
                                        <img src="svg/svgexport-58.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-59.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-60.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-61.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-62.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-63.svg" class="nav_icon">
                                    </a>
                                    <a href="#" class="footer_social" target="_blank">
                                            <img src="svg/svgexport-64.svg" class="nav_icon">
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

    <script src="js/script.js" ></script>
    <script src="js/main.js"></script>
    <script src="js/cate.js"></script>
  </body>
</html>
