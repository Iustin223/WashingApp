 <!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .nuaveti{
  text-align: center;
}
#aut{
  color: red;
  text-align: center;
}
    </style>
    <?php
        date_default_timezone_set('Europe/Bucharest');
        session_start();
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "proiect_PA";
        $conn = new mysqli($server, $username, $password, $database);
        $_SESSION["conn"] = $conn;
        if ($conn->connect_error) {
          die("Conexiune eșuată: " . $conn->connect_error);
        }
        $currentDateTime = date("Y-m-d H:i:s");
        $sql = "DELETE FROM programari WHERE data + INTERVAL durata MINUTE < '$currentDateTime'";
        $result = $conn->query($sql);
    ?>
    <title>Wash For Students</title>
    <link rel="stylesheet" href="./style.css" />
     <link href="index.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" data-tag="font"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font"/>
    <meta property="og:title" content="Wash For Students" />
    <link rel="icon" type="image/x-icon" href="./favicon.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/d2eea6fe40.js" crossorigin="anonymous"></script> 
    <style>
      .flatpickr-calendar{
  position: fixed;
}
.modal-content {
  position: absolute;
  top: 50%; /* Ajustează poziția verticală la 50% */
  left: 50%;
  transform: translate(-50%, -50%); /* Ajustează poziția orizontală și verticală la 50% */
  background-color: white;
  padding: 20px; /* Ajustează dimensiunea fereastrei prin modificarea padding-ului */
  border-radius: 10px;
  width: 600px;
  height: 700px; /* Ajustează înălțimea la 400px sau orice altă valoare */
  transition: height 0.5s ease; /* Adaugă o tranziție pentru animație */
}
    </style>
  </head>

    <body>
      <?php
      
      ?>
     <div>
      <div class="Pagina_Principala">
        <div class="antet">
          <header data-thq="thq-navbar" class="navigatie">
            <span class="logo">Wash For Students </span>
            <div data-thq="thq-navbar-nav" class="meniu">
              <nav class="linkuri">
                <span class="navigatie2"><a href="index.html">Acasă</a></span>
                <button type="button" id="openModalBtn" class="navigatie2">Programări</button>
                <span class="navigatie4"><a href="404.html">Contact</a></span>
                <span class="navigatie5"><a href="404.html">Actualizări</a></span>
              </nav>

              <div class="butoane">
                <?php
                    if(!$_SESSION["utilizator_autentificat"]){
                      echo "<button class=\"login button\"><a href=\"login.html\">Login</a></button>";
                    }
                    else
                      echo "<button class=\"login button\"><a href=\"logout.html\">Logout</a></button>";
                ?>
              </div>

            <div data-thq="thq-mobile-menu" class="meniu_telefon">
              <div class="navigatie_telefon">
                <div class="top1">
                  <span class="logo1">Home</span>
                </div>

                <nav class="linkuri1">
                  <span class="navigatie6">Acasa</span>
                  <span class="navigatie7">Programări</span>
                  <span class="navigatie8">Contact</span>
                  <span class="navigatie9">Actualizări</span>
                </nav>

                <div class="butoane1">
                  <button class="login1 button">Login</button>
                  <button class="register1 button">Register</button>
                  </div>

          </header>

        </div>

        <div class="titlu_mare">
          <div class="titlu_mare1">
            <div class="container1">
              <h1 class="titlu heading1">Wash For Students</h1>
              <span class="descriere_titlu">Fără griji și fără stres, programările nu au fost niciodată mai simple ! </span>
              <div class="descriere_titlu">
                <h1 class="descriere_titlu">Ora:</h1>
                <span id="ore1">00</span>
                <span>:</span>
                <span id="min1">00</span>
                <span>:</span>
                <span id="sec1">00</span>
                 </div>

            </div>

          </div>

        </div>

        <div class="continut">
          <div class="continut1">
            <div class="container2">
              <span class="text sectionTitle">
                <span>Detalii</span>
                <br />
              </span>

              <h2 class="titlu_sectiune_1 heading2">
                Despre conceptul "Wash For Students"
              </h2>

              <span class="text_sectiune_1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An de an, studenții care ajung să locuiască în căminele studențești din Brașov se lovesc de aceeași problemă - programarea la mașina de spălat din cămin, care până în momentul de față se folosește ori pe baza unui tabel în format Excel, ori prin comunicare pe grupul de WhatsApp. 
              </span>

              <span class="text_sectiune_1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aplicația Wash For Students este menită să sară în ajutorul tuturor studenților, aceștia putându-se programa în baza locurilor libere, acestea fiind la doar un click distanță - deplasarea nefiind necesară pentru verificare. De asemenea, aplicația conține și un sistem de sign-up/login, astfel că nu oricine poate folosi mașinile de spălat, eliminând astfel suspiciunea că persoanele care nu locuiesc în cămin ar putea accesa aplicația. 
              </span>

              <span class="text_sectiune_1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pe lângă sistemul de sign-up/login, există și un sistem de verificare a identității pentru a asigura o securitate sporită și pentru a preveni orice utilizare neautorizată a aplicației. Prin aceasta, ne propunem să oferim o soluție completă și de încredere pentru toți locuitorii căminelor.
            </span>

            </div>

            <img alt="image" src="pozaMemo.jpeg" class="pozaMemo">
          </div>

        </div>

        <div class="caracteristici">
          <div class="container3">
            <div class="caracteristici1">
              <div class="container4">
                <span class="text2 sectionTitle">
                  <span>Puncte Cheie</span>
                  <br />
                </span>

                <h2 class="titlu_caracteristici heading2">Puncte Cheie</h2>
                <span class="text_caracteristici  ">
                  Descopera beneficiile aplicatiei Wash For Students. 
                </span>

              </div>
              
              <div class="container5">
                <div class="dreptunghi">
                  <svg viewBox="0 0 1024 1024" class="cub">
                    <path
                      d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z">
                    </path>
                  </svg>
                  <div class="continut_dreptunghi">
                    <h3 class="text_dreptunghi heading3">
                      <span>Programari instant !</span>
                    </h3>
                    <span class="text_dreptunghi1">
                      <span>
                        In doar cateva click-uri, programarea dumneavoastra este inregistrata. 
                      </span>
                    </span>
                  </div>
                </div>                
                <div class="dreptunghi">
                  <svg viewBox="0 0 1024 1024" class="cub">
                    <path
                      d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"
                    ></path>
                  </svg>
                  <div class="continut_dreptunghi">
                    <h3 class="text_dreptunghi heading3">
                      <span>Usor de utilizat !</span>
                    </h3>
                    <span class="text_dreptunghi1">
                      <span>
                       Aplicatia are o interfata simpla, unde orice student se poate descurca. 
                      </span>
                    </span>
                  </div>
                </div>
                <div class="dreptunghi">
                  <svg viewBox="0 0 1024 1024" class="cub">
                    <path
                      d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"
                    ></path>
                  </svg>

                  <div class="continut_dreptunghi">
                    <h3 class="text_dreptunghi heading3">
                      <span>Sistem Sign-in</span>
                    </h3>
                    <span class="text_dreptunghi1">
                      <span>
                     Doar studentii pot accesa aplicatia noastra, folosindu-si contul institutional, prin sistemul nostru securizat de Sign-in AutoProtect 4.0.
                      </span>
                    </span>
                  </div>
                </div>
                <div class="dreptunghi">
                  <svg viewBox="0 0 1024 1024" class="cub">
                    <path
                      d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"
                    ></path>
                  </svg>
                  <div class="continut_dreptunghi">
                    <h3 class="text_dreptunghi heading3">
                      <span>Intrebari? Nelamuriri?</span>
                    </h3>
                    <span class="text_dreptunghi1">
                      <span>
                        Site-ul nostru iti ofera toate facilitatile pentru Wash For Students, dar daca doresti sa contactezi un administrator, o poti face oricand. 
                      </span>
                    
                    </span>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="faq">
          <div class="faq-container">
            <div class="faq1">
              <div class="container6">
                <span class="titlu6 sectionTitle">
                  <span>FAQ</span>
                  <br />

                </span>
                <h2 class="titlu7 heading2">Intrebări Frecvente</h2>
                <span class="text10">
                  <span>
                    Răspunsurile la intrebările frecvente despre Wash For Students. 
                  </span>

                  <br />
                  <span>
                    <span>
                      <span></span>
                      <span></span>
                    </span>

                    <span>

                      <span></span>
                      <span></span>
                    </span>

                  </span>

                  <span>
                    <span>
                      <span></span>
                      <span></span>
                    </span>

                    <span>
                      <span></span>

                      <span></span>
                    </span>

                  </span>

                </span>

              </div>

              <div class="container7" >
                <div class="container_intrebare">
                  <span class="text_intrebare heading4">
                    <span>Cum realizez o programare?</span>
                  </span>

                  <span class="text_intrebare1">
                    <span>
                      Poti realiza o programare accesand meniul "Programari" din bara de navigatie a site-ului.
                    </span>
                  </span>

                </div>

                <div class="container_intrebare">
                  <span class="text_intrebare heading4">
                    <span>Mi-am uitat parola. Ce fac?</span>
                  </span>

                  <span class="text_intrebare1">
                    <span>
                      Daca doresti sa iti resetezi parola, apasa pe meniul "Sign-up", apoi pe "Am uitat parola".
                    </span>

                  </span>

                </div>

                <div class="container_intrebare">
                  <span class="text_intrebare heading4">
                    <span>Am intampinat o problema, vreau sa o raportez.</span>

                  </span>

                  <span class="text_intrebare1">
                    <span>
                      Pentru orice problema sau nelamurire, iti stam la dispozitie apasand pe meniul "Contact".
                    </span>

                  </span>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="subsol">
          <footer class="subsol1">
            <div class="container8">
              <span class="logo2">WASH FOR STUDENTS  </span>
              <nav class="navigatie3">
                <span class="navigatie12"><a href="index.html">Acasă</a></span>
                <span class="navigatie22"><a href="">Programări</a></span>
                <span class="navigatie32"><a href="404.html">Contact</a></span>
                <span class="navigatie32"><a href="404.html" >Actualizări</a></span>
                <span class="navigatie42"> <a href="#" class="top">

                <button id="scrollButton" class="fas fa-arrow-up" onclick="scrollToTop()">
                </button>
                <style data-tag="default-style-sheet">

                  #scrollButton {
                    width: 50px;
                    height: 40px;
                    margin-bottom: 70px;
                    margin-right: 12px;
                    opacity: 0.80;
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                    width: 50px;
                    height: 40px;
                    margin-bottom: 70px;
                    margin-right: 12px;
                  }
                      </style>
                  
                </a>

              </span>

              </nav>

            </div>

            <div class="separator">

            </div>

            <div class="container9">
              <span class="text27">
                © 2023 Tech Titans, All Rights Reserved.
               </span>

            </div>

          </footer>

        </div>

      </div>

    </div>

    <div id="myModal" class="modal">
    
      <div class="modal-content" id="chenar">
      <div class="container">
            <h1>Programare Mașină de Spălat</h1>
    
          <!-- Selector pentru data și interval orar -->
          <form action="submit_programare.php" method="get">
              <div class="programari-list" id="listaProgramari" >
                <div class="label">
                    <p id="prima"><b>Alegeti data si ora</b></p>
                    
                </div>
                <div class="tabele">    
                  <!-- Selector pentru data -->
                  <input type="text" id="intervalOrar" class="flatpickr-input" name="interval">
                  <p id="doi"><b>Alegeti data si ora</b></p>
                  <!-- Selector pentru durata -->
                  <select class="custom-select" id="durata" name="durataa">
                    <option value="30"><b>30 minute</option>
                    <option value="60">1 oră</option>
                    <option value="120">2 ore</b></option>
                  </select>
                  <p id="trei"><b>Alegeti etajul</b></p>
                  <select class="custom-select" id="etaj" name="etajj">
                      <option value="1"><b>Parter</b></option>
                      <option value="2"><b>Etaj 1</b></option>
                      <option value="3"><b>Etaj 2</b></option>
                      <option value="4"><b>Etaj 3</b></option>
                      <option value="5"><b>Etaj 4</b></option>
                  </select>
                  
                </div>
                <button class="submit-button" id="submitProgramare">Submit</button>
              </div>
          </form>
    </div>
   
        <div id="phpp">
          <?php
            $var = $_SESSION["id_utilizator"];
            $sql = "SELECT * FROM programari WHERE id_user = '$var'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              echo "<div class=\"programeri\">";
              while ($row = $result->fetch_assoc()) {
                $d = date("Y-m-d", strtotime($row["data"])); 
                $h = date("H:i:s", strtotime($row["data"]));
                echo "<h3 >&nbspAveti o programare la data de ". $d . ", ora " .$h ."</h3>"; 
                echo "<h3 id=\"programaree\"> pe durata de ";
                if($row["durata"] == 30)
                  echo "30 minute ";
                else if($row["durata"] == 60)
                  echo "1 ora "; 
                else
                  echo "2 ore ";
                if($row["id_masina"] == 1)
                  echo "la parter ";
                else
                  echo "la etajul ". $row["id_masina"]-1 ." </h3>" ;
              }
              echo "</div><a href=\"stergere.php\" id=\"sterge\"> <b>Stergeti programarile</b> </a>";
            } 
            else if($_SESSION["id_utilizator"] != 0 ) {
              echo "<h3 class=\"nuaveti\">Nu aveti nici o programare.</h3>";
            }
            else if($_SESSION["id_utilizator"] == 0 ) {
              echo "<h3 id=\"aut\">Autentifica-te pentru a inregistra o programare !</h3>";
            }
           
          ?>
        </div>
          <span class="close" id="closeModalBtn">&times;</span>
          
    
        <!-- Include biblioteca Flatpickr -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
        <script>
            var body = document.querySelector('#body');
            var container = document.querySelector('.container');
            var listaProgramari = document.getElementById('listaProgramari');
            var intervalOrar = document.getElementById('intervalOrar');
            var durataSelect = document.getElementById('durata');
    
            // Adaugă evenimente pentru afișarea/ascunderea listei de programări
            container.addEventListener('mouseover', function () {
                listaProgramari.style.display = 'block';
                
            });
    
            container.addEventListener('mouseout', function (event) {
                var tabel = document.querySelector('.flatpickr-calendar');
                if (!container.contains(event.relatedTarget) && !listaProgramari.contains(event.relatedTarget) && !intervalOrar.contains(event.relatedTarget) && !durataSelect.contains(event.relatedTarget) && !tabel.contains(event.relatedTarget)) {
                    listaProgramari.style.display = 'none';
                    listaProgramari.style.position='flexed';
                     
                }
            });
            
    
            // Inițializează selectorul Flatpickr pentru data și interval orar
            flatpickr("#intervalOrar", {
                enableTime: true,
                dateFormat: "d/m/Y H:i",
                time_24hr: true,
                enableSeconds: false,
                minDate: "today",
            });
        </script>

      </div>

  </div>
    
   <script src="js/popup.js"></script>
    <script src="js\ceas.js"></script>
    <script src="js\dark_mode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js">
    </script>

<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>

    <script
    ></script>

  </body>
  
</html>