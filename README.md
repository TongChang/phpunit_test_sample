# TongChang phpunit test sample

## 使い方

```{bash}
$ docker compose build
$ docker compose run --rm php compser test
```

## どう作ったか？

1. target/sub/test の php code をつくり。
2. dockerfile をつくり。
3. docker-compse file をつくり。
4. `docker compose build` して。
5. `docker compose run --rm php vendor/bin/phpunit --init` して。
6. `docer copose run --rm php composer test` して。
7. xdebug をインストールして。
8. php.ini を用意して。
9. おわり。

## さんこう

- テストの実装
  - [PHPUnitでスタブとモックを理解する！【テストダブル】](https://zenn.dev/shun57/articles/1fd956346c4381)
- 環境構築
  - [PHPUnit実行環境をDockerでサクッと構築！](https://zenn.dev/shun57/articles/4b2cbf33255de4)
- coverage の取得方法
  - [DockerのPHPイメージにxdebugをインストール | masaki-blog](https://masaki-blog.net/docker-xdebug)

## さいごに

楽しんで。
