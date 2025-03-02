<form method="POST" class="flex justify-center flex-col" enctype="multipart/form-data"
    action="{{ route('save.education.sign-up') }}">
    @csrf
    <div class="flex w-full gap-10 flex-col">
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase flex flex-grow">
                    Opšte informacije
                </h3>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="name" class="mb-1 pl-1">Ime i prezime</label>
                        <input required class="input-style mb-5 w-full" type="text" id="name" name="name" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="date_of_birth" class="mb-1 pl-1">Datum rodjenja</label>
                        <input required class="input-style mb-5 w-full" type="date" id="date_of_birth"
                            name="date_of_birth" placeholder="Select a date" />
                    </div>
                </div>
                <div class="flex w-full flex-col">
                    <label for="address" class="mb-1 pl-1">Adresa</label>
                    <input required class="input-style mb-5 w-full" type="text" id="address" name="address" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="email" class="mb-1 pl-1">Email</label>
                        <input required class="input-style mb-5 w-full" type="text" id="email" name="email"
                            placeholder="Email" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="phone" class="mb-1 pl-1">Telefon</label>
                        <input required class="input-style mb-5 w-full" type="text" id="phone" name="phone"
                            placeholder="Telefon" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase">
                    Profesionalni razvoj i angažman
                </h3>
                <div class="flex w-full flex-col">
                    <label for="basic_studies" class="mb-1 pl-1">Osnovne studije</label>
                    <input required class="input-style mb-5 w-full" type="text" id="basic_studies"
                        name="basic_studies" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full gap-10 flex-col mt-10">
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase">
                    Specijalizacija
                </h3>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="occupation" class="mb-1 pl-1">Zanimanje</label>
                        <input required class="input-style mb-5 w-full" type="text" id="occupation" name="occupation" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="field_of_specialization" class="mb-1 pl-1">Oblast specijalizacije</label>
                        <input required class="input-style mb-5 w-full" type="text" id="field_of_specialization"
                            name="field_of_specialization" />
                    </div>
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex w-full flex-col">
                        <label for="job_position" class="mb-1 pl-1">Radno mesto</label>
                        <input required class="input-style mb-5 w-full" type="text" id="job_position"
                            name="job_position" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase">
                    Profesionalni rad i angažman sa decom
                </h3>
                <div class="flex w-full flex-col">
                    <label for="work_experience_with_children" class="mb-1 pl-1">Dužina radnog iskustva sa decom</label>
                    <input required class="input-style mb-5 w-full" type="text" id="work_experience_with_children"
                        name="work_experience_with_children" />
                </div>
                <div class="flex w-full flex-col">
                    <label for="most_frequently_addressed_issues" class="mb-1 pl-1">Problematika koja je najčešće
                        tretirana</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="most_frequently_addressed_issues" name="most_frequently_addressed_issues" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center gap-10 mt-10">
        <div class="flex lg:w-1/2 w-full flex-col">
            <h3 class="subtitle uppercase">
                Profesionalni razvoj i angažman
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="type_of_psychotherapy_modality" class="mb-1 pl-1">Vrsta psihoterapijskog
                        modaliteta</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="type_of_psychotherapy_modality" name="type_of_psychotherapy_modality" />
                </div>
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="achieved_level_of_education" class="mb-1 pl-1">Postignuti nivo edukacije</label>
                    <input required class="input-style mb-5 w-full" type="text" id="achieved_level_of_education"
                        name="achieved_level_of_education" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex w-full flex-col">
                    <label for="length_of_psychotherapy_experience" class="mb-1 pl-1">Dužina psihoterapijskog
                        iskustva</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="length_of_psychotherapy_experience" name="length_of_psychotherapy_experience" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="psychotherapy_work_with_children" class="mb-1 pl-1">Psihoterapijski rad sa
                        decom</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="psychotherapy_work_with_children" name="psychotherapy_work_with_children" />
                </div>
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="type_of_psychotherapy_modality" class="mb-1 pl-1">Vrsta psihoterapijskog
                        modaliteta</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="type_of_psychotherapy_modality" name="type_of_psychotherapy_modality" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center mt-10 flex-col">
        <div class="flex w-full justify-center my-3">
            {!! $note !!}
        </div>
        <div class="flex w-full justify-center">
            <button class="main-btn w-max">
                Posaji poruku
            </button>
        </div>
    </div>
</form>
