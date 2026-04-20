# Social Engineering Lab - Phishing Simulation

> ⚠️ **Disclaimer:** This project is strictly for educational purposes as part of a controlled lab exercise (CCSB4113 - Penetration Testing). All simulations were conducted in an isolated lab environment. Do not use these techniques outside of a controlled environment. Unauthorized use is illegal and unethical.

---

## 📌 Project Overview

This project simulates a **credential harvesting phishing attack** as part of a White Box Penetration Test focusing on Social Engineering techniques. The simulation demonstrates how attackers can trick victims into submitting their credentials through a convincing fake login page that mimics the UNITEN Info portal.

---

## 🛠️ Tools & Technologies

| Tool | Purpose |
|---|---|
| Kali Linux 2025.4 | Attacker machine |
| Apache2 | Web server to host phishing page |
| PHP | Backend credential capture |
| HTML/CSS | Fake login page frontend |
| VMware | Lab virtualization |
| Git | Version control |

---

## 🔗 Attack Chain

---

## 📁 Project Structure

---

## ⚙️ How It Works

### 1. Host File Manipulation (DNS Spoofing)
The victim machine hosts file is modified to redirect the legitimate UNITEN domain to the attacker IP address:

This causes the victim browser to load the attacker server instead of the real UNITEN portal without any indication of tampering.

### 2. Phishing Page
A convincing replica of the UNITEN Info portal login popup is hosted on the attacker Apache web server running on port 80. The page displays:
- Identical sign in popup design
- Spoofed URL showing `http://info.uniten.edu.my`
- Username and password input fields
- Sign In and Cancel buttons

### 3. Credential Harvesting
When the victim submits their credentials, `save.php` captures and logs the following data into `dataset.csv`:
- Timestamp
- IP Address
- Username
- Password

### 4. Redirection
After credentials are captured, the victim is silently redirected to a cloned UNITEN Info dashboard page to avoid raising suspicion.

---

## 🔒 Vulnerabilities Demonstrated

| Vulnerability | Description | Severity |
|---|---|---|
| Phishing | Fake login page mimicking legitimate UNITEN portal | High |
| Host File Manipulation | DNS spoofing via hosts file modification | High |
| Credential Harvesting | Capturing plaintext credentials via GET request | Critical |
| Cleartext Transmission | Credentials sent over HTTP with no encryption | High |
| No MFA | Portal relies on single factor authentication only | High |

---

## 🛡️ Recommendations

- Enable **Multi-Factor Authentication (MFA)** on all student portals
- Enforce **HTTPS** with valid SSL certificates across all university domains
- Conduct regular **phishing awareness training** for students and staff
- Monitor and restrict **hosts file modifications** on university endpoints
- Deploy **Intrusion Detection Systems (IDS)** to detect suspicious traffic
- Implement **email filtering** to block phishing email campaigns
- Use **DNS Security Extensions (DNSSEC)** to prevent DNS spoofing

---

## 🧪 Lab Environment

| Machine | OS | Role | IP |
|---|---|---|---|
| Attacker | Kali Linux 2025.4 | Phishing Server | 192.168.10.130 |
| Victim | Windows 7 | Target | 192.168.10.132 |

---

## 📋 Methodology

This penetration test follows the **PTES (Penetration Testing Execution Standard)** methodology:

1. **Pre-engagement** — Define scope and objectives of the simulation
2. **Reconnaissance** — Gather information about the target portal
3. **Threat Modelling** — Identify social engineering attack vectors
4. **Exploitation** — Execute phishing simulation against victim machine
5. **Post Exploitation** — Capture and log credentials silently
6. **Reporting** — Document findings and recommendations

---

## 👤 Author

| Field | Details |
|---|---|
| Name | Wan Muhammad Uqbah Bin Wan Azhar |
| Course | CCSB4113 - Penetration Testing |
| Institution | Universiti Tenaga Nasional (UNITEN) |
| Semester | Semester 2, 2025/2026 |

---

## 📄 License

This project is for academic use only. All simulations were performed in a controlled isolated lab environment with no real users affected. Unauthorized use of these techniques outside of a controlled environment is illegal and unethical. All rights reserved.
