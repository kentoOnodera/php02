up: 
	docker-compose up -d
down: 
	docker-compose down
ps:
	docker-compose ps
app-laravel:
	docker-compose exec app bash
web-laravel:
	docker-compose exec web bash
db-laravel:
	docker-compose exec mysql bash
c:
	clear
migrate: 
	docker-compose exec app php app/artisan migrate 
	
 