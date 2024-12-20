# ベースイメージ
FROM php:8.1-cli

# 作業ディレクトリの設定
WORKDIR /usr/src/app

# ソースコードをコピー
COPY . .

# サーバーの起動コマンド
CMD [ "php", "-S", "0.0.0.0:10000" ]
