#!/bin/bash

PROJECT=LaravelVue3Dev

echo "=== 📁 프로젝트 기본 디렉토리 생성 ==="
mkdir -p $PROJECT/docker/apache
mkdir -p $PROJECT/docker/php
mkdir -p $PROJECT/docker/db-data
mkdir -p $PROJECT/app
mkdir -p $PROJECT/certs

COMPOSE_FILE="$PROJECT/docker-compose.yml"

if [ -f "$COMPOSE_FILE" ]; then
  echo "=== ⚠️ $COMPOSE_FILE 이 이미 존재합니다. 덮어쓰지 않고 건너뜁니다. ==="
else
  echo "=== 📝 docker-compose.yml 생성 ==="
  cat << 'EOF' > "$COMPOSE_FILE"
services:
  web:
    image: httpd:2.4
    container_name: laravelvue3dev-web
    ports:
      - "8080:80"
      - "443:443"  # HTTPS 포트 매핑
    volumes:
      - ./app/public:/usr/local/apache2/htdocs
      - ./docker/apache/conf:/usr/local/apache2/conf
      - ./certs:/usr/local/apache2/certs:ro
    depends_on:
      - php

  php:
    build:
      context: ./docker/php
      dockerfile: Dockerfile
    container_name: laravelvue3dev-php
    volumes:
      - ./app:/var/www/html
    environment:
      - PHP_FPM_CLEAR_ENV=no
    depends_on:
      - db
      - redis

  db:
    image: postgres:16
    container_name: laravelvue3dev-db
    environment:
      POSTGRES_DB: laravel
      POSTGRES_USER: laravel
      POSTGRES_PASSWORD: secret
    volumes:
      - ./docker/db-data:/var/lib/postgresql/data
    ports:
      - "5432:5432"

  redis:
    image: redis:7
    container_name: laravelvue3dev-redis
    ports:
      - "6379:6379"

networks:
  default:
    name: laravelvue3dev-network
EOF
fi

echo "=== ✅ 기본 구조 생성 완료 ==="
echo " - $PROJECT/docker/apache/conf/httpd.conf"
echo " - $PROJECT/docker/apache/conf/extra/httpd-vhosts.conf"
echo " - $PROJECT/docker/php/Dockerfile"
echo " - $PROJECT/app (Laravel 프로젝트)"
