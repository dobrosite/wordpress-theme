# Шаблон темы оформления для WordPress.

## Требования

* Плагины
    * [WP-SCSS](https://ru.wordpress.org/plugins/wp-scss/)

## Файловая структура

За основу взята структура шаблона [Twenty Seventeen](https://github.com/WordPress/twentyseventeen).

* `assets/` — Файлы ресурсов.
    * `css/` — Папка для скомпилированных файлов CSS.
    * `fonts/` — Шрифты.
    * `images/` — Картинки.
    * `js/` — JavaScript.
    * `scss/` — Исходники SASS.
        * `compass-mixins/` — Библиотека примесей
          [Compass](https://github.com/Igosuki/compass-mixins/).

Примечания:

* Папка `scss` расположена в `assets` с тем чтобы в файлах SASS можно было давать правильные
  относительные ссылки на другие ресурсы (например, на картинки).
