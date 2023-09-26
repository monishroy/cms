<!DOCTYPE html>
<html>
  <head>
    <title>Email OTP Template</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f3f3f3;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
      }

      .header {
        background-color: #0dc6ff;
        color: #ffffff;
        padding: 10px;
        text-align: center;
        font-size: 20px;
      }

      .otp-section {
        text-align: center;
        padding: 20px;
      }

      .otp-code {
        font-size: 36px;
        font-weight: bold;
        color: #0084ff;
      }

      .footer {
        background-color: #f0f0f0;
        padding: 10px;
        text-align: center;
      }

      .footer p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>{{ $title }}</h1>
      </div>
      <div class="otp-section">
        <p>Your One-Time Password (OTP) is:</p>
        <p class="otp-code">{{ $otp }}</p>
      </div>
      <div class="footer">
        <p>
          This "{{ $email }}" email was sent to you as part of the OTP verification process.
        </p>
      </div>
    </div>
  </body>
</html>
