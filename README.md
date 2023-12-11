# Restaurant-Chain-Mockup-Extension

## 🌱概要
入力フォーム付きのレストランチェーン企業のモックアップページ

## 🏠URL
https://restaurant-chain-mockup-extension.aki158-website.blog

## ✨デモ
![output](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/c6105916-f41b-41d1-9a85-180cba468d80)

## 📝説明
このモックアップページは、レストランチェーン企業の一覧が見れるサイトです。

モックアップは、実際のソフトウェア製品の開発前にWebエンジニアやWebデザイナーなどのコンテンツクリエイターが使用し、サイトのレイアウト、フォント、コンテンツの配置などを確認します。

デザインのプロトタイピングやコンセプト確認のための重要なツールであり、デザインの品質向上や効率的なプロジェクト遂行に貢献します。

このモックアップページでは、レストランチェーン企業の一覧が見れるサイトをコンテンツクリエイターが開発することを想定して作成しました。

基本的な機能として、入力フォームによるオプションの選択/モックアップデータの生成/モックアップページの表示ができます。

入力フォームでは、下記項目をカスタマイズして設定することができます。

機能の詳細は、[機能一覧](#機能一覧)を確認してください。

- Number of Employees:
- salary:
- Number of RestaurantLocations:
- Minimum postal code:
- Maximum postal code:
- Download Format:

また、このサービスは、下記プロジェクトで作成したモックアップページの拡張版になります。

[Restaurant-Chain-Mockup](https://github.com/Aki158/Restaurant-Chain-Mockup)

### 補足
[説明](#説明)で登場する用語について補足します。

用語の意味がわからない時は、下記表を確認してください。

| 用語 | 意味 |
| ------- | ------- |
| モックアップ | Webサイトやアプリケーションのデザインの外観を表現するための試作品のことです。|
| プロトタイピング | 製品開発の過程で、初期のアイデアやコンセプトを具体的な形（プロトタイプ）に変換するプロセスです。 |

## 🚀使用方法
1. [URL](#URL)にアクセスする
2. 入力フォームからオプションをカスタマイズして設定する
3. Generate ボタンをクリックする
4. モックアップページを確認する

## 🙋使用例
一通りの手順のイメージは[デモ](#デモ)を参考にしてください。
1. [URL](#URL)にアクセスする
2. 入力フォームからオプションをカスタマイズして下記のように設定する
    - Number of Employees: `4`
    - salary: `$2,000 〜 $2,999`
    - Number of RestaurantLocations: `3`
    - Minimum postal code: `123-4567`
    - Maximum postal code: `234-5678`
    - Download Format: `HTML`
3. Generate ボタンをクリックする。<br>Download Format: でHTML以外を選択すると、モックアップデータは、ダウンロードされます。
4. モックアップページを確認する。<br>オプションで設定した入力情報をもとに、モックアップページが表示されます。

## 💾使用技術
<table>
<tr>
  <th>カテゴリ</th>
  <th>技術スタック</th>
</tr>
<tr>
  <td rowspan=3>フロントエンド</td>
  <td>HTML</td>
</tr>
<tr>
  <td>CSS</td>
</tr>
<tr>
  <td>フレームワーク : Bootstrap</td>
</tr>
<tr>
  <td>バックエンド</td>
  <td>PHP</td>
</tr>
<tr>
  <td rowspan=4>インフラ</td>
  <td>Amazon EC2</td>
</tr>
<tr>
  <td>Nginx</td>
</tr>
<tr>
  <td>Ubuntu</td>
</tr>
<tr>
  <td>VirtualBox</td>
</tr>
<tr>
  <td rowspan=3>その他</td>
  <td>Git</td>
</tr>
<tr>
  <td>Github</td>
</tr>
<tr>
  <td>SSL/TLS証明書取得、更新、暗号化 : Certbot</td>
</tr>
</table>


## 👀機能一覧
### 入力フォームページ
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/70c497ac-fd98-47a3-9990-d82c69417eaa)

| 機能 | 内容 |
| ------- | ------- |
| Number of Employees: | レストランチェーンが持つ従業員の数を入力できます。 |
| salary: | 従業員の給与範囲を下記のいづれかから選択できます。<br>・$1,000 〜 $1,999<br>・$2,000 〜 $2,999<br>・$3,000 〜 $3,999<br>・$4,000 〜 $4,999 |
| Number of RestaurantLocations: | 場所の数を入力できます。 |
| Minimum postal code: | 場所の郵便番号の範囲を設定できます。<br>郵便番号の下限値を入力できます。 |
| Maximum postal code: | 場所の郵便番号の範囲を設定できます。<br>郵便番号の上限値を入力できます。 |
| Download Format: | 生成したいファイル形式を下記のいづれかから選択できます。<br>・HTML<br>・Markdown<br>・JSON<br>・Text |
| Generate | ボタンをクリックすると、ファイルを生成できます。<br>Download Format:で選択した内容によって生成されるファイルが変わります。<br>・HTML:モックアップページに遷移します。<br>・HTML以外:生成したファイルをユーザーのPCにダウンロードします。<br>　ファイルのイメージは下記ファイル形式をクリックすると、確認できます。<br>　・[Markdown](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/blob/main/output/users.md)<br>　・[JSON](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/blob/main/output/users.json)<br>　・[Text](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/blob/main/output/users.txt) |

### モックアップページ
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/8d9cfd99-49ba-47bb-a868-874801f79e9f)

| 機能 | 内容 |
| ------- | ------- |
| モックアップページの表示 | [入力フォームページ](#入力フォームページ)のDownload Format:でHTMLを選択してGenerate ボタンをクリックすると、モックアップページに遷移して表示されます。 |
| アコーディオン | Restaurant Chain Information内のレストラン名をクリックするとアコーディオンの開閉ができます。 |


## 📜作成の経緯
⭐️後で記載する!!!

作成した理由を記載する。

## ⭐️こだわった点
⭐️後で記載する!!!

テキストや参考にした記事などを再度読み返して技術の理解を深めてから書く。

ここがエンジニアに一番読んでもらいたい箇所なのでできるだけ詳細に書く。

----
【使えるかもしれない素材】

オブジェクト指向の動的ウェブアプリケーションの開発方法を理解するためのプロジェクトです。

このプロジェクトでは、入力フォームから送信された POST リクエストを処理する必要があります。

クライアント側からリクエストを受け取った後は、データの検証を行い適切なデータを受け取ったかを最初に確認します。

データが適切だった場合は、そのデータをInputとしてレストランチェーン企業に関係する情報を出力します。

これは、入力フォームで選択する　Download Format:　により生成されるファイルの種類が異なります。

4つのファイルのタイプがあり、それぞれのファイルをうまく出力させるためにファイルへの理解も必要になります。

入力フォームや生成されたファイルはoutputでサンプルを確認できます。

このプロジェクトでは、下記のレストランチェーン企業のモックアップページをユーザーがフォームを入力できるように拡張しました。

拡張する際に、既存のプロジェクトに対してどこを変更し拡張させるかを考えて作成しました。

https://github.com/Aki158/Restaurant-Chain-Mockup

### アコーディオンをクリック後
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/d18c7f19-12ca-43c0-8f84-4352891656ef)

### 入力フォームのDownload Format:Markdownを選択しgenerateをクリック後
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/b4ab643a-95e8-4e1f-b632-8cf5482d6db0)

### 入力フォームのDownload Format:JSONを選択しgenerateをクリック後
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/c113b715-5d89-4b25-8059-44cf0d4ea0f7)

### 入力フォームのDownload Format:Textを選択しgenerateをクリック後
![image](https://github.com/Aki158/Restaurant-Chain-Mockup-Extension/assets/119317071/c5238312-d91b-43cd-9f2e-c5a58ac1db4a)

----

## 📮今後の実装したいもの
- [ ] モックアップページをもとにした、実際のWebサイト

## 📑参考文献
### 公式ドキュメント
- [Bootstrap](https://getbootstrap.jp/)
- [PHPマニュアル](https://www.php.net/manual/ja/index.php#index)
