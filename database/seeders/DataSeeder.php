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
              'hu' => 'Kezdőlap',
              'en' => 'Home Page',
          ],
          'slug' => '',
          'order' => 1,
      ],
      [
          'category_name' => [
              'sr' => 'O nama',
              'hu' => 'Rólunk',
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
        'en' => 'Conferences',
        'hu' => 'Konferenciák',
        'sr' => 'Konferencije'
      ]),
      'slug' => 'konferencije',
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
      'custom_design' => 0,
      'load_view' => 0
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
            <div class="main-container my-10">
                <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                  <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                      <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                          Education in Integrative Child Psychotherapy
                      </p>
                      <p class="text-base font-normal text-white text-justify">
                          The program and education for integrative child psychotherapists are conducted in accordance with the standards and criteria of the Association of Psychotherapy Societies of Serbia (SDPS), the European Association for Integrative Psychotherapy (EAIP), and the European Association for Psychotherapy (EAP). The education lasts a total of 1780 hours or 63 ECTS credits. The ratio between contact hours and self-study is 67:33, with 1 ECTS credit representing 30 hours of education. In addition to acquiring the necessary theory, emphasis is placed on active participation in contact hours within the primary educational group, leading child psychodrama groups, and individual treatment of children and adolescents under supervision. The primary method of work is the application of group psychotherapy principles with elements of psychodrama and a group-interactive model. Education takes place monthly in one- or two-day blocks.
                      </p>
                  </div>
                  <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                      <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                          Education in Integrative Child Psychotherapy
                      </p>
                      <p class="text-base font-normal text-white text-justify">
                          Completed studies in humanities or social sciences (psychologists, psychiatrists, doctors, special educators, and related professions). The candidate should be at least 25 years old. Education lasts 4 years. The Educational Board, in agreement with the supervisor, may propose an extension of the education period. The primary goal of the education is personal development, acquiring knowledge and skills in the field of child psychotherapy applicable to children of different ages, and adopting specific modalities of the therapeutic setting of Integrative Child Psychotherapy. It does not imply the inclusion of individuals who require constant psychotherapeutic support. Education participants should submit a CV with inload_viewation about their professional qualifications and experience in working with children or in human resources.
                      </p>
                  </div>
              </div>
            </div>
          ',
          'hu' => '
            <div class="main-container my-10">
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                        Integratív Gyermekpszichoterápia Oktatás
                    </p>
                    <p class="text-base font-normal text-white text-justify">
                        Az integratív gyermekpszichoterapeuta képzés és oktatás a Szerbiai Pszichoterápiás Társaságok Szövetsége (SDPS), az Európai Integratív Pszichoterápiás Szövetség (EAIP) és az Európai Pszichoterápiás Szövetség (EAP) szabványai és kritériumai szerint zajlik. Az oktatás összesen 1780 órát vagy 63 ECTS kreditet foglal magában. A kontaktórák és az önálló tanulás aránya 67:33, 1 ECTS kredit 30 óra oktatásnak felel meg. A szükséges elmélet elsajátítása mellett hangsúlyt fektetünk az aktív részvételre az alapképzési csoport kontaktóráin, gyermekpszichodráma csoportok vezetésére, valamint gyermekek és serdülők egyéni kezelésére szupervízió alatt. Az elsődleges munkamódszer a csoportpszichoterápia elveinek alkalmazása pszichodráma elemekkel és csoport-interaktív modellel. Az oktatás havi rendszerességgel, egy- vagy kétnapos blokkokban zajlik.
                    </p>
                </div>
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                        Integratív Gyermekpszichoterápia Oktatás
                    </p>
                    <p class="text-base font-normal text-white text-justify">
                        Befejezett humán vagy társadalomtudományi tanulmányok (pszichológusok, pszichiáterek, orvosok, gyógypedagógusok és rokon szakmák). A jelöltnek legalább 25 évesnek kell lennie. Az oktatás 4 évig tart. Az Oktatási Bizottság a szupervízorral egyetértésben javasolhatja az oktatási időszak meghosszabbítását. Az oktatás elsődleges célja a személyes fejlődés, a gyermekpszichoterápia területén alkalmazható tudás és készségek elsajátítása különböző korú gyermekek számára, valamint az Integratív Gyermekpszichoterápia terápiás környezetének specifikus modalitásainak elsajátítása. Nem foglalja magában azokat a személyeket, akik állandó pszichoterápiás támogatást igényelnek. Az oktatás résztvevőinek önéletrajzot kell benyújtaniuk, amely tartalmazza szakmai képesítésüket és a gyermekekkel vagy humán erőforrás területén szerzett tapasztalataikat.
                    </p>
                </div>
              </div>
            </div>
          ',
          'sr' => '
            <div class="main-container my-10">
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                        Edukacija iz Integrativne dečje psihoterapije
                    </p>
                    <p class="text-base font-normal text-white text-justify">
                        Program i edukacija za integrativnog dečjeg psihoterapeuta realizuje se u skladu sa standardima i kriterijumima Saveza društava psihoterapeuta Srbije /SDPS/, Evropske asocijacije za integrativnu psihoterapiju /EAIP/ i Evropske psihoterapijske asocijacije /EAP/. Edukacija ukupno traje 1780 sati, ili 63 ECTS bodova. Odnos između kontakt sati i sati samostalnog -‘self-study’ usvajanja teorije 67:33, 1 ECTS bod predstavlja 30 sati edukacije. Pored usvajanja neophodne teorije težište je na aktivnom učešće na kontakt satima u okviru matične edukativne grupe, vođenju dečje psihodramske grupe i individualnog tretmana sa decom i adolescentima pod supervizijom. Osnovni metod rada je primena načela grupne psihoterapije sa elementima psihodrame i grupno-interaktivnog modela. Edukacija se odvija u mesečnim intervalima u jedno – dvodnevnim blokovima.
                    </p>
                </div>
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
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
            </div>
          '
      ]),
      'order' => 2,
      'custom_design' => 1,
      'load_view' => 0
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
      'custom_design' => 0,
      'load_view' => 0
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
            <div class="main-container my-10">
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
            </div>
          ',
          'hu' => '
            <div class="main-container my-10">
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
            </div>
          ',
          'sr' => '
            <div class="main-container my-10">
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
                    <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-10">
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
            </div>
          '
      ]),
      'order' => 4,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Clinical Practice',
          'hu' => 'Klinikai gyakorlat',
          'sr' => 'Klinička praksa'
      ]),
      'content' => json_encode([
          'en' => '
            <div class="flex w-full lg:flex-row flex-col my-20">
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pl-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Clinical Practice
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Participants in the training can complete their clinical practice in a healthcare institution, a child protection institution, a preschool or school institution within the public/national service, a private institution, or a non-governmental organization. A dossier is kept for the clinical practice, and it is carried out under supervision. Under optimal conditions, therapeutic experience should be gained with children of different ages, both genders, and a variety of psychopathologies. 100 hours of clinical practice are conducted with children’s groups and 300 hours within individual treatment of children, adolescents, or working with parents.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pr-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Group Supervision and Individual Supervision
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      During the training, constant supervision of the participants is ensured. By sharing experiences of psychotherapeutic practice with children’s groups and therapeutic processes in individual techniques, participants receive strong feedback and critical reflection on psychotherapeutic work. Supervision supports the learning process, facilitates the integration of theoretical understanding, personal development, and clinical practice, and enables the evaluation of interactions with clients.
                  </p>
              </div>
            </div>
          ',
          'hu' => '
            <div class="flex w-full lg:flex-row flex-col my-20">
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pl-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Klinikai gyakorlat
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      A képzésben résztvevők klinikai gyakorlatukat egészségügyi intézményben, gyermekvédelmi intézményben, óvodai vagy iskolai intézményben a köz-/nemzeti szolgálat keretein belül, magánintézményben vagy nem kormányzati szervezetnél teljesíthetik. A klinikai gyakorlatról dossziét vezetnek, és felügyelet mellett valósul meg. Optimális körülmények között a terápiás tapasztalatokat különböző korú, mindkét nemű és változatos pszichopatológiájú gyermekekkel kell megszerezni. 100 óra klinikai gyakorlatot gyermekcsoportokkal, 300 órát pedig gyermekekkel, serdülőkkel vagy szülőkkel való egyéni kezelés keretében kell teljesíteni.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pr-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Csoportos és Egyéni Szupervízió
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      A képzés során folyamatos szupervízió biztosított a résztvevők számára. A gyermekcsoportokkal végzett pszichoterápiás gyakorlat és az egyéni technikák terápiás folyamatának tapasztalatainak megosztásával a résztvevők erős visszajelzést és kritikai reflexiót kapnak a pszichoterápiás munkáról. A szupervízió támogatja a tanulási folyamatot, megkönnyíti az elméleti megértés, a személyes fejlődés és a klinikai gyakorlat integrációját, valamint lehetővé teszi az ügyfelekkel való interakciók értékelését.
                  </p>
              </div>
            </div>
          ',
          'sr' => '
            <div class="flex w-full lg:flex-row flex-col my-20">
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pl-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Klinička praksa
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Kliničku praksu polaznici edukacije mogu da ostvare u zdravstvenoj ustanovi, ustanovi dečje zaštite, u predškolskoj ili školskoj ustanovi u okviru javno/nacionalne službe, privatne institucije ili ustanovi nevladinog sektora. Kliničkoj praksi se vodi dosije i realizuje se pod supervizijom. U optimalnim uslovima terapijsko iskustvo treba da se ostvari sa decom različitog uzrasta, oba pola i sa raznolikom psihopatologijom. 100 sati kliničke prakse se realizuje sa dečjim grupama i 300 sati u okviru individualnog tretmana dece, adolescenata ili u radu sa roditeljima.
                  </p>
              </div>
              <div class="flex lg:w-1/2 w-full lg:p-12 lg:pr-20 p-8 flex-col bg-red">
                  <p class="uppercase lg:text-2xl text-xl font-bold text-white mb-5">
                      Grupna supervizija i individualna supervizija.
                  </p>
                  <p class="text-base font-normal text-white text-justify">
                      Tokom edukacije obezbeđena je konstantna susperviziju polaznika. Izlaganjem isksutava o psihoterapijskoj praksi o radu sa dečjim grupama i terapijskom procesa u individualnim tehnikama polaznici stiču snažnu povratnu inload_viewaciju i kritičku refleksiju o psihoterapijskom rada. Supervizija prati proces učenja, olakšava integraciju teorijskog razumevanja, ličnog razvoja i kliničke prakse te omogućava evaluaciju interakcije sa klijentima.
                  </p>
              </div>
            </div>
          '
      ]),
      'order' => 5,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Application for Education',
          'hu' => 'Jelentkezés oktatásra',
          'sr' => 'Prijava za edukaciju'
      ]),
      'content' => json_encode([
          'en' => '<p>user.views.forms.sign-up-for-education</p><p>Popunete sve polja</p>',
          'hu' => '<p>user.views.forms.sign-up-for-education</p><p>Popunete sve polja</p>',
          'sr' => '<p>user.views.forms.sign-up-for-education</p><p>Popunete sve polja</p>'
      ]),
      'order' => 6,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 1,
      'title' => json_encode([
          'en' => 'Literature',
          'hu' => 'Irodalom',
          'sr' => 'Literatura'
      ]),
      'content' => json_encode([
          'en' => '
          <ul>
            <li>Hilarion G. Petzold, Gabriele Ramin (2008): <em>Child Psychotherapy</em>. Osiris, Budapest.</li>
            <li><em>Scientific Validation Criteria for Integrative Psychotherapy</em>, European Association for Integrative Psychotherapy.</li>
            <li><em>International Integrative Psychotherapy Association: Introduction to the Definition & Philosophical Principles of Integrative Psychotherapy</em>.</li>
            <li>Kende B. Hanna (2015): <em>Psychodrama with Children: Healing Children through Their Own Creativity</em>. Routledge, London.</li>
            <li>Alfons Aichinger, Walter Holl (2016): <em>Group Therapy with Children: Psychodrama with Children</em>. Springer.</li>
            <li>Polcz Alaein (1997): <em>“My World” Sand Tray Psychotherapy with Children</em>. Budapest.</li>
            <li>Winnicott D.W. (1971): <em>Playing and Reality</em> (pp. 26–37). New York: Basic Books.</li>
            <li>Irvin D. Yalom (2014): <em>Teorija i praksa grupne psihoterapije</em>. Psihopolis, Novi Sad.</li>
            <li>Krüger Reinhard T. (2017): <em>Disorder-Specific Psychodrama Therapy, Theory and Practice</em>.</li>
            <li>Novick, K.K. and Novick, J. (2015): <em>Working With Parents Makes Therapy Work</em>. Rowman & Littlefield, Budapest.</li>
            <li>Leuner Hanscarl, Gunther Horn, and Edda Klessmann (2015): <em>Guided Affective Imagery with Children and Adolescents</em>, Budapest.</li>
            <li>Kendall, P. C., & Suveg, C. (2006): <em>Treating Anxiety Disorders in Youth</em>. In P. C. Kendall (Ed.), <em>Child and Adolescent Therapy: Cognitive-Behavioral Procedures</em> (p. 243–294). Guilford Press.</li>
            <li>Stern, Daniel (1997): <em>The Interpersonal World of the Infant</em>. McMillan.</li>
            <li>Hamilton, N.G. (1988): <em>Self and Others: Object Relations Theory in Practice</em>. New Jersey: Jason Aronson.</li>
            <li>Dženet Morsund, Ričard G. Erskin (2016): <em>Integrativna psihoterapija na delu</em>. Psihopolis, Novi Sad.</li>
            <li>Blatner Adam (2008): <em>Theoretical Foundations of Psychodrama</em>. IAGP Conference, London.</li>
            <li>Bruno Betelhajm (2017): <em>Značenje bajki</em>. Kosmos.</li>
            <li>Jung K. G. (2001): <em>Čovek i njegovi simboli</em>. Osiris.</li>
            <li>Allen Jon G., Peter Fonagy, Anthony Bateman (2008): <em>Mentalizing in Clinical Practice</em>. Eőtvős kiadó, Budapest.</li>
            <li>Csíkszentmihályi M. (1997): <em>Flow: The Psychology of Optimal Experience</em> (Az áramlat. A tökéletes élmény pszichológiája.) Akadémiai Kiadó, Budapest.</li>
          </ul>
          ',
          'hu' => '
          <ul>
            <li>Hilarion G. Petzold, Gabriele Ramin (2008): <em>Child Psychotherapy</em>. Osiris, Budapest.</li>
            <li><em>Scientific Validation Criteria for Integrative Psychotherapy</em>, European Association for Integrative Psychotherapy.</li>
            <li><em>International Integrative Psychotherapy Association: Introduction to the Definition & Philosophical Principles of Integrative Psychotherapy</em>.</li>
            <li>Kende B. Hanna (2015): <em>Psychodrama with Children: Healing Children through Their Own Creativity</em>. Routledge, London.</li>
            <li>Alfons Aichinger, Walter Holl (2016): <em>Group Therapy with Children: Psychodrama with Children</em>. Springer.</li>
            <li>Polcz Alaein (1997): <em>“My World” Sand Tray Psychotherapy with Children</em>. Budapest.</li>
            <li>Winnicott D.W. (1971): <em>Playing and Reality</em> (pp. 26–37). New York: Basic Books.</li>
            <li>Irvin D. Yalom (2014): <em>Teorija i praksa grupne psihoterapije</em>. Psihopolis, Novi Sad.</li>
            <li>Krüger Reinhard T. (2017): <em>Disorder-Specific Psychodrama Therapy, Theory and Practice</em>.</li>
            <li>Novick, K.K. and Novick, J. (2015): <em>Working With Parents Makes Therapy Work</em>. Rowman & Littlefield, Budapest.</li>
            <li>Leuner Hanscarl, Gunther Horn, and Edda Klessmann (2015): <em>Guided Affective Imagery with Children and Adolescents</em>, Budapest.</li>
            <li>Kendall, P. C., & Suveg, C. (2006): <em>Treating Anxiety Disorders in Youth</em>. In P. C. Kendall (Ed.), <em>Child and Adolescent Therapy: Cognitive-Behavioral Procedures</em> (p. 243–294). Guilford Press.</li>
            <li>Stern, Daniel (1997): <em>The Interpersonal World of the Infant</em>. McMillan.</li>
            <li>Hamilton, N.G. (1988): <em>Self and Others: Object Relations Theory in Practice</em>. New Jersey: Jason Aronson.</li>
            <li>Dženet Morsund, Ričard G. Erskin (2016): <em>Integrativna psihoterapija na delu</em>. Psihopolis, Novi Sad.</li>
            <li>Blatner Adam (2008): <em>Theoretical Foundations of Psychodrama</em>. IAGP Conference, London.</li>
            <li>Bruno Betelhajm (2017): <em>Značenje bajki</em>. Kosmos.</li>
            <li>Jung K. G. (2001): <em>Čovek i njegovi simboli</em>. Osiris.</li>
            <li>Allen Jon G., Peter Fonagy, Anthony Bateman (2008): <em>Mentalizing in Clinical Practice</em>. Eőtvős kiadó, Budapest.</li>
            <li>Csíkszentmihályi M. (1997): <em>Flow: The Psychology of Optimal Experience</em> (Az áramlat. A tökéletes élmény pszichológiája.) Akadémiai Kiadó, Budapest.</li>
          </ul>
          ',
          'sr' => '
          <ul >
            <li>Hilarion G. Petzold, Gabriele Ramin (2008): <em>Child Psychotherapy</em>. Osiris, Budapest.</li>
            <li><em>Scientific Validation Criteria for Integrative Psychotherapy</em>, European Association for Integrative Psychotherapy.</li>
            <li><em>International Integrative Psychotherapy Association: Introduction to the Definition & Philosophical Principles of Integrative Psychotherapy</em>.</li>
            <li>Kende B. Hanna (2015): <em>Psychodrama with Children: Healing Children through Their Own Creativity</em>. Routledge, London.</li>
            <li>Alfons Aichinger, Walter Holl (2016): <em>Group Therapy with Children: Psychodrama with Children</em>. Springer.</li>
            <li>Polcz Alaein (1997): <em>“My World” Sand Tray Psychotherapy with Children</em>. Budapest.</li>
            <li>Winnicott D.W. (1971): <em>Playing and Reality</em> (pp. 26–37). New York: Basic Books.</li>
            <li>Irvin D. Yalom (2014): <em>Teorija i praksa grupne psihoterapije</em>. Psihopolis, Novi Sad.</li>
            <li>Krüger Reinhard T. (2017): <em>Disorder-Specific Psychodrama Therapy, Theory and Practice</em>.</li>
            <li>Novick, K.K. and Novick, J. (2015): <em>Working With Parents Makes Therapy Work</em>. Rowman & Littlefield, Budapest.</li>
            <li>Leuner Hanscarl, Gunther Horn, and Edda Klessmann (2015): <em>Guided Affective Imagery with Children and Adolescents</em>, Budapest.</li>
            <li>Kendall, P. C., & Suveg, C. (2006): <em>Treating Anxiety Disorders in Youth</em>. In P. C. Kendall (Ed.), <em>Child and Adolescent Therapy: Cognitive-Behavioral Procedures</em> (p. 243–294). Guilford Press.</li>
            <li>Stern, Daniel (1997): <em>The Interpersonal World of the Infant</em>. McMillan.</li>
            <li>Hamilton, N.G. (1988): <em>Self and Others: Object Relations Theory in Practice</em>. New Jersey: Jason Aronson.</li>
            <li>Dženet Morsund, Ričard G. Erskin (2016): <em>Integrativna psihoterapija na delu</em>. Psihopolis, Novi Sad.</li>
            <li>Blatner Adam (2008): <em>Theoretical Foundations of Psychodrama</em>. IAGP Conference, London.</li>
            <li>Bruno Betelhajm (2017): <em>Značenje bajki</em>. Kosmos.</li>
            <li>Jung K. G. (2001): <em>Čovek i njegovi simboli</em>. Osiris.</li>
            <li>Allen Jon G., Peter Fonagy, Anthony Bateman (2008): <em>Mentalizing in Clinical Practice</em>. Eőtvős kiadó, Budapest.</li>
            <li>Csíkszentmihályi M. (1997): <em>Flow: The Psychology of Optimal Experience</em> (Az áramlat. A tökéletes élmény pszichológiája.) Akadémiai Kiadó, Budapest.</li>
          </ul>
          '
      ]),
      'order' => 7,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 2,
      'title' => json_encode([
          'en' => 'Previous Conferences',
          'hu' => 'Előző konferenciák',
          'sr' => 'Prethodne konferencije'
      ]),
      'content' => json_encode([
          'en' => '
              <p class="text-justify">
                  The Children\'s Psychodrama Conference with international participation is organized with the aim of gathering integrative child psychotherapists, child and adult psychodramatists, school psychologists, and educators to discuss topics in the field of theory and practice of child psychotherapy and child psychodrama. The conference is held annually in August, starting from 2014, with a specific theme chosen each year.
              </p>
          ',
          'hu' => '
              <p class="text-justify">
                  A nemzetközi részvétellel megrendezett Gyermekpszichodráma Konferencia célja az integratív gyermekpszichoterapeuták, gyermek- és felnőtt pszichodramatisták, iskolai pszichológusok és pedagógusok összegyűjtése, hogy a gyermekpszichoterápia és a gyermekpszichodráma elméleti és gyakorlati témáit tárgyalják. A konferencia évente, augusztusban kerül megrendezésre, 2014-től kezdődően, és minden évben egy specifikus témát emelnek ki.
              </p>
          ',
          'sr' => '
              <p class="text-justify">
                  Konferencija iz Dečje psihodrame sa međunarodnim učešćem se organizuje sa ciljem okupljanja integrativnih dečjih psihoterapeuta, dečjih i adultnih psihodramatičara, školskih psihologa i pedagoga kako bi se obradile teme iz područja teorije i prakse dečje psihoterapije i dečje psihodrame. Konferencija se održava jednom godišnje u avgustu počevši od 2014. godine, a svake godine kao ideju vodilju ističe neku specifičnu temu.
              </p>
          '
      ]),
      'order' => 1,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 2,
      'title' => json_encode([
        'en' => 'Conferences',
        'hu' => 'Konferenciák',
        'sr' => 'Konferencije'
      ]),
      'content' => json_encode([
          'sr' => "user.views.home.conference",
          'en' => "user.views.home.conference",
          'hu' => "user.views.home.conference",
      ]),
      'order' => 2,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 2,
      'title' => json_encode([
          'en' => 'Conference Registration',
          'hu' => 'Konferencia jelentkezés',
          'sr' => 'Prijava za konferenciju'
      ]),
      'content' => json_encode([
          'en' => "
              <p class=\"text-center\">
                  Fill out the form below to register for the conference no later than 10 days before it starts!
              </p>
              <p class=\"text-justify\">
                  <b>Registration Fee</b>
                  <br>
                  All participants must pay a registration fee.
                  <b>Payment Methods:</b>
                  <br>
                  1. Personal payment at the Conference.<br>
                  2. Personal payment via bank transfer: The payment should be made with a receipt to the bank account of the Association for Integrative Child Psychotherapy (details at the end of this form).
                  <b>If your institution or company is paying for you:</b>
                  <br>
                  If the institution pays based on a pro forma invoice provided by the conference organizer, the following information is required for the pro forma invoice:
              </p>
              <p class=\"text-justify\">
                  <b>Payment details for local payments in RSD to the bank account: Association for Integrative Child Psychotherapy</b>
                  <br>
                  Address: Josipa Kraša 2/23, 24000 Subotica, Serbia
                  <br>
                  <b>Account number: 325950060003973461</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad</b><br>
                  Association registration number: 08878986<br>
                  VAT number: 105303977<br>
                  Association activity: 9499 – other organizations based on membership
                  <br><br>
                  <b>Payment details for international payments (in EUR) to the Association for Integrative Child Psychotherapy</b><br>
                  <b>Address: Josipa Kraša 2/23., 24000 Subotica, Serbia</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad, RS</b><br>
                  <b>IBAN Number: RS35325960160000589208</b><br>
                  <b>SWIFT CODE: VOTPVRS22</b><br>
                  Association registration number: 08878986<br>
                  VAT number: 105303977<br>
                  Association activity: 9499 – other organizations based on membership
              </p>
          ",
          'hu' => "
              <p class=\"text-center\">
                  Töltse ki az alábbi űrlapot a konferenciára való regisztrációhoz legkésőbb 10 nappal a kezdete előtt!
              </p>
              <p class=\"text-justify\">
                  <b>Regisztrációs díj</b>
                  <br>
                  Minden résztvevőnek regisztrációs díjat kell fizetnie.
                  <b>Fizetési módok:</b>
                  <br>
                  1. Személyes fizetés a konferencián.<br>
                  2. Személyes fizetés banki átutalással: A fizetés a befizetési elismervény alapján történik az Integratív Gyermek Pszichoterápia Egyesület banki számlájára (adatok a űrlap végén).
                  <b>Ha az intézmény vagy vállalat fizet helyetted:</b>
                  <br>
                  Ha az intézmény előzetes számla alapján fizet, a következő adatokat kell megadni az előzetes számla kiállításához:
              </p>
              <p class=\"text-justify\">
                  <b>Fizetési adatok helyi banki átutalásra RSD-ben: Integratív Gyermek Pszichoterápia Egyesület</b>
                  <br>
                  Cím: Josipa Kraša 2/23, 24000 Subotica, Szerbia
                  <br>
                  <b>Számlaszám: 325950060003973461</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad</b><br>
                  Egyesület nyilvántartási szám: 08878986<br>
                  ÁFA szám: 105303977<br>
                  Egyesület tevékenysége: 9499 – egyesületek egyéb tevékenysége
                  <br><br>
                  <b>Nemzetközi átutalás adatai (EUR-ban) az Integratív Gyermek Pszichoterápia Egyesület számára</b><br>
                  <b>Cím: Josipa Kraša 2/23., 24000 Subotica, Szerbia</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad, RS</b><br>
                  <b>IBAN szám: RS35325960160000589208</b><br>
                  <b>SWIFT kód: VOTPVRS22</b><br>
                  Egyesület nyilvántartási szám: 08878986<br>
                  ÁFA szám: 105303977<br>
                  Egyesület tevékenysége: 9499 – egyesületek egyéb tevékenysége
              </p>
          ",
          'sr' => '
              <p class="text-center">
                  Popunite donji obrazac da biste se prijavili za konferenciju najkasnije 10 dana pre njenog početka!
              </p>
              <p class="text-justify">
                  <b>Kotizacija</b>
                  <br>
                  Svi učesnici plaćaju kotizaciju.
                  <b>Način plaćanja:</b>
                  <br>
                  1. Lična uplata na samoj Konferenciji.<br>
                  2. Lična uplata putem žiro računa: Uplata se vrši putem priznanice na žiro račun Udruženja za Inregrativnu
                  dečiju psihoterapiju (podaci su na kraju ovog obrasca).
                  <b>Ako za vas plaća ustanova ili preduzeće:</b>
                  <br>
                  Ako ustanova plaća na osnovu dostavljenog predračuna od strane organizatora kongresa, za predračun je potrebno
                  dostaviti sledeće podatke:
              </p>
              <p class="text-justify">
                  <b>Podaci za uplatu u dinarima putem žiro računa: Udruženje za Integrativnu dečiju psihoterapiju</b>
                  <br>
                  Adresa: Josipa Kraša 2/23. 24000 Subotica, Srbija
                  <br>
                  <b>Broj žiro računa: 325950060003973461</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad</b><br>
                  Matični broj udruženja: 08878986<br>
                  PIB: 105303977<br>
                  Delatnost udruženja: 9499 – delatnost ostalih organizacija na bazi učlanjenja
                  <br><br>
                  <b>Podaci za uplate iz inostranstva (u EUR) Udruženje za Integrativnu dečiju psihoterapiju</b><br>
                  <b>Adresa: Josipa Kraša 2/23., 24000 Subotica, Srbija</b><br>
                  <b>Vojvodjanska banka AD, Novi Sad, RS</b><br>
                  <b>IBAN Number: RS35325960160000589208</b><br>
                  <b>SWIFT CODE: VOTPVRS22</b><br>
                  Matični broj udruženja: 08878986<br>
                  PIB: 105303977<br>
                  Delatnost udruženja: 9499 – delatnost ostalih organizacija na bazi učlanjenja
              </p>
          ',
      ]),
      'order' => 3,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Modalities',
          'hu' => 'Modalitások',
          'sr' => 'Modaliteti'
      ]),
      'content' => json_encode([
          'sr' => "
              <p class='text-justify'>
                Razvojna realaciona perspektiva integrativne dečje psihoterapije stavljajući u središtu psihoterapijskog procesa odnos dete - terapeut predstavlja konstantno traganje za decu i adolescente prihvatljiv i razumljiv načine komuniciranja. Integrativni dečji psihoterapeut kreativno konstruktivnim aktivnostima kao što su: dečja psihodrama, plej terapija „Moj svet”. Vinikotove škrabalice., savetovanje sa elementima individualne psihodrame., vođena imaginacija i Cooping cat programa stvara za dete prirodno, prihvatljivo i razumljivo okruženje u kojem može da se poveri, da organizuje ili da reorganizuje vlastito iskustvo i da nauči kako da se njime služi u kontaktu sa sobom i sa drugima. Mogućnosti primene ovih terapijskih modaliteta zavise od postavljenog terapijskog cilja, stepene dečjeg razvoja, dobi i od vrste teškoća.   
              </p>",
          'en' => "
              <p class='text-justify'>
                The developmental relational perspective of integrative child psychotherapy, placing the child-therapist relationship at the center of the therapeutic process, represents a constant search for ways of communication that are acceptable and understandable for children and adolescents. The integrative child psychotherapist, through creative and constructive activities such as child psychodrama, play therapy 'My World,' Winnicott's scribbles, counseling with elements of individual psychodrama, guided imagery, and the Coping Cat program, creates a natural, acceptable, and comprehensible environment for the child in which they can confide, organize or reorganize their own experience, and learn how to use it in contact with themselves and others. The applicability of these therapeutic modalities depends on the established therapeutic goal, the child's developmental stage, age, and the type of difficulties.
              </p>",
          'hu' => "
              <p class='text-justify'>
                Az integratív gyermekpszichoterápia fejlődési relációs perspektívája, amely a gyermek-terapeuta kapcsolatot helyezi a terápiás folyamat középpontjába, folyamatos keresést jelent a gyermekek és serdülők számára elfogadható és érthető kommunikációs módok után. Az integratív gyermekpszichoterapeuta kreatív és konstruktív tevékenységek révén, mint például a gyermekpszichodráma, a 'Saját világom' játékterápia, Winnicott firkái, egyéni pszichodráma elemeit tartalmazó tanácsadás, vezetett imagináció és a Coping Cat program, olyan természetes, elfogadható és érthető környezetet teremt a gyermek számára, amelyben bizalommal megnyílhat, megszervezheti vagy újraszervezheti saját élményeit, és megtanulhatja, hogyan használja azokat önmagával és másokkal való kapcsolatában. E terápiás modalitások alkalmazási lehetőségei a kitűzött terápiás céltól, a gyermek fejlődési szintjétől, életkorától és a nehézségek típusától függenek.
              </p>"
      ]),
      'order' => 1,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
        'en' => 'Children’s Psychodrama',
        'hu' => 'Gyermekpszichodráma',
        'sr' => 'Dečja psihodrama'
      ]),
      'content' => json_encode([
          'sr' => "
              <p class='text-justify'>
                Dečija psihodrama je dinamičko orijentisana dijagnostička i psihoterapijska metoda. Kao grupna psihoterapijska metoda primenjuje se od 60 – 70-ih godina u Americi i Evropi. Klasična Moreno-ova psihodrama u dečijoj terapiji pretrpela je određene izmene. Dečija psihodrama se uspešno primenjuje u različitim institucijama dečje zaštite, dečjim dispanzerima, bolnicama, razvojnim savetovalištima, vrtićima, obrazovnim ustanovama i centrima za socijalni.</p>
              <p class='text-justify'>
                Dečija psihodrama je primenljiva i efikasna kod dece kojoj predstavlja veliku teškoću sklapanje ličnog kontakta u individualnoj terapiji, ili nasuprot tome kada se njihova teškoć ne ispoljava u ovoj relaciji. Dečija psihodrama preko mogućnosti dinamičke ekspresije osigurava simbolično doživljavanje i elaboraciju. Povećava mobilnost i pokretljivost te je pogodna u terapijskom radu sa hiperaktivnom decom i sa decom iz nestimulativne socijalne sredine.</p>
              <p class='text-justify'>
                U terapijskom okruženju i procesu stvoreni potencijalni „kao da“ svet sa svojom simboličkim obeležjima u mnogome može da odstupa od realnog životnog okruženja. Dečja psihodrama ne fokusira na simptome, oni se ionako pojavljulju u prenosnom, simboličnom obliku u igri deteta. Zbog ovih svajstava dečije psihodrama je pogodna za rad sa različitim oblicima poremećaja ponašanja i psihosomatskim poremećajima. Dečija psihodrama je adekvatno terapijsko okruženje i za decu koja su upućena iz porodica sa psihosocijalnim teškoćama preko ekspresije „tematike“ labilne porodične strukture kao što su: razvod, alkoholizam, zanemarivanje i zlostavljanje.</p>
              <p class='text-justify'>
                Samoinicijativnos je garancija za jaku motivaciju učesnika. Stvorena klima dobrog raspoloženja isključuje svaku stigmatizaciju. Psihodrama je pogodna za pospešivanje rasta i razvoja i „zdravog“ deteta. Učesnici kreacijom i stvaranjem događaja postaju delovi stvaralačkog procesa. U terapijskom procesu dečje psihodrame deca i odrasli postaju ravnopravni partneri. Spontana igra oslobađa dečju kreativnost, širi repertoar uluga, dovodi do katartičnih doživljalja te doprinosi rastu, razvoju i jačanju ličnosti.</p>
              <p class='text-justify'>
                Grupu – u optimalnim uslovima- vode dva terapeuta, žena i muškarac. Njihova je uloga da stoje na raspolaganju deci u stvaranju uslova za samopercepciju i u doživljavanju sopstvenih vrednosti. Terapeuti usmeravaju psihoterapijski proces prema izgradnji novih doživljalja i relacije u koma deca mogu da prepoznaju i da dožive sebe kao kreativnog tvorca sopstvene ličnosti kao biće koje je dostojan pažnje i ljubavi. Voditelji u kreiranim igrama učestvuju u dve dimenzije. Sa jedne strane, prisposobljavaju se pojedinačnom detetu, trude se da ga razumeju, da otkriju i da shvate njegovo ponašenje i osećanja. Sa druge strane posmatraju i registruju zbivanja u grupi, tumače i upravljalju grupne procese.</p>
              <p class='text-justify'>
                Deca na psihodramskim susretima, osećaju i doživljavaju da ulaze u drugačiji svet, u svet gde je sve moguće, gde se sve može desiti. Mogu da se pretvore u mađioničara, da prihvate bilo koju željenu ulogu, desi će se ono što oni sami kreiraju. U pričama drugih učestvuju na osnovu sopstvenog izbora.. Jedino važno, neizostavno i nezamenljivo pravilo je „kao da“ pravilo, ona osigurava da se agresivnost ispoljava samo simbolično. Ambijent „kao da“ pravila, otvorenost prem imaginaciji, igri umiruje decu. Deca ispoljavaju daleko autentičnije ponašanje nego u svakidašnjem realnom okruženju. Osećanje kreativnog preobražaja je pomognuta i pojačana i oblačenjem kostima, aktivirajući dečju fantaziju. Atomatski doživljavalju, da sami kreiraju događaje, režiraju prostor i okruženje. Deca pokreću i animiraju i voditelje-terapeute, dodeljujući im bilo koju ulogu i režirajući im bilo koju sudbinu. Metoda pokret-akcija-katarza je doživljalj koji je u stanju da koriguje, leči ranije doživaljalje. U dečijoj psihodrami se ne tumači, ne komentariše, ne izvlače se konkluzije i zaključci.</p>
              <p class='text-justify'>
                Deca psihodramu doživljavaju kao začarani svet bajki. Produbljivanje u svet igre, bajki, poezije, stvaranje začaranog, kreativnog sveta nije cilj sam po sebi, ono predstavlja okruženje i metodu pomoću koje dete može da menja sliku o sebi, da doživi drugačiji životni stil, drugačiji načina bivstvovanja i postojanja.</p>
              <p class='text-justify'>
                Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a></p>
              ",
          'en' => "
              <p class='text-justify'>
                  Children's psychodrama is a dynamically oriented diagnostic and psychotherapeutic method. As a group psychotherapy method, it has been applied since the 1960s and 1970s in America and Europe. Classical Moreno psychodrama has undergone certain modifications in children's therapy. Children's psychodrama is successfully applied in various child protection institutions, children's dispensaries, hospitals, developmental counseling centers, kindergartens, educational institutions, and social centers.
              </p>
              <p class='text-justify'>
                  Children's psychodrama is applicable and effective for children who have great difficulty establishing personal contact in individual therapy, or conversely, when their difficulties do not manifest in this type of relationship. Through the possibilities of dynamic expression, children's psychodrama ensures symbolic experience and elaboration. It increases mobility and flexibility, making it suitable for therapeutic work with hyperactive children and children from non-stimulating social environments.
              </p>
              <p class='text-justify'>
                  In the therapeutic environment and process, a potential “as if” world is created, with its symbolic characteristics that can significantly differ from the real-life environment. Children's psychodrama does not focus on symptoms, as they naturally appear in a transferred, symbolic form in children's play. Due to these characteristics, children's psychodrama is suitable for working with various behavioral disorders and psychosomatic disorders. It also provides an adequate therapeutic environment for children referred from families experiencing psychosocial difficulties, allowing the expression of themes related to unstable family structures such as divorce, alcoholism, neglect, and abuse.
              </p>
              <p class='text-justify'>
                  Self-initiative is a guarantee of strong motivation among participants. The created atmosphere of well-being eliminates any stigmatization. Psychodrama is also suitable for fostering the growth and development of “healthy” children. Through creation and event development, participants become part of a creative process. In the therapeutic process of children's psychodrama, children and adults become equal partners. Spontaneous play liberates children's creativity, expands their repertoire of roles, leads to cathartic experiences, and contributes to personal growth, development, and strengthening.
              </p>
              <p class='text-justify'>
                  In optimal conditions, the group is led by two therapists—a woman and a man. Their role is to support children in creating conditions for self-perception and experiencing their own values. Therapists guide the psychotherapeutic process toward building new experiences and relationships in which children can recognize themselves as creative individuals, worthy of attention and love. The facilitators participate in the created plays in two dimensions. On one hand, they adapt to each child, striving to understand them, discover and grasp their behaviors and emotions. On the other hand, they observe and record group dynamics, interpret and manage group processes.
              </p>
              <p class='text-justify'>
                  During psychodrama sessions, children feel and experience entering a different world—a world where everything is possible, where anything can happen. They can become magicians, take on any desired role, and create events as they wish. They participate in the stories of others based on their own choices. The only important, essential, and irreplaceable rule is the \"as if\" rule, which ensures that aggression is expressed only symbolically. The atmosphere of the \"as if\" rule, openness to imagination, and play calms children. In this setting, children display far more authentic behavior than in everyday real-life environments. The feeling of creative transformation is further enhanced by wearing costumes, which activate children's imagination. They automatically experience themselves as creators of events, directing space and environment. Children also engage and animate the facilitators-therapists, assigning them any role and directing any fate. The method of movement-action-catharsis provides an experience capable of correcting and healing past experiences. In children's psychodrama, there is no interpretation, commentary, or drawing of conclusions.
              </p>
              <p class='text-justify'>
                  Children experience psychodrama as an enchanted world of fairy tales. Deepening into the world of play, fairy tales, and poetry, and creating a magical, creative world is not an end in itself. Rather, it represents an environment and method through which a child can change their self-image, experience a different lifestyle, and explore alternative ways of being and existing.
              </p>
              <p class='text-justify'>
                  If these methodological guidelines have sparked your interest, if you wish to learn more, read recommended literature, attend our seminars and workshops, or participate in our training programs, you can contact us at: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a>
              </p>
          ",
          'hu' => "
              <p class='text-justify'>
                  A gyermekpszichodráma egy dinamikusan orientált diagnosztikai és pszichoterápiás módszer. Csoportos pszichoterápiás módszerként az 1960-as és 1970-es években kezdte alkalmazását Amerikában és Európában. A klasszikus Moreno-féle pszichodráma a gyermekterápiában bizonyos módosításokon ment keresztül. A gyermekpszichodráma sikeresen alkalmazható különböző gyermekvédelmi intézményekben, gyermekrendelőben, kórházakban, fejlesztő tanácsadó központokban, óvodákban, oktatási intézményekben és szociális központokban.
              </p>
              <p class='text-justify'>
                  A gyermekpszichodráma alkalmazható és hatékony azok számára a gyermekek számára, akiknek nagy nehézséget okoz a személyes kapcsolat kialakítása egyéni terápiában, vagy épp ellenkezőleg, amikor a problémáik nem jelentkeznek ebben a kapcsolati formában. A dinamikus kifejezés lehetőségein keresztül a gyermekpszichodráma biztosítja a szimbolikus átélést és feldolgozást. Növeli a mozgékonyságot és rugalmasságot, ezért alkalmas hiperaktív gyermekekkel és nem stimuláló szociális környezetből származó gyermekekkel végzett terápiás munkára.
              </p>
              <p class='text-justify'>
                  A terápiás környezetben és folyamatban létrejön egy potenciális „mint ha” világ, szimbolikus jellemzőivel, amely jelentősen eltérhet a valós élet környezetétől. A gyermekpszichodráma nem a tünetekre összpontosít, mivel azok a gyermekek játékában átvitt, szimbolikus formában jelennek meg. Ezen tulajdonságok miatt a gyermekpszichodráma alkalmas különböző viselkedési zavarokkal és pszichoszomatikus zavarokkal küzdő gyermekek kezelésére. Azoknak a gyermekeknek is megfelelő terápiás környezetet biztosít, akiket pszichoszociális nehézségekkel küzdő családokból irányítanak, lehetővé téve az instabil családi struktúrák (pl. válás, alkoholizmus, elhanyagolás, bántalmazás) témáinak kifejezését.
              </p>
              <p class='text-justify'>
                  Az önálló kezdeményezés a résztvevők erős motivációjának garanciája. A jó hangulatú légkör kiküszöböli mindenféle stigmatizációt. A pszichodráma alkalmas a „egészséges” gyermekek növekedésének és fejlődésének elősegítésére. A résztvevők a kreativitásuk és események létrehozása révén a teremtő folyamat részeivé válnak. A gyermekpszichodráma terápiás folyamatában a gyermekek és a felnőttek egyenlő partnerré válnak. A spontán játék felszabadítja a gyermekek kreativitását, bővíti szerepeik repertoárját, katartikus élményeket vált ki, és hozzájárul a személyiség növekedéséhez, fejlődéséhez és megerősödéséhez.
              </p>
              <p class='text-justify'>
                  Optimális körülmények között a csoportot két terapeuta vezeti, egy nő és egy férfi. Az ő szerepük, hogy támogassák a gyermekeket az önpercepció és saját értékeik megélésében. A terapeuták irányítják a pszichoterápiás folyamatot az új élmények és kapcsolatok kiépítésére, amelyek révén a gyermekek felismerhetik és megtapasztalhatják magukat mint kreatív egyéneket, akik méltóak a figyelemre és szeretetre. A vezetők a kialakított játékokban két dimenzióban vesznek részt. Egyrészt alkalmazkodnak az egyes gyermekekhez, próbálják megérteni őket, felfedezni és megérteni viselkedésüket és érzéseiket. Másrészt figyelik és rögzítik a csoportban zajló eseményeket, értelmezik és irányítják a csoportos folyamatokat.
              </p>
              <p class='text-justify'>
                  A pszichodrámás találkozókon a gyermekek azt érzik és élik meg, hogy belépnek egy másik világba, egy olyan világba, ahol minden lehetséges, ahol bármi megtörténhet. Bűvésznek öltözhetnek, bármilyen kívánt szerepet felvehetnek, és azt történik, amit ők maguk teremtenek. Mások történeteiben saját választásuk alapján vesznek részt. Az egyetlen fontos, elengedhetetlen és pótolhatatlan szabály a „mint ha” szabály, amely biztosítja, hogy az agresszió csak szimbolikus formában fejeződjön ki. A „mint ha” szabály környezete, a képzelet, a játék iránti nyitottság megnyugtatja a gyermekeket. A gyermekek sokkal autentikusabb viselkedést mutatnak, mint a mindennapi, valós környezetükben. A kreatív átalakulás érzését a jelmezek viselése segíti elő, aktiválva a gyermekek fantáziáját. Automatikusan azt élik meg, hogy ők maguk teremtik meg az eseményeket, irányítják a teret és a környezetet. A gyermekek aktiválják és animálják a vezetőket-terapeutákat, bármilyen szerepet adnak nekik, és bármilyen sorsot irányítanak számukra. A mozgás-akció-katarzis módszere olyan élmény, amely képes korrigálni és gyógyítani a korábbi tapasztalatokat. A gyermekpszichodrámában nincs értelmezés, kommentár, és nem vonnak le következtetéseket.
              </p>
              <p class='text-justify'>
                  A gyermekek a pszichodrámát úgy élik meg, mint egy elbűvölt mesevilágot. A játék, a mesék, a költészet világába való elmélyülés, egy varázslatos, kreatív világ létrehozása nem önálló cél, hanem egy olyan környezetet és módszert jelent, amely lehetővé teszi a gyermek számára, hogy megváltoztassa saját magáról alkotott képét, más életstílust tapasztaljon meg, és új módokat fedezzen fel a létezésre és az életre.
              </p>
              <p class='text-justify'>
                  Ha ezek a metodikai irányelvek felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni a javasolt irodalmat, részt venni a szemináriumainkon és workshopjainkon, vagy csatlakozni képzéseinkhez, forduljon hozzánk a következő címen: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a>
              </p>
          ",
      ]),
      'order' => 2,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Winnicott’s Scribbles',
          'hu' => 'Winnicott karcolásai',
          'sr' => 'Vinikotove škrabalice'
      ]),
      'content' => json_encode([
          'sr' => "
              <p class='text-justify'>
                Winnicott utemeljuje analitičku orijentisanu kratku psihoterpijsku metodu – terapijsku konsultaciju – u okviru koje komunikaciju sa detetom se ostvaruje zajedničkim crtanjem, metodom „škrabalice”. Metoda je povoljna za otkrivanje traume ili konflikta koja generiše detetove simptome. List papira koji kruži između deteta i terapeute može da posluži za otkrivanjem detetovih nesvesnih sadržaja. Winnicott tokom procesa crtanja, škrabanja vodi dete prema ponovnom preživljavanju i elaboraciji traumatičkih doživljaja, a potom i do korekcije doživljaja do ozdravljenja. Cilj terapijskih konsultacija nije tumačenje nesvesnih sadržaja. Winnicott smatra prihvatljivim ono tumačenje koje posredstvom nove asocijacije doprinosi otkrivanju traumatičkih sadržaja. U okviru terepijske konsultacije dete koristi psihologa kao potencijani objekat. U uvom kontekstu dete učestvuje u kreiranju komunikacije prihvatajući ili odbijajući terapeutove asocijacije i tumačenja. Winnicot je koristio metodu kao podršku porodici u slučajevima prelaznih zastoja u dečjem razvoju, smatrajući da roditelji poseduju spremnost i snagu a da za ostvarenje pozitivnih izmena dovoljna je samo minimalna podrška. U terapijskoj konsultaciji dete koristi psihologa kao potencijalni objekat. U ovom kontekstu dete učestvuje u kreiranju komunikacije prihvatajući ili odbijajući terapeutove asocijacije i tumačenja. Winnicott je koristio metodu kao podršku porodici u slučajevima prelaznih zastoja u dečjem razvoju, smatrajući da roditelji poseduju spremnost i snagu a da za ostvarenje pozitivnih izmena dovoljna je samo minimalna podrška.
              </p>
              <p class='text-justify'>
                Tokom zajedničkog i naizmeničnog crtanja, terapeut i dete dopunjavaju započete crteže. Docrtavanjem, dopunjavanjem, daju smisla i značenje naškrabanim linijama na papiru. Tokom zajedničkog rada, prazan papir koji je „tabula rasa” nema „nikakvo” značenje, treba da se ispuni sa smisaonim, prepoznatljivim sadržajem. Zajednički rad, crtanje postaje igra bez granica, bez naročitih pravila, može da poprimi kreativno obeležje, tokom kojeg se nešto stvara, menja i razvija se. Zahvaljujući ovom svojstvima „škrabalica” postaje pogodna za pokretanje i prikaz i detetovih i terapeutovih projekcija. Rezultat kreativne saradnje je spontano kreiranje i otvaranje jedne teme, koja tokom svog ponavljanja stalno se doponjava i obogaćuje se sa novim detaljima i sadržajima. Tako crtanje predstavlja detetov pokušaj da se oslobodi od traumatskih doživljaja. U terepijskim konsultacijama dete nije prepušteno sebi, sopstvenim impulsima i snagama. Ranije doživljenu traumu tokom crtanja, dete preživljava u prisustvu terapeuta, koji pruža razumevanje, zaštitu i sigurnost. Simboličko tumačenje i ponovljeni emocionalni doživljaji mogu poslužiti kao korektivni doživljaj. Zahvaljujući ovim svojstvima zajedničko crtanje, „škrabalica” je pogodna za pokretanje mehanizama samoizlečenja i već jedan terapijski susret može biti efikasan. Na kraju procesa crtanja, kao rezultat produbljivanja terapijskog procesa terpeut inicira vizualizaciju i eksploraciju jednog detetovog sna.
              </p>
              <p class='text-justify'>
                Dok su klasične psihodiagnostičke metode bazirane na crtežu – porodice, drveta, čoveka – individualne metode, gde terapeut posmatra kako i šta dete crta. Winnicot-ova metoda se ostvaruje u međusobnom, intersubjektivnom, simetričnom odnosu deteta i psihoterapeuta. Naslanjajući se na svoje nesvesno i dete i terapeut se uključuju u stvaralački proces, iz nestrukturisanih linija grade nešto što sa simboličkim smislom sa značenjem.
              </p>
              <p class='text-justify'>
                Terapijske konsultacije su uspešno primenjuju već od predškolskog uzrasta, a najčešće se koriste u slučaju kada se ne mogu osigurati uslovi ili ne postoje indikacije za dugotrajnim tretmanom. U našim uslovima ova metoda se može efikasno koristiti u razvojnim i adolescentnim savetovalištima, u radu školskog psihologa, gde ne postoje uvek uslovi, a često nema ni potrebe de se ulazi u dugotrajnu eksplorativnu terapiju. Metoda terapeutskih konsultacija je primenljiva i u bolničkim uslovima, na dečjim odeljenjima, gde se deca većinom zadržavaju samo nekoliko dana. U ovim uslovima terapeut može da pruži podršku detetu u procesu adaptacije na bolničko okruženje, da mu pomogne da se oslobodi straha i anksioznosti, da mu pruži osećaj sigurnosti i zaštite.
              </p>
              <p class='text-justify'>
                Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a>
              </p>
          ",
          'en' => "
              <p class='text-justify'>
                  Winnicott establishes an analytically oriented short psychotherapy method – therapeutic consultation – in which communication with the child is achieved through joint drawing, using the method of 'scribbling.' The method is favorable for discovering trauma or conflict that generates the child's symptoms. The sheet of paper circulating between the child and the therapist can serve to uncover the child's unconscious contents. During the drawing process, Winnicott leads the child towards re-experiencing and elaborating traumatic experiences, followed by the correction of these experiences until healing occurs. The goal of the therapeutic consultation is not to interpret unconscious contents. Winnicott accepts the interpretation that, through new associations, helps uncover traumatic contents. In the context of the therapeutic consultation, the child uses the psychologist as a potential object. In this context, the child participates in the creation of communication by accepting or rejecting the therapist’s associations and interpretations. Winnicott used the method as support for the family in cases of transitional developmental stagnation, believing that parents possess the readiness and strength, and that only minimal support is necessary for positive changes to occur.
              </p>
              <p class='text-justify'>
                  During joint and alternating drawing, the therapist and the child complement each other's drawings. Through adding to and completing the drawings, they give meaning and significance to the scribbled lines on the paper. Throughout the joint work, the blank paper, as a 'tabula rasa,' has 'no' meaning and must be filled with meaningful, recognizable content. Joint work, drawing, becomes a game without limits, without specific rules, and can take on a creative character, during which something is created, changed, and developed. Thanks to these characteristics, the 'scribbling' method becomes suitable for triggering and displaying both the child's and the therapist's projections. The result of this creative collaboration is the spontaneous creation and opening of a theme, which, through repetition, is continuously complemented and enriched with new details and contents. Thus, drawing represents the child's attempt to free themselves from traumatic experiences. In therapeutic consultations, the child is not left to their own impulses and strengths. The previously experienced trauma is re-lived during drawing, in the presence of the therapist, who provides understanding, protection, and security. Symbolic interpretation and repeated emotional experiences may serve as corrective experiences. Thanks to these properties, joint drawing, 'scribbling,' is suitable for triggering self-healing mechanisms, and even a single therapeutic session can be effective. At the end of the drawing process, as a result of deepening the therapeutic process, the therapist initiates the visualization and exploration of a child's dream.
              </p>
              <p class='text-justify'>
                  While classical psychodiagnostic methods based on drawings – such as family, tree, and human drawings – are individual methods where the therapist observes how and what the child draws, Winnicott’s method takes place in a mutual, intersubjective, symmetrical relationship between the child and the psychotherapist. Relying on their unconscious, both the child and the therapist engage in the creative process, building something from unstructured lines that carries symbolic meaning and significance.
              </p>
              <p class='text-justify'>
                  Therapeutic consultations have been successfully applied since the preschool age and are most often used when conditions for or indications for long-term treatment cannot be ensured. In our conditions, this method can be effectively used in developmental and adolescent counseling, in the work of school psychologists, where conditions for long-term exploratory therapy are not always available, and there is often no need for such therapy. The therapeutic consultation method is also applicable in hospital settings, in children's wards, where children are usually hospitalized for only a few days. In these conditions, the therapist can provide support to the child in the process of adapting to the hospital environment, helping them overcome fear and anxiety, and providing them with a sense of security and protection.
              </p>
              <p class='text-justify'>
                  If these methodological guidelines have sparked your interest, if you want to learn more, read the recommended literature, attend our seminars and workshops, or join our educational programs, you can contact us at the following address: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a>
              </p>
          ",
          'hu' => "
              <p class='text-justify'>
                  Winnicott egy analitikus irányultságú rövid pszichoterápiás módszert – terápiás konzultációt – alakít ki, amelynek keretében a gyermekkel való kommunikáció közös rajzolással, a „karcolás” módszerével történik. A módszer kedvező a trauma vagy konfliktus felfedezésére, amely a gyermek tüneteit generálja. A papírlap, amely körbejár a gyermek és a terapeuta között, segíthet a gyermek tudattalan tartalmának feltárásában. A rajzolás folyamatában Winnicott a gyermeket a traumatikus élmények újraélésére és kidolgozására vezeti, majd a tapasztalatok korrigálására, amíg a gyógyulás meg nem történik. A terápiás konzultációk célja nem a tudattalan tartalmak értelmezése. Winnicott azt az értelmezést tekinti elfogadhatónak, amely az új asszociációk révén hozzájárul a traumatikus tartalmak feltárásához. A terápiás konzultáció keretében a gyermek a pszichológust potenciális objektumként használja. Ebben a kontextusban a gyermek részt vesz a kommunikáció megteremtésében, elfogadva vagy elutasítva a terapeuta asszociációit és értelmezéseit. Winnicott ezt a módszert a családok támogatására használta a gyermek fejlődésében jelentkező átmeneti elakadások esetén, azt gondolva, hogy a szülők rendelkeznek a szükséges felkészültséggel és erővel, és hogy a pozitív változások eléréséhez csak minimális támogatásra van szükség.
              </p>
              <p class='text-justify'>
                  A közös és felváltva történő rajzolás során a terapeuta és a gyermek kiegészítik egymás által elkezdett rajzokat. A rajzok kiegészítésével, hozzáadásával értelmet és jelentést adnak a papíron lévő karcolt vonalaknak. A közös munka során a üres papír, mint „tabula rasa,” nem rendelkezik „semmilyen” jelentéssel, ezt kell megtölteni értelmes, felismerhető tartalommal. A közös munka, a rajzolás határtalan játékká válik, különleges szabályok nélkül, kreatív jelleget ölthet, amelynek során valami teremtődik, változik, fejlődik. E tulajdonságoknak köszönhetően a „karcolás” módszer alkalmas arra, hogy elindítsa és bemutassa a gyermek és a terapeuta projekcióit is. Az alkotó együttműködés eredménye a spontán téma létrehozása és megnyitása, amely a visszatérés révén folyamatosan kiegészül és gazdagodik új részletekkel és tartalmakkal. Így a rajzolás a gyermek próbálkozását jelenti a traumatikus élmények elengedésére. A terápiás konzultációk során a gyermek nincs egyedül, saját impulzusaival és erejével. A korábban megélt traumát a gyermek a terapeuta jelenlétében éli újra a rajzolás során, aki megértést, védelmet és biztonságot nyújt. A szimbolikus értelmezés és az ismétlődő érzelmi élmények korrigáló élményként szolgálhatnak. E tulajdonságoknak köszönhetően a közös rajzolás, a „karcolás” alkalmas a saját gyógyulási mechanizmusok elindítására, és már egyetlen terápiás találkozó is hatékony lehet. A rajzolási folyamat végén, a terápiás folyamat elmélyülésének eredményeként a terapeuta elindítja a gyermek egy álmának vizualizálását és felfedezését.
              </p>
              <p class='text-justify'>
                  Míg a klasszikus pszichodiagnosztikai módszerek – család, fa, ember rajzolása – egyéni módszerek, ahol a terapeuta megfigyeli, hogy a gyermek hogyan és mit rajzol, addig Winnicott módszere kölcsönös, interszubjektív, szimmetrikus kapcsolatban valósul meg a gyermek és a pszichoterapeuta között. Mind a gyermek, mind a terapeuta a saját tudattalanjukra támaszkodva vesz részt az alkotó folyamatban, és a strukturálatlan vonalakból olyasmit építenek, ami szimbolikus jelentéssel bír.
              </p>
              <p class='text-justify'>
                  A terápiás konzultációk sikeresen alkalmazhatók már az óvodáskorú gyermekeknél, és leggyakrabban akkor használják őket, amikor nem biztosíthatók a hosszú távú kezeléshez szükséges feltételek, vagy amikor nincs szükség ilyen kezelésre. Hazánkban ez a módszer hatékonyan alkalmazható fejlődési és serdülő tanácsadó szolgálatoknál, iskolapszichológusi munkában, ahol nem mindig biztosítottak a hosszú távú exploratív terápiás feltételek, és gyakran nincs szükség hosszú távú terápiára. A terápiás konzultációs módszer alkalmazható kórházi környezetben, gyermekosztályokon is, ahol a gyermekek jellemzően csak néhány napig tartózkodnak. Ilyen körülmények között a terapeuta támogatást nyújthat a gyermek számára a kórházi környezethez való alkalmazkodás folyamatában, segíthet megszabadulni a félelemtől és szorongástól, és biztosíthatja számára a biztonság érzését.
              </p>
              <p class='text-justify'>
                  Ha ezek a módszertani útmutatók felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni a javasolt irodalmat, részt venni a szemináriumainkon és workshopjainkon, vagy csatlakozni oktatási programjainkhoz, akkor kapcsolatba léphet velünk az alábbi címen: <a href='mailto:info@integrativ.org.rs'>info@integrativ.org.rs</a>
              </p>
          ",
      ]),
      'order' => 3,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Individual Psychodrama',
          'hu' => 'Egyéni pszichodráma',
          'sr' => 'Individualna psihodrama'
      ]),
      'content' => json_encode([
          'sr' => "
              <p class='text-justify'>
                Integrativna dečja psihoterapija predstavlja intenzivan vid terapije. Pored terapijskog rada sa decom i adolescentima često uključuje i ostale članove porodice sa namerom da poboljša odnose, da povrati funkcionalnost i celovitost porodice ukoliko je zbog nekog razloga narušena. Terepeut u tom procesu od samog početka nastoji da bude sanzitivan prema subjektivnim doživljajima i potrebama dece, adolescenata i roditelja. Zbog specifičnosti razvojnog procesa komunikacija sa adolescentima i njihovo uključenje u terapijski proces predstavlja ključno pitanje i svakako zahteva posebnu posvećenost i psihoterapijsku tehniku. Pristup koji pored toga što ostvaruje adekvatno i sigurno teapijsko okruženje može da se usmeri i prema internim mentalnim procesima. Međutim pored rada sa decom i adolscentima, terapeut često treba da posveti posebnu pažnju roditeljima. Da ublaži mogući snažan otpor roditelja prema promenama ili da smanji negativan uticaj izazvan nerešenim psihološkim traumama ili konfliktima iz detinjstva ili adolescentne dobi. Podrška roditeljima da prepoznaju i da adaptiraju odnos promenjenim dečjim potrebama podržava i resurse roditeljstva i efikasnost terapije.
              </p>
              <p class='text-justify'>
                Terapijski proces koji jača otvorenost prema prepoznavanju osećanja, potreba, motiva, pomaže u identifikiciji nekonstruktivnih misli i ponašanja a istovremeno podržava rast, razvoj, prilagođavanje, uviđajnost, socijalnu kreativnost i adolescenta i roditelja, čak može da podrazumeva i simultano uključenje obe strane može da se ostvari tehnikom individualne psihodrame. Tehnika koja u savetovanju i u radu sa roditeljem i adolescentom koristi elemente specifične varijacije psihodramske metode. Pristup koji na osnovu bazičnih odlika psihodramske metode na specifičan i diferencijalan način aktivira ljudsku kreativnost, pomaže u radu na konfliktima i u pronalaženju novih rešenja. Ove odlike i pozitivni efekti psihodrame ne zavise od tipa setinga i mogu da se ostvare u okviru individualnog tretmana kao i u okviru grupne psihoterapije. Psihodrama baš iz ovih razloga je efikasna i u individualnoj i u grupnoj terapiji. Individualna psihodrama nije neka nužna podređena podvrsta, manje vredna alternativa grupnog oblika rada primenjena u „nedostatku saigrača“. Savetovanja sa elementima individualne psihodrame može da podrazumava terapijsku aktivnosti na psihodramskoj sceni terapijskog prostora prihvatanjem i igranjem uloga tehnikom stolica (chair work) ili scensku aktivnosti baziranu na simboličnom prikazu intrapsihičkih sadržaja pomoću prenosnih predmeta koja se realizuje na površini radnog stola.
              </p>
              <p class='text-justify'>
                Oba oblika individualnog savetovanja i terapeutskog rada otvaraju mogućnost za primenu većini psihodramskih tehnika kao što su empatijski intervju, odigravanje uloge, zamena uloge, vremeska regresija, projekcija budućnosti... Mogu da posluže za konkretizaciju: delova sopstvene ličnosti, selfa ili objekta, uloga, osećanja, pozicije referentnih osoba, nečije kritike, važnih predmete i događaje iz života, značajnih ili skrivenih relacija unutar porodice. Aktivnim učešćem u kreiranju scene lakše se otvaraju kanali senzornih, misaonih i somatsko memorijskih sadržaja i puteva. Bolje razumevanje nekog iskustva iz prošlosti, realan prikaz neke interakcije iz sadašnjosti, uvežbavanje nekog ponašanja koj će se realizovati u budućnosti širi prespektivu, i jača mehanizme mentalizacije potrebne za rad na konfliktima. Programi „unutrašnjih slika”, “sheme i interni obrazci” ponašanja postaju dostupniji. Tokom procesa savetodavnog rada kreirani sadržaji pomoću prenosnih predmeta, rezultiraju vizuelnu konkretizaciju nekog biografskog detalja, doživljaja ili konflikta i mogu da poprimi poseban vizuelno-estetski efekat - duševni pejzaž.
              </p>
              <p class='text-justify'>
                Savetodavnim aktivnostima izgrađena samoprocena i samorefleksija pomaže boljem razumevanju sebe, prepoznavanju sospstvenih snaga i potencijalnog polja razvoja otvarajući vrata integrativnim procesima bez obzira na uzrast, dob ili poziciju klijenta. Savetovanje sa elementima individualne psihodrame baš bog tog razloga predstavlja pogodan terapijski okvir za poboljšanje i za uspostavljanje uravnoteženog odnosa između procesa samoaktualizacije i empatijskim uvidom, neophodnim za mentalizaciju tokom rada na razrešenju internih i međuljudskih konflikata.
              </p>
              <p class='text-justify'>
                Cilj je pomoć porodici u kreiranju prihvatljivog, željenog i funkcionalnog odnosa i okruženja kao i jačanje kapaciteta adolescenata, dece kao i roditelja da budu srećniji, dostupniji i otvoreniji, da se olakša rast i razvoj.
              </p>
          ",
          'en' => "
            <p class='text-justify'>
              Integrative child psychotherapy represents an intensive form of therapy. In addition to working with children and adolescents, it often involves other family members in order to improve relationships, restore functionality, and re-establish the integrity of the family when disrupted for any reason. The therapist strives from the very beginning to be sensitive to the subjective experiences and needs of children, adolescents, and parents. Due to the specificity of the developmental process, communication with adolescents and their inclusion in the therapeutic process is a key issue and certainly requires special attention and psychotherapeutic techniques. The approach that, in addition to providing an adequate and secure therapeutic environment, can also focus on internal mental processes. However, besides working with children and adolescents, the therapist often needs to pay special attention to the parents. To mitigate potential strong resistance from parents towards changes or reduce the negative impact caused by unresolved psychological trauma or conflicts from childhood or adolescence. Supporting parents to recognize and adapt to their child's changing needs strengthens both parenting resources and therapy effectiveness.
            </p>
            <p class='text-justify'>
              The therapeutic process, which strengthens openness to recognizing feelings, needs, and motives, helps in identifying unconstructive thoughts and behaviors, while simultaneously supporting growth, development, adjustment, awareness, and social creativity in both adolescents and parents. It may even involve the simultaneous inclusion of both parties through individual psychodrama techniques. A technique that, in counseling and working with a parent and adolescent, uses elements of a specific variation of the psychodrama method. An approach that, based on the basic features of the psychodrama method, activates human creativity in a specific and differential way, helping to work on conflicts and find new solutions. These characteristics and positive effects of psychodrama do not depend on the type of setting and can be implemented within individual treatment as well as in group psychotherapy. For these reasons, psychodrama is effective both in individual and group therapy. Individual psychodrama is not a subordinate, lesser-valued alternative to group work used only in the 'absence of playmates.' Counseling with elements of individual psychodrama can involve therapeutic activities on the psychodramatic stage of the therapeutic space, using chair work or scene activities based on symbolic representation of intrapsychic contents using portable objects, which can be realized on the surface of a work desk.
            </p>
            <p class='text-justify'>
              Both forms of individual counseling and therapeutic work open up the possibility for the application of most psychodramatic techniques, such as empathy interviews, role-playing, role reversal, time regression, future projection... These can help to concretize: parts of one's personality, self or object, roles, feelings, positions of reference persons, criticism, important objects and events in life, significant or hidden relationships within the family. By actively participating in creating the scene, sensory, cognitive, and somatic memory channels and pathways are more easily opened. A better understanding of past experiences, a realistic representation of some interaction in the present, practicing a behavior that will be realized in the future broadens perspective and strengthens the mentalization mechanisms needed to work on conflicts. Programs of 'internal images', 'schemas, and internal patterns' of behavior become more accessible. During the counseling process, the created content using portable objects results in a visual concretization of some biographical detail, experience, or conflict, and can take on a special visual-aesthetic effect—a soulful landscape.
            </p>
            <p class='text-justify'>
              The self-assessment and self-reflection built through counseling activities help in better understanding oneself, recognizing one's strengths, and potential development fields, opening the door to integrative processes, regardless of the client's age, gender, or position. Counseling with elements of individual psychodrama, for this reason, represents a suitable therapeutic framework for improving and establishing a balanced relationship between the processes of self-actualization and empathetic insight, necessary for mentalization when working on resolving internal and interpersonal conflicts.
            </p>
            <p class='text-justify'>
              The goal is to help the family create an acceptable, desired, and functional relationship and environment, as well as to strengthen the capacity of adolescents, children, and parents to be happier, more available, and open, easing growth and development.
            </p>
          ",
          'hu' => "
            <p class='text-justify'>
              Az integratív gyermekpszichoterápia intenzív terápiás módszert jelent. A gyermekekkel és serdülőkkel végzett terápiás munka mellett gyakran más családtagokat is bevon, hogy javítsa a kapcsolatokat, visszaállítsa a funkcionalitást és a család integritását, ha valamilyen okból megzavarták. A terapeuta már a kezdetektől fogva igyekszik érzékeny lenni a gyermekek, serdülők és szülők szubjektív élményeire és szükségleteire. A fejlődési folyamat sajátosságai miatt a serdülőkkel való kommunikáció és a terápiás folyamatba való bevonás kulcsfontosságú kérdés, és mindenképpen különleges figyelmet és pszichoterápiás technikát igényel. Az a megközelítés, amely nemcsak a megfelelő és biztonságos terápiás környezetet biztosít, hanem belső mentális folyamatokra is irányulhat. Azonban a gyermekekkel és serdülőkkel végzett munka mellett a terapeuta gyakran külön figyelmet kell fordítson a szülőkre is. Enyhíteni kell a szülők esetleges erős ellenállását a változásokkal szemben, vagy csökkenteni kell a gyermekkori vagy serdülőkorú pszichológiai traumák vagy konfliktusok által kiváltott negatív hatást. A szülők támogatása, hogy felismerjék és alkalmazkodjanak a megváltozott gyermek szükségleteihez, erősíti a szülői erőforrásokat és a terápia hatékonyságát.
            </p>
            <p class='text-justify'>
              A terápiás folyamat, amely erősíti az érzések, szükségletek és indítékok felismerésére való nyitottságot, segít az konstruktívtalan gondolatok és viselkedések azonosításában, miközben támogatja a növekedést, fejlődést, alkalmazkodást, tudatosságot és társas kreativitást a serdülők és szülők számára. Ez akár mindkét fél egyidejű bevonását is magában foglalhatja az egyéni pszichodráma technikáján keresztül. Egy technika, amely a pszichodráma módszerének alapvető jellemzőire támaszkodva speciálisan és differenciált módon aktiválja az emberi kreativitást, segít a konfliktusok kezelésében és új megoldások keresésében. A pszichodráma ezen jellemzői és pozitív hatásai nem függenek a beállítás típusától, és megvalósíthatók egyéni kezelés keretében, valamint csoportos pszichoterápiában is. Éppen ezért a pszichodráma hatékony mind egyéni, mind csoportos terápiában. Az egyéni pszichodráma nem egy szükségszerűen alárendelt, kevésbé értékes alternatívája a csoportos munkának, amit csak a 'játszótársak hiányában' alkalmaznak. A pszichodráma elemeit tartalmazó tanácsadás magában foglalhatja a terápiás tevékenységeket a pszichodramatikus színpadon, székmunka (chair work) alkalmazásával, vagy színpadi tevékenységeket, amelyek intrapszichikus tartalmak szimbolikus ábrázolásán alapulnak, átvihető tárgyak használatával, amelyeket a munkaasztalon lehet végrehajtani.
            </p>
            <p class='text-justify'>
              Az egyéni tanácsadás és terápiás munka mindkét formája lehetőséget biztosít számos pszichodramatikus technika alkalmazására, mint például empátiai interjúk, szerepjáték, szerepcserék, időbeli regresszió, jövőbeli projekciók... Segíthetnek konkretizálni: a személyiség részeit, a szelfet vagy az objektumokat, szerepeket, érzéseket, a referenciális személyek pozícióját, valaki kritikáját, fontos tárgyakat és életbeli eseményeket, jelentős vagy rejtett kapcsolatokat a családon belül. Az aktív részvétel a színtér megteremtésében könnyebbé teszi az érzékszervi, kognitív és szomatikus memória csatornák és utak megnyitását. A múltbeli élmény jobb megértése, egy interakció reális ábrázolása a jelenben, egy viselkedés gyakorlása, amelyet a jövőben realizálni fognak, szélesíti a perspektívát és erősíti a konfliktusok kezeléséhez szükséges mentalizációs mechanizmusokat. Az 'belső képek', 'sémák és belső minták' viselkedés elérhetőbbé válnak. A tanácsadási folyamat során a hordozható tárgyak segítségével létrehozott tartalmak vizuális konkretizálódása eredményezi egyes biográfiai részletek, élmények vagy konfliktusok vizuális konkretizálását, és különleges vizuális-esztétikai hatást eredményezhet – egy lelki tájat.
            </p>
            <p class='text-justify'>
              A tanácsadás során felépített önértékelés és önreflexió segíti a jobb önismeretet, a saját erősségek és potenciális fejlődési területek felismerését, és megnyitja az utat az integratív folyamatok előtt, függetlenül a kliens életkorától, nemétől vagy pozíciójától. Az egyéni pszichodráma elemeit tartalmazó tanácsadás ezért megfelelő terápiás keretet jelent az önmegvalósítási folyamatok és az empatikus belátás közötti egyensúly kialakításához, amely szükséges a mentalizációhoz a belső és interperszonális konfliktusok feloldására irányuló munkában.
            </p>
            <p class='text-justify'>
              A cél, hogy segítsünk a családnak egy elfogadható, kívánt és funkcionális kapcsolat és környezet létrehozásában, valamint erősítsük a serdülők, gyermekek és szülők kapacitását, hogy boldogabbak, elérhetőbbek és nyitottabbak legyenek, elősegítve a növekedést és fejlődést.
            </p>
          ",
      ]),
      'order' => 4,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Catathymic Imaginative Psychotherapy - KIP',
          'hu' => 'Katatímikus Imaginatív Pszichoterápia - KIP',
          'sr' => 'Katatimska imaginativna psihoterapija - KIP'
      ]),
      'content' => json_encode([
          'sr' => '
              <p class="text-justify">
                Katatimska imaginativna psihoterapija je utemeljena 50-ih godina, kao naučno osnovana suportivna i psihoterapijska metoda, zahvaljujući istraživačkom radu Hanscarl Leuner-a. Izraz katatimska označava proces projekcije simboličnih emocionalnih doživljaja podstaknutih visoko afektivnim nesvesnim sadržajima. Imaginacija se odnosi na terapijskim ciljem izazvanu, upravljanu i praćenu regresiju i na vizulizaciju doživljaja. Imaginativni sadržaji podležu inerciji samostalnih zakonitosti. Stvoreni imaginativno vizuelni doživljaji su relativno nezavisni od ref1ektivnog mišljenja i od voljnih procesa. KIP se ostvaruje u stanju psihofiziološke opuštenosti, koju inače doživljavamo tokom ulaska u san ili pri buđenju. Inducirano stanje izmenjene svesti slabi uticaj odbrambenih mehanizama i cenzure, tako da je metoda uspešna u elaboraciji sadržaja koja se teško verbalizuju. Drugim metodama teško dostupni sadržaji, kao što su snovi, slobodne asocijacije, odnosno traumatski i emocionalni doživljaji potisnuti dejstvom odbrambenih mehanizama pristupačni su KIP-u. Mesto KIP-a kao psihoterapijskog modaliteta je između plej terapije i verbalne terapije. Ona je uspešna i pogodna za psihoterapiju dece starijeg školskog uzrasta i adolescenata iz više razloga. Prvenstveno zbog prednosti metodologije rada "sa" i "na" simbolima, koja pored pozitivnog terapijskog efekta sprečava preranu i nepripremljenu konfrontaciju, intelektualizaciju sopstvenih konflikata i emocionalnih teškoća. Ispoljena projektivna energija simboličkog sadržaja u imaginiranoj vizulizaciji čini KIP efikasnim pri intervenciji u kriznim stanjima i u kratkom psihoterepijskom setingu.
              </p>
              <p class="text-justify">
                Terapijski proces tokom Katatimske imaginativne psihoterapije se ostvaruje na dva nivoa. Prvi nivo je rezultat imaginacije i odnosi se na rad sa simbolima, koji predstavlja odraz simboličkog izražavanja primarnih emocionalnih procesa. Imaginirane slike odražavaju strukturu konflikata, konstelaciju afekata, kao i unutrašnje objekte i modele objektnih odnosa. Tako rad na simbolima sa ciljem njihove izmene istovremeno predstavlja i rad na primarnom nivou ličnosti, rad sa nesvesnim sadržajima. Rad na sekundarnom nivou se ostvaruje eksploracijom i verbalizacijom simboličnih, imaginiranih sadržaja. Zahvaljujući ovom svojstu, KIP omogućuje da sadržaji koji su inicirani nesvesnom tematikom budu dostupni i izmenama preko kognitivnih procesa. Rad "sa" i "na" simbolima kao i mogućnost elaboracije konflikata i na primarnom i na sekundarnom nivou omogućuje korekciju i rad na emocionalnim deficitima nastalih u veoma ranom periodu detinjstva, te snažno doprinosi rastu i razvoju ličnosti. KIP se lako i efikasno kombinuje sa art, akcionim  i kreativnim terapijama kao što su crtež, igra i animacija lutaka, psihodrama. Imagirani sadržaji tokom KIP-a mogu značajno da dinamiziraju tok ovih terapijskih modaliteta.
              </p>
              <p class="text-justify">
                Metodološki KIP se deli na bazični, napredni i viši stepen. Svaki terapijski nivo podrazumeva rad sa specifičnim motivima, drugačiji način vođenje terapije, kao i sadržajno različitu vrstu terapijskih intervencija. Motivi bazičnog stepena prilagođeni su preedipalnoj fazi razvoja ličnosti. Osnovni motivi i incirani sadržaji imaginacije bazičnog stepena su: livada, reka, brdo, kuća i šuma. Terapijske intervencije i ciljevi bazičnog stepena su susret, kontakt, prihvatanje, pomirenje sa često intenzivnim emicionalnim sadržajima osnovnih konflikata prikazanih u simboličnim sadržajima vizualiziranih slika.
              </p>
              <p class="text-justify">
                Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
          'en' => '
              <p class="text-justify">
                Katatymic imaginative psychotherapy was established in the 1950s as a scientifically grounded supportive and psychotherapeutic method, thanks to the research work of Hanscarl Leuner. The term katatymic refers to the process of projection of symbolic emotional experiences triggered by highly affective unconscious contents. Imagination refers to the regression and visualization of experiences, which is managed and followed with therapeutic goals. Imaginative contents follow the inertia of their independent laws. The created imaginative visual experiences are relatively independent of reflective thinking and voluntary processes. KIP is realized in a state of psychophysiological relaxation, which we normally experience when entering sleep or waking up. The induced altered state of consciousness weakens the influence of defense mechanisms and censorship, making the method successful in elaborating contents that are difficult to verbalize. Other methods find it hard to access contents such as dreams, free associations, or traumatic and emotional experiences repressed by defense mechanisms, but KIP can approach them. KIP\'s position as a psychotherapeutic modality is between play therapy and verbal therapy. It is successful and suitable for psychotherapy with older children and adolescents for several reasons. Primarily because of the advantages of the "with" and "on" symbols methodology, which, in addition to a positive therapeutic effect, prevents premature and unprepared confrontation, intellectualization of one\'s own conflicts, and emotional difficulties. The projected symbolic energy in the imagined visualization makes KIP efficient in crisis interventions and in a short psychotherapeutic setting.
              </p>
              <p class="text-justify">
                The therapeutic process during Katatymic imaginative psychotherapy takes place on two levels. The first level is the result of imagination and relates to working with symbols, which reflects the symbolic expression of primary emotional processes. Imagined images reflect the structure of conflicts, the constellation of affects, as well as internal objects and models of object relations. Thus, working with symbols to modify them simultaneously represents work at the primary personality level, working with unconscious contents. Work at the secondary level is realized by exploring and verbalizing symbolic, imagined contents. Thanks to this property, KIP allows contents initiated by unconscious themes to be accessible and altered through cognitive processes. Working "with" and "on" symbols, as well as the possibility of elaborating conflicts on both the primary and secondary levels, allows for the correction and work on emotional deficits created in the very early stages of childhood, thus strongly contributing to the growth and development of the personality. KIP easily and effectively combines with art, action, and creative therapies such as drawing, play, puppet animation, and psychodrama. Imagined contents during KIP can significantly energize the course of these therapeutic modalities.
              </p>
              <p class="text-justify">
                Methodologically, KIP is divided into basic, advanced, and higher levels. Each therapeutic level involves working with specific motifs, a different way of conducting therapy, and content-wise different types of therapeutic interventions. The motifs of the basic level are adapted to the pre-edipal phase of personality development. The main motifs and initiated contents of imagination at the basic level are: meadow, river, hill, house, and forest. Therapeutic interventions and goals at the basic level involve meeting, contact, acceptance, reconciliation with often intense emotional contents of basic conflicts represented in the symbolic contents of visualized images.
              </p>
              <p class="text-justify">
                If these methodological instructions have sparked your interest, if you want to learn more, read the recommended literature, attend our seminars and workshops, or participate in our training, you can contact us at: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
          'hu' => '
              <p class="text-justify">
                A katatim imaginatív pszichoterápia az 1950-es években alakult ki, mint tudományosan megalapozott támogató és pszichoterápiás módszer, Hanscarl Leuner kutatói munkájának köszönhetően. A katatim kifejezés a szimbolikus érzelmi élmények projekciójának folyamatát jelenti, amelyet magas érzelmi hatásokkal rendelkező tudattalan tartalmak váltanak ki. Az imagináció olyan terápiás céllal kiváltott, irányított és követett regresszióra és élményvizualizációra vonatkozik. Az imaginatív tartalmak a saját törvényeik tehetetlenségére hallgatnak. Az imaginatív vizuális élmények viszonylag függetlenek a reflexív gondolkodástól és az akarati folyamatoktól. A KIP a pszichofiziológiai relaxáció állapotában valósul meg, amelyet általában az alvásba való belépés vagy a felébredés során tapasztalunk. Az indukált megváltozott tudatállapot gyengíti a védekező mechanizmusok és a cenzúra hatását, így a módszer sikeres a nehezen verbalizálható tartalmak kidolgozásában. Más módszerek nehezen hozzáférhetők tartalmak, mint például az álmok, szabad asszociációk, vagy traumatikus és érzelmi élmények, amelyek a védekező mechanizmusok hatására elnyomásra kerültek, de a KIP számára hozzáférhetőek. A KIP helye pszichoterápiás modalitásként a játékterápia és a verbális terápia között van. Sikeres és alkalmas a pszichoterápiás kezelésre idősebb gyermekek és serdülők számára több okból. Elsősorban a "szimbólumokkal" és "szimbólumokon" való munkavégzés metodológiai előnyei miatt, amelyek a pozitív terápiás hatás mellett megakadályozzák az előzetes és felkészületlen konfrontációt, a saját konfliktusok és érzelmi nehézségek intellektualizálását. A szimbolikus tartalom kivetített energiája az elképzelt vizualizációban hatékonnyá teszi a KIP-et válságállapotok kezelésére és rövid pszichoterápiás környezetben.
              </p>
              <p class="text-justify">
                A katatim imaginatív pszichoterápia során a terapeutikus folyamat két szinten valósul meg. Az első szint az imagináció eredménye, és a szimbólumokkal való munkát jelenti, amelyek az elsődleges érzelmi folyamatok szimbolikus kifejezésének tükröződései. Az elképzelt képek tükrözik a konfliktusok struktúráját, az affektek konstellációját, valamint a belső objektumokat és az objektumok közötti kapcsolatokat. Így a szimbólumokkal végzett munka azok módosítása érdekében egyszerre jelenti a személyiség elsődleges szintjén végzett munkát, a tudattalan tartalmakkal való munkát. A másodlagos szinten a szimbolikus, elképzelt tartalmak feltárása és verbalizálása történik. Ennek a tulajdonságnak köszönhetően a KIP lehetővé teszi, hogy a tudattalan tematikájú tartalmak hozzáférhetővé váljanak, és módosuljanak a kognitív folyamatokon keresztül. A szimbólumokkal és szimbólumokon való munka, valamint a konfliktusok kidolgozásának lehetősége mind az elsődleges, mind a másodlagos szinten lehetővé teszi az érzelmi deficitek korrigálását és munkát a személyiség korai fejlődési szakaszaiban kialakult problémákon, így erőteljesen hozzájárul a személyiség növekedéséhez és fejlődéséhez. A KIP könnyen és hatékonyan kombinálható művészeti, akció- és kreatív terápiákkal, mint például a rajz, játék, bábanimáció és pszichodráma. Az elképzelt tartalmak a KIP során jelentős dinamikát hozhatnak ezen terápiás modalitásokban.
              </p>
              <p class="text-justify">
                Módszertanilag a KIP három szintre oszlik: alap, haladó és magasabb szint. Minden terápiás szint specifikus motívumokkal való munkát, a terápia vezetésének különböző módjait, valamint tartalmilag különböző típusú terápiás beavatkozásokat feltételez. Az alap szint motívumai az előszexuális személyiségfejlődés fázisához vannak igazítva. Az alap szint fő motívumai és az elképzelt tartalmak a következők: rét, folyó, hegy, ház és erdő. Az alap szintű terápiás beavatkozások és célok a találkozás, érintkezés, elfogadás, megbékélés a szimbolikus tartalmakkal vizualizált képekben megjelenő alapvető konfliktusok intenzív érzelmi tartalmakkal.
              </p>
              <p class="text-justify">
                Ha ezek a módszertani irányelvek felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni az ajánlott szakirodalmat, részt venni a szemináriumainkon és workshopjainkon, vagy csatlakozni képzéseinkhez, kapcsolatba léphet velünk a következő címen: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p><p class="text-justify">
                A katatim imaginatív pszichoterápia az 1950-es években alakult ki, mint tudományosan megalapozott támogató és pszichoterápiás módszer, Hanscarl Leuner kutatói munkájának köszönhetően. A katatim kifejezés a szimbolikus érzelmi élmények projekciójának folyamatát jelenti, amelyet magas érzelmi hatásokkal rendelkező tudattalan tartalmak váltanak ki. Az imagináció olyan terápiás céllal kiváltott, irányított és követett regresszióra és élményvizualizációra vonatkozik. Az imaginatív tartalmak a saját törvényeik tehetetlenségére hallgatnak. Az imaginatív vizuális élmények viszonylag függetlenek a reflexív gondolkodástól és az akarati folyamatoktól. A KIP a pszichofiziológiai relaxáció állapotában valósul meg, amelyet általában az alvásba való belépés vagy a felébredés során tapasztalunk. Az indukált megváltozott tudatállapot gyengíti a védekező mechanizmusok és a cenzúra hatását, így a módszer sikeres a nehezen verbalizálható tartalmak kidolgozásában. Más módszerek nehezen hozzáférhetők tartalmak, mint például az álmok, szabad asszociációk, vagy traumatikus és érzelmi élmények, amelyek a védekező mechanizmusok hatására elnyomásra kerültek, de a KIP számára hozzáférhetőek. A KIP helye pszichoterápiás modalitásként a játékterápia és a verbális terápia között van. Sikeres és alkalmas a pszichoterápiás kezelésre idősebb gyermekek és serdülők számára több okból. Elsősorban a "szimbólumokkal" és "szimbólumokon" való munkavégzés metodológiai előnyei miatt, amelyek a pozitív terápiás hatás mellett megakadályozzák az előzetes és felkészületlen konfrontációt, a saját konfliktusok és érzelmi nehézségek intellektualizálását. A szimbolikus tartalom kivetített energiája az elképzelt vizualizációban hatékonnyá teszi a KIP-et válságállapotok kezelésére és rövid pszichoterápiás környezetben.
              </p>
              <p class="text-justify">
                A katatim imaginatív pszichoterápia során a terapeutikus folyamat két szinten valósul meg. Az első szint az imagináció eredménye, és a szimbólumokkal való munkát jelenti, amelyek az elsődleges érzelmi folyamatok szimbolikus kifejezésének tükröződései. Az elképzelt képek tükrözik a konfliktusok struktúráját, az affektek konstellációját, valamint a belső objektumokat és az objektumok közötti kapcsolatokat. Így a szimbólumokkal végzett munka azok módosítása érdekében egyszerre jelenti a személyiség elsődleges szintjén végzett munkát, a tudattalan tartalmakkal való munkát. A másodlagos szinten a szimbolikus, elképzelt tartalmak feltárása és verbalizálása történik. Ennek a tulajdonságnak köszönhetően a KIP lehetővé teszi, hogy a tudattalan tematikájú tartalmak hozzáférhetővé váljanak, és módosuljanak a kognitív folyamatokon keresztül. A szimbólumokkal és szimbólumokon való munka, valamint a konfliktusok kidolgozásának lehetősége mind az elsődleges, mind a másodlagos szinten lehetővé teszi az érzelmi deficitek korrigálását és munkát a személyiség korai fejlődési szakaszaiban kialakult problémákon, így erőteljesen hozzájárul a személyiség növekedéséhez és fejlődéséhez. A KIP könnyen és hatékonyan kombinálható művészeti, akció- és kreatív terápiákkal, mint például a rajz, játék, bábanimáció és pszichodráma. Az elképzelt tartalmak a KIP során jelentős dinamikát hozhatnak ezen terápiás modalitásokban.
              </p>
              <p class="text-justify">
                Módszertanilag a KIP három szintre oszlik: alap, haladó és magasabb szint. Minden terápiás szint specifikus motívumokkal való munkát, a terápia vezetésének különböző módjait, valamint tartalmilag különböző típusú terápiás beavatkozásokat feltételez. Az alap szint motívumai az előszexuális személyiségfejlődés fázisához vannak igazítva. Az alap szint fő motívumai és az elképzelt tartalmak a következők: rét, folyó, hegy, ház és erdő. Az alap szintű terápiás beavatkozások és célok a találkozás, érintkezés, elfogadás, megbékélés a szimbolikus tartalmakkal vizualizált képekben megjelenő alapvető konfliktusok intenzív érzelmi tartalmakkal.
              </p>
              <p class="text-justify">
                Ha ezek a módszertani irányelvek felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni az ajánlott szakirodalmat, részt venni a szemináriumainkon és workshopjainkon, vagy csatlakozni képzéseinkhez, kapcsolatba léphet velünk a következő címen: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
      ]),
      'order' => 5,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Play Therapy "My World"',
          'hu' => 'Játékterápia "Saját világom"',
          'sr' => 'Plej terapija "Moj svet"'
      ]),
      'content' => json_encode([
          'sr' => '
              <p class="text-justify">
                Primena igre u dečjoj psihoterapiji proizašla je iz poznate pojave da verbalno izražavanje dece vezano za apstraktno mišljenje se razvija realtivno kasno, oko šeste godine života i dograđuje se sve do kraja ranog školskog uzrasta. Navedeni razlog, odnosno karakteristika emocija i afekata da se pojmovnim putem teško dostupna čine decu manje pristupačnom metodama verbalne psihoterapije. Deca pre puberteta čak ako bi bila sposobna ili voljna da izveste o svojim konfliktima i strahovima, teško bi mogli da ih formulišu zbog neizgrađenosti interospekcije. Stvari i događaji životnog okruženja za decu su često nesrazmerno, nepojmivo složeni i ogromni i jedino mogu da ih nadvladaju uz podršku odraslih i preko igre sa umanjenim predmetima, sa miniminiziranom imitacijom stvarnosti. Ove teškoće rešava drevno iskustvo, deca igru koriste da bi mogli prikazati svoje teškoće odnosno sve ono sa čime su zaokupljeni. Mogućnost je davno prepoznata; čovek je dao u dečije ruke umanjene predmete sveta, lutku, šerpu, životinje.... igračke. Igračke čine svet manje opasnim, pitomijim, pristupačnijim. Igračke i igra omogućuju, manipulaciju, upoznavanje i rukovanje sa stvarima i okruženjem, upoznavanje sebe, učenje, identifikaciju, inkorporaciju, rast i razvoj ličnosti. Sem predmeta, često i intenzivni emocionalni doživljaji, događaji, čak i sopstveni afekti, emocionalni odnosi sa odraslima, kao i pozicija deteta u životnom okruženju mogu da nadmašuju dečije mogućnosti. Deca od nerešivih situacija, osećanja, intenzivnih doživljaja i napetosti oslobađaju se kreativnom snagom igre, imaginacijom, aktivnim ponavljanjem doživljenog u igri. Deci nije potrebna identično ponavljanje situacija, njihova je potreba da spontanom kreacijom doživljeno prenesu u igru i da tako smanje ili da se oslobode napetosti. Dečje granice su nesigurne, razlikovanje različitih nivoa stvarnosti, kao što su igra-stvarnost, kognicija-emocija, impulsivnost-volja nisu u potpunosti izdiferencirane. Doživljaji tokom igre u “kao da” modusu često predstavlaju eksperiment za proveru dijametralno različitih reakcija, delova selfa ili obrazaca ponašanja. Igra često predstavlja kreativnu analogiju sa stvarnošću. Imitiranje i odigravanje konkretnih događaja i konflikata može da posluži i za animiranje sopstvenih emocija, strahova, nesvesnih tendencija, da bi ih putem igre preneli sa polja konkretnog na savladivo, na umanjeni svet, na proces igre. U ovom kontekstu proces spontane igre pruža snažan uvid u motivacionu bazu dečjeg ponašanja kao i u crte ličnosti. Tokom plej terapije terapeut može da prihvati ili da inicira učešće u igri. Dok se terapeut igra sa detetom pored toga što prihvata ulogu projekcionog objekta, detetu pruža potrebnu podršku i oslonac da bi se dete nakon završetka igre moglo osnaženo da se vratiti u stvarnost. Igra kao dijagnostička i psihotarepijska metoda počela je da se razvija početkom dvadesetog veka. Ana Freud daje igračke deci i incira spontanu igru. Melanie Klain razvija analitičku metodu. Lowenfeld osniva standardizovanu tehniku "Sand Tray " plej terapiju. Polcz Alaine je izgradila aktivnu terapijsku metodu igrom, igru "Moj svet", čiji je cilj otkrivanje povezanosti motivacije i ponašanja i u tom kontekstu može dovesti do izmene u ponašanju i prestrukturisanju motivacione baze. Dete birajući među mnogobrojnim igračkama – iz standardizovanog setinga - različite kategorije ( ljudi, domaće i divlje životinje, kuće, elementi iz prirode, predmeti, uniformisana lica, saobraćajna sredstva ....), koja u umanjenoj formi predstavljaju delove mogućeg okruženja, gradi svoj svet, kako ga doživljava i shvata. Detetova kreacija se vrednuje i na osnovu kvantitativnih i na osnovu kvalitativnih pokazatelja i izvodi se zaključak o strukturi ličnosti o vrsti neurotičog poremećaja i o pozadini traumatskog doživljaja.
              </p>
              <p class="text-justify">
                Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
          'en' => '
            <p class="text-justify">
                The use of play in child psychotherapy arose from the well-known fact that verbal expression in children related to abstract thinking develops relatively late, around the age of six, and continues to develop throughout early school age. This characteristic of emotions and affections, which are difficult to access conceptually, makes children less accessible to verbal psychotherapy methods. Even before puberty, children, if they were capable or willing to express their conflicts and fears, would find it difficult to articulate them due to underdeveloped introspection. Events and things in their environment are often disproportionate, incomprehensively complex, and vast, and they can only overcome them with the support of adults and through play with minimized objects, with a scaled-down imitation of reality. These difficulties are solved through ancient experience; children use play to represent their difficulties or anything they are preoccupied with. This potential has long been recognized; humans have given children scaled-down objects from the world: dolls, pots, animals... toys. Toys make the world less dangerous, more tame, and more accessible. Toys and play allow manipulation, exploration, and handling of things and the environment, self-discovery, learning, identification, incorporation, and personality development. Besides objects, often intense emotional experiences, events, and even their own affections, emotional relationships with adults, as well as the child\'s position in the environment, can exceed the child\'s capabilities. Children release themselves from irresolvable situations, feelings, intense experiences, and tension through the creative power of play, imagination, and active repetition of what was experienced in play. Children do not need identical repetitions of situations; their need is to spontaneously recreate the experience in play to relieve or free themselves from tension. Children\'s boundaries are unstable, and the distinction between different levels of reality, such as play-reality, cognition-emotion, impulsiveness-will, is not fully differentiated. Experiences during play in the "as if" mode often represent an experiment to test diametrically different reactions, parts of the self, or behavior patterns. Play often represents a creative analogy to reality. Imitating and reenacting concrete events and conflicts can serve to animate one\'s own emotions, fears, unconscious tendencies, transferring them from the concrete field to the manageable, to the minimized world, to the play process. In this context, the process of spontaneous play provides powerful insight into the motivational base of children\'s behavior as well as into personality traits. During play therapy, the therapist may accept or initiate participation in play. While playing with the child, in addition to assuming the role of a projection object, the therapist provides the necessary support so that the child can return to reality strengthened after the play ends. Play, as a diagnostic and psychotherapeutic method, began to develop at the beginning of the twentieth century. Anna Freud gave toys to children and initiated spontaneous play. Melanie Klein developed the analytical method. Lowenfeld established the standardized "Sand Tray" play therapy technique. Polcz Alaine developed the active therapeutic method through play, the "My World" game, which aims to discover the connection between motivation and behavior and, in this context, can lead to changes in behavior and restructuring the motivational base. The child, choosing from numerous toys – from a standardized set – in different categories (people, domestic and wild animals, houses, elements from nature, objects, uniformed faces, means of transport...), which in a scaled-down form represent parts of the possible environment, builds their world as they perceive and understand it. The child\'s creation is evaluated based on both quantitative and qualitative indicators, and conclusions are drawn about personality structure, types of neurotic disorders, and the background of traumatic experiences.
            </p>
            <p class="text-justify">
                If these methodological instructions have sparked your interest, if you want to learn more, read recommended literature, visit our seminars and workshops, or join our trainings, you can contact us at: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
            </p>
          ',
          'hu' => '
            <p class="text-justify">
                A játék alkalmazása a gyermekpszichoterápiában abból a jól ismert jelenségből ered, hogy a gyermekek verbális kifejezőkészsége, amely az absztrakt gondolkodáshoz kapcsolódik, viszonylag későn, körülbelül hat éves korban fejlődik ki, és egészen a korai iskolai évek végéig fejlődik. Ez az érzelmek és affekciók sajátossága, amelyek fogalmilag nehezen hozzáférhetőek, a gyermekeket kevésbé elérhetővé teszik a verbális pszichoterápiás módszerek számára. A pubertás előtt még akkor is, ha a gyermek képes vagy hajlandó lenne kifejezni konfliktusait és félelmeit, nehezen tudná azokat megfogalmazni az introspekció fejletlensége miatt. Az életkörnyezetükben lévő dolgok és események gyakran aránytalanul, felfoghatatlanul összetettek és hatalmasak, és csak felnőttek támogatásával és a valóság lekicsinyített másával, csökkentett tárgyakkal való játékkal tudják legyőzni őket. Ezt a nehézséget az ősi tapasztalatok oldják meg; a gyermekek játékot használnak, hogy kifejezzék nehézségeiket, vagy bármit, amivel elfoglaltak. Ezt a lehetőséget régóta felismerték; az ember csökkentett méretű világ tárgyait adta a gyermekek kezébe: babát, edényt, állatokat... játékokat. A játékok kisebbé, biztonságosabbá, elérhetőbbé teszik a világot. A játékok és a játék lehetővé teszik a manipulációt, a dolgok és környezetek megismerését, az önismeretet, a tanulást, az azonosítást, beépítést és a személyiség fejlődését. Az objektumokon kívül gyakran intenzív érzelmi élmények, események, sőt saját affekciók, érzelmi kapcsolatok felnőttekkel, valamint a gyermek helyzete az életkörnyezetben meghaladhatják a gyermek képességeit. A gyermekek a megoldhatatlan helyzetekből, érzésekből, intenzív élményekből és feszültségekből a játék kreatív erejével, a képzelettel és a játékban átélt élmény aktív megismétlésével szabadulnak meg. A gyermekeknek nem szükséges azonos módon ismételniük a helyzeteket; nekik az a szükségletük, hogy spontán alkotással átültessék az élményeket a játékba, hogy csökkentsék vagy felszabaduljanak a feszültségek alól. A gyermekek határai bizonytalanok, a különböző valóság szintek, mint a játék-valóság, kogníció-érzelem, impulzivitás-akarat, nincsenek teljesen elkülönítve. A játék során átélt élmények az "mintha" móduszon gyakran kísérletet jelentenek a diametrálisan eltérő reakciók, az önrészek vagy viselkedési minták tesztelésére. A játék gyakran kreatív analógiát jelent a valósággal. A konkrét események és konfliktusok utánozása és eljátszása szolgálhat a saját érzelmeik, félelmeik, tudattalan tendenciáik életre keltésére, hogy azokat a játék során átültessék a konkrét világból a kezelhető, csökkentett világba, a játék folyamatába. Ebben az összefüggésben a spontán játék folyamata erőteljes bepillantást nyújt a gyermekek viselkedésének motivációs alapjába, valamint a személyiségjegyekbe. A játékterápia során a terapeuta elfogadhatja vagy kezdeményezheti a játékban való részvételt. Miközben a terapeuta játszik a gyermekkel, a projekciós objektum szerepét is vállalja, miközben szükséges támogatást nyújt, hogy a gyermek a játék befejezését követően megerősödve térhessen vissza a valóságba. A játék, mint diagnosztikai és pszichoterápiás módszer, a 20. század elején kezdett fejlődni. Anna Freud játékokat ad a gyermekeknek, és spontán játékot kezdeményez. Melanie Klein kidolgozta az analitikai módszert. Lowenfeld megalapította az "Homokozó" játékterápia szabványosított technikáját. Polcz Alaine aktív terápiás módszert dolgozott ki játék által, a "Saját világom" játékot, amelynek célja a motiváció és viselkedés összefüggésének feltárása, és ebben az összefüggésben viselkedésbeli változásokat és motivációs alapú átalakítást hozhat. A gyermek a számos játék közül – a szabványosított szettből – különböző kategóriákat választ (emberek, házi és vadállatok, házak, természeti elemek, tárgyak, egységes arcok, közlekedési eszközök....), amelyek lekicsinyített formában a lehetséges környezet részeit képviselik, és így építi fel a világát, ahogyan azt megéli és megérti. A gyermek alkotását kvantitatív és kvalitatív mutatók alapján értékelik, és következtetéseket vonnak le a személyiség struktúrájáról, neurotikus rendellenességekről és a traumatikus élmények hátteréről.
            </p>
            <p class="text-justify">
                Ha ezek a metodikai útmutatók felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni az ajánlott irodalmat, részt venni szemináriumainkon és workshopjainkon, vagy csatlakozni képzéseinkhez, kérjük, vegye fel velünk a kapcsolatot az alábbi címen: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
            </p>
          ',
      ]),
      'order' => 6,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 3,
      'title' => json_encode([
          'en' => 'Psychodrama',
          'hu' => 'Pszichodráma',
          'sr' => 'Psihodrama'
      ]),
      'content' => json_encode([
          'sr' => '
              <p class="text-justify">
                Primena psihodrame - koja svoje mehanizme delovanja ostvaruje preko scenskog prikazivanja psihičkih sadržaja, doživljaja i konflikata - veoma je široka. Primenljiva je na planu samospoznaje i doprinosi rastu i razvoju ličnosti. Može doprineti i jačanju funkcionisanja profesionalnih organizacija, odnosno razvoju manje ili veće zajednice. Pomaže razvoju lične efikasnosti preko rada na rukovanju i savlađivanju konflikata. Koristi se kao uspešna metoda u obrazovanju i u različitim edukacijama.
              </p>
              <p class="text-justify">
                U osnovi psihodrama je grupna psihoterapijska metoda koja je utemeljana radom Jacob-a Levi Morena u prvoj polovini prošlog veka, kao akciona, simptomatska i analitička metoda. Moreno-ova namera je bila pronalaženje metode koja pored toga što omogućuje kreativnu aktivnost i oslobađa snage spontanog samispoljenja, u središte interesovanja psihoterapijskog procesa umesto pojedinca, stavlja grupu, odnose članova grupe, grupna zbivanja. Morenov teorijski sistem se odnosi na tri bazična učenja: na sociometriju, na grupnu psihoterapiju, i na sociodramu i psihodramu. Osnovna smisao psihodrame je da čovekova spontanost i kreativnost se ostvaruje usađena u neku akciju, odnosno da pojedinac može da postane svastan samo one situacije koju doživljava kao deo akcionog ponašanja. Metoda psihodrame telesnim i fizičkim doživljajem osvešćuje na kognitivnom i emocionalnom nivou omogućujući terapijski proces na kognitivno-verbalnom i preverbalnom nivou.<br>
                Psihodramske grupe somospoznaje su preporučljive onima koji žele da stvore jasniju sliku o sebi i o aktuelnoj životnoj poziciji. Učesnici psihodramske grupe preko sopstvenih doživljaja putem učestvovanja u igrama i "igrom" pronalaze mesto u svome okruženju i razvijaju sposobnost da svoje teškoće savlađuju na aktivan način, ličnom angažovanošću. Psihodramske grupe samospoznaje mogu biti od pomoći u slučaju kad je reč o: nameri da se poboljša kvalitet međuljudskih odnosa; o jasnoj i razumljivoj formulaciji emocija i zahteva; o boljem razumevanju sopstvenih želja, ciljeva i u pronalaženju puta do njihovog ostvarenja; o boljem razumevanju drugih. Psihodramsko-psihoterapijske grupe u ambulantnim uslovima se organizuju sa ciljem ozdravljenja. Članovi grupe na osnovu samovoljnog učlanjenja preko rada i angažovanosti u grupi očekuju izmene u vezi sa sobom, u odnosima sa drugim, izmeni u psihičkim ili telesnim simptomima-ozdravljenje. Grupu vode edukovani stručnjaci-psihoterapeuti koji su pripremljeni za samostalno korišćenje ove metode. Ove grupe su stalne i sastaju se u nedeljnim intervalima, a po običaju traju 150 -200 terapijskih sati.
              </p>
              <p class="text-justify">
                Korišćenje psihodrame u obrazovanju i edukaciji: Psihodrama se primenjuje od devedesetih godina i u edukativne svrhe. Cilj učestvovanja u ovim grupama je rad na razvijanju samospoznaje, rad na formiranju i izgradnji stručnog identiteta i na usavršavanju interpersonalnih sposobnosti i veština. Psihodrama kao metoda je pogodna i za pripremu vršenja neke profesionalne uloge. Cilj ovih grupa je rad na socijalizaciji učesnika sa ciljem prihvatanja profesinalnih uloga, vrednosti i sposobnosti. Učestvovanje u edukativnoj grupi daje mogućnost učesnicima da posredstvom grupnih procesa uvežbaju delotvorne oblike samoaktualizacije, da razvijaju sposobnosti koje pružaju oslonac za uspešniju adaptaciju u međuljudskim odnosima i da izgrađuju odgovarajući i prihvatljiv sociometrijski status. Metoda psihodrame je izuzetno uspešna i u tome da učesnici steknu uvid u razvoj sopstvene ličnosti i motivacionu bazu, da ispitaju polje medjuljuskih odnosa, da preko mogućnosti niza zamena uloga posmatraju sebe i iz ugla "drugog". Psihodrama je veoma efikasna metoda u superviziji terapijskog rada.
              </p>
              <p class="text-justify">
                Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
          'en' => '
              <p class="text-justify">
                  Primena psihodrame - koja svoje mehanizme delovanja ostvaruje preko scenskog prikazivanja psihičkih sadržaja, doživljaja i konflikata - veoma je široka. Primenljiva je na planu samospoznaje i doprinosi rastu i razvoju ličnosti. Može doprineti i jačanju funkcionisanja profesionalnih organizacija, odnosno razvoju manje ili veće zajednice. Pomaže razvoju lične efikasnosti preko rada na rukovanju i savlađivanju konflikata. Koristi se kao uspešna metoda u obrazovanju i u različitim edukacijama.
              </p>
              <p class="text-justify">
                  U osnovi psihodrama je grupna psihoterapijska metoda koja je utemeljena radom Jacob-a Levi Morena u prvoj polovini prošlog veka, kao akciona, simptomatska i analitička metoda. Moreno-ova namera je bila pronalaženje metode koja pored toga što omogućuje kreativnu aktivnost i oslobađa snage spontanog samispoljenja, u središte interesovanja psihoterapijskog procesa umesto pojedinca, stavlja grupu, odnose članova grupe, grupna zbivanja. Morenov teorijski sistem se odnosi na tri bazična učenja: na sociometriju, na grupnu psihoterapiju, i na sociodramu i psihodramu. Osnovna smisao psihodrame je da čovekova spontanost i kreativnost se ostvaruje usađena u neku akciju, odnosno da pojedinac može da postane svestan samo one situacije koju doživljava kao deo akcionog ponašanja. Metoda psihodrame telesnim i fizičkim doživljajem osvešćuje na kognitivnom i emocionalnom nivou omogućujući terapijski proces na kognitivno-verbalnom i preverbalnom nivou.<br>
                  Psihodramske grupe samospoznaje su preporučljive onima koji žele da stvore jasniju sliku o sebi i o aktuelnoj životnoj poziciji. Učesnici psihodramske grupe preko sopstvenih doživljaja putem učestvovanja u igrama i "igrom" pronalaze mesto u svome okruženju i razvijaju sposobnost da svoje teškoće savlađuju na aktivan način, ličnom angažovanošću. Psihodramske grupe samospoznaje mogu biti od pomoći u slučaju kad je reč o: nameri da se poboljša kvalitet međuljudskih odnosa; o jasnoj i razumljivoj formulaciji emocija i zahteva; o boljem razumevanju sopstvenih želja, ciljeva i u pronalaženju puta do njihovog ostvarenja; o boljem razumevanju drugih. Psihodramsko-psihoterapijske grupe u ambulantnim uslovima se organizuju sa ciljem ozdravljenja. Članovi grupe na osnovu samovoljnog učlanjenja preko rada i angažovanosti u grupi očekuju izmene u vezi sa sobom, u odnosima sa drugim, izmeni u psihičkim ili telesnim simptomima-ozdravljenje. Grupu vode edukovani stručnjaci-psihoterapeuti koji su pripremljeni za samostalno korišćenje ove metode. Ove grupe su stalne i sastaju se u nedeljnim intervalima, a po običaju traju 150-200 terapijskih sati.
              </p>
              <p class="text-justify">
                  Korišćenje psihodrame u obrazovanju i edukaciji: Psihodrama se primenjuje od devedesetih godina i u edukativne svrhe. Cilj učestvovanja u ovim grupama je rad na razvijanju samospoznaje, rad na formiranju i izgradnji stručnog identiteta i na usavršavanju interpersonalnih sposobnosti i veština. Psihodrama kao metoda je pogodna i za pripremu vršenja neke profesionalne uloge. Cilj ovih grupa je rad na socijalizaciji učesnika sa ciljem prihvatanja profesionalnih uloga, vrednosti i sposobnosti. Učestvovanje u edukativnoj grupi daje mogućnost učesnicima da posredstvom grupnih procesa uvežbaju delotvorne oblike samoaktualizacije, da razvijaju sposobnosti koje pružaju oslonac za uspešniju adaptaciju u međuljudskim odnosima i da izgrađuju odgovarajući i prihvatljiv sociometrijski status. Metoda psihodrame je izuzetno uspešna i u tome da učesnici steknu uvid u razvoj sopstvene ličnosti i motivacionu bazu, da ispitaju polje međuljudskih odnosa, da preko mogućnosti niza zamena uloga posmatraju sebe i iz ugla "drugog". Psihodrama je veoma efikasna metoda u superviziji terapijskog rada.
              </p>
              <p class="text-justify">
                  Ako su ova metodska upustva pobudila Vaše interesovanje, ako želite da saznate više, da čitate preporučenu literaturu, da posetite naše seminare i workshopove, ili da se uključite u naše edukacije možete da nam se obratite na adresi: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
          'hu' => '
              <p class="text-justify">
                  A pszichodráma alkalmazása – amely a pszichés tartalmak, élmények és konfliktusok színpadi ábrázolásán keresztül éri el hatását – nagyon széleskörű. Alkalmazható az önismeret területén és hozzájárul a személyiség növekedéséhez és fejlődéséhez. Segíthet a professzionális szervezetek működésének megerősítésében, illetve kisebb vagy nagyobb közösségek fejlődésében. Elősegíti a személyes hatékonyság fejlődését a konfliktusok kezelésén és leküzdésén keresztül. Sikeres módszer az oktatásban és különféle képzésekben.
              </p>
              <p class="text-justify">
                  Alapvetően a pszichodráma egy csoportos pszichoterápiás módszer, amely Jacob Levi Moreno munkáján alapul a múlt század első felében, mint akciós, szimptomatikus és analitikus módszer. Moreno célja az volt, hogy olyan módszert találjon, amely nemcsak kreatív aktivitást tesz lehetővé és felszabadítja a spontán önkifejezés erejét, hanem a pszichoterápiás folyamat középpontjába az egyén helyett a csoportot, a csoport tagjainak kapcsolatait és a csoportos eseményeket helyezi. Moreno elméleti rendszere három alapvető tanításon alapul: a szociometrián, a csoportos pszichoterápián, és a szociodrámán és pszichodrámán. A pszichodráma alapvető célja, hogy az ember spontaneitása és kreativitása valamilyen cselekvésbe ágyazva valósuljon meg, vagyis hogy az egyén csak azt válhat tudatossá, amit akciós viselkedésének részeként él meg. A pszichodráma módszere testi és fizikai élményekkel tudatosítja a kognitív és érzelmi szinten, lehetővé téve a terápiás folyamatot a kognitív-verbális és preverbalitás szinten.<br>
                  A pszichodráma csoportos önismereti terápiák ajánlottak azok számára, akik világosabb képet szeretnének alkotni magukról és aktuális élethelyzetükről. A pszichodráma csoportok résztvevői saját élményeiken keresztül, játékokon való részvétellel és a „játékon” keresztül találják meg helyüket környezetükben, és fejlesztik azon képességüket, hogy aktívan, személyes elköteleződéssel küzdjenek meg nehézségeikkel. A pszichodráma önismereti csoportok hasznosak lehetnek abban az esetben, amikor: javítani szeretnék a személyes kapcsolatok minőségét; világos és érthető módon szeretnék megfogalmazni érzéseiket és igényeiket; jobban szeretnék megérteni saját vágyaikat, céljaikat, és megtalálni az utat azok eléréséhez; jobban szeretnék megérteni másokat. A pszichodráma-pszichoterápiás csoportokat ambuláns környezetben szervezik gyógyulási céllal. A csoport tagjai önkéntes belépéssel és a csoportban végzett munkával és elköteleződéssel várják a változásokat, amelyek saját magukkal, másokkal való kapcsolataikkal, illetve pszichés vagy fizikai tüneteikkel kapcsolatosak – gyógyulás. A csoportokat képzett szakemberek, pszichoterapeuták vezetik, akik felkészültek ezen módszer önálló alkalmazására. Ezek a csoportok állandóak, hetente találkoznak, és általában 150-200 terápiás órán keresztül tartanak.
              </p>
              <p class="text-justify">
                  Pszichodráma alkalmazása az oktatásban és képzésben: A pszichodráma a kilencvenes évek óta alkalmazásra kerül oktatási célokra is. A csoportokban való részvétel célja az önismeret fejlesztése, a szakmai identitás kialakítása és a személyes készségek és képességek fejlesztése. A pszichodráma módszer alkalmas a szakmai szerepek végrehajtásának előkészítésére is. A csoportok célja a résztvevők szocializálódása a professzionális szerepek, értékek és képességek elfogadásával. Az oktatási csoportokban való részvétel lehetőséget ad arra, hogy a résztvevők csoportos folyamatok segítségével gyakorolják a hatékony önmegvalósítási formákat, fejlesszék azokat a képességeket, amelyek támogatást nyújtanak sikeresebb alkalmazkodáshoz az emberi kapcsolatokban, és hogy megfelelő és elfogadott szociometriás státuszt építsenek ki. A pszichodráma módszere rendkívül sikeres abban is, hogy a résztvevők betekintést nyernek saját személyiségük fejlődésébe és motivációs alapjaikba, vizsgálják az emberi kapcsolatok területét, és szerepcserék sorozatával mások szemszögéből is szemlélhetik önmagukat. A pszichodráma rendkívül hatékony módszer a terápiás munkák szupervíziójában.
              </p>
              <p class="text-justify">
                  Ha ezek a módszertani útmutatók felkeltették érdeklődését, ha többet szeretne megtudni, elolvasni a javasolt irodalmat, részt venni szemináriumainkon és workshopjainkon, vagy csatlakozni képzéseinkhez, kérjük, vegye fel velünk a kapcsolatot az alábbi címen: <a href="mailto:info@integrativ.org.rs">info@integrativ.org.rs</a>
              </p>
          ',
      ]),
      'order' => 7,
      'custom_design' => 1,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 4,
      'title' => json_encode([
          'en' => 'About the Association',
          'hu' => 'A szövetségről',
          'sr' => 'O udruženju'
      ]),
      'content' => json_encode([
          'sr' => '
              <p class="text-justify">
                Udruženje za Integrativnu dečju psihoterapiju® je osnovano 2007. godine u Subotici. Ideja o osnivanju je nastala na osnovu međunarodnog metodološko teorijskog "projekata" definisanoj zajedničkim terapijskim stavovima različitih psihoterapijskih pravaca. Udruženje za Integrativnu dečju psihoterapiju je osnovano sa ciljem obrazovanja stručnjaka iz oblasti mentalnog zdravlja za primenu dečje psihoterapije kako u terapijske svrhe tako i za davanje podrške deci i roditeljima u rastu i razvoj ličnosti u različitim oblastima dečje zaštite, promocije, razvijanja i unapređenja teorije i prakse dečje psihoterapije. Udruženje za Integrativnu dečju psihoterapiju je punopravni član Saveza društava psihoteraputa Srbije i Evropske asocijacije za Integrativnu psihoterapiju.
              </p>',
          'en' => '
              <p class="text-justify">
                The Association for Integrative Child Psychotherapy® was founded in 2007 in Subotica. The idea of its establishment arose from an international methodological-theoretical "project" defined by the shared therapeutic views of different psychotherapeutic approaches. The Association for Integrative Child Psychotherapy was founded with the goal of educating mental health professionals in the application of child psychotherapy, both for therapeutic purposes and for providing support to children and parents in the growth and development of personality in various areas of child protection, promotion, and the development and improvement of theory and practice in child psychotherapy. The Association for Integrative Child Psychotherapy is a full member of the Serbian Association of Psychotherapists and the European Association for Integrative Psychotherapy.
              </p>
            ',
          'hu' => '
              <p class="text-justify">
                Az Integratív Gyermekképző Pszichoterápiás Egyesület® 2007-ben alakult Szabadkán. Az alapítás ötlete egy nemzetközi metodológiai-elméleti "projektből" származott, amelyet különböző pszichoterápiás irányzatok közös terápiás nézetei határoztak meg. Az Integratív Gyermekképző Pszichoterápiás Egyesületet azzal a céllal alapították, hogy szakembereket képezzenek ki a gyermekpszichoterápia alkalmazására, mind terápiás célokra, mind pedig a gyermekek és szülők támogatására a személyiség fejlődésében a gyermekvédelmi, promotív, fejlődési és fejlesztési területeken, valamint a gyermekpszichoterápia elméletének és gyakorlatának fejlesztésére és javítására. Az Integratív Gyermekképző Pszichoterápiás Egyesület a Szerb Pszichoterapeuták Szövetségének és az Európai Integratív Pszichoterápiás Szövetség teljes jogú tagja.
              </p>
            ',
      ]),
      'order' => 1,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 4,
      'title' => json_encode([
        'sr' => 'Partneri',
        'en' => 'Partners',
        'hu' => 'Partnerek',
      ]),
      'content' => json_encode([
        'sr' => "user.views.home.partners",
        'en' => "user.views.home.partners",
        'hu' => "user.views.home.partners",
      ]),
      'order' => 2,
      'custom_design' => 0,
      'load_view' => 1
    ]);
  
    DB::table('page_content')->insert([
      'page_id' => 4,
      'title' => json_encode([
          'sr' => 'Integrativna dečja psihoterapija',
          'en' => 'Integrative Child Psychotherapy',
          'hu' => 'Integratív gyermekpszichoterápia',
      ]),
      'content' => json_encode([
        'sr' => '
          <div class="main-container my-10">
              <h2 class="title text-center">
                  Integrativna dečja psihoterapija
              </h2>
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Integrativna dečja psihoterapija ® proizilazi iz dva psihoterapijska modela – integrativne psihoterapije utemeljene i opisane od strane renomiranih autora kao što su (Richard G. Erskine. (1997); Erskine & Moursand. (1988); (Erskine & Trautmann. 1997); (Erskine, Moursund & Trautmann. 1999); (Erskine & Moursund, 2011) i projekta “Integrativna terapija za decu“ razvijene od strane Hilarion G. Petzolda i saradnika šesdestih godina minulog stoleća. (Hilarion G. Petzold, Ramin,1986).
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Ovi modeli psihoterapije pružaju adekvatnu teorijsku i praktičnu osnovu za konceptualizaciju mnogim pitanjima unutar Integrativne dečje psihoterpije. Adaptacija principa Integrativne psihoterapije i trapeutskih tehnika “Integrativne terapije za decu” u dečju psihoterapiju predstavlja adekvatnu kohezivnu kreaciju za многе uloge integrativnom dečjem psihoterapeutu.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Program Integrativne dečje psihoterapije uključuje i inkorporira teorijske i praktične postulate različitih psihoterapijskih škola izgrađene na temelju četri teorije i terapijske tradicije: humanističke orijentacije (klijentom usmerana psihoterapija Carl Rogersa), expresivno-akcione (sand-tray play terapija, dečja psihodrama), kognitivno – bihevioralne i psihodinamske (intersubjektivni pristup, objektni odnosi, self psihologija, teorije atačmenta i mentalizacije) perspektive integrišući ih u objedinjeni pristup čoveku kao osnov za razumevanje psihičkog razvoja. Afirmišući važnost objedinjenog pristupa čoveku zastupa važan stav u psihoterapijskoj praksi da prilikom razmatranja pozadine bilo kog momenta dečjeg funkcionisanja ili uzroka nastanka konflikta pored psihodinamske pozadine bitno je i priznanje međuzavisnosti misli, osećanja i ponašanja nastalih u interpersonalnom i društvenom prostoru.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Integrativna dečja psihoterapija prihvata i podržava relaciono-razvojni pristup psihoterapiji. Smatrajući da je ishod psihoterapije najefikasniji kada psihoterapeut stavlja poseban akcenat na formiranje, održavanje i jačanje kvalitetnog terapijskog odnosa sa klijentom. Potvrđuje važnost podržavajućeg okruženja u kome rast, razvoj i pozitivne promene dobijaju mesto u intersubjektivnom prostoru koji je ko-kreiran od strane terapeuta i klijenta.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Analize teorijskih pretpostavki modela promena tokom terapije otkrivaju strategije koja predstavljaju zajedničke činioce u različitim terapijskom perspektivama i u tom smislu mogu predstavljati i osnove integrativnog pristup o psihoterapiji.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Zajednički faktori u Integrativnoj dečjoj psihoterapiji su nezaobilazni: odnose se на terapijski odnos između klijenta i terapeuta, na razvojno utemeljeni okvir rada, srdačnost, brižnost, bliskost, uzamajno poštovanja i poverenje, na veru da su deca sposobna da učestvuju u rešenju svojih teškoće i da donesu potrebne odluke. Prihvatanje pozitivne pretpostavke delotvornosti terapije i ohrabrivanje dece da iskažu i ispolje svoja osećanja (ovo dozvola naravno ne podrazumeva i odobrenje za ispoljenje bilo kog ponašanja). Podrška novim korektivnim emocionalnim doživljajima omogućavaju detetu da teškoće doživi u novom, drugačijem svetlu u prihvatljivijem obliku. Terapijski rad baziran na temelju zajedničkih faktora otvara mogućnost za primenu specifičnih terapeutskih intervencija bez bojaznosti da bi bili ograničeni diktatom ili nepremostivim preporukama određenog pravca intelektualnog okvira. Spoj zajedničkih i specifičnih faktora utemeljenih u terapeutske tehnikeintegrativne dečje psihoterapije čine ove intervencije primenljivim i efikasnim u širokom spektru psihičkih teškoća i poremećaja.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Terapeutovi odgovori i odnos prema dečjem ponašanju, mislima i emocijam ostvaruje се preko metafore igre ili prihvatanjem igre uloga. Promocija “kao da” uslova sa jedne strane obezbeđujući snagu kreativnom procesu olakšava put izmenama, rastu, razvoju i ozdravljenju са druge strane nedvosmisleno potvrđuje važnost povoljnog kontakta organizovanog oko centralnogpitanja terapijskog procesa odnosa terapeuta sa klijentom. Cilj ovih terapijskih aktivnosti је produbljivanje procesa sa površnog nivoa rituala i uobičajene manipulacije sa predmetima prema igri sa dubokim značenjem, sa simbolično reflektivnim kpacitetom.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Susret dečjeg terapeuta i deteta može da preraste u “prostor” u kojem unutrašnji maladptivni modeli deteta mogu se modifikovati u adaptivnije objektne odnose. U ovom kontekstu odrasla osoba postaje jedna vrsta mobilnog “intermedijarnog objekta” i ispoljava miroring poziciju prema detetu. Pri tome uvek treba da bude spreman da preuzme ulogu odgovorne odrasle osobe, da u slučaju potrebe ispolji odlučnost i autoritet, da postavlja zahteve, da zabrani, da pokaže potrebno samopouzdanje. Dete u tom procesu takođe može da isproba različite uloge, da je snažan, jak, samostalan ili pak krho, slabo, da je ljut ili uvređen, da traži zaštitu, da preko identifikacije sa simbiličnim ulogama gradi nove kompetencije a da pri томе doživi mogućnost eksperimentisanja sa drugim, novim ulogama, da gradi nove interne objekte, da doživi da se mogu prevazići okviri rigidnih uloga.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      “Integracija” u ovom značenju u okviru Integrativne dečje psihoterapije je prvi aspekat integracije i odgovara integraciji ličnosti. (Erskine R. 2004.) Predstavlja napore u pružanju pomoći detetu, adolescentu ili roditelju u asimilaciji i harmonizaciji sadržaja ego stanja, u relaksaciji odbranbenih mehanizma, u promeni ili odbacivanju skripta i ponovnog uspostavljanja kontakta sa svetom oko sebe.
                    </p>
                </div>
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Drugi aspekat izraza “integracija“ odnosi se na integraciju klijenta. Značajna razlika u radu sa decom u odnosu na adultnu psihoterapiju da deca teško verbalizuju svoje probleme i teškoće. Ali sva deca se igraju i igra predstavlja začajan deo dečjeg razvoja. Deca igrajući obogaćuju svoje znanje o selfu, o drugima i o fizičkim karakteristikama okruženja u kojem bivstvuju. Integrativna dečja psihoterapija je inkluzivnija u odnosu na tradicionalne forme psihoterapije u kojima kljent zauzima manje aktivnu ulogu u terapiji.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Terapijski odnos je pomognut i podržan činjenicom da terapeut učestvuje u igri kao ravnopravan partner i koristi “jezik” koji je specifičan i razumljiv za decu. Ovaj konceptualni okvir pronalazi zajedničku osnovu u tradicionalnim perspektivama klijentom upravljenom i psihodinamskim pristupom, naime: zajedničkom igrom ostvareni terapijski odnos otvara komunkacijski prostor “bezbednog i sigurnog mesta” neophodnog za polaznu osnovu potrebnim izmenama.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Treći aspekat termina “integrativnost” se odnosi na integraciju psihoterapeuta, savetnika, edukatora ili suspervizora. Efikasna dečja psihoterapija najčešće zahteva da terapeut bude svestran i fleksibilan, da bi mogao uspešena da izađe u susret promenljivim potrebama deteta kao i prema potrebama važnih osoba iz detetovog okruženja. Može da se desi da je terapeut u jednom trenutku intenzivno uključen u igru reflektujući na interne procese i napetosti deteta, a u sledećem momentu treba da savetuje roditelja u vezi detetovih teškoća ili da obavi razgovor i savetovanje sa školskim psihologom ili učiteljem.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Terapeut treba da izgradi visoko senzitivan stav, da ispolji maksimalan respekt prema deci, traba da omogući da predstave sebe jezikom koji je njima najbliži ili najprihvatljiviji (npr. korišćenjem terapijskih tehnika Integrativne dečje psihoterapije). Ovim aktivnostima terapeut podstiče klijenta na expresivnu komukaciju a samim tim otvara mogućnost za produbljivanjem istraživanja selfa.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Profesionalna integracija u okviru Integrativne psihoterapije podrazumeva i ličnu integraciju psihoterapeuta u odnosu na teorijske okvire (teorija, metologija i filozofske osnove.) kontakta sa doživljaljima iz detinjstva i sadašnjosti i sa iskustvima iz pozicije stručnjaka. Profesionalan i lični razvoj u ovom kontekstu je usko povezan sa procesom integracije ličnosti psihoterapeuta, i predstavlja celoživotni proces.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Četvrti aspekt pojma “integracija” se odnosi na emocionalnu integraciju deteta, adolescenta u primarnu porodicu. Integrativni dečji psihoterapeut od samog početka nastoji da bude sanzitivan prema subjektivnim doživljajima dece i roditelja, uključujući otvorenost prema prepoznavanju potreba u zavisnosti od stepena razvoja i modifikacije odnosa ukoliko se za to pokaže potreba. Integrativna dečja psihoterapija predstavlja intenzivan vid terapija, uključuje sve članove porodice; oba roditelja, dete ili svu decu, sa namerom da poboljša odnos između roditelja i dece, da povrati funkcionalnost i celovitost porodice ukoliko je ona zbog nekog razloga narušena. Ako je to moguće terepeut posvećuje posebnu pažnju i pomaže roditelju u nameri da adaptira svoj odnos promenjenim dečjim potrebama, jačajući tako resurse roditelja i efikasnost terapije. Konačno i promene u detetu vode do pozitivnih promena u celoj porodici. Ukoliko riditelji ili drugi članovi porodice ispoljavaju dodatne simptoma terapeut može da zatraži dodatne intevencije.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      U završnoj fazi pishoterapije integrativni dečji psihoterapeut nudi mogućnost za rad sa gubitkom i osećanjem separacije. Dečje emocije i iskustva u vezi gubitka predstavljaju važan segment dečje terapije i obično se ljavljaju ili se reaktiviraju u ovoj fazi terapije. Moguće je da će i roditeljima ili starteljima biti potrebna pomoć prilikom zaključivanju terapije zbog doživljaja u vezi gubitka podrške terapeuta. Da bi se uspešno odnosio prema ovoj pojavi, terapeut pored toga što obraća neophodnu pažnju na realna osećanja nastalih u ovoj fazi terapije ne isključuje ni mogućnost reaktivacije doživljaja iz ranijeg perioda života. Na kraju terapijskog procesa i sam terapeut treba da osvesti i da vodi brigu o sopstvenim kontartransfernim osećanjima u vezi zaključivanja terapije i treba da ih adresira na odgovarajući način.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Razvojna realaciona perspektiva integrativne dečje psihoterapije stavljajući u središtu psihoterapijskog procesa odnos dete – terapeut predstavlja konstantno traganje za decu i adolescente prihvatljiv i razumljiv načine komuniciranja. Integrativni dečji psihoterapeut kreativno konstruktivnim aktivnostima kao što su: dečja psihodrama, plej terapija „Moj svet”., Vinikotove škrabalice., savetovanje sa elementima individualne psihodrame ., vođena imaginacija i Cooping cat programa. stvara za dete prirodno, prihvatljivo i razumljivo okruženje u kojem može da se poveri, da organizuje ili da reorganizuje vlastito iksutvo i da nauči kako da se njime služi u kontaktu sa sobom i sa drugima. Mogućnosti primene zavise od postavljenog terapijskog cilja, stepene dečjeg razvoja, dobi i od vrste teškoća.
                    </p>
                </div>
              </div>
            </div>
        ',
        'en' => '
        <div class="main-container my-10">
            <h2 class="title text-center">
              Integrative Child Psychotherapy
            </h2>
          <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
            <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
              <p class="text-base font-normal text-white text-justify mb-5">
                Integrative child psychotherapy ® arises from two psychotherapeutic models – integrative psychotherapy, based on and described by renowned authors such as Richard G. Erskine (1997); Erskine & Moursand (1988); Erskine & Trautmann (1997); Erskine, Moursund & Trautmann (1999); Erskine & Moursund (2011), and the project “Integrative therapy for children,” developed by Hilarion G. Petzold and collaborators in the 1960s (Hilarion G. Petzold, Ramin, 1986).
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                These psychotherapy models provide an adequate theoretical and practical foundation for conceptualizing many issues within Integrative child psychotherapy. The adaptation of the principles of Integrative psychotherapy and the therapeutic techniques of “Integrative therapy for children” into child psychotherapy represents an adequate cohesive creation for many roles of the integrative child psychotherapist.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The Integrative child psychotherapy program includes and incorporates theoretical and practical postulates from various psychotherapeutic schools, built upon four theories and therapeutic traditions: humanistic orientation (client-centered therapy by Carl Rogers), expressive-action (sand-tray play therapy, child psychodrama), cognitive-behavioral, and psychodynamic (intersubjective approach, object relations, self-psychology, attachment theory, and mentalization) perspectives, integrating them into a unified approach to understanding psychological development. Affirming the importance of a unified approach to the person, it supports the significant position in psychotherapy that, when considering the background of any moment in child functioning or the cause of a conflict, it is essential to recognize the interdependence of thoughts, feelings, and behaviors arising in the interpersonal and social space, in addition to the psychodynamic background.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                Integrative child psychotherapy embraces and supports the relational-developmental approach to psychotherapy. Believing that the outcome of psychotherapy is most effective when the psychotherapist emphasizes the formation, maintenance, and strengthening of a quality therapeutic relationship with the client. It affirms the importance of a supportive environment where growth, development, and positive change find a place in the intersubjective space co-created by the therapist and client.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                Analyzing the theoretical assumptions of the model of change during therapy reveals strategies that represent common factors across different therapeutic perspectives and, in this sense, may form the foundation of the integrative approach to psychotherapy.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                Common factors in Integrative child psychotherapy are unavoidable: they relate to the therapeutic relationship between the client and therapist, the developmentally-based work framework, warmth, care, closeness, mutual respect, and trust, as well as the belief that children are capable of participating in solving their difficulties and making necessary decisions. Acceptance of the positive assumption of therapy\'s effectiveness and encouragement for children to express and display their feelings (this allowance, of course, does not imply approval for the expression of any behavior). Support for new corrective emotional experiences enables the child to perceive difficulties in a new, more acceptable form. Therapeutic work based on the common factors opens the possibility for applying specific therapeutic interventions without fear of being constrained by the dictates or insurmountable recommendations of any particular intellectual framework. The combination of common and specific factors grounded in the therapeutic techniques of integrative child psychotherapy makes these interventions applicable and effective across a broad range of psychological difficulties and disorders.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The therapist\'s responses and attitude toward the child\'s behavior, thoughts, and emotions are realized through the metaphor of play or acceptance of role-playing. The promotion of "as if" conditions, on the one hand, ensures the strength of the creative process, easing the path of change, growth, development, and healing, while on the other hand, it unmistakably confirms the importance of favorable contact organized around the central issue of the therapeutic process – the relationship between the therapist and the client. The goal of these therapeutic activities is to deepen the process from a superficial level of ritual and usual manipulation with objects to play with deep meaning, with symbolic reflective capacity.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The encounter between the child therapist and the child may evolve into a “space” where the child\'s internal maladaptive models can be modified into more adaptive object relations. In this context, the adult becomes a kind of mobile "intermediary object" and mirrors the position toward the child. At the same time, they should always be ready to assume the role of a responsible adult, to demonstrate decisiveness and authority when necessary, to set boundaries, to forbid, and to show the necessary self-confidence. The child in this process can also experiment with different roles, be strong, self-sufficient, or fragile, weak, angry, or offended, seek protection, and through identification with symbolic roles, build new competencies, while experiencing the opportunity to experiment with new roles and internal objects, realizing that rigid role boundaries can be overcome.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                "Integration" in this sense, within Integrative child psychotherapy, represents the first aspect of integration and corresponds to the integration of the personality (Erskine R. 2004). It represents the efforts to assist the child, adolescent, or parent in the assimilation and harmonization of ego state contents, relaxing defensive mechanisms, changing or discarding scripts, and reestablishing contact with the world around them.
              </p>
            </div>
            <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
              <p class="text-base font-normal text-white text-justify mb-5">
                The second aspect of the term "integration" refers to the integration of the client. A significant difference in working with children, compared to adult psychotherapy, is that children struggle to verbalize their problems and difficulties. However, all children play, and play represents an important part of their development. Through play, children enrich their knowledge about the self, others, and the physical characteristics of their environment. Integrative child psychotherapy is more inclusive compared to traditional forms of psychotherapy, where the client plays a more passive role in therapy.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The therapeutic relationship is supported by the fact that the therapist participates in the play as an equal partner and uses a "language" that is specific and understandable to children. This conceptual framework finds common ground in traditional client-centered and psychodynamic approaches, namely: a therapeutic relationship achieved through joint play opens the communication space for a "safe and secure place" necessary for the basis of required changes.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The third aspect of the term "integration" refers to the integration of the psychotherapist, counselor, educator, or supervisor. Effective child psychotherapy often requires the therapist to be versatile and flexible to successfully address the changing needs of the child and the important people in the child\'s environment. It may happen that the therapist is intensely involved in the play at one moment, reflecting on the child\'s internal processes and tensions, and in the next moment needs to advise the parent about the child\'s difficulties or have a discussion with a school psychologist or teacher.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The therapist must build a highly sensitive attitude, show maximum respect toward the children, and enable them to represent themselves in the language that is closest or most acceptable to them (e.g., using therapeutic techniques of Integrative child psychotherapy). Through these activities, the therapist encourages the client to express themselves, thus opening the possibility for deeper self-exploration.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                Professional integration within Integrative psychotherapy also implies the personal integration of the psychotherapist with respect to theoretical frameworks (theory, methodology, and philosophical foundations), contact with childhood experiences, and experiences as a professional. Professional and personal development in this context is closely related to the process of the psychotherapist\'s personality integration and represents a lifelong process.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The fourth aspect of the term "integration" refers to the emotional integration of the child or adolescent into the primary family. The integrative child psychotherapist seeks from the very beginning to be sensitive to the subjective experiences of the child and parent, including openness to recognizing needs based on developmental stages and modifying relationships if necessary. Integrative child psychotherapy represents an intense form of therapy, involving all family members – both parents, the child, or all children – with the intention of improving the relationship between parents and children, restoring functionality, and the integrity of the family if disrupted for any reason. If possible, the therapist gives special attention and helps the parent adapt their relationship to the child\'s changed needs, thus strengthening the parent\'s resources and the effectiveness of the therapy. Finally, changes in the child lead to positive changes in the entire family. If the parents or other family members exhibit additional symptoms, the therapist may request additional interventions.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                In the final phase of psychotherapy, the integrative child psychotherapist offers the opportunity to work with loss and feelings of separation. The child\'s emotions and experiences related to loss represent an important segment of child therapy and are usually processed or reactivated in this phase of therapy. It is possible that the parents or caregivers may also need assistance when concluding therapy due to feelings related to the loss of the therapist\'s support. To successfully address this phenomenon, the therapist, in addition to paying necessary attention to the real feelings arising in this phase of therapy, does not exclude the possibility of reactivating experiences from earlier stages of life. At the end of the therapeutic process, the therapist should also be aware of and manage their own countertransference feelings related to the conclusion of therapy and address them appropriately.
              </p>
              <p class="text-base font-normal text-white text-justify mb-5">
                The developmental relational perspective of integrative child psychotherapy, placing the child-therapist relationship at the center of the therapeutic process, represents a constant search for acceptable and understandable ways for children and adolescents to communicate. The integrative child psychotherapist, through creative constructive activities such as child psychodrama, play therapy "My World," Winnicott\'s scribbles, counseling with elements of individual psychodrama, guided imagination, and the Cooping Cat program, creates a natural, acceptable, and understandable environment for the child, where they can confide, organize or reorganize their own experiences, and learn how to use them in contact with themselves and others. The possibilities for application depend on the set therapeutic goal, the child\'s developmental stage, age, and the type of difficulties.
              </p>
            </div>
          </div>
        </div>
        ',
        'hu' => '
          <div class="main-container my-10">
            <h2 class="title text-center">
              Integratív gyermekpszichoterápia
            </h2>
              <div class="flex w-full lg:flex-row flex-col my-20 lg:gap-20 gap-10">
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az integratív gyermekpszichoterápia ® két pszichoterápiás modellből ered – az integratív pszichoterápiából, amelyet neves szerzők dolgoztak ki és írtak le, mint például (Richard G. Erskine. (1997); Erskine & Moursand. (1988); (Erskine & Trautmann. 1997); (Erskine, Moursund & Trautmann. 1999); (Erskine & Moursund, 2011), és az „Integratív terápia gyermekek számára” projekt, amelyet Hilarion G. Petzold és munkatársai dolgoztak ki az 1960-as években. (Hilarion G. Petzold, Ramin, 1986).
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Ezek a pszichoterápiás modellek megfelelő elméleti és gyakorlati alapot biztosítanak az integratív gyermekpszichoterápia különböző kérdéseinek konceptualizálásához. Az integratív pszichoterápia elveinek és a „Gyermekek számára alkalmazott integratív terápia” terapeutikus technikáinak adaptálása a gyermekpszichoterápiában megfelelő koherens megközelítést jelent a gyermekpszichoterapeuták számára.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az integratív gyermekpszichoterápia programja magában foglalja és integrálja különböző pszichoterápiás iskolák elméleti és gyakorlati alapelveit, amelyek négy elméleti és terapeutikus hagyomány alapján épülnek fel: humanisztikus orientáció (Carl Rogers kliensekkel orientált pszichoterápiája), expresszív-akciós (sand-tray play terápia, gyermekpszichodráma), kognitív – viselkedéses és pszichodinamikai (interszubjektív megközelítés, objektum kapcsolatok, self-pszichológia, kötődési és mentalizációs elméletek) perspektívák integrálásával egy összefogott megközelítést alkotva az emberről mint a pszichés fejlődés megértésének alapjáról. Az összefogott megközelítés fontosságát megerősítve a pszichoterápiás gyakorlatban azt az álláspontot képviseli, hogy amikor a gyermek működésének bármely pillanata vagy konfliktusának oka kerül megvitatásra, a pszichodinamikai háttér mellett fontos elismerni a gondolatok, érzések és viselkedések kölcsönös függőségét, amelyek az interperszonális és társadalmi térben alakultak ki.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az integratív gyermekpszichoterápia támogatja és elfogadja a kapcsolat-alapú fejlődési pszichoterápiás megközelítést. Úgy véli, hogy a pszichoterápia eredménye a leghatékonyabb, amikor a pszichoterapeuta különös hangsúlyt fektet a klienssel való terapeutikus kapcsolat kialakítására, fenntartására és megerősítésére. Megerősíti a támogató környezet fontosságát, amelyben a növekedés, fejlődés és pozitív változások helyet kapnak az interszubjektív térben, amelyet a terapeuta és a kliens közösen alakítanak ki.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A terapeuta változásokkal kapcsolatos elméleti előfeltevések elemzése feltárja azokat a stratégiákat, amelyek közös tényezőként jelennek meg különböző terapeutikus perspektívákban, és ebben az értelemben az integratív pszichoterápiás megközelítések alapját képezhetik.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az integratív gyermekpszichoterápiában közös tényezők nélkülözhetetlenek: ezek a terapeuta és a kliens közötti terapeutikus kapcsolatra vonatkoznak, a fejlődésalapú munkakörnyezetre, a szívélyességre, gondoskodásra, közelségre, kölcsönös tiszteletre és bizalomra, arra a hitre, hogy a gyermekek képesek részt venni a saját nehézségeik megoldásában és meghozni a szükséges döntéseket. Az integratív pszichoterápiában a hatékonyságra vonatkozó pozitív előfeltevés elfogadása és a gyermekek érzelmeik kifejezésére való bátorítása (természetesen nem engedve bármely viselkedés kifejezését). Az új korrekciós érzelmi élmények támogatása lehetővé teszi a gyermek számára, hogy a nehézségeit új, más megvilágításban és elfogadhatóbb formában tapasztalja meg. A közös tényezők alapjain végzett terapeutikus munka lehetőséget ad arra, hogy alkalmazzuk a specifikus terapeutikus beavatkozásokat anélkül, hogy aggódnunk kellene amiatt, hogy egy adott intellektuális keret vagy irányelv szigorúan meghatározott határok közé szorítja azokat. Az integratív gyermekpszichoterápiás technikák által alapozott közös és specifikus tényezők kombinációja ezek a beavatkozások széles körű pszichikai nehézségek és zavarok kezelésére alkalmazhatóak és hatékonyak.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A terapeuta válaszai és a gyermek viselkedéséhez, gondolataihoz és érzéseihez való viszonya a játék metaforáján keresztül valósul meg, vagy a szerepjátékok elfogadásával. A „mint ha” állapotok előmozdítása egyfelől lehetővé teszi a kreatív folyamat erősségét, másfelől egyértelműen megerősíti a terapeutikus kapcsolat fontosságát, amely központi szerepet játszik a terapeuta és a kliens közötti kapcsolati folyamatban. Ezen terapeutikus aktivitások célja a folyamat mélyítése, a tárgyakkal való szokásos manipuláció szintjéről a mélyebb jelentéssel bíró, szimbolikusan reflektáló játékra való áttérés.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A gyermekterapeuta és a gyermek találkozása egy olyan „térbe” fejlődhet, ahol a gyermek maladaptív belső modelljei alkalmazkodóbb objektum kapcsolatokká módosulhatnak. Ebben az összefüggésben a felnőtt személy egyfajta mobil „közvetítő objektumként” jelenik meg, és tükröző szerepet játszik a gyermekkel szemben. Mindeközben mindig készen kell állnia arra, hogy felelősségteljes felnőtt személy szerepét vállalja, hogy szükség esetén döntést hozzon, autoritást gyakoroljon, hogy elvárásokat fogalmazzon meg, tiltson, és megfelelő önbizalmat mutasson. A gyermek a folyamat során különböző szerepeket is kipróbálhat, erősnek, önállónak, vagy éppen gyengének, dühösnek, sértődöttnek érezheti magát, védelmet kereshet, vagy a szimbolikus szerepekkel való azonosulás révén új kompetenciákat építhet, miközben új, más szerepekkel való kísérletezés lehetőségét éli át, új belső objektumokat alkothat, és felismerheti, hogy a rigid szerepeken túlléphet.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az „integráció” ebben az értelemben az integratív gyermekpszichoterápiában az integráció első aspektusát jelenti, amely megfelel a személyiség integrációjának. (Erskine R. 2004.) Segítségnyújtási törekvéseket jelent a gyermek, serdülő vagy szülő számára az ego állapotok tartalmának aszimilálásában és harmonizálásában, a védekező mechanizmusok ellazításában, a szkriptek megváltoztatásában vagy elutasításában, és a világgal való kapcsolatteremtés újraindításában.
                    </p>
                </div>
                <div class="flex lg:w-1/2 w-full lg:p-12 p-8 flex-col bg-red rounded-lg">
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az „integráció” kifejezés második aspektusa a kliens integrációjára vonatkozik. A gyermekekkel való munka jelentős különbsége az adult pszichoterápiához képest, hogy a gyermekek nehezen verbalizálják problémáikat és nehézségeiket. De minden gyermek játszik, és a játék fontos része a gyermekek fejlődésének. A gyermekek a játékkal gazdagítják tudásukat önmagukról, másokról és a környezetük fizikai jellemzőiről, amiben élnek. Az integratív gyermekpszichoterápia inkluzívabb, mint a hagyományos pszichoterápiás formák, amelyekben a kliens kevésbé aktív szerepet vállal a terápiában.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A terapeutikus kapcsolatot segíti és támogatja, hogy a terapeuta részt vesz a játékban egyenrangú partnerként, és olyan „nyelvet” használ, amely a gyermekek számára specifikus és érthető. Ez a konceptuális keret közös alapot talál a hagyományos, kliensekkel orientált és pszichodinamikai megközelítésekben: a közösen játszott terapeutikus kapcsolat megnyitja a kommunikációs teret, amely szükséges a változások alapjául szolgáló „biztonságos és védett hely” létrehozásához.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az „integrativitás” harmadik aspektusa a pszichoterapeuta, tanácsadó, pedagógus vagy szupervizor integrációjára vonatkozik. A hatékony gyermekpszichoterápia gyakran megköveteli, hogy a terapeuta sokoldalú és rugalmas legyen, hogy sikeresen reagálhasson a gyermek változó igényeire és a gyermek környezetében fontos szereplőkére. Előfordulhat, hogy a terapeuta egy adott pillanatban intenzíven részt vesz a játékban, tükrözve a gyermek belső folyamatait és feszültségeit, és a következő pillanatban a szülőt tanácsolja a gyermek nehézségeivel kapcsolatban, vagy beszélgetést folytat az iskolai pszichológussal vagy tanárral.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A terapeuta magas szintű érzékenységet kell, hogy tanúsítson, maximális tisztelettel a gyermekek iránt, és lehetőséget biztosít arra, hogy magukat az általuk leginkább közel álló vagy elfogadott nyelven képviseljék (pl. az integratív gyermekpszichoterápia terapeutikus technikáinak alkalmazásával). Ezzel a tevékenységgel a terapeuta elősegíti a kliens expreszív kommunikációját, és ezzel megnyitja a lehetőséget az önmagunkkal való kapcsolat mélyebb kutatására.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      A professzionális integráció az integratív pszichoterápián belül magában foglalja a pszichoterapeuta személyes integrációját is az elméleti keretekhez (elmélet, metodológia és filozófiai alapok) képest, valamint a gyermekkori és jelenlegi élményekkel kapcsolatos tapasztalatokat szakemberként. A professzionális és személyes fejlődés ebben az összefüggésben szoros kapcsolatban áll a pszichoterapeuta személyiségének integrációs folyamatával, és élethosszig tartó folyamatot jelent.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az „integráció” fogalmának negyedik aspektusa a gyermek, serdülő emocionális integrációjára vonatkozik a közvetlen családjukban. Az integratív gyermekpszichoterapeuta már az elejétől fogva próbál érzékeny lenni a gyermekek és szülők szubjektív élményeire, beleértve a fejlődés fokától függő igények felismerésére, és ha szükséges, az kapcsolatok módosítására. Az integratív gyermekpszichoterápia intenzív terápiás formát jelent, amely minden családtagot érint; mindkét szülőt, a gyermeket vagy az összes gyermeket, azzal a céllal, hogy javítsa a szülők és gyermekek közötti érzelmi kapcsolódásokat.
                    </p>
                    <p class="text-base font-normal text-white text-justify mb-5">
                      Az integratív gyermekpszichoterápia szoros kapcsolódása a családi terápia szupervíziós megközelítéséhez jellemzi, és lehetővé teszi a szülők pszichológiai támogatásának biztosítását a gyermekeikkel való együttműködésben és a szülő-gyermek kapcsolatok fejlesztésében.
                    </p>
                </div>
              </div>
        </div>
        ',
      ]),
      'order' => 3,
      'custom_design' => 1,
      'load_view' => 0
    ]);
  
    DB::table('page_content')->insert([
      'page_id' => 4,
      'title' => json_encode([
          'sr' => 'Integrativni dečji psihoterapeuti',
          'en' => 'Integrative Child Psychotherapists',
          'hu' => 'Integratív Gyermekpszichoterapeuták',
      ]),
      'content' => json_encode([
        'sr' => "user.views.components.deciji-psihoterapeuti",
        'en' => "user.views.components.deciji-psihoterapeuti",
        'hu' => "user.views.components.deciji-psihoterapeuti",
      ]),
      'order' => 4,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 4,
      'title' => json_encode([
          'sr' => 'Voditelj integrativne dečje psihodrame',
          'en' => 'Leader of Integrative Child Psychodrama',
          'hu' => 'Integratív Gyermekpszichodráma Vezető',
      ]),
      'content' => json_encode([
        'sr' => "user.views.components.deciji-psihoterapeuti-voditelji",
        'en' => "user.views.components.deciji-psihoterapeuti-voditelji",
        'hu' => "user.views.components.deciji-psihoterapeuti-voditelji",
      ]),
      'order' => 5,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 6,
      'title' => json_encode([
          'sr' => 'Saznajte više o nama!',
          'en' => 'Learn more about us!',
          'hu' => 'Tudjon meg többet rólunk!',
      ]),
      'content' => json_encode([
        'sr' => '
            <p class="text-justify">
              Integrativna dečja psihoterapija ® predstavlja integraciju ključnih elemenata humanističkog pravca u psihologiji, psihodinamske i ekspresivno - akcione perspektive sa terapijskim tehnikama „Integrativne terapije” za decu. Podržava relaciono razvojni pristup psihoterapiji i predstavlja istraživački projekat o odnosima koji podstiču psihički rast, razvoj i poboljšavaju kvalitet odnosa dete – roditelj – socijalna sredina.
            </p>
        ',
        'en' => '
            <p class="text-justify">
                Integrative Child Psychotherapy ® represents an integration of key elements from the humanistic approach in psychology, psychodynamic and expressive-action perspectives, combined with therapeutic techniques from "Integrative Therapy" for children. It supports a relational-developmental approach to psychotherapy and serves as a research project on relationships that foster psychological growth, development, and improve the quality of relationships between the child, parent, and social environment.
            </p>
        ',
        'hu' => '
            <p class="text-justify">
                Az Integratív Gyermekpszichoterápia ® a pszichológia humanisztikus irányzatának kulcselemeit, a pszichodinamikai és expresszív-akciós perspektívákat, valamint a gyermekek számára kidolgozott „Integratív Terápia” terápiás technikáit ötvözi. Támogatja a kapcsolati-fejlődési megközelítést a pszichoterápiában, és egy kutatási projektként is szolgál azokról a kapcsolatokról, amelyek elősegítik a pszichés növekedést, a fejlődést, és javítják a gyermek, a szülő és a társadalmi környezet közötti kapcsolatok minőségét.
            </p>
        ',
      ]),
      'order' => 1,
      'custom_design' => 0,
      'load_view' => 0
    ]);

    DB::table('page_content')->insert([
      'page_id' => 6,
      'title' => json_encode([
        'sr' => 'Partneri',
        'en' => 'Partners',
        'hu' => 'Partnerek',
      ]),
      'content' => json_encode([
        'sr' => "user.views.home.partners",
        'en' => "user.views.home.partners",
        'hu' => "user.views.home.partners",
      ]),
      'order' => 2,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('page_content')->insert([
      'page_id' => 6,
      'title' => json_encode([
        'sr' => 'Kontakt',
        'en' => 'Contact',
        'hu' => 'Kapcsolat',
      ]),
      'content' => json_encode([
        'sr' => '<p>
            <a class="contact-number" href="tel:+381643468620">+381/643468620</a>
            </p>
            <p class="mt-2">
                <a class="contact-number" href="tel:+381642575758">+381/642575758</a>
            </p>
            <p class="mt-10 contact-address">
                24300 Bačka Topola, Srbija
            </p>
            <p class="mt-2 contact-address">
                Košut Lajoša 57.
            </p>
            <p class="mt-10">
                <a href="mailto:info@integrativ.org.rs" class="contact-mail">
                    info@integrativ.org.rs
                </a>
            </p>',
        'hu' => '<p>
                <a class="contact-number" href="tel:+381643468620">+381/643468620</a>
            </p>
            <p class="mt-2">
                <a class="contact-number" href="tel:+381642575758">+381/642575758</a>
            </p>
            <p class="mt-10 contact-address">
                24300 Bačka Topola, Srbija
            </p>
            <p class="mt-2 contact-address">
                Košut Lajoša 57.
            </p>
            <p class="mt-10">
                <a href="mailto:info@integrativ.org.rs" class="contact-mail">
                    info@integrativ.org.rs
                </a>
            </p>',
        'en' => '<p>
                <a class="contact-number" href="tel:+381643468620">+381/643468620</a>
            </p>
            <p class="mt-2">
                <a class="contact-number" href="tel:+381642575758">+381/642575758</a>
            </p>
            <p class="mt-10 contact-address">
                24300 Bačka Topola, Srbija
            </p>
            <p class="mt-2 contact-address">
                Košut Lajoša 57.
            </p>
            <p class="mt-10">
                <a href="mailto:info@integrativ.org.rs" class="contact-mail">
                    info@integrativ.org.rs
                </a>
            </p>',
      ]),
      'order' => 3,
      'custom_design' => 1,
      'load_view' => 0
    ]);
  
    DB::table('page_content')->insert([
      'page_id' => 7,
      'title' => json_encode([
          'en' => 'Association Activities',
          'hu' => 'Egyesület tevékenységei',
          'sr' => 'Aktivnosti udruženja'
      ]),
      'content' => json_encode([
          'sr' => "user.views.components.activity-swiper",
          'en' => "user.views.components.activity-swiper",
          'hu' => "user.views.components.activity-swiper",
      ]),
      'order' => 1,
      'custom_design' => 0,
      'load_view' => 1
    ]);

    DB::table('emails')->insert([
      'email' => 'valami1@gmail.com',
      'locale' => 'hu'
    ]);

    DB::table('emails')->insert([
      'email' => 'valami2@gmail.com',
      'locale' => 'hu'
    ]);
  }
}
