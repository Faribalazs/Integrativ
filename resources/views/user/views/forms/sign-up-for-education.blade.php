<form method="POST" class="flex justify-center flex-col" enctype="multipart/form-data"
    action="{{ route('save.education.sign-up') }}">
    @csrf
    <div class="flex w-full gap-10 flex-col">
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase flex flex-grow">
                    {{ __('app.front.education.title') }}
                </h3>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="name" class="mb-1 pl-1">{{ __('app.front.education.name') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="name" name="name" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="date_of_birth" class="mb-1 pl-1">{{ __('app.front.education.date_of_birth') }}</label>
                        <input required class="input-style mb-5 w-full" type="date" id="date_of_birth"
                            name="date_of_birth" placeholder="Select a date" />
                    </div>
                </div>
                <div class="flex w-full flex-col">
                    <label for="address" class="mb-1 pl-1">{{ __('app.front.education.address') }}</label>
                    <input required class="input-style mb-5 w-full" type="text" id="address" name="address" />
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="email" class="mb-1 pl-1">{{ __('app.front.education.email') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="email" name="email"
                            placeholder="Email" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="phone" class="mb-1 pl-1">{{ __('app.front.education.phone') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="phone" name="phone"
                            placeholder="Telefon" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase">
                    {{ __('app.front.education.sub-1') }}
                </h3>
                <div class="flex w-full flex-col">
                    <label for="basic_studies" class="mb-1 pl-1">{{ __('app.front.education.basic_studies') }}</label>
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
                    {{ __('app.front.education.sub-2') }}
                </h3>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="occupation" class="mb-1 pl-1">{{ __('app.front.education.occupation') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="occupation" name="occupation" />
                    </div>
                    <div class="flex sm:w-1/2 w-full flex-col">
                        <label for="field_of_specialization" class="mb-1 pl-1">{{ __('app.front.education.field_of_specialization') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="field_of_specialization"
                            name="field_of_specialization" />
                    </div>
                </div>
                <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                    <div class="flex w-full flex-col">
                        <label for="job_position" class="mb-1 pl-1">{{ __('app.front.education.job_position') }}</label>
                        <input required class="input-style mb-5 w-full" type="text" id="job_position"
                            name="job_position" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full justify-center">
            <div class="lg:w-1/2 w-full flex flex-col">
                <h3 class="subtitle uppercase">
                    {{ __('app.front.education.sub-3') }}
                </h3>
                <div class="flex w-full flex-col">
                    <label for="work_experience_with_children" class="mb-1 pl-1">{{ __('app.front.education.work_experience_with_children') }}</label>
                    <input required class="input-style mb-5 w-full" type="text" id="work_experience_with_children"
                        name="work_experience_with_children" />
                </div>
                <div class="flex w-full flex-col">
                    <label for="most_frequently_addressed_issues" class="mb-1 pl-1">{{ __('app.front.education.most_frequently_addressed_issues') }}</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="most_frequently_addressed_issues" name="most_frequently_addressed_issues" />
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center gap-10 mt-10">
        <div class="flex lg:w-1/2 w-full flex-col">
            <h3 class="subtitle uppercase">
                {{ __('app.front.education.sub-4') }}
            </h3>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="type_of_psychotherapy_modality" class="mb-1 pl-1">{{ __('app.front.education.type_of_psychotherapy_modality') }}</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="type_of_psychotherapy_modality" name="type_of_psychotherapy_modality" />
                </div>
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="achieved_level_of_education" class="mb-1 pl-1">{{ __('app.front.education.achieved_level_of_education') }}</label>
                    <input required class="input-style mb-5 w-full" type="text" id="achieved_level_of_education"
                        name="achieved_level_of_education" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex w-full flex-col">
                    <label for="length_of_psychotherapy_experience" class="mb-1 pl-1">{{ __('app.front.education.length_of_psychotherapy_experience') }}</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="length_of_psychotherapy_experience" name="length_of_psychotherapy_experience" />
                </div>
            </div>
            <div class="flex w-full sm:gap-4 sm:flex-row flex-col">
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="psychotherapy_work_with_children" class="mb-1 pl-1">{{ __('app.front.education.psychotherapy_work_with_children') }}</label>
                    <input required class="input-style mb-5 w-full" type="text"
                        id="psychotherapy_work_with_children" name="psychotherapy_work_with_children" />
                </div>
                <div class="flex sm:w-1/2 w-full flex-col">
                    <label for="type_of_psychotherapy_modality" class="mb-1 pl-1">{{ __('app.front.education.type_of_psychotherapy_modality') }}</label>
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
                {{ __('app.front.education.submit') }}
            </button>
        </div>
    </div>
</form>
