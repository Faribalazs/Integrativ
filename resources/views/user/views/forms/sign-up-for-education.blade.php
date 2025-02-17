<form method="POST" class="flex justify-center flex-col" enctype="multipart/form-data"
    action="{{ route('save.education.sign-up') }}">

    @csrf

    <div class="flex w-full sm:gap-20 gap-10 lg:flex-row flex-col">

        <div class="lg:w-1/2 w-full flex flex-col">
            <h3 class="subtitle uppercase flex flex-grow">
                Opšte informacije
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="name" placeholder="Ime i prezime" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="date" name="date_of_birth" placeholder="Datum rodjenja" />
                </div>
            </div>
            <div class="flex w-full">
                <input required class="input-style mb-5 w-full" type="text" name="address" placeholder="Adresa" />
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="email" placeholder="Email" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="phone" placeholder="Telefon" />
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full flex flex-col">
            <h3 class="subtitle uppercase">
                Profesionalni razvoj i angažman
            </h3>
            <div class="flex w-full">
                <input required class="input-style mb-5 w-full" type="text" name="basic_studies"
                    placeholder="Osnovne studije" />
            </div>
            <div class="flex w-full">
                <input required class="input-style mb-5 w-full" type="text" name="name_and_seat_of_institution"
                    placeholder="Ime i sedište ustanove" />
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="education_level"
                        placeholder="Nivo Obrazovanja" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="number" name="year_of_graduation"
                        placeholder="Godina diplomiranja" />
                </div>
            </div>
        </div>

    </div>

    <div class="flex w-full gap-20 lg:flex-row flex-col mt-10">

        <div class="lg:w-1/2 w-full flex flex-col">
            <h3 class="subtitle uppercase flex flex-grow">
                Specijalizacija
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="occupation" placeholder="Zanimanje" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="field_of_specialization"
                        placeholder="Oblast specijalizacije" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text"
                        name="specialization_name_and_seat_of_institution" placeholder="Ime i sedište ustanove" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="job_position"
                        placeholder="Radno mesto" />
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 w-full flex flex-col">
            <h3 class="subtitle uppercase">
                Profesionalni rad i angažman sa decom
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="work_experience_with_children"
                        placeholder="Dužina radnog iskustva sa decom" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="most_frequently_addressed_issues"
                        placeholder="Problematika koja je najčešće tretirana" />
                </div>
            </div>
            <div class="flex w-full">
                <input required class="input-style mb-5 w-full" type="text"
                    name="institution_or_organization_work_with_children"
                    placeholder="Ustanova ili inst. gde je ostavren rad sa decom" />
            </div>
        </div>

    </div>

    <div class="flex w-full justify-center sm:gap-20 gap-10 mt-10">
        <div class="flex lg:w-1/2 w-full flex-col">
            <h3 class="subtitle uppercase">
                Profesionalni razvoj i angažman
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="type_of_psychotherapy_modality"
                        placeholder="Vrsta psihoterapijskog modaliteta" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="achieved_level_of_education"
                        placeholder="Postignuti nivo edukacije" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="name_and_seat_of_organization"
                        placeholder="Ime i sedište organizacije" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="length_of_psychotherapy_experience"
                        placeholder="Dužina psihoterapijskog iskustva" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="psychotherapy_work_with_children"
                        placeholder="Psihoterapijski rad sa decom" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="type_of_psychotherapy_modality"
                        placeholder="Vrsta psihoterapijskog modaliteta" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text"
                        name="length_of_psychotherapy_work_with_children"
                        placeholder="Dužina psihoterapijskog rada sa decom" />
                </div>
                <div class="flex sm:w-1/2 w-full">
                    <input required class="input-style mb-5 w-full" type="text" name="most_frequently_addressed_issues"
                        placeholder="Problematika koja je načešće tretirana" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex w-full justify-center mt-10">
        <button class="main-btn w-max">
            Posaji poruku
        </button>
    </div>
</form>
