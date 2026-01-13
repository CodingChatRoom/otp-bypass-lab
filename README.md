# OTP Bypass Lab

## 🔥 Project Overview
This OTP Lab demonstrates **security vulnerabilities** commonly found in weak OTP-based authentication systems.  
The project includes a login system, OTP generation, OTP verification, and a brute-force testing script.

---

## 👨‍💻 Author Introduction  

Hello! I am **Muhammad Saqlain Shoukat** also known as **Dark Wolf** founder and developer of **Coding Chat Room**, a passionate learner and creator in the field of **Cybersecurity, Programming, and DevSecOps**.  

🔹 My mission is to make **complex technical concepts simple and easy** so that students and professionals can learn without confusion.  
🔹 On my platforms, I share tutorials, study notes, and practical tips about **Linux, Ethical Hacking, Development, Programming and Cybersecurity**.  
🔹 I believe in **learning by sharing** — the more we teach, the more we grow.  

---

### 🚨 Vulnerabilities in This Lab
This project intentionally contains multiple vulnerabilities for educational and ethical hacking practice:

#### 1️⃣ Weak Login Validation
- No rate limiting  
- No account lockout  
- No password hashing  
- Simple login workflow

#### 2️⃣ Predictable OTP
- OTP is generated using `rand(1000,9999)`  
- No expiration time  
- No secure randomness  
- OTP stored directly in `$_SESSION`

#### 3️⃣ OTP Brute Force
The Python script `otp_bypass.py` can brute‑force the OTP by sending repeated POST requests.

#### 4️⃣ Direct Access to Dashboard
- Dashboard does not validate if OTP was actually verified  
- Missing authentication checks allow forced browsing

---

## ⚙️ Requirements

### ✔ Required Software
| Software | Version | Description |
|---------|---------|-------------|
| PHP | 7.x / 8.x | Runs backend PHP code |
| Apache2 | Latest | Hosts the PHP app |
| MySQL / MariaDB | Latest | Stores login info |
| Git | Latest | To clone repository |
| Python3 | Latest | For brute‑force script |

---

## 🛠 Installation Guide (Kali Linux / Ubuntu)

### Step 1 — Install Dependencies
```
sudo apt update
sudo apt install apache2 php php-mysqli python3 git -y
```

### Step 2 — Start Apache
```
sudo systemctl start apache2
sudo systemctl enable apache2
```

### Step 3 — Move to Web Directory
```
cd /var/www/html
```

### Step 4 — Remove Default Page
```
sudo rm -rf *
```

### Step 5 — Clone Repository
```
sudo git clone https://github.com/CodingChatRoom/otp-bypass-lab.git
```

### Step 6 — Move Into Project
```
cd otp-bypass-lab
```

---

## 🗃 Database Setup

### Step 1 — Login to MySQL
```
sudo mysql -u root
```

### Step 2 — Create Database
```
CREATE DATABASE otp_lab;
```

### Step 3 — Create User
```
CREATE USER 'otpuser'@'localhost' IDENTIFIED BY 'otp123';
GRANT ALL PRIVILEGES ON otp_lab.* TO 'otpuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

---

## ▶️ Run the OTP Lab

Restart Apache:
```
sudo systemctl restart apache2
```

Now open in browser:
```
http://localhost/otp-bypass-lab/login.php
```

---

## 🧪 Running the OTP Brute Force Script

### Step 1 — Start the script
```
python3 otp_bypass.py
```

### Step 2 — Enter PHPSESSID
Open DevTools → Application → Cookies → Copy `PHPSESSID`.

### Step 3 — Script Attempts Brute Force
You can choose:
```
Use wordlist (y/n):
```
or default brute-force (1000–9999).

---

## 🧑‍💻 File Structure

```
/otp-bypass-lab
│── login.php
│── send_otp.php
│── verify_otp.php
│── dashboard.php
│── db.php
│── logout.php
│── otp_bypass.py
```

---

## ⚠️ Legal Disclaimer
This project is for **educational and ethical purposes only**.  
Unauthorized hacking is illegal.  
Use this lab only on systems you own or have permission to test.

---

## ⭐ Credits
Developed by **Coding Chat Room (Saqlain / Dark Wolf)**  
For Ethical Hacking Training & Cybersecurity Education.

---

## 📚 More Learning & Connect with Me

If you found this helpful and want to learn more about **hacking, cybersecurity, and coding**, follow me here and **Star this Resporatory**:

- 🎥 **YouTube**: [Coding Chat Room](https://www.youtube.com/@CodingChatRoom)  
- 📸 **Instagram**: [@codingchatroom](https://www.instagram.com/codingchatroom/?igsh=czBrcjAyYmxma2du)
- 💻 **GitHub**: [Coding Chat Room](https://github.com/CodingChatRoom)

---
