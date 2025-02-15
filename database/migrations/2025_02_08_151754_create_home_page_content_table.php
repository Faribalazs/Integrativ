<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_page_content', function (Blueprint $table) {
            $table->id();
            $table->json('section_name')->nullable();
            $table->json('section_title')->nullable();
            $table->json('section_content')->nullable();
            $table->string('section_image')->nullable();
            $table->integer('order');
            $table->timestamps();
        });

        DB::table('home_page_content')->insert([
            [
                'section_name' => json_encode([
                    'sr' => 'O nama',
                    'en' => 'About us',
                    'hu' => 'Rólunk',
                ]),
                'section_title' => json_encode([
                    'sr' => 'O nama',
                    'en' => 'About us',
                    'hu' => 'Rólunk',
                ]),
                'section_content' => json_encode([
                    'sr' => '<p>
                                Udruženje za Integrativnu dečju psihoterapiju® je osnovano 2007. godine u Subotici. Ideja o osnivanju je nastala na osnovu međunarodnog metodološko teorijskog "projekata" definisanoj zajedničkim terapijskim stavovima različitih psihoterapijskih pravaca.
                            </p>
                            <p class="mt-5">
                                Udruženje za Integrativnu dečju psihoterapiju je osnovano sa ciljem obrazovanja stručnjaka iz oblasti mentalnog zdravlja za primenu dečje psihoterapije kako u terapijske svrhe tako i za davanje podrške deci i roditeljima u rastu i razvoj ličnosti u različitim oblastima dečje zaštite, promocije, razvijanja i unapređenja teorije i prakse dečje psihoterapije. Udruženje za Integrativnu dečju psihoterapiju je punopravni član Saveza društava psihoteraputa Srbije i Evropske asocijacije za Integrativnu psihoterapiju.
                            </p>
                            <p class="mt-5">
                            <a href="/o-nama" class="o-nama-link mt-5">
                                Saznaj više
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            </p>
                            ',
                    'en' => '<p>
                                The Association for Integrative Child Psychotherapy® was founded in 2007 in Subotica. 
                                The idea of its establishment arose from an international methodological and theoretical "project" 
                                defined by shared therapeutic attitudes of various psychotherapy approaches.
                            </p>
                            <p class>
                                The Association for Integrative Child Psychotherapy was founded with the goal of educating 
                                mental health professionals in the application of child psychotherapy, both for therapeutic 
                                purposes and to support children and parents in personality development across various fields 
                                of child protection, promotion, development, and advancement of child psychotherapy theory and practice. 
                                The Association for Integrative Child Psychotherapy is a full member of the Union of Psychotherapy Societies of Serbia 
                                and the European Association for Integrative Psychotherapy.
                            </p>
                            <p class>
                            <a href="/o-nama" class="o-nama-link">
                                Learn more
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            </p>',
        
                    'hu' => '<p>
                                Az Integratív Gyermekpszichoterápia Egyesületet® 2007-ben alapították Szabadkán. 
                                Az alapítás ötlete egy nemzetközi módszertani és elméleti „projektből” származik, 
                                amelyet különböző pszichoterápiás irányzatok közös terápiás szemlélete határoz meg.
                            </p>
                            <p class="mt-5">
                                Az Integratív Gyermekpszichoterápia Egyesület azzal a céllal jött létre, hogy 
                                mentálhigiénés szakembereket képezzen a gyermekpszichoterápia alkalmazására, 
                                mind terápiás célokra, mind pedig a gyermekek és szülők támogatására a személyiségfejlődésben, 
                                a gyermekvédelem különböző területein, valamint a gyermekpszichoterápia elméletének és gyakorlatának 
                                előmozdításában és fejlesztésében. 
                                Az Integratív Gyermekpszichoterápia Egyesület a Szerbiai Pszichoterápiás Társaságok Szövetségének 
                                és az Európai Integratív Pszichoterápiás Egyesület teljes jogú tagja.
                            </p>
                            <p class="mt-5">
                            <a href="/o-nama" class="o-nama-link">
                                Tudj meg többet
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            </p>',
                ]),
                'order' => 1,
            ],

            [
                'section_name' => json_encode([
                    'sr' => 'Partneri',
                    'en' => 'Partners',
                    'hu' => 'Partnerek',
                ]),
                'section_title' => null,
                'section_content' => json_encode([
                    'sr' => "user.views.home.partners",
                    'en' => "user.views.home.partners",
                    'hu' => "user.views.home.partners",
                ]),
                'order' => 2,
            ],

            [
                'section_name' => json_encode([
                    'sr' => 'Konferencije',
                    'en' => 'Conferences',
                    'hu' => 'Konferenciák',
                ]),
                'section_title' => null,
                'section_content' => null,
                'order' => 3,
            ],

            [
                'section_name' => json_encode([
                    'sr' => 'Kontakt',
                    'en' => 'Contact',
                    'hu' => 'Kapcsolat',
                ]),
                'section_title' => json_encode([
                    'sr' => 'Kontakt',
                    'en' => 'Contact',
                    'hu' => 'Kapcsolat',
                ]),
                'section_content' => json_encode([
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
                            </p>'
                ]),
                'order' => 4,
            ],

            [
                'section_name' => json_encode([
                    'sr' => 'Footer',
                    'en' => 'Footer',
                    'hu' => 'Footer',
                ]),
                
                'section_title' => null,

                'section_content' => json_encode([
                    'sr' => '<div class="footer-bg w-full">
                                <div class="flex flex-col main-container">
                                    <div class="flex flex-wrap flex-col lg:flex-row justify-center lg:mt-32 mt-20 gap-y-5">
                                        <a href="/" class="lg:mr-5 flex justify-center lg:justify-start">
                                            <img src="/img/integrativ-logo.svg" class="footer-icon no-underline">
                                            <img src="/img/integrativ-logo.png" class="footer-icon-mobile no-underline">
                                        </a>
                                        <div class="flex lg:flex-row flex-col gap-7 lg:gap-0 mt-5 lg:mt-0">
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Naslovna
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                O nama
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Modaliteti
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Konferencije
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Edukacija
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Aktivnosti
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Psihoterapeuti
                                            </a>
                                            <a href="#" class="footer-link no-underline flex items-center justify-center">
                                                Kontakt
                                            </a>
                                        </div>

                                        <hr class="text-white w-full my-10">

                                        <div class="flex flex-wrap justify-center lg:mb-32 mb-20">
                                            <div class="pt-1 flex justify-between media-align gap-5">
                                                <div class="flex align-center">
                                                    <i class="ri-facebook-circle-fill social-icon"></i>
                                                </div>
                                                <div class="flex align-center">
                                                    <i class="ri-instagram-fill social-icon"></i>
                                                </div>
                                                <div class="flex align-center">
                                                    <i class="ri-linkedin-box-fill social-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>',
                    'hu' => '<div class="footer-bg w-full">
                        <div class="flex flex-col main-container">
                            <div class="flex flex-wrap flex-col lg:flex-row justify-center lg:mt-32 mt-20 gap-y-5">
                                <a href="/" class="lg:mr-5 flex justify-center lg:justify-start">
                                    <img src="/img/integrativ-logo.svg" class="footer-icon no-underline">
                                    <img src="/img/integrativ-logo.png" class="footer-icon-mobile no-underline">
                                </a>
                                <div class="flex lg:flex-row flex-col gap-7 lg:gap-0 mt-5 lg:mt-0">
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Naslovna
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        O nama
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Modaliteti
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Konferencije
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Edukacija
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Aktivnosti
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Psihoterapeuti
                                    </a>
                                    <a href="#" class="footer-link no-underline flex items-center justify-center">
                                        Kontakt
                                    </a>
                                </div>

                                <hr class="text-white w-full my-10">

                                <div class="flex flex-wrap justify-center lg:mb-32 mb-20">
                                    <div class="pt-1 flex justify-between media-align gap-5">
                                        <div class="flex align-center">
                                            <i class="ri-facebook-circle-fill social-icon"></i>
                                        </div>
                                        <div class="flex align-center">
                                            <i class="ri-instagram-fill social-icon"></i>
                                        </div>
                                        <div class="flex align-center">
                                            <i class="ri-linkedin-box-fill social-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>',
                'en' => '<div class="footer-bg w-full">
                    <div class="flex flex-col main-container">
                        <div class="flex flex-wrap flex-col lg:flex-row justify-center lg:mt-32 mt-20 gap-y-5">
                            <a href="/" class="lg:mr-5 flex justify-center lg:justify-start">
                                <img src="/img/integrativ-logo.svg" class="footer-icon no-underline">
                                <img src="/img/integrativ-logo.png" class="footer-icon-mobile no-underline">
                            </a>
                            <div class="flex lg:flex-row flex-col gap-7 lg:gap-0 mt-5 lg:mt-0">
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Naslovna
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    O nama
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Modaliteti
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Konferencije
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Edukacija
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Aktivnosti
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Psihoterapeuti
                                </a>
                                <a href="#" class="footer-link no-underline flex items-center justify-center">
                                    Kontakt
                                </a>
                            </div>

                            <hr class="text-white w-full my-10">

                            <div class="flex flex-wrap justify-center lg:mb-32 mb-20">
                                <div class="pt-1 flex justify-between media-align gap-5">
                                    <div class="flex align-center">
                                        <i class="ri-facebook-circle-fill social-icon"></i>
                                    </div>
                                    <div class="flex align-center">
                                        <i class="ri-instagram-fill social-icon"></i>
                                    </div>
                                    <div class="flex align-center">
                                        <i class="ri-linkedin-box-fill social-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>',
                ]),
                'order' => 5,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_content');
    }
};
