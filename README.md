# プロジェクトごとに開発環境を作成する手順
## 目次
1. プロジェクト名を指定してリポジトリをクローン
2. .env作成・編集
3. WordPress起動

## 1. プロジェクト名を指定してリポジトリをクローン
```sh:
$ git clone https://github.com/y-u-y-a/WordPress-base.git [プロジェクト名]
$ cd [プロジェクト名]
$ rm -rf .git
```

## 2. .env
### 作成
```sh:
$ cd [プロジェクト名]
$ cp .env.example .env
```
### 編集
```sh:
MYSQL_CONTAINER_NAME=[MySQLコンテナ名]
WORDPRESS_CONTAINER_NAME=[サーバーコンテナ名]
DB_NAME=[データベース名]
```

## 3. WordPress起動(localhost:8000)
```sh:
$ docker-compose up -d
```

## 4. 開発時はgitで管理されたテーマを/themesにクローン
```sh:
$ git clone [テーマのリポジトリURL]
```

## ※テーマ解凍
```sh:
$ unzip ./themes/[ファイル名].zip -d ./themes/
```
