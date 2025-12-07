sudo dnf install nss-tools -y
wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.4/mkcert-v1.4.4-linux-amd64
mv mkcert-v1.4.4-linux-amd64 mkcert
chmod +x mkcert
sudo mv mkcert /usr/local/bin/
mkcert -install
cd ~/LaravelVue3Dev
mkdir certs
mkcert -key-file certs/learn-vue3.key \
       -cert-file certs/learn-vue3.crt \
       learn-vue3.mimsso.co.kr
echo "SSL 준비완료" 

