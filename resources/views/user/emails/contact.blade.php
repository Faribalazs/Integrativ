<!DOCTYPE html>
<html>
<head>
    <title>{{ __('emails.contact.title') }}</title>
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
        <h1>{{ __('emails.contact.title') }}</h1>
        <div class="data-row">
            <strong>{{ __('emails.contact.name') }}:</strong>
            <span>{{ $data['name'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.contact.email') }}:</strong>
            <span>{{ $data['email'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.contact.phone') }}:</strong>
            <span>{{ $data['phone'] }}</span>
        </div>
        <div class="data-row">
            <strong>{{ __('emails.contact.message') }}:</strong>
            <span>{{ $data['message'] }}</span>
        </div>
    </div>
</body>
</html>