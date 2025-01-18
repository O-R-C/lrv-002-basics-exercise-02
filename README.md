# Задание 2. Создать приложение для ведения учебных групп


1. Для чего нужны миграции? Какую роль они играют или какую проблему решают?
- Laravel Migration — это набор инструкций, определяющих изменения, которые вы хотите внести в схему базы данных. Эти изменения могут включать создание новых таблиц, изменение существующих таблиц, добавление или изменение столбцов и заполнение базы данных начальными данными.

  Инкапсулируя эти изменения в файлы миграции, Laravel обеспечивает синхронизацию схемы вашей базы данных с кодовой базой вашего приложения, что упрощает управление изменениями базы данных в различных средах разработки и на разных этапах развертывания.

  Laravel позволяет вам выполнять миграции, не беспокоясь о конкретной системе баз данных, которую вы используете, будь то MySQL , PostgreSQL , SQLite или другие, поддерживаемые Laravel. Фреймворк абстрагирует синтаксис, специфичный для базы данных, делая миграции как переносимыми, так и адаптируемыми к различным системам баз данных.

2. Для чего нужен Eloquent ORM?
- Eloquent ORM (Object-Relational Mapping) в Laravel – это мощный инструмент, который значительно упрощает работу с базами данных. Благодаря Eloquent разработчики могут использовать объектно-ориентированный подход для взаимодействия с данными, избегая написания сложных SQL-запросов 
