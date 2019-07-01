<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online poslovi portal</title>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <link rel="shortcut icon" href="img/job.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">


    <?php
include 'navBar.php';
include 'signinEmployerModals.php';
?>

    <div class="container-fluid "
        style="background-image: url('img/mainBackg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="hero" style=" color:whitesmoke;">
            <h1 style="padding:50px; font-size: 100px;"><strong>DOGADJAJI</strong></h1>
            <div class="col-md-9">
                <h4>Februar</h4>
                <hr>
                <div class="row">
                    <div class="col-md-4 div1">
                        <img src="img/s1.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>Sertifikovani knjigovođa za dvojno knjigovodstvo (IV generacija)</h5>
                            <p>01. januara 2019. godine je ukinuto prosto knjigovodstvo i stupila
                                je na snag... <button id="myBtn" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">Biznis i Ekonomija</span>
                        </div>
                    </div>
                    <div class="col-md-4 div1">
                        <img src="img/s2.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>PMP® i CAPM® sertifikacija - pripremni kurs</h5>
                            <p>Svi zainteresovani za PMP® i CAPM® sertifikaciju
                                Trajanje: 3 dana... <button id="myBtn1" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">Biznis i Ekonomija</span>
                        </div>
                    </div>
                    <div class="col-md-4 div1">
                        <img src="img/s3.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>Unapređenje procesa proizvodnje Value Stream Mapping metodom</h5>
                            <p>Dok posmatrate procese u kompaniji čini Vam se da ne mogu da se izvedu na bol... <button
                                    id="myBtn2" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">Biznis i Ekonomija</span>
                        </div>
                    </div>
                </div>
                <br>
                <h4>Mart</h4>
                <hr>
                <div class="row">
                    <div class="col-md-4 div1">
                        <img src="img/sk4.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>Job Fair - Tvoja karijera počinje ovde)</h5>
                            <p>Podrška u karijeri je jedna od glavnih usluga koje organizacija BEST nudi stud... <button
                                    id="myBtn4" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">Biznis i Ekonomija</span>
                        </div>
                    </div>
                    <div class="col-md-4 div1">
                        <img src="img/s5.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>Linux L1-2: Bash shell scripting</h5>
                            <p>Na ovoj obuci polaznici uče pravljenje izvršnih skriptova (programa) koji ... <button
                                    id="myBtn5" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">IT i Tehnologija</span>
                        </div>
                    </div>
                    <div class="col-md-4 div1">
                        <img src="img/s6.png" width="300" height="150">
                        <br>
                        <div class="description">
                            <h5>Microsoft Windows Server 2016 - obuka</h5>
                            <p>BootCamp MCSA Windows Server 2016 obuka sastavljena je od 17 odabranih... <button
                                    id="myBtn6" class="btn btn-info">Vise...</button></p>
                            <span class="location"><i class="glyphicon glyphicon-map-marker"></i>Beograd</span>
                            <span class="label label-16">IT i Tehnologija</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-3">
                <br>
                <video width="100%" controls id="myvideo">
                    <source src="img/job1.mp4" type="video/mp4">
                    <source src="job1.ogg" type="video/ogg">
                </video>
                <br>
                <br>
                <video width="100%" controls id="myvideo">
                    <source src="img/job2.mp4" type="video/mp4">
                    <source src="job2.ogg" type="video/ogg">
                </video>
                <br>
                <br>
                <div class="event-wrapper banner">
                    <em>Preporuceno</em>
                    <img src="img/s10.png" width="300" height="150">
                    <br>
                    <br>
                    <img src="img/s11.png" width="300" height="150">
                </div>
            </div>
        </div>

    </div>


    <div id="myModal1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close1">&times;</span>
                <h2>PMP® i CAPM® sertifikacija - pripremni kurs</h2>
            </div>
            <div class="modal-body">
                <p>Polaznici: Svi zainteresovani za PMP® i CAPM® sertifikaciju
                    Trajanje: 3 dana (24 PDU poena)

                    Sadržaj kursa:

                    1. Pet PM grupa procesa i deset PM oblasti znanja, predstavljeno po sledećim celinama:
                    - Osnove upravljanja projektima
                    - PM procesi
                    - Upravljanje integracijom projekta
                    - Upravljanje obimom
                    - Upravljanje vremenom
                    - Upravljanje troškovima
                    - Upravljanje kvalitetom
                    - Upravljanje ljudskim resursima
                    - Upravljanje komunikacijom
                    - Upravljanje rizikom
                    - Upravljanje nabavkama
                    - Upravljanje očekivanjima ključnih učesnika
                    - PMI etički kodeks profesionalnog ponašanja

                    2. Praktične vežbe

                    3. Strategije, saveti i preporuke za polaganje PMP® i CAPM® testa

                    4. Simulacija PMP® i CAPM® testa

                    Cene karata
                    Cena obuke je 86.400,00 RSD</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    <div id="myModal2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close2">&times;</span>
                <h2>Unapređenje procesa proizvodnje Value Stream Mapping metodom</h2>
            </div>
            <div class="modal-body">
                <p>Dok posmatrate procese u kompaniji čini Vam se da ne mogu da se izvedu na bolji način? Budite sigurni
                    koliko god proces bio „savršen“ postoji način da se unapredi!

                    Bilo da se Vaša kompanija bavi proizvodnjom ili pružanjem usluga, VSM metoda će Vam pomoći da jasno
                    predstavite tokove materijala, tokove informacija, tok stvaranja vrednosti koju je korisnik spreman
                    da plati, i na površini sagledate probleme koji narušavaju sklad Vaših procesa. VSM ili Value Stream
                    Mapping je generička metoda za mapiranje toka vrednosti koja bez obzira na vrstu poslovanja same
                    organizacije daje podjednako dobre rezultate unapređenja kako u proizvodnim, tako i u uslužnim
                    kompanijama.

                    Eliminišite aktivnosti koje ne dodaju vrednost i skratite vreme potrebno za proizvodnju/pružanje
                    usluge sa upotrebom istog ili manjeg nivoa resursa! Definišite trenutno stanje i željeno/buduće
                    stanje i koncipirajte korake unapređenja! Imajte jak alat za sve nivoe hijerarhije, od generalnih
                    direktora, preko tehničkih direktora, direktora operacija, rukovodilaca sektora/odseka/odeljenja, pa
                    sve do poslovođa i samih radnika. Imajte jasan uvid u kompletan tok procesa i bolje razumevanje
                    stvaranja vrednosti za korisnika.

                    Kako biste odmah implementirali unapređenja, detaljno će biti pojašnjeni koraci implementacije kao i
                    uloge zaposlenih na različitim hijerarhijskim nivoima. Na realnim primerima iz prakse predavači će
                    Vam razjasniti koji su benefiti metode i koje korake treba slediti kako bi se metoda izvela na pravi
                    način.

                    Ostvarite uštede i smanjite gubitke koristeći VSM metodu. Skratite vreme reakcije na česte promene u
                    tražnji i rokovima proizvodnje.

                    2 CELODNEVNE RADIONICE
                    - Analiza i razumevanje trenutnog stanja procesa
                    - Mapiranje željenog stanja i implementacija master plana

                    1 PISANI MATERIJAL
                    - Primeri primene VSM metode

                    NAKON ZAVRŠENE OBUKE polaznici će moći:
                    - Za kratko vreme izvršiti analizu trenutnog stanja procesa
                    - Samostalno izvesti VSM metodu
                    - Postići uštede eliminisanjem nepotrebnih elemenata procesa i samim tim skratiti vreme izvođenja
                    - Povećati zadovoljstvo korisnika i povećati fleksibilnost svojih procesa
                    - Povećati produktivnost i smanjiti rasipanje
                    - Savladati VSM metodu kroz realne studije slučaja svetskih i domaćih kompanija
                    - Primeniti naučene metode tokom obuke u svojim kompanijama
                    - Stečena znanja da prenesu kolegama kako bi se unapređivalo poslovanje čitave kompanije</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close3">&times;</span>
                <h2>Sertifikovani knjigovođa za dvojno knjigovodstvo (IV generacija)</h2>
            </div>
            <div class="modal-body">
                <p>01. januara 2019. godine je ukinuto prosto knjigovodstvo i stupila je na snagu obaveza vođenja
                    poslovnih knjiga po sistemu dvojnog knjigovodstva!

                    Programom obuke detaljno su definisane kompetencije - znanja, veštine i stavovi za obavljanje
                    poslova dvojnog knjigovodstva. Celokupni koncept obuke i sertifikacije oslanja se na standard
                    kompetencija u oblasti knjigovodstva.

                    Obuka je organizovana kroz module, čijom detaljnom analizom možete savladati osnove dvojnog
                    knjigovodstva. Kroz praktične primere, što uključuje radionice, izradu projektnih zadataka,
                    simulacije, polaznici će biti osposobljeni da u svom poslovanju primene znanja i veštine koje su
                    stekli na obuci. Prema tačno definisanim indikatorima učinka polaznici će znati koje kompetentnosti
                    su neophodne za sticanje sertifikata.

                    Naglasak je na ovladavanju praktičnih znanja i veština u dvojnom knjigovodstvu koji omogućavaju
                    direktnu primenu u svakodnevnom radu. Poznavanje sistema dvojnog knjigovodstva i njegovog okruženja,
                    otvaranje i zaključak računa stanja i uspeha kao i izrada godišnjih finansijskih izveštaja su samo
                    neke od tema koje obuhvata ova obuka, a značajne su za uspešno poslovanje sistema.

                    Predavači su pre svega praktičari sa višegodišnjim iskustvom, a pored toga su i veliki stručnjaci i
                    profesionalci koji svojim svakodnevnim radom u ovoj oblasti dokazuju svoju kompetentnost.
                    Kandidatima će biti omogućeno da dobiju mentorsko vođenje tokom trajanja obuke, u procesu izrade
                    projektnih zadataka, putem elektronskih komunikacija ili prema dogovoru, od strane predavača.

                    Cilj programa je da osposobi polaznike za praktičan i samostalan rad u dvojnom knjigovodstvu prema
                    standardima kompetencija.</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    <div id="myModal4" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close4">&times;</span>
                <h2>Job Fair - Tvoja karijera počinje ovde</h2>
            </div>
            <div class="modal-body">
                <p>Podrška u karijeri je jedna od glavnih usluga koje organizacija BEST nudi studentima. "Job Fair -
                    Tvoja karijera počinje ovde!" je sajam poslova i stručnih praksi za studente, diplomce i
                    postdiplomce koji se održava u prostorijama Elektronskog fakulteta u Nišu. Cilj sajma je da
                    studentima olakšamo put do željenog posla, prakse ili stručnog usavršavanja i povežemo ih sa
                    kompanijama.

                    Organizovanjem ovog sajma zapošljavanja i stručnih praksi, BEST studentima pruža podršku prilikom
                    nalaženja posla i pravljenja prvog koraka u svojoj profesionalnoj karijeri. Traženje kvalitetnog
                    radnog mesta je svakako važan deo života svakog studenta. Na univerzitetima u zemlji godišnje
                    diplomira veliki broj mladih entuzijasta, sa velikim ambicijama i motivacijom za rad. Naš cilj je da
                    te mlade ljude povežemo sa kompanijama i pomognemo im da izgrade uspešne karijere.

                    Kao što smo napomenuli, osnovni cilj Job Faira je da pomogne diplomcima i postdiplomcima, ali i svim
                    studentima koji traže posao ili stručnu praksu, tako što ce im omogućiti direktan kontakt sa
                    kompanijama iz različitih oblasti poslovanja, a ujedno i dati mogućnost da se po prvi put susretnu
                    sa pisanjem biografija (CV-a). U isto vreme Job Fair pomaže i kompanijama tako što im obezbeđuje
                    visoko kvalifikovan kadar, kao i bazu podataka sa biografijama studenata koji su posetili sajam ili
                    ostavili CV preko zvaničnog sajta jobfairnis.rs. Na ovaj način sajam poslova i stručnih praksi
                    povećava zaposlenost mladih ljudi u Srbiji.</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>

    <div id="myModal5" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close5">&times;</span>
                <h2>L1-2: Bash shell scripting</h2>
            </div>
            <div class="modal-body">
                <p>Na ovoj obuci polaznici uče pravljenje izvršnih skriptova (programa) koji se izvršavaju u komandnom
                    interpreteru. Osnovna karakteristika dobrog administriranja je automatizacija posla i velika snaga
                    Linuxa i Unixa leži upravo u automatizaciji posla preko komandnih skriptova.

                    Program kursa:
                    - Šta je skript?
                    - Parametri i promenljive
                    - Nizovi
                    - Izvršavanje komandi u zasebnom procesu
                    - Komande koje se često koriste u skriptovima
                    - Uslovni izrazi
                    - Kontrola toka programa
                    - Prenošenje argumenata
                    - Funkcije
                    - Rad sa opcijama
                    - Aritmetika u skriptovima
                    - Kontrola ispisa
                    - Kako bash izvršava komandnu liniju?

                    Predavanja su uto/pet, u terminu od 17:30-20:30h

                    ATC pogodnosti
                    - Svaki polaznik ima svoj računar i kompletno radno mesto
                    - Praktične vežbe u IT radionici
                    - Savremena računarska laboratorija
                    - Sertifikovani predavači sa inženejrskim iskustvom
                    - Pripreme za polaganje zvaničnih ispita
                    - Pristup online prezentacijama
                    - Mogućnost plaćanja u ratama

                    Cene karata
                    Cena kursa 184, 00 EUR</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    <div id="myModal6" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close6">&times;</span>
                <h2>Microsoft Windows Server 2016 - Boot Camp obuka</h2>
            </div>
            <div class="modal-body">
                <p>BootCamp MCSA Windows Server 2016 obuka sastavljena je od 17 odabranih modula koji su specijalno
                    prilagođeni vama koji svakodnevno radite u ovom IT okruženju.

                    Program kursa:
                    - Hyper-V and virtual machines;
                    - Installing, upgrading, and migrating servers;
                    - Installing and configuring domain controllers;
                    - Managing objects in AD DS;
                    - Implementing DNS and DHCP;
                    - Configuring storage solutions;
                    - Advanced AD DS infrastructure management;
                    - Implementing and administering AD DS sites;
                    - Implementing and managing Group Policy;
                    - Securing Active Directory Domain Services;
                    - Failover clustering;
                    - Monitoring, managing, and recovering.

                    Predavanja su pon/uto/sre/, u terminu od 9-16h.

                    ATC pogodnosti
                    - Svaki polaznik ima svoj računar i kompletno radno mesto
                    - Praktične vežbe u IT radionici
                    - Savremena računarska laboratorija
                    - Sertifikovani predavači sa inženejrskim iskustvom
                    - Pripreme za polaganje zvaničnih ispita
                    - Pristup online prezentacijama
                    - Mogućnost plaćanja u ratama

                    Cene karata
                    Cena kursa 760, 00 EUR</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>

    <?php include 'footer.php';?>

    <script src="js/events.js"></script>
</body>

</html>