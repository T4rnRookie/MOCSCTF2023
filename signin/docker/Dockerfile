FROM node:17-alpine

COPY app /app
COPY ./flag/readflag.c /readflag.c
COPY ./flag/flag /flag
RUN apk add gcc g++ make cmake gfortran libffi-dev openssl-dev libtool
RUN chmod 0400 /flag && chown root:root /flag
RUN chmod 0444 /readflag.c && gcc /readflag.c -o /readflag
RUN chown root:root /readflag && chmod 4555 /readflag
WORKDIR /app
RUN yarn
USER node
ENTRYPOINT ["yarn", "start"]