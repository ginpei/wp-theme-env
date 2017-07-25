FROM php:7.0-fpm
RUN docker-php-ext-install mysqli

RUN apt-get update && \
	apt-get install -y ruby ruby-dev cmake && \
	apt-get clean
RUN gem install github-markup commonmarker && \
	gem clean

RUN mkdir /app
WORKDIR /app
