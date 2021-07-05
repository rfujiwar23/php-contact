<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/contact.css">
  <link rel="stylesheet" href="../../css/contact-main.css">
  <link rel="stylesheet" href="../../css/normalize.css"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/5c2738e24d.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="../../image/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../image/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../image/favicon/site.webmanifest">
  <title>株式会社インベード | INVADE Co., Ltd.</title>
  <script>
     $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
  </script>
</head>
<body>
  <!-- ======= Header ======= -->
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                <a href="../../index.html"><img src="../../../image/invade-logo.svg"></a>
               </div>
               <div class="menu">
                <ul>
                  <li><a href="../index.html">Home</a></li>
                  <li><a href="../about/index.html">About</a></li>
                  <!-- <li><a href="../business/index.html">Business</a></li> -->
                  <li><a href="../project/index.html">Project</a></li>
                  <li class="contact-nav"><a href="input.php">Contact</a></li>
               </ul>
               </div>
            </nav>
  <!-- ======= Hero Section ======= -->
    <!-- ======= title Section ======= -->
    <section id="title">
      <div class="title-container" data-aos="fade-up" style="padding-top:80px;">
        <h1>お問い合わせ</h1>
        <!-- <a href="#business" class="btn-get-started scrollto"><i class="fas fa-chevron-down"></i></a> -->
      </div>
    </section><!-- End title -->
    <div class="path-strip">
      <div class="container">
        <p class="path"><a href="../index.html">Top</a> &gt; Contact</p>
      </div>
    </div>

  <main id="main">


    <!-- ======= About Section ======= -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12">

          </div>



        </div>

        <div class="row">



          <!-- <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="col-lg-6 offset-lg-3">
                <p>スマートフォン等のメールアドレスでご登録の場合、迷惑メールに届くことがあります。ご注意ください。</p>
                <h5>【個人情報の取り扱いについて】</h5>
                <p>送信いただいた情報は、不正アクセス、個人情報の紛失、破壊、改ざん及び漏洩等の予防等、適切な管理に努め、お問い合せ内容への返信以外の用途には利用いたしません。</p>

              </div>

              <div class="text-center"><button type="submit">送信する</button></div>
            </form>
          </div> -->

          <!-- <a href="http://invade.co.jp/script/mailform/contact/">お問い合わせフォーム</a> -->
          <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 col-sm-12 contact-us">
            <!-- <form action="mail.php" method="POST">
              <p>名前</p> <input type="text" name="name">
              <p>メール</p> <input type="text" name="email">
              <p>電話</p> <input type="text" name="phone">
              <p>件名</p> <input type="text" name="topic">
              <p>内容</p><textarea name="message" rows="6" cols="25"></textarea><br />
              <div class="info-box col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 my-4">
                <h2><span>お問い合わせに関する注意事項</span></h2>
                <ul>
                  <li>ご記入いただいた個人情報は、お問い合わせへの回答、情報提供のために使用させていただきます。</li>
                  <li>個人情報を正しくご記入いただけない場合やお問い合わせ内容によっては、回答できない場合がございます。</li>
                  <li>お問い合わせ内容によっては、回答にお時間をいただく場合がございます。</li>
                  <li>回答はお客様個人宛に送るものですので、転載・転送等の二次利用は固くお断りいたします。</li>
                </ul>
              </div>
              <input type="submit" value="送信" class="btn btn-primary"><input type="reset" value="クリア" class="btn btn-secondary">
            </form> -->

            <!-- <p>大変申し訳ございませんが、現在お問合せフォームのメンテナンス中なので、直で送信お願いいたします。</p>
            <a href="mailto:info@invade.co.jp">info@invade.co.jp</a> -->



            <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
              <div>
                <div class="block">
                  <label>お名前<span>※</span></label>
                  <input type="text" name="name" placeholder="山田太郎" value="">
                </div>
                <div class="block">
                  <label>ふりがな<span>※</span></label>
                  <input type="text" name="furigana" placeholder="やまだたろう" value="">
                </div>
                <div class="block">
                  <label>メールアドレス<span>※</span></label>
                  <input type="text" name="email" placeholder="info@invade.co.jp" value="">
                </div>
                <div class="block">
                  <label>電話番号</label>
                  <input type="text" name="tel" placeholder="0000000000" value="">
                </div>
                <div class="block">
                  <label>内容<span>※</span></label>
                  <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                </div>
              </div>

              <h6><span>※</span>は必須</h6>

              <div class="info-box col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 my-4">
                <h2><span>お問い合わせに関する注意事項</span></h2>
                <ul>
                  <li>ご記入いただいた個人情報は、お問い合わせへの回答、情報提供のために使用させていただきます。</li>
                  <li>個人情報を正しくご記入いただけない場合やお問い合わせ内容によっては、回答できない場合がございます。</li>
                  <li>お問い合わせ内容によっては、回答にお時間をいただく場合がございます。</li>
                  <li>回答はお客様個人宛に送るものですので、転載・転送等の二次利用は固くお断りいたします。</li>
                </ul>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">確認画面へ</button>
              </div>


            </form>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">



          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <!-- <h4>ウェブサイト内</h4> -->
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../about/index.html">ABOUT</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">BUSINESS</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="pages/news/">NEWS</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="input.php">CONTACT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PRIVACY POLICY</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>サービス</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.kamisma.com" target="_blank">KAMISMA BEAUTY</a> <i class="fas fa-external-link-alt"></i></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">KAMISMAX</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="https://nile.inc" target="_blank">NILE</a> <i class="fas fa-external-link-alt"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>インベード株式会社</h4>
            <p><i class="fas fa-tenge"></i>104-0061 東京都中央区銀座6-10-1 GINZA SIX<br>
              EL: 03-5962-8585<br> email: <a href="mailto:info@invade.co.jp">info@invade.co.jp</a></p>


          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Invade Co. Ltd</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>

</html>
