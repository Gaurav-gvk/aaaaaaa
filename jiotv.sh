sudo apt update
sudo apt -y install apache2 php libapache2-mod-php unzip wget git
sudo apt -y install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
git clone https://github.com/soal001/jiotv
sudo chmod -R 777 /var/www/html
sudo rm /var/www/html/*
sudo cp -r jiotv/. /var/www/html/
sudo rm -rf jiotv/
sudo systemctl restart apache2.service
150.230.232.2 > ipaddr.txt
clear
tr --delete '\n' < ipaddr.txt
