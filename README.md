# アプリケーション名：Rese（リーズ）
サービス概要：ある企業のグループ会社の飲食店予約サービス
<img width="1325" alt="スクリーンショット 2024-10-06 21 18 43" src="https://github.com/user-attachments/assets/2827c990-42f5-4461-93cd-e5fc1e1bc699">

## 作成した目的
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持ちたい。

## アプリケーションURL
申し訳ありません。作成しておりません。

## 他のリポジトリ
申し訳ありません。バックエンド・フロントエンドのリポジトリを作成しておりません。
main部分に作成してしまいました。

## 機能一覧
会員登録  
ログイン  
ログアウト  
飲食店一覧取得  
飲食店お気に入り追加  
飲食店お気に入り削除  
エリアで検索する  
ジャンルで検索する  
店名で検索する  

## 使用技術(実行環境)
Docker version 27.2.0  
laravel/framework  8.75以上  
php:7.4.9  
nginx:1.21.1  
mysql:8.0.26  


## テーブル設計
<img width="1357" alt="スクリーンショット 2024-10-06 21 46 03" src="https://github.com/user-attachments/assets/06c1dde3-5e62-44b9-a6d4-9d0a17a0e76e">

## ER図
<img width="662" alt="スクリーンショット 2024-10-06 22 05 33" src="https://github.com/user-attachments/assets/d49813dd-50a1-4e68-bfb3-84288d1348d6">

# 環境構築
・githubからlaravelプロジェクトをclone  
$ cd coachtech/laravel  
$ git clone [git@github.com:coachtech-material/laravel-docker-template.git](https://github.com/M0R1h163/advance-project.git)  
$ mv laravel-docker-template advance-project  

・変更先のリポジトリの作成が終わったら、ローカルリポジトリから紐付け先を変更  
$ cd advance-project  
$ git remote set-url origin 作成したリポジトリのurl  
$ git remote -v  

$ git add .  
$ git commit -m "リモートリポジトリの変更"  
$ git push origin main  

・Laravel のパッケージのインストール  
$ docker-compose exec php bash  
$ composer install  

## 他に記載する事項
・seederについて  
今回、UsersTableSeeder、ShopsTableSeeder、GenresTableSeeder、AreasTableSeederの４つのシーダーファイルを作成した。  
下記の手順でマイグレーションとシーディングを行ってください。  

$ php artisan migrate  
$ php artisan db:seed

・アカウントについて  
[UsersTableSeeder]  
test@test.jp/Taro@test.jp/user@user.co.jpの３つのアカウントを作成  
パスワードはメールアドレスの＠より前の部分の４文字になります。  

・お店・ジャンル・エリア  
ダミーデータは以下のような内容で作成しています。  
[ShopsTableSeeder] 20店舗  
[GenresTableSeeder] ５ジャンル  
[AreasTableSeeder] ３エリア  


