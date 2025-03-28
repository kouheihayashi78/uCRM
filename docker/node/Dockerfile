FROM node:22

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    && apt-get clean


CMD ["sh", "-c", "npm install && npm run dev"]

# FROM node:22

# WORKDIR /var/www/html

# RUN apt-get update && apt-get install -y \
#     git \
#     && apt-get clean

# CMD ["sh", "-c", "npm install && npm run dev"]


# FROM node:22

# WORKDIR /var/www/html

# RUN apt-get update && apt-get install -y \
#     git \
#     && apt-get clean

# # package.json と package-lock.json をコピー
# COPY package.json ./
# COPY package-lock.json ./

# # 依存関係をインストール
# RUN npm install

# # ソースコードをコピー（node_modules のキャッシュを利用するため）
# COPY . .

# CMD ["npm", "run", "dev"]
