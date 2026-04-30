<?php /* Template Name: Home Page Template */ get_header();?>

  <!-- main -->
  <main>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img class="img-fluid hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo" />
          </div>
        </div>
      </div>
    </section>
    <!-- Concept -->
    <section class="concept-section">
      <div class="container container-pr">
        <div class="row align-items-center gx-md-5">
          <div class="col-xl-5 position-relative">
            <img class="img-fluid concept-vector" src="<?php echo get_template_directory_uri(); ?>/assets/images/concept-vector.svg" alt="vector" />
            <h2 class="main-heading">הקונספט<br>
              <span class="font-light">של אומאמי</span>
            </h2>
            <p>
              מתוק, חמוץ, מר, מלוח ואומאמי. הטעם החמישי, האומאמי, הוא אמנם
              הצנוע שבטעמים ועם זאת הוא ללא ספק המיוחד והמרתק מכולם. להבדיל
              מטעמים אחרים, האומאמי אינו משנה את טעם המנה, אלא מחדד את כל יתר
              הטעמים הקיימים בה, יוצר ביניהם הרמוניה יוצאת דופן והופך את
              הארוחה כולה לשלמה, עוצמתית ומענגת.
            </p>

            <ul class="d-flex gap-2 mt-lg-5 pt-4 pt-lg-5">
              <li>
                <h6>6</h6>
                <p>בניינים</p>
                <span class="badge">גינת ירק</span>
              </li>
              <li>
                <h6>31</h6>
                <p>קומות</p>
                <span class="badge">אוהבי בישול</span>
              </li>
              <li>
                <h6>613</h6>
                <p>דירות</p>
                <span class="badge">אירוח</span>
              </li>
              <li>
                <h6>4-5</h6>
                <p>חדרים</p>
              </li>
            </ul>
          </div>
          <div class="col-xl-7">
            <img class="img-fluid w-100 mt-4 mt-lg-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/concept.png" alt="status" />
          </div>
        </div>
      </div>
    </section>




    <!-- Rooms -->
    <section class="room-section">
      <div class="container container-pr position-relative">
        <div class="d-flex flex-column flex-md-row align-items-md-end gx-md-5">
          <div>
            <h2 class="main-heading">הדירות <br>
              <span class="font-light">של אומאמי</span>
            </h2>
            <img class="room-circle-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rooms-bg.png" alt="">
          </div>
          <div>
            <nav class="nav-tabs mb-4">
              <ul class="tab-list">
                <li class="tab-item active"><a href="javascript:void(0)"><img class="ms-2"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/4_tab.svg" alt="">4 חדרים</a></li>
                <li class="tab-item"><a href="javascript:void(0)"><img class="ms-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/5_tab.svg"
                      alt="">5 חדרים</a></li>
                <li class="tab-item"><a href="javascript:void(0)#"><img class="ms-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/6_tab.svg"
                      alt="">6 חדרים</a></li>
              </ul>
            </nav>
          </div>

        </div>
        <div class="row justify-content-end gx-md-5">
          <div class="col-md-12 col-xxl-11 mb-4">
            <div id="room" class="owl-carousel">
              <div class="item">
                <div class="row align-items-center gx-md-5">
                  <div class="col-md-6">
                    <img class="img-fluid concept-vector" src="<?php echo get_template_directory_uri(); ?>/assets/images/room.png" alt="vector" />
                  </div>
                  <div class="col-md-6">
                    <h3>דירת 4 חדרים סוג 1</h3>
                    <p>
                      ממוקמת בחזית המבנה, עם 24 מ״ר שטח מרפסת וסלון מפנק
                      במיוחד, לאנשים שמחוברים לנוף
                    </p>

                    <ul class="d-flex gap-2 mt-4 mb-5">
                      <li>
                        <span class="badge">מרפסת</span>
                      </li>
                      <li>
                        <span class="badge">למשפחה עם 2 ילדים</span>
                      </li>
                      <li>
                        <span class="badge">הכל במקום</span>
                      </li>
                    </ul>

                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">לצפייה בשרטוט
                      הדירה</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row align-items-center gx-md-5">
                  <div class="col-md-6">
                    <img class="img-fluid concept-vector" src="<?php echo get_template_directory_uri(); ?>/assets/images/room.png" alt="vector" />
                  </div>
                  <div class="col-md-6">
                    <h3>דירת 4 חדרים סוג 1</h3>
                    <p>
                      ממוקמת בחזית המבנה, עם 24 מ״ר שטח מרפסת וסלון מפנק
                      במיוחד, לאנשים שמחוברים לנוף
                    </p>

                    <ul class="d-flex gap-2 mt-4 mb-5">
                      <li>
                        <span class="badge">מרפסת</span>
                      </li>
                      <li>
                        <span class="badge">למשפחה עם 2 ילדים</span>
                      </li>
                      <li>
                        <span class="badge">הכל במקום</span>
                      </li>
                    </ul>

                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">לצפייה בשרטוט
                      הדירה</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Status -->
    <section class="status-section"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/bg-status-section.png'); background-size:cover; background-repeat:no-repeat;">
      <div class="container container-pr">
        <div class="row align-items-center gx-md-5">
          <div class="col-md-7 order-2 order-md-1">
            <img class="img-fluid w-100 mt-5 mt-md-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/status.png" alt="status" />
          </div>
          <div class="col-md-5 order-1 order-md-2">
            <span class="badge badge-dark mb-5">
              <img class="ms-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/settings-light.png" alt=""> הגדרות
            </span>
            <h2 class="main-heading mb-5">
              סטטוס <br />
              <span class="fw-normal"> התקדמות </span>
            </h2>

            <div class="d-flex justify-content-between">
              <ul class="status-block">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt="check" /> קבלת היתר
                  בנייה
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt="check" /> בניית שלד
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt="check" /> הכנות לטיח
                </li>
                <li>
                  <img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" alt="check" />
                  הכנות לטיח
                </li>
                <li>
                  <img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" alt="check" />
                  הכנות לטיח
                </li>
                <li>
                  <img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.svg" alt="check" />
                  הכנות לטיח
                </li>
              </ul>
              <ul class="status-link">
                <li><a class="active" href="#">בניין A</a></li>
                <li><a href="#">בניין B</a></li>
                <li><a href="#">בניין C</a></li>
                <li><a href="#">בניין D</a></li>
                <li><a href="#">בניין E</a></li>
                <li><a href="#">בניין F</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Enviroment -->
    <section class="enviroment-section">
      <div class="container container-pr">
        <div class="row">
          <div class="col-md-12">
            <h2 class="main-heading">הסביבה</h2>
            <p>
              הטעם האמיתי בחוויה שמשלבת את כל החושים פארק ירוק ששטחו 50 דונם
              ובו תוכלו ליהנות מטיולים רגליים, אחה"צ עם הילדים וחוויות חדשות
              ומרתקות בטבע הירוק עם כל המשפחה.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="javascript:void(0)" class="image-block">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/envoirnment/3.jpeg" alt="1" />
              <h6>ליהנות מטיולים רגליים</h6>
            </a>
          </div>
          <div class="col-md-4">
            <a href="javascript:void(0)" class="image-block">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/envoirnment/2.jpeg" alt="1" />
              <h6>ליהנות מטיולים רגליים</h6>
            </a>
          </div>
          <div class="col-md-4">
            <a href="javascript:void(0)" class="image-block">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/envoirnment/1.jpeg" alt="1" />
              <h6>ליהנות מטיולים רגליים</h6>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Map -->
    <section class="map-section position-relative">
      <div class="container container-pr">
        <div class="row position-relative" style="z-index: 1;">
          <div class="col-md-12">
            <h2 class="main-heading">המיקום</h2>
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" alt="map" />
          </div>
        </div>
        <img style="position: absolute; top: 0px; z-index: 0;" src="<?php echo get_template_directory_uri(); ?>/assets/images/star_map.png" alt="">
        <img style="position: absolute; bottom: 0px; left:0px; z-index: 0;" src="<?php echo get_template_directory_uri(); ?>/assets/images/circle_map.png" alt="">
      </div>
    </section>
    <!-- Contact -->
    <section class="contact-section">
      <div class="container container-pr">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-inner">
              <h2 class="main-heading text-white">יצירת קשר</h2>
              <p>הצוות שלנו ישמח לענות על כל שאלה שעולה לך.</p>
              <form>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="שם מלא*" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="מספר טלפון*" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="אימייל*" />
                    </div>
                  </div>
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                  <label class="form-check-label" for="exampleCheck1">אני מסכים/ה לקבל מקרסו נדל"ן או מי מטעמה, דבר
                    פרסומת,
                    לרבות הצעות למבצעים בקשר עם פרויקטים והצעות אחרות, וזאת
                    באמצעים אלקטרוניים (SMS, דוא"ל, חיוג אוטומטי ועוד), פרטיך
                    יישמרו ו/או יעשה בהם שימוש בהתאם למדיניות הפרטיות של
                    החברה.</label>
                </div>
                <div class="text-start mt-4">
                  <button type="submit" class="btn btn-light fw-bold">שליחה <img class="img-fluid me-1"
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow_right_contact.svg" alt=""></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- More Projects -->
    <section class="project-section">
      <div class="container container-pr">
        <div class="row">
          <div class="col-md-12">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="main-heading">פרויקטים <span class="font-light">נוספים</span></h2>
              </div>
              <div class="col text-start"> <a class="dropdown-item" href="#">פרויקטים למגורים <img class="me-2"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/min-right-footer-arrow.svg" alt=""></a>
              </div>
            </div>
            <div id="feature" class="owl-carousel">
              <!-- Multiple items -->
              <div class="item">
                <a href="javascript:void(0)">
                  <img class="project-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects.jpg" alt="Project Kiryat Ono" />
                  <div class="badge"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project_mail_icon.svg" />בתכנון</div>
                </a>
                <h6 class="mt-3 mb-0">קריית אונו</h6>
                <h1 class="mb-1">אומאמי</h1>
                <p>
                  התאמה לסביבת המגורים התל אביבית התוצאה היא שילוב מרשים של
                  נוחות, איכות, נוסטלגיה וחדשנות.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal drawing-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body py-4 px-5">
            <button type="button" class="btn-close mb-4" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="row align-items-center gx-md-5">

              <div class="col-lg-5 col-xl-4 mt-5 order-1">
                <h3 class="mb-4">דירת 5 חדרים סוג 1</h3>
                <div class="row align-items-start">
                  <!-- 1  -->
                  <div class="col-12 col-sm-5 col-lg-12">
                    <ul class="d-flex gap-4 mb-3 justify-content-between">
                      <li>
                        <h6>סוג הנכס</h6>
                        <p>דירה</p>
                      </li>
                      <li>
                        <h6>קומה</h6>
                        <p>בין 7-16</p>
                      </li>
                      <li>
                        <h6>חדרים</h6>
                        <p>5</p>
                      </li>
                    </ul>

                    <ul class="d-flex gap-4 justify-content-between">
                      <li>
                        <h6>טיפוס</h6>
                        <p>C3a</p>
                      </li>
                      <li>
                        <h6>שטח המרפסת</h6>
                        <p>14.5 מ״ר</p>
                      </li>
                      <li>
                        <h6>שטח הדירה</h6>
                        <p>123 מ״ר</p>
                      </li>
                    </ul>
                  </div>
                  <!-- 2 -->
                  <div class="col-12 col-sm-5 col-lg-12">
                    <h6 class="mt-0 mt-lg-4">שטח הדירה</h6>


                    <ul class="d-flex flex-wrap gap-3 mt-3 mb-5">
                      <li>
                        <span class="badge">למשפחה עם 2 ילדים</span>
                      </li>
                      <li>
                        <span class="badge">הכל במקום</span>
                      </li>
                      <li>
                        <span class="badge">קולינרי</span>
                      </li>
                      <li>
                        <span class="badge">מרפסת</span>
                      </li>
                      <li>
                        <span class="badge">קהילתי</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-sm-2 col-lg-12 mt-0 mt-lg-5">
                    <p class="mb-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf_download.svg" alt=""> PDF להורדה</p>
                    <p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/share.svg" alt=""> שיתוף</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-xl-8 order-2 order-lg-0">
                <img class="circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/drawing.png" alt="drawing" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php get_footer();?>