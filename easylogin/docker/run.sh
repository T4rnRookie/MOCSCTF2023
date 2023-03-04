docker build -t easy_login:v1 .
docker run --name easy_login -d -p 8080:8080 easy_login:v1