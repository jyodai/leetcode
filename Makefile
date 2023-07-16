all : help

help : 
	# up                コンテナの起動
	# stop              コンテナの停止
	# restart           コンテナの再起動
	# sh                Docker ContainerにShellで接続

up :
	docker-compose up -d

stop :
	docker-compose stop

reset : stop up

sh :
	docker-compose exec php /bin/bash

