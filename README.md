# Symfony Docker Template

Шаблон Symfony приложения с использованием Docker

## Локальная разработка

&#x2705; Выполнить клонирование проекта\
&#x2705; Создать `.env` файл на основе [.env.example](./.env.example)\
&#x2705; Создать `phpstan.neon` файл (если требуется личная настройка)

Затем выполнить сборку контейнеров

```bash
docker-compose -f docker-compose.yml up -d --build
```

## Общий workflow

&#x2705; Пишем код\
&#x2705; Пишем тесты\
&#x2705; Проходим линтер\
&#x2705; Обновляем [openapi документацию](./openapi.json) (при необходимости)

## Команды

### Build

```bash
docker-compose -f docker-compose.yml up -d --build
```

### Start

```bash
docker-compose -f docker-compose.yml up -d
```

### Run tests

```bash
composer test
```

### Run lint

```bash
composer lint
```
