# UNREAL ENGINE SMTP SERVER

UE SMTP SERVER is a PHP-based SMTP server designed to integrate with Unreal Engine, allowing developers to send emails seamlessly through various SMTP providers. This tool supports HTML and plain-text emails and includes a simple configuration for connecting to popular email services.

[Watch this video](https://www.youtube.com/watch?v=CA4Fh9u37T0)

![SMTP Server in Unreal Engine](https://i.imgur.com/iZiA95v.png)

---
## 🌟 DOWNLOAD UNREAL ENGINE PROJECT
[DOWNLOAD PROJECT](https://drive.google.com/file/d/14oGSvfizp4nhF1H2DRkHcRb104vfCbxl/view?usp=sharing)

---
## 🌟 Features

- **SMTP Integration**: Supports secure email sending via SSL/TLS or StartTLS.
- **PHPMailer**: Built on PHPMailer for reliable and easy email handling.
- **Unreal Engine Compatible**: Works with Unreal Engine to send emails directly from your game or application (VaRest Plugin is needed).

---

## 📂 File Structure
- `PHPMailer/`: Contains the PHPMailer library files.
- `mailsystem.php`: Main script to handle email sending requests.
---

## 🚀 How It Works

The PHP script receives email data via HTTP requests (GET or POST) from Unreal Engine, then sends the email using PHPMailer.

### 📋 Email Parameters
These parameters must be passed in the request to send an email:

| **Parameter**   | **Description**                         |
|------------------|-----------------------------------------|
| `content`       | Email body                              |
| `email`         | Recipient's email address               |
| `subject`       | Email subject                           |
| `is_html`       | Set to `true` for HTML, `false` for plain text |
| `from_email`    | Sender's email address                  |
| `from_name`     | Sender's name                           |

---

## 📋 Prerequisites
1. **PHP 7.4+** installed on your server.
2. A valid SMTP server (e.g., Gmail, Outlook, or a custom mail server).
3. **VaRest Plugin**
4. Unreal Engine configured to send GET requests to the server.
  
---
## 🚀 Before you begin
UE SMTP SERVER allows you to connect to an SMTP server to send emails. You must use the server corresponding to the email address you want to use to send the email. Here is a list of common SMTP servers:

| **Email Extension** | **Server Type** | **Server Address**    | **Security** | **Port** | **Requires Authentication** |
|---------------------|-----------------|-----------------------|--------------|----------|-----------------------------|
| `@gmail.com`        | ESMTP           | `smtp.gmail.com`       | SSL/TLS      | 465      | Yes                         |
| `@gmail.com`        | ESMTP           | `smtp.gmail.com`       | StartTLS     | 587      | Yes                         |
| `@yahoo.com`        | ESMTP           | `smtp.mail.yahoo.com`  | SSL/TLS      | 465      | Yes                         |
| `@aol.com`          | ESMTP           | `smtp.aol.com`         | SSL/TLS      | 465      | Yes                         |
| `@hotmail.com`      | ESMTP           | `smtp.live.com`        | SSL/TLS      | 465      | Yes                         |
| `@outlook.com`      | ESMTP           | `smtp.live.com`        | StartTLS     | 587      | Yes                         |

ℹ️ **Note**: Gmail supports both SSL/TLS and StartTLS. You can choose either.

⚠️ **Important**: Some SMTP servers may require enabling "less secure apps" for successful connection. For Gmail, you can manage this setting [here](https://myaccount.google.com/lesssecureapps).

---

## 🔧 Configuration
[Watch this video](https://www.youtube.com/watch?v=CA4Fh9u37T0)
1. To configure your SMTP server, replace the following placeholders in the `mailsystem.php` file with your SMTP details:

```php
$mail->Host = 'mail.example.com';       // Your SMTP server
$mail->Username = 'youremail@example.com'; // Your email address
$mail->Password = 'youremailpassword';     // Your password
$mail->Port = 587;                         // Your SMTP port (e.g., 465 for SSL/TLS or 587 for StartTLS)
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Encryption type (SSL/TLS or StartTLS)
```

2. To send emails from Unreal Engine with VaRest, you need to enter the SMTPServer folder address in the ApplyURL node in the GameInstance. Make sure the address is correct to be able to send the emails.
   
![SMTP Server in Unreal Engine](https://i.imgur.com/r6N50R1.jpeg)

3. In the Unreal Engine project, a form is included within a Widget called SendEmail. You can use this Widget to perform tests and verify the email sending functionality directly from the game.
   
![SMTP Server in Unreal Engine](https://i.imgur.com/xCVGUcw.jpeg)

4. We use the SMTP_MailServer node from GameInstance to pass the email content data so that it can be sent. The node allows you to provide the necessary details, such as the recipient, subject, and content of the email. By configuring this node properly, you ensure that the correct information is sent to the SMTP server for email delivery.
   
![SMTP Server in Unreal Engine](https://i.imgur.com/u7YDyig.jpeg)

5. To send an email with an HTML body, make sure to enable the **isHTML?** variable. This allows you to send the content in HTML format. You can then use Unreal Engine's Append node to build and format the HTML content, as shown in the image below.
This will let you create rich email content with custom styling, links, images, and more.
![SMTP Server in Unreal Engine](https://i.imgur.com/dBYxqli.jpeg)


## 📋 Examples
The UE SMTP Server can be used in Unreal Engine to send emails for various purposes such as player notifications, password resets, account validation, support requests, and rewards or promotions. It streamlines communication and enhances player engagement within your game

![SMTP Server in Unreal Engine](https://i.imgur.com/Yw7H2pC.jpeg)
![SMTP Server in Unreal Engine](https://i.imgur.com/uS29s4A.jpeg)



---

## 📧 Support
If you need help, have a feature request or experience troubles, please contact me at alejandro@zaorus.com.

[![Alt text](https://i.imgur.com/yLnXLhX.png)](link_url)




