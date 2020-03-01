```
mysql -u root -p
```
※terminalで入力

rootというユーザーでmysqlにログインする

-p　・・・パスワードを次の行で聞いてね

databaseはmysqlに入って作る。
tableはマイグレーション機能を使って作る。

```
php artisan migrate
```
※terminalで入力

migrationファイルを処理（実行
）する
