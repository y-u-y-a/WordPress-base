## sassをcssにコンパイルするする方法
- dockerのwordpressコンテナ内にすでにsassをインストールしてあるので、作業中はsassファイルを以下のコマンドで監視して自動コンパイルさせること
- １つ目のコマンドは、wordpressコンテナに入るコマンド
```
$ docker exec -it wp_server bash

$ sass --watch [sassファイルパス]:[cssファイルパス]
$ sass --watch wp-content/themes/simplicity-lite-child/sass/app.scss:wp-content/themes/simplicity-lite-child/style.css --cache-location wp-content/themes/simplicity-lite-child/sass/.sass-cache
```
