<<<<<<< HEAD
# Atte
利用者の勤怠状況を記録するアプリ

## 作成した目的
利用者に正当な賃金を支払い、また長時間の労働を防止するため。

## ER図

## URL
http://localhost/
ログインをしていない場合、http://localhost/loginにアクセスする。

## URL
・ログイン機能
・アカウント作成機能
・勤務開始、終了の記録
・休憩開始、終了の記録

## 使用技術(実行環境)
・Laravel 8.83.8
・PHP 7.4.9 (cli) (built: Sep  1 2020 02:33:08) ( NTS )
    Copyright (c) The PHP Group
    Zend Engine v3.4.0, Copyright (c) Zend Technologies

## 環境構築
1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. mv laravel-docker-template atte
3. git remote set-url origin git@github.com:hoshino000/atte.git
4. mv laravel-docker-template atte
5. git remote set-url origin git@github.com:hoshino000/atte.git
6. docker-compose up -d --build