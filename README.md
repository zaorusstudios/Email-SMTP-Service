# SMTP Server for Unreal Engine

This project provides a simple SMTP server integration using **PHPMailer** to send emails from Unreal Engine. It receives email parameters via GET requests and sends the email using an SMTP server.

---

## 🚀 Features
- Sends emails using an SMTP server.
- Supports both **HTML** and **plain text** email formats.
- Accepts sender and recipient details dynamically.
- Integrates seamlessly with Unreal Engine.

---

## 📂 File Structure
- `PHPMailer/`: Contains the PHPMailer library files.
- `smtp_server.php`: Main script to handle email sending requests.

---

## 📋 Prerequisites
1. **PHP 7.4+** installed on your server.
2. A valid SMTP server (e.g., Gmail, Outlook, or a custom mail server).
3. Unreal Engine configured to send GET requests to the server.

---

## ⚙️ Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/smtp-server-unreal.git
