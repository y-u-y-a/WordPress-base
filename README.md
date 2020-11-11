# プロジェクトごとに環境を作成する手順
## 目次
- 1. プロジェクト名を指定してリポジトリをクローン
- 2. .env作成
- 3. .envにコンテナ名・DB名を任意で編集
- 4. WordPress起動

## 1. プロジェクト名を指定してリポジトリをクローン
```
$ git clone https://github.com/y-u-y-a/WordPress-base.git [プロジェクト名]
```

## 2. .env作成
```sh:
$ cd [プロジェクト名]
$ cp .env.example .env
```

## 4. WordPress起動(localhost:8000)
```sh:
$ docker-compose build -d
```

## テーマ解凍
```sh:
$ unzip ./wp-content/themes/[ファイル名].zip -d ./wp-content/themes/
```
