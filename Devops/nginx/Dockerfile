FROM nginx:1.15.0-alpine
RUN apk update && apk add bash

RUN rm /etc/nginx/conf.d/default.conf
COPY ./dktools.conf /etc/nginx/conf.d
