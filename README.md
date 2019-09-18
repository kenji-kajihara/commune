
## Commune
2019年9月17日
====

## 概要
映画コミュニティサイトです。
最近観た映画や思い出のある映画の感想を言い合ったり、軽いレビューができ、映画好きと
繋がれるサイトです。

## 機能
Laravelの基本機能
Auth認証、CRUD機能（コミュニティやプロフィールの作成編集更新削除）、を用いて作成しています。
コミュニティ参加状態は、followsTableという中間テーブルを作成し、カラムの有無で判断を行っています。
コミュニティ作成後、自動的に作成コミュニティに参加した状態になり、
コミュニティ作成者はコミュニティの編集、削除ができ、脱退する場合はコミュニティを削除する必要があります。


## 今後の追加予定機能
Vue.jsを用いたチャット機能を追加予定です。
掲示板機能を作成します。

## 今後の改善点
Google mapにおいて検索結果が直接表示されるため、検索結果付近の映画館を自動的に表示
色合いやボタンの位置等、UI/UX面の改善
Controller内で同じ処理を行っている部分が多い為、
コードのリファクタリングをかける予定です。

## 更新
・9月17日
Google mapを追加。
参考サイト
http://tokidoki-web.com/2015/11/googlemapsapi%e3%81%a7%e3%83%9e%e3%83%83%e3%83%97%e3%81%a7%e6%96%bd%e8%a8%ad%e6%a4%9c%e7%b4%a2%e3%81%97%e3%81%a6%e3%82%84%e3%82%93%e3%82%88/