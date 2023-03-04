FROM python:3.10

RUN chmod 1733 /tmp

RUN pip install --no-cache-dir flask gunicorn

RUN apt update && apt install -y --no-install-recommends nginx

CMD ["bash", "/start.sh"]
