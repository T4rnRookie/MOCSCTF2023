FROM optionfactory/ubuntu18-jdk11

COPY app /

# COPY sources.list /etc/apt/sources.list


RUN  sed -i 's/https:\/\/mirrors.aliyun.com/http:\/\/mirrors.cloud.aliyuncs.com/g' /etc/apt/sources.list
RUN  apt update
RUN  apt install -y vim adduser libfontconfig1 sudo
RUN  useradd flag
RUN   chown flag:flag /flag
RUN   chmod 400 /flag 

EXPOSE 8080

CMD ["/start.sh"]
