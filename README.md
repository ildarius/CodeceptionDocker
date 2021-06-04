## Обзор

Построено на примере https://codeception.com/docs/12-ParallelExecution

docker-compose.yml файл запускает следующие контейнеры

* Контейнер с библиотекой Codeception (codecept)
* Контейнер с PHP (web)
* Контейнер с selenium сервером, браузером (chrome)

Файлы с тестами в папке `test`

## Запуск

Создает контейнеры и запускает все тесты в папке acceptance

* $ docker-compose up
* $ docker-compose run --rm codecept run acceptance