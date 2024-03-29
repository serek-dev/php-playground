start: _down _build _start copy_vendor _finish
stop: _down

_build:
	docker-compose pull
	docker-compose build

_start:
	docker-compose up -d --force-recreate

_down:
	docker-compose down --remove-orphans -v
	docker network prune -f

_finish:
	@echo ""
	@echo "Success!"
	@echo "Demo app is running: http://localhost:8888/"
	@echo ""

copy_vendor:
	docker cp $$(docker-compose ps -q app):/app/vendor .
