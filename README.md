# Хостинг изображений

## Дата написания: *~июль 2020*.

Попытка сделать архитектурно-правильный проект.

О структуре проекта ниже.

## Используемые технологии:

- **HTML/CSS**
- **PHP**
- **MySQL**
- **JavaScript**

## Использование сторонних библиотек:

- **Dropzone**, используется для перетаскивание изображений для загрузки - [ссылка на исходник](https://github.com/enyo/dropzone).

## На данный момент готово:

- Загрузка изображений:
    - Загрузка нескольких изображений разом.
- Вывод изображений:
    - Присуствует уникальный 6-символьный индефикатор.
    - Вывод всех изображений.
    - Отдельная страница изображения.

## Структура проекта

- Загружаемые файлы находятся в **/upload**.   

- Файлы приложений находятся в **/application**:
    
    - Файлы конфигураций находятся в **/config**:
        - **/database.php** - файл конфиграции бд.
        - **/routes.php** - пути роутинга.

    - Файлы движка находятся в **/core**:
        - **/Connection.php** - класс для работы с базой данных. (настройки находятся в *config.php*)
        - **/File.php** - класс для работы с файлами от сервера и файловой системой.
        - **/Route.php** - роутер, отвечает за открытие нужных шаблонов. (берётся из *routes.php*)
    
    - Файлы прочей логики нахоодятся в **/controller.php**:
        - **/imageLoad.php** - загрузка изображений на сервер и занесение в базу данных.

    - Шаблоны располагаются в **/views**.
        - Для подключения шаблона в *routes.php*, он должен находится в корне папки.


## Скриншоты

![Изображение проекта](https://i.ibb.co/t41Mfz3/1.png)
![Изображение проекта](https://i.ibb.co/2Yr9m5G/2.png)
![Изображение проекта](https://i.ibb.co/M66PNTr/3.png)
