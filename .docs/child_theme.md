## 子テーマの作成手順(functions.phpとstyle.cssの中身は全て削除して上書き。)
参考：`https://requlog.com/self-branding/wordpress/child-theme/\`
functions.php
```php:
<?php
    # 子テーマの読み込み
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }
```
style.css
```css:
/*
Theme Name: [テーマ名] + Child
Template: [親テーマのディレクトリ名]
Version: [バージョン]
*/
```
