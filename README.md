# SMTP Server for Unreal Engine

This project provides a simple SMTP server integration using **PHPMailer** and PHP to send emails from Unreal Engine. It receives email parameters via GET requests and sends the email using an SMTP server through Unreal Engine.

---

## 🚀 Features
- Sends emails using an SMTP server.
- Supports both **HTML** and **plain text** email formats.
- Accepts sender and recipient details dynamically.
- Integrates seamlessly with Unreal Engine.

---

## 📂 File Structure
- `PHPMailer/`: Contains the PHPMailer library files.
- `mailsystem.php`: Main script to handle email sending requests.

---

## 📋 Prerequisites
1. **PHP 7.4+** installed on your server.
2. A valid SMTP server (e.g., Gmail, Outlook, or a custom mail server).
3. VaRest Plugin
4. Unreal Engine configured to send GET requests to the server.

---
## 📋 Step 1
> **Note:**  
> Replace the following placeholders in the `mailsystem.php` file with your actual SMTP server details:  
> 
> ```php
> $mail->Host = 'mail.example.com'; // Your SMTP server
> $mail->Username = 'youremail@example.com'; // Your email address
> $mail->Password = 'youremailpassword'; // Your password
> ```
> - **`$mail->Host`**: The address of your SMTP server (e.g., `smtp.gmail.com` or `mail.yourdomain.com`).  
> - **`$mail->Username`**: The email address you will use to send the emails.  
> - **`$mail->Password`**: The password for your email account.  
>
> ⚠️ **Important:** Never hardcode sensitive credentials for production. Use environment variables or a secure configuration method instead.
> 
