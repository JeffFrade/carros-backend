#!/bin/bash

echo "########################################"
echo "Copia o .env"
echo "########################################"

cp .env.example .env

echo "########################################"
echo "Inicializa os containers"
echo "########################################"

docker-compose up -d

echo "########################################"
echo "Instala as dependências"
echo "########################################"

docker exec -it cars-api-php-fpm composer install

echo "########################################"
echo "Gera a chave da aplicação"
echo "########################################"

docker exec -it cars-api-php-fpm php artisan key:generate

echo "########################################"
echo "Cria as tabelas e as popula com dados de teste"
echo "########################################"

docker exec -it cars-api-php-fpm php artisan migrate:fresh --seed

echo "########################################"
echo "Executa os casos de teste"
echo "########################################"

docker exec -it cars-api-php-fpm vendor/phpunit/phpunit/phpunit

echo "########################################"
echo "Caso não tenha alterado a porta no .env, a aplicação está servida em http://localhost:8000"
echo "########################################"
