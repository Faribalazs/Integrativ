<!DOCTYPE html>
<html>
<head>
    <title>{{ __('emails.conference_signup.title') }}</title>
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
        <h1>{{ __('emails.conference_signup.title') }}</h1>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.name') }}:</strong>
            <span>{{ $data['name'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.address') }}:</strong>
            <span>{{ $data['address'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.occupation') }}:</strong>
            <span>{{ $data['occupation'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.email') }}:</strong>
            <span>{{ $data['email'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.phone') }}:</strong>
            <span>{{ $data['phone'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.institution_or_company_name') }}:</strong>
            <span>{{ $data['institution_or_company_name'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.pib') }}:</strong>
            <span>{{ $data['pib'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.city') }}:</strong>
            <span>{{ $data['city'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.postcode') }}:</strong>
            <span>{{ $data['postcode'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.contact_phone') }}:</strong>
            <span>{{ $data['contact_phone'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.conference_signup.institution_email') }}:</strong>
            <span>{{ $data['institution_email'] }}</span>
        </div>
    </div>
</body>
</html>