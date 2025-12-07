#!/bin/bash

echo "=== 🚀 시스템 업데이트 시작 ==="
sudo dnf update -y

echo "=== 📦 기본 유틸 설치 (tar, gzip, unzip, xz 등) ==="
sudo dnf install -y tar gzip unzip xz curl wget vim nano net-tools git bash-completion

echo "=== 🛠️ Docker 저장소 추가 ==="
sudo dnf config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo

echo "=== 🐳 Docker 설치 ==="
sudo dnf install -y docker-ce docker-ce-cli containerd.io

echo "=== 🔧 Docker 서비스 활성화 및 시작 ==="
sudo systemctl enable docker --now

echo "=== 👤 현재 사용자에게 Docker 권한 부여 ==="
sudo usermod -aG docker mimsso

echo "=== 🔍 Docker 버전 확인 ==="
docker --version

echo "=== 🧩 Docker Compose 설치 ==="
sudo dnf install -y docker-compose-plugin

echo "=== 🔍 Docker Compose 버전 확인 ==="
docker compose version

echo "=== 🎉 개발환경 설치 완료! ==="
echo "⚠️ 로그아웃 후 다시 SSH 로그인해야 docker 그룹 권한이 적용됩니다."
