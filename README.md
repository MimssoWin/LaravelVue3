# 📘 Laravel + Vue 3 학습 프로젝트  

이 프로젝트는 **Laravel + Vue 3 연동 방식을 학습하기 위한 실습용 환경**입니다.  
기존 Blade 기반 개발에서 벗어나 **Vue 컴포넌트 UI**, **API 중심 구조**,  
그리고 **Docker 기반 개발환경 구성**을 익히는 것을 목표로 합니다.

---

# 📌 1. 기술 스택 (Tech Stack)

## 🔹 Backend
- PHP 8.3  
- Laravel 12  
- PostgreSQL 16  
- Redis 7  
- Apache 2.4  

## 🔹 Frontend
- Node.js 24  
- Vue.js 3  
- Vite  

## 🔹 Environment
- Rocky Linux 9  
- Docker  
- Docker Compose  
- Git / GitHub  

---

# 📌 2. 도커 컨테이너 구조
```
[ Docker Network ]
├─ web (Apache)
│ - Port 80 / 443 공개
│ - /usr/local/apache2/htdocs → app/public 매핑
│ - PHP 요청 → php 컨테이너 전달
│
├─ php (PHP 8.3 + Laravel 12)
│ - Laravel 애플리케이션 실행
│ - web 컨테이너와 코드 공유
│ - DB 요청 → db 컨테이너
│ - 캐시 / 세션 / 큐 → redis 컨테이너
│
├─ db (PostgreSQL 16)
│ - 애플리케이션 데이터 저장
│
└─ redis (Redis 7)
- 캐싱 / 큐 / 세션 저장
```

---

# 📌 3. 저장소 폴더별 설명
```
├─ docker-compose.yml # 도커 기반 개발환경 전체 구성 파일
│
├─ docker/
│ ├─ apache/ # Apache 관련 설정 파일 위치(conf 등)
│ └─ php/ # PHP 실행 환경의 Dockerfile
│
├─ certs/ # HTTPS 테스트용 SSL 인증서(개발환경)
│
└─ app/ # Laravel + Vue.js 실제 애플리케이션 소스코드
├─ app/
├─ resources/js/
├─ public/
├─ routes/
└─ ...
```
---

# 📌 4. 실행 방법
```
docker compose up -d --build
