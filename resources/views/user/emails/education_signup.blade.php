<!DOCTYPE html>
<html>
<head>
    <title>{{ __('emails.education_signup.title') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .data-row {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .data-row:nth-child(even) {
            background-color: #f9f9f9;
        }
        .data-row strong {
            width: 45%;
            color: #555;
        }
        .data-row span {
            width: 55%;
            text-align: right;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ __('emails.education_signup.title') }}</h1>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.name') }}:</strong>
            <span>{{ $data['name'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.date_of_birth') }}:</strong>
            <span>{{ $data['date_of_birth'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.address') }}:</strong>
            <span>{{ $data['address'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.email') }}:</strong>
            <span>{{ $data['email'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.phone') }}:</strong>
            <span>{{ $data['phone'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.basic_studies') }}:</strong>
            <span>{{ $data['basic_studies'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.occupation') }}:</strong>
            <span>{{ $data['occupation'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.field_of_specialization') }}:</strong>
            <span>{{ $data['field_of_specialization'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.job_position') }}:</strong>
            <span>{{ $data['job_position'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.work_experience_with_children') }}:</strong>
            <span>{{ $data['work_experience_with_children'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.most_frequently_addressed_issues') }}:</strong>
            <span>{{ $data['most_frequently_addressed_issues'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.type_of_psychotherapy_modality') }}:</strong>
            <span>{{ $data['type_of_psychotherapy_modality'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.achieved_level_of_education') }}:</strong>
            <span>{{ $data['achieved_level_of_education'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.length_of_psychotherapy_experience') }}:</strong>
            <span>{{ $data['length_of_psychotherapy_experience'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.education_signup.psychotherapy_work_with_children') }}:</strong>
            <span>{{ $data['psychotherapy_work_with_children'] }}</span>
        </div>
    </div>
</body>
</html>