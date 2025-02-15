<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\{Category};
use Carbon\Carbon;

class DataSeeder extends Seeder
{
  /**
   * Run the database seeders.
   */
  public function run(): void {

    $categories = [
      [
          'category_name' => [
              'sr' => 'Naslovna',
              'hu' => 'Kezdolap',
              'en' => 'Home Page',
          ],
          'slug' => 'naslovna',
          'order' => 1,
      ],
      [
          'category_name' => [
              'sr' => 'O nama',
              'hu' => 'Rolunk',
              'en' => 'About us',
          ],
          'slug' => 'o-nama',
          'order' => 2,
      ],
      [
          'category_name' => [
              'sr' => 'Modaliteti',
              'hu' => '',
              'en' => '',
          ],
          'slug' => 'modaliteti',
          'order' => 3,
      ],
      [
        'category_name' => [
            'sr' => 'Konferencije',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'konferencije',
        'order' => 4,
      ],
      [
        'category_name' => [
            'sr' => 'Edukacija',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'edukacija',
        'order' => 5,
      ],
      [
        'category_name' => [
            'sr' => 'Aktivnosti',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'aktivnosti',
        'order' => 6,
      ],
      [
        'category_name' => [
            'sr' => 'Psihoterapeuti',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'psihoterapeuti',
        'order' => 7,
      ],
      [
        'category_name' => [
            'sr' => 'Kontakt',
            'hu' => '',
            'en' => '',
        ],
        'slug' => 'kontakt',
        'order' => 8,
      ],
    ];

    foreach ($categories as $data) {
        Category::create($data);
    }

    //Slider data

    DB::table('slider')->insert([
      [
        'slider_name' => json_encode([
            'en' => 'First Slide',
            'hu' => 'Elso Slide',
            'sr' => 'Prvi Slide'
        ]),

        'slider_text' => json_encode([
            'en' => 'Welcome to Our Store',
            'hu' => 'Üdvözlünk az Oldalunkon',
            'sr' => 'Dobrodošli na našu stranicu'
        ]),
        'vertical' => 'center',
        'horizontal' => 'center',
        'order' => 1,
        'image' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ],
      [
        'slider_name' => json_encode([
            'en' => 'Second Slide',
            'hu' => 'Masodik Slide',
            'sr' => 'Drugi Slide'
        ]),

        'slider_text' => json_encode([
            'en' => 'Welcome to Our Store',
            'hu' => 'Üdvözlünk az Oldalunkon',
            'sr' => 'Dobrodošli na našu stranicu'
        ]),
        'vertical' => 'center',
        'horizontal' => 'center',
        'order' => 2,
        'image' => '',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ], 
    ]);

    //Pages
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Education',
        'hu' => 'Oktatás',
        'sr' => 'Edukacija'
      ]),
      'slug' => 'edukacija',
    ]);
  
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Conference',
        'hu' => 'Konferencia',
        'sr' => 'Konferencija'
      ]),
      'slug' => 'konferencija',
    ]);
    
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Modalities',
        'hu' => 'Modalitások',
        'sr' => 'Modaliteti'
      ]),
      'slug' => 'modaliteti',
    ]);
    
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'About Us',
        'hu' => 'Rólunk',
        'sr' => 'O Nama'
      ]),
      'slug' => 'o-nama',
    ]);
    
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Psychotherapists',
        'hu' => 'Pszichoterapeuták',
        'sr' => 'Psihoterapeuti'
      ]),
      'slug' => 'psihoterapeuti',
    ]);
    
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Contact',
        'hu' => 'Kapcsolat',
        'sr' => 'Kontakt'
      ]),
      'slug' => 'kontakt',
    ]);
    
    DB::table('pages')->insert([
      'name' => json_encode([
        'en' => 'Activities',
        'hu' => 'Tevékenységek',
        'sr' => 'Aktivnosti'
      ]),
      'slug' => 'aktivnosti',
    ]);

    //Page content
    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Introduction to the Education Program',
          'hu' => 'Bevezetés az oktatási programba',
          'sr' => 'Uvod u program edukaciji'
      ]),
      'content' => json_encode([
          'en' => '<p class"text-justify">
            The education program is implemented in accordance with the standards and program of the Association for Integrative Child Psychotherapy, in line with the standards of the Association of Psychotherapists of Serbia, as well as with the standards of the European Association for Psychotherapy and the European Association for Integrative Psychotherapy. It ensures eligibility for obtaining the national certificate, the certificate of the European Association for Integrative Psychotherapy, and the certificate of the European Association for Psychotherapy. The process of acquiring knowledge and skills in the field of Integrative Child Psychotherapy includes a complete training program lasting four years. The program is adapted to the current context and has proven to be effective and useful in meeting the needs and tasks of relevant organizations in the field of child and family mental health.
          </p>',
          'hu' => '<p class"text-justify">
            Az oktatási programot az Integratív Gyermekpszichoterápia Egyesületének szabványai és programja szerint valósítják meg, összhangban a Szerbiai Pszichoterapeuták Szövetségének szabványaival, valamint az Európai Pszichoterápiai Szövetség és az Európai Integratív Pszichoterápiai Szövetség szabványaival. Biztosítja a nemzeti tanúsítvány, az Európai Integratív Pszichoterápiai Szövetség tanúsítványának és az Európai Pszichoterápiai Szövetség tanúsítványának megszerzését. Az integratív gyermekpszichoterápia területén megszerzett tudás és készségek megszerzésének folyamata egy teljes, négy évig tartó képzési programot foglal magában. A programot az aktuális kontextushoz igazították, és hatékonynak és hasznosnak bizonyult a gyermek- és családmentálhigiénés területen működő releváns szervezetek igényeihez és feladataihoz képest.
          </p>',
          'sr' => '<p class"text-justify">
            Program edukacije se realizuje u skladu sa standardima i programom Udruženja za Integrativnu dečju psihoterapiju, u skladu sa standardima Saveza društava psihoterapeuta Srbije kao i u skladu sa standardima Evropske asocijacije za psihoterapiju (European Association for Psychotherapy) i Evropske asocijacije za Integrativnu psihoterapiju (European Association for Integrative Psychotherapy). Obezbedjuje prohodnost u sticanju nacionalnog sertifikata, sertifikata Evropske asocijacije za Integrativnu psihoterapiju i sertifikata Evropske asocijacije za psihoterapiju. Proces sticanja znanja i veština iz oblasti Integrativne dečje psihoterapije obuhvata kompletan trening program koji traje četiri godine. Program je prilagodjen aktuelnom kontekstu i pokazao se efikasnim i korisnim u odnosu na potrebe i zadatke relevantnih organizacija u oblasti mentalnog zdravlja dece i porodice.
          </p>'
      ]),
      'order' => 1,
      'custom_design' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Education in Integrative Child Psychotherapy',
          'hu' => 'Integratív Gyermekpszichoterápia Oktatás',
          'sr' => 'Edukacija iz Integrativne dečje psihoterapije'
      ]),
      'content' => json_encode([
          'en' => '
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                        Education in Integrative Child Psychotherapy
                    </p>
                    <p class="text-base font-normal text-white text-justify">
                        The program and education for integrative child psychotherapists are conducted in accordance with the standards and criteria of the Association of Psychotherapy Societies of Serbia (SDPS), the European Association for Integrative Psychotherapy (EAIP), and the European Association for Psychotherapy (EAP). The education lasts a total of 1780 hours or 63 ECTS credits. The ratio between contact hours and self-study is 67:33, with 1 ECTS credit representing 30 hours of education. In addition to acquiring the necessary theory, emphasis is placed on active participation in contact hours within the primary educational group, leading child psychodrama groups, and individual treatment of children and adolescents under supervision. The primary method of work is the application of group psychotherapy principles with elements of psychodrama and a group-interactive model. Education takes place monthly in one- or two-day blocks.
                    </p>
                </div>
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                        Education in Integrative Child Psychotherapy
                    </p>
                    <p class="text-base font-normal text-white text-justify">
                        Completed studies in humanities or social sciences (psychologists, psychiatrists, doctors, special educators, and related professions). The candidate should be at least 25 years old. Education lasts 4 years. The Educational Board, in agreement with the supervisor, may propose an extension of the education period. The primary goal of the education is personal development, acquiring knowledge and skills in the field of child psychotherapy applicable to children of different ages, and adopting specific modalities of the therapeutic setting of Integrative Child Psychotherapy. It does not imply the inclusion of individuals who require constant psychotherapeutic support. Education participants should submit a CV with information about their professional qualifications and experience in working with children or in human resources.
                    </p>
                </div>
            </div>
          ',
          'hu' => '
            <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                      Integratív Gyermekpszichoterápia Oktatás
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Az integratív gyermekpszichoterapeuta képzés és oktatás a Szerbiai Pszichoterápiás Társaságok Szövetsége (SDPS), az Európai Integratív Pszichoterápiás Szövetség (EAIP) és az Európai Pszichoterápiás Szövetség (EAP) szabványai és kritériumai szerint zajlik. Az oktatás összesen 1780 órát vagy 63 ECTS kreditet foglal magában. A kontaktórák és az önálló tanulás aránya 67:33, 1 ECTS kredit 30 óra oktatásnak felel meg. A szükséges elmélet elsajátítása mellett hangsúlyt fektetünk az aktív részvételre az alapképzési csoport kontaktóráin, gyermekpszichodráma csoportok vezetésére, valamint gyermekek és serdülők egyéni kezelésére szupervízió alatt. Az elsődleges munkamódszer a csoportpszichoterápia elveinek alkalmazása pszichodráma elemekkel és csoport-interaktív modellel. Az oktatás havi rendszerességgel, egy- vagy kétnapos blokkokban zajlik.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                      Integratív Gyermekpszichoterápia Oktatás
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Befejezett humán vagy társadalomtudományi tanulmányok (pszichológusok, pszichiáterek, orvosok, gyógypedagógusok és rokon szakmák). A jelöltnek legalább 25 évesnek kell lennie. Az oktatás 4 évig tart. Az Oktatási Bizottság a szupervízorral egyetértésben javasolhatja az oktatási időszak meghosszabbítását. Az oktatás elsődleges célja a személyes fejlődés, a gyermekpszichoterápia területén alkalmazható tudás és készségek elsajátítása különböző korú gyermekek számára, valamint az Integratív Gyermekpszichoterápia terápiás környezetének specifikus modalitásainak elsajátítása. Nem foglalja magában azokat a személyeket, akik állandó pszichoterápiás támogatást igényelnek. Az oktatás résztvevőinek önéletrajzot kell benyújtaniuk, amely tartalmazza szakmai képesítésüket és a gyermekekkel vagy humán erőforrás területén szerzett tapasztalataikat.
                  </p>
              </div>
            </div>
          ',
          'sr' => '
            <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                      Edukacija iz Integrativne dečje psihoterapije
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Program i edukacija za integrativnog dečjeg psihoterapeuta realizuje se u skladu sa standardima i kriterijumima Saveza društava psihoterapeuta Srbije /SDPS/, Evropske asocijacije za integrativnu psihoterapiju /EAIP/ i Evropske psihoterapijske asocijacije /EAP/. Edukacija ukupno traje 1780 sati, ili 63 ECTS bodova. Odnos između kontakt sati i sati samostalnog -‘self-study’ usvajanja teorije 67:33, 1 ECTS bod predstavlja 30 sati edukacije. Pored usvajanja neophodne teorije težište je na aktivnom učešće na kontakt satima u okviru matične edukativne grupe, vođenju dečje psihodramske grupe i individualnog tretmana sa decom i adolescentima pod supervizijom. Osnovni metod rada je primena načela grupne psihoterapije sa elementima psihodrame i grupno-interaktivnog modela. Edukacija se odvija u mesečnim intervalima u jedno – dvodnevnim blokovima.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-5">
                      Edukacija iz Integrativne dečje psihoterapije
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Završen fakultet humanističke ili društvene orijentacije/psiholozi, psihijatri, lekari, defektolozi i srodne profesije).
                      Kandidat treba da ima navršenih 25 godina života.
                      Edukacija traje 4 godine. Edukativni odbor u dogovoru sa supervizorom može da predloži produženje edukacije.
                      Osnovni cilj edukacije je lični razvoj, sticanje znanja i veština iz oblasti dečje psihoterapije primenljivog kod dece različitog uzrasta i usvajanje specifičnih modaliteta terapijskog settinga Integrativne dečije psihoterapije i ne podrazumeva uključenja osoba kome je potrebna stalna psihoterapijska podrška.
                      Učesnici edukacije prilažu CV sa podacima o stručnoj kfalifikaciji i o iskustvu u radu sa decom ili u humanom resursu.
                  </p>
              </div>
            </div>
          '
      ]),
      'order' => 2,
      'custom_design' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Education Program',
          'hu' => 'Oktatási Program',
          'sr' => 'Program edukacije'
      ]),
      'content' => json_encode([
          'en' => '<p class"text-center">
              The program structure is organized around the personal development of participants, the adoption of integrative child psychotherapy theory and methodology, clinical practice, supervision, and consists of two phases:
          </p>',
          'hu' => '<p class"text-center">
              A program felépítése a résztvevők személyes fejlődése, az integratív gyermekpszichoterápia elméletének és módszertanának elsajátítása, klinikai gyakorlat, szupervízió köré szerveződik, és két szakaszból áll:
          </p>',
          'sr' => '<p class"text-center">
              Struktura programa je organizovana oko ličnog razvoja polaznika, usvajanja teorije i metodologije integrativne dečje psihoterapije, kliničke prakse, supervizije i sastoji se od dve faze:
          </p>'
      ]),
      'order' => 3,
      'custom_design' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => '',
          'hu' => '',
          'sr' => 'Faze edukacija'
      ]),
      'content' => json_encode([
          'en' => '
            <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Prva faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Lično psihoterapijsko iskustvo - 250 kontakt sati.
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.1 Modul (130 kontakt sati, 20 sati samostalno - ‘self-study’ usvajanje teorije, 5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvo – rad na sebi.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterpijsko iskustvo – lični razvoj ostvaruje se aktivnim učešćem u iskustveno edukativnoj psihodramskoj grupi. Polaznici preko ličnog iskustva stiču uvid u sopstvene snage i karakteristike ličnosti, obrazce ponašanja i interpersonalne realacije. Kreativno promišljanje sebe, sopstvenih konflikata produbljuje samospoznaju i pomaže u prevazilaženje za pojedinca nepoželjnih modela ponašanja i stilova emocionalnog odgovora.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.2 Modula (12 radionica, 120 kontakt sati, 80 samostalnog upoznavanja teorije, 6.5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvu - rad na sebi u okviru temetskih radionica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Pored produbljivanja iskustva i saznanja o sopstvenom funkcionisanju ova faza edukacije omogućava sticanje bazičnog znanja u vezi teorije, filozofije i metodologije integrativne dečje psihoterapije. Aktivnosti tokom ove faze pored usvajanja teorije su iskustvenog tipa, realizuju se psihodramskim tehnikama i pomažu u utemeljenju neophodnih kompetencija u psihoterapijskom radu sa decom i adolescentima. Obrađuju se seledeće teme: – Uvod u osnovne modalitete Integrativne dečje psihoterapije. – Regresija i prepoznavnje regresionih poruka u dječjoj psihoterapiji. Značaj delimične regresije dečjeg psihoterapeuta. – Uloga i značaj scenskog prikaza i dramatizacije u dječjoj psihoterapiji. Osnovni principi i razlike u adultnoj i u dječjoj psihodrami i psihoterapiji. – Značaj mikromiljea u integrativnoj psihodijagnostici i psihoterapiji. Prepoznavanje poruka iz socijanog okruženja. Fenomen socijalnog atoma. – Projekcija i rad sa intrapsihičkim sadržajima u integrativnoj dječjoj psihoterapiji. – Socijalna kreativnost dječijeg terapeuta. Metode bibliodrame i bibliadrame.  – Uticaj motivacionih snaga u strukturiranju ponašanja. Operacionalizacija sosptvenih motiva. Ja snage. – Rad sa traumatskim doživljajima. Roditelj sa traumom, dete sa traumom. Principi psihoterapijskog rada sa traumatskim doživljajima. – Kreativne tehnike u Integrativnoj dječjoj psihoterapiji. Metode: čarobno ostrvo, čarobna kapija, zvuk i pokret. – Transfer i zastoj u psihoterapijskom procesu dece. Transferna i kontratransferna osećanja i uloge dječjeg psihoterapeuta. Pozicije dječjeg psihoterapeuta. Rad sa sopstevenim transfernim osećanjima. – Terapeutske intervencije u integrativnoj dječjoj psihoterapiji. Stepen direktivnosti ili apstinencije u psihoterapijskom procesu sa decom. – Pozicija roditelja i odnos terapeuta prema roditeljima u integrativnoj dečjoj psihoterapiji. Progresija i uključenost roditelja u terapijski proces. Tokom ove faze učesnici edukacije aktivnim učešćem u grupi izgrađuju veštine uključivanja dece, adolescente i roditelje u terapijski proces. – Jačaju potrebnu senzitivnost prema  uvažavanju dece i prihvatanju njihovog načina komuniciranja. Da prihvate terapijski odnos bez predrasuda. Da budu otvoreni prema kulturi koju predstavljaju roditelji i da ih prihvate kao partnera u terapijskom procesu.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Druga faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Druga faza edukacije uključuje: usvajanje naprednog teorijskog i metodološkog znanja o psihoterapiji a posebno o dečjoj psihoterapiji, psihoterapijskim metodama i modalitetima. Polaznici stiču veštine u vezi primene specifičnih tehnika - modaliteta Integrativne dečje psihoterapije u psihoterapijkom radu sa decom, adolescentima i roditeljima kao i u njihovom korišćenju u radu sa specifičnim psihičkim poremećajima. Da ih prilagode i primene stepenu dečjeg razvoja, dobi, vrste teškoća ili terapijskom cilju. Opširniji opis terapijskih tehika – modaliteta u fajlu  Modaliteti. Tokom ovog dela edukacije obraća se posebna pažnja da polaznici edukacije preko ličnog iskustva grade i stvaraju sopstveni puta, da usavrše osobnu integraciju ličnosti kao dečji psihoterapeuti. Metode rada: demonstracija psihoterapijskih postupaka, situativne vežbe, rad u parovima i malim grupama, prikaz slučaja, klinička supervizija. Za čitavo vreme edukacije polaznici u okviru supervizije izlažu sosptveno iskustvo o primeni pojedinačnih modaliteta integrativne dečje psihoterapije. Supervizija tako pomaže stalnoj integraciji teorijskog razumevanja, ličnog razvoja i usavršavanja kliničke prakse. Polaznici ujedno usvajaju metodologiju tumačenja procesa različitih nivoa u psihoterapijkom radu sa decom.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Modul (30 kontakt sati, 50 sati kliničke prakse, 40 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                    Integrativna dečja psihodijagnostika.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      2. Modul (150 kontakt sati, 100 sati kliničke prakse, 60 sati samostalno usvajanje torije, 10.5 ECTS)
                    </b>
                    <br>
                      Integrativna dečja psihodrama.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      3. Modul (60 kontakt sati, 50 sati kliničke prakse, 50 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Plej terapija po metodi „Moj svet“.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      4. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Vinikotova tehnika škrabalica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      5. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Savetovanje sa elementima individualne psihodrame.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      6. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Katatimska imaginativna psihoterapija sa decom KIP.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      7. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Cooping Cat terapijski programi, Kognitivno biheviralna pristup dečje anksioznosti i depresije.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      8. Modul (150 kontakt sati, 60 sati samostalno usvajanje torije, 7 ECTS)
                    </b>
                    <br>
                      Grupna supervizija i individualna supervizija.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      9. Modul (80 kontakt sati, 2.5 ECTS)
                    </b>
                    <br>
                      Theorija i praksa dečje psihoterapije u drugim školama i pravcima.
                      Učestvovanje na Kongresima i radionicama drugih škola i pravaca.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      10. Modul (80 sati samostalng rada, 2.5 ECTS)
                    </b>
                    <br>
                    Završna faza edukacije izrada i odbrana zvršnog rada.
                  </p>
              </div>
            </div>
          ',
          'hu' => '
            <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Prva faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Lično psihoterapijsko iskustvo - 250 kontakt sati.
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.1 Modul (130 kontakt sati, 20 sati samostalno - ‘self-study’ usvajanje teorije, 5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvo – rad na sebi.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterpijsko iskustvo – lični razvoj ostvaruje se aktivnim učešćem u iskustveno edukativnoj psihodramskoj grupi. Polaznici preko ličnog iskustva stiču uvid u sopstvene snage i karakteristike ličnosti, obrazce ponašanja i interpersonalne realacije. Kreativno promišljanje sebe, sopstvenih konflikata produbljuje samospoznaju i pomaže u prevazilaženje za pojedinca nepoželjnih modela ponašanja i stilova emocionalnog odgovora.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.2 Modula (12 radionica, 120 kontakt sati, 80 samostalnog upoznavanja teorije, 6.5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvu - rad na sebi u okviru temetskih radionica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Pored produbljivanja iskustva i saznanja o sopstvenom funkcionisanju ova faza edukacije omogućava sticanje bazičnog znanja u vezi teorije, filozofije i metodologije integrativne dečje psihoterapije. Aktivnosti tokom ove faze pored usvajanja teorije su iskustvenog tipa, realizuju se psihodramskim tehnikama i pomažu u utemeljenju neophodnih kompetencija u psihoterapijskom radu sa decom i adolescentima. Obrađuju se seledeće teme: – Uvod u osnovne modalitete Integrativne dečje psihoterapije. – Regresija i prepoznavnje regresionih poruka u dječjoj psihoterapiji. Značaj delimične regresije dečjeg psihoterapeuta. – Uloga i značaj scenskog prikaza i dramatizacije u dječjoj psihoterapiji. Osnovni principi i razlike u adultnoj i u dječjoj psihodrami i psihoterapiji. – Značaj mikromiljea u integrativnoj psihodijagnostici i psihoterapiji. Prepoznavanje poruka iz socijanog okruženja. Fenomen socijalnog atoma. – Projekcija i rad sa intrapsihičkim sadržajima u integrativnoj dječjoj psihoterapiji. – Socijalna kreativnost dječijeg terapeuta. Metode bibliodrame i bibliadrame.  – Uticaj motivacionih snaga u strukturiranju ponašanja. Operacionalizacija sosptvenih motiva. Ja snage. – Rad sa traumatskim doživljajima. Roditelj sa traumom, dete sa traumom. Principi psihoterapijskog rada sa traumatskim doživljajima. – Kreativne tehnike u Integrativnoj dječjoj psihoterapiji. Metode: čarobno ostrvo, čarobna kapija, zvuk i pokret. – Transfer i zastoj u psihoterapijskom procesu dece. Transferna i kontratransferna osećanja i uloge dječjeg psihoterapeuta. Pozicije dječjeg psihoterapeuta. Rad sa sopstevenim transfernim osećanjima. – Terapeutske intervencije u integrativnoj dječjoj psihoterapiji. Stepen direktivnosti ili apstinencije u psihoterapijskom procesu sa decom. – Pozicija roditelja i odnos terapeuta prema roditeljima u integrativnoj dečjoj psihoterapiji. Progresija i uključenost roditelja u terapijski proces. Tokom ove faze učesnici edukacije aktivnim učešćem u grupi izgrađuju veštine uključivanja dece, adolescente i roditelje u terapijski proces. – Jačaju potrebnu senzitivnost prema  uvažavanju dece i prihvatanju njihovog načina komuniciranja. Da prihvate terapijski odnos bez predrasuda. Da budu otvoreni prema kulturi koju predstavljaju roditelji i da ih prihvate kao partnera u terapijskom procesu.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Druga faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Druga faza edukacije uključuje: usvajanje naprednog teorijskog i metodološkog znanja o psihoterapiji a posebno o dečjoj psihoterapiji, psihoterapijskim metodama i modalitetima. Polaznici stiču veštine u vezi primene specifičnih tehnika - modaliteta Integrativne dečje psihoterapije u psihoterapijkom radu sa decom, adolescentima i roditeljima kao i u njihovom korišćenju u radu sa specifičnim psihičkim poremećajima. Da ih prilagode i primene stepenu dečjeg razvoja, dobi, vrste teškoća ili terapijskom cilju. Opširniji opis terapijskih tehika – modaliteta u fajlu  Modaliteti. Tokom ovog dela edukacije obraća se posebna pažnja da polaznici edukacije preko ličnog iskustva grade i stvaraju sopstveni puta, da usavrše osobnu integraciju ličnosti kao dečji psihoterapeuti. Metode rada: demonstracija psihoterapijskih postupaka, situativne vežbe, rad u parovima i malim grupama, prikaz slučaja, klinička supervizija. Za čitavo vreme edukacije polaznici u okviru supervizije izlažu sosptveno iskustvo o primeni pojedinačnih modaliteta integrativne dečje psihoterapije. Supervizija tako pomaže stalnoj integraciji teorijskog razumevanja, ličnog razvoja i usavršavanja kliničke prakse. Polaznici ujedno usvajaju metodologiju tumačenja procesa različitih nivoa u psihoterapijkom radu sa decom.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Modul (30 kontakt sati, 50 sati kliničke prakse, 40 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                    Integrativna dečja psihodijagnostika.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      2. Modul (150 kontakt sati, 100 sati kliničke prakse, 60 sati samostalno usvajanje torije, 10.5 ECTS)
                    </b>
                    <br>
                      Integrativna dečja psihodrama.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      3. Modul (60 kontakt sati, 50 sati kliničke prakse, 50 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Plej terapija po metodi „Moj svet“.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      4. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Vinikotova tehnika škrabalica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      5. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Savetovanje sa elementima individualne psihodrame.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      6. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Katatimska imaginativna psihoterapija sa decom KIP.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      7. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Cooping Cat terapijski programi, Kognitivno biheviralna pristup dečje anksioznosti i depresije.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      8. Modul (150 kontakt sati, 60 sati samostalno usvajanje torije, 7 ECTS)
                    </b>
                    <br>
                      Grupna supervizija i individualna supervizija.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      9. Modul (80 kontakt sati, 2.5 ECTS)
                    </b>
                    <br>
                      Theorija i praksa dečje psihoterapije u drugim školama i pravcima.
                      Učestvovanje na Kongresima i radionicama drugih škola i pravaca.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      10. Modul (80 sati samostalng rada, 2.5 ECTS)
                    </b>
                    <br>
                    Završna faza edukacije izrada i odbrana zvršnog rada.
                  </p>
              </div>
            </div>
          ',
          'sr' => '
            <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Prva faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Lično psihoterapijsko iskustvo - 250 kontakt sati.
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.1 Modul (130 kontakt sati, 20 sati samostalno - ‘self-study’ usvajanje teorije, 5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvo – rad na sebi.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterpijsko iskustvo – lični razvoj ostvaruje se aktivnim učešćem u iskustveno edukativnoj psihodramskoj grupi. Polaznici preko ličnog iskustva stiču uvid u sopstvene snage i karakteristike ličnosti, obrazce ponašanja i interpersonalne realacije. Kreativno promišljanje sebe, sopstvenih konflikata produbljuje samospoznaju i pomaže u prevazilaženje za pojedinca nepoželjnih modela ponašanja i stilova emocionalnog odgovora.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1.2 Modula (12 radionica, 120 kontakt sati, 80 samostalnog upoznavanja teorije, 6.5 ECTS)
                    </b>
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    Lično psihoterapijsko iskustvu - rad na sebi u okviru temetskih radionica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Pored produbljivanja iskustva i saznanja o sopstvenom funkcionisanju ova faza edukacije omogućava sticanje bazičnog znanja u vezi teorije, filozofije i metodologije integrativne dečje psihoterapije. Aktivnosti tokom ove faze pored usvajanja teorije su iskustvenog tipa, realizuju se psihodramskim tehnikama i pomažu u utemeljenju neophodnih kompetencija u psihoterapijskom radu sa decom i adolescentima. Obrađuju se seledeće teme: – Uvod u osnovne modalitete Integrativne dečje psihoterapije. – Regresija i prepoznavnje regresionih poruka u dječjoj psihoterapiji. Značaj delimične regresije dečjeg psihoterapeuta. – Uloga i značaj scenskog prikaza i dramatizacije u dječjoj psihoterapiji. Osnovni principi i razlike u adultnoj i u dječjoj psihodrami i psihoterapiji. – Značaj mikromiljea u integrativnoj psihodijagnostici i psihoterapiji. Prepoznavanje poruka iz socijanog okruženja. Fenomen socijalnog atoma. – Projekcija i rad sa intrapsihičkim sadržajima u integrativnoj dječjoj psihoterapiji. – Socijalna kreativnost dječijeg terapeuta. Metode bibliodrame i bibliadrame.  – Uticaj motivacionih snaga u strukturiranju ponašanja. Operacionalizacija sosptvenih motiva. Ja snage. – Rad sa traumatskim doživljajima. Roditelj sa traumom, dete sa traumom. Principi psihoterapijskog rada sa traumatskim doživljajima. – Kreativne tehnike u Integrativnoj dječjoj psihoterapiji. Metode: čarobno ostrvo, čarobna kapija, zvuk i pokret. – Transfer i zastoj u psihoterapijskom procesu dece. Transferna i kontratransferna osećanja i uloge dječjeg psihoterapeuta. Pozicije dječjeg psihoterapeuta. Rad sa sopstevenim transfernim osećanjima. – Terapeutske intervencije u integrativnoj dječjoj psihoterapiji. Stepen direktivnosti ili apstinencije u psihoterapijskom procesu sa decom. – Pozicija roditelja i odnos terapeuta prema roditeljima u integrativnoj dečjoj psihoterapiji. Progresija i uključenost roditelja u terapijski proces. Tokom ove faze učesnici edukacije aktivnim učešćem u grupi izgrađuju veštine uključivanja dece, adolescente i roditelje u terapijski proces. – Jačaju potrebnu senzitivnost prema  uvažavanju dece i prihvatanju njihovog načina komuniciranja. Da prihvate terapijski odnos bez predrasuda. Da budu otvoreni prema kulturi koju predstavljaju roditelji i da ih prihvate kao partnera u terapijskom procesu.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                  <p class="uppercase lg:text-2xl text-xl text-white mb-10">
                      Druga faza edukacije
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                      Druga faza edukacije uključuje: usvajanje naprednog teorijskog i metodološkog znanja o psihoterapiji a posebno o dečjoj psihoterapiji, psihoterapijskim metodama i modalitetima. Polaznici stiču veštine u vezi primene specifičnih tehnika - modaliteta Integrativne dečje psihoterapije u psihoterapijkom radu sa decom, adolescentima i roditeljima kao i u njihovom korišćenju u radu sa specifičnim psihičkim poremećajima. Da ih prilagode i primene stepenu dečjeg razvoja, dobi, vrste teškoća ili terapijskom cilju. Opširniji opis terapijskih tehika – modaliteta u fajlu  Modaliteti. Tokom ovog dela edukacije obraća se posebna pažnja da polaznici edukacije preko ličnog iskustva grade i stvaraju sopstveni puta, da usavrše osobnu integraciju ličnosti kao dečji psihoterapeuti. Metode rada: demonstracija psihoterapijskih postupaka, situativne vežbe, rad u parovima i malim grupama, prikaz slučaja, klinička supervizija. Za čitavo vreme edukacije polaznici u okviru supervizije izlažu sosptveno iskustvo o primeni pojedinačnih modaliteta integrativne dečje psihoterapije. Supervizija tako pomaže stalnoj integraciji teorijskog razumevanja, ličnog razvoja i usavršavanja kliničke prakse. Polaznici ujedno usvajaju metodologiju tumačenja procesa različitih nivoa u psihoterapijkom radu sa decom.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      1. Modul (30 kontakt sati, 50 sati kliničke prakse, 40 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                    Integrativna dečja psihodijagnostika.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      2. Modul (150 kontakt sati, 100 sati kliničke prakse, 60 sati samostalno usvajanje torije, 10.5 ECTS)
                    </b>
                    <br>
                      Integrativna dečja psihodrama.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      3. Modul (60 kontakt sati, 50 sati kliničke prakse, 50 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Plej terapija po metodi „Moj svet“.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      4. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Vinikotova tehnika škrabalica.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      5. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Savetovanje sa elementima individualne psihodrame.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      6. Modul (60 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5.5 ECTS)
                    </b>
                    <br>
                      Katatimska imaginativna psihoterapija sa decom KIP.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      7. Modul (40 kontakt sati, 50 sati kliničke prakse, 60 sati samostalno usvajanje torije, 5 ECTS)
                    </b>
                    <br>
                      Cooping Cat terapijski programi, Kognitivno biheviralna pristup dečje anksioznosti i depresije.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      8. Modul (150 kontakt sati, 60 sati samostalno usvajanje torije, 7 ECTS)
                    </b>
                    <br>
                      Grupna supervizija i individualna supervizija.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      9. Modul (80 kontakt sati, 2.5 ECTS)
                    </b>
                    <br>
                      Theorija i praksa dečje psihoterapije u drugim školama i pravcima.
                      Učestvovanje na Kongresima i radionicama drugih škola i pravaca.
                  </p>
                  <p class="text-base font-normal text-white text-justify mb-5">
                    <b>
                      10. Modul (80 sati samostalng rada, 2.5 ECTS)
                    </b>
                    <br>
                    Završna faza edukacije izrada i odbrana zvršnog rada.
                  </p>
              </div>
            </div>
          '
      ]),
      'order' => 4,
      'custom_design' => 1
    ]);
  
  }
}
