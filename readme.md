# Requirements
* PHP >=5.5.9
* Laravel >= 5.3.0

# Screenshots

![图1](https://wx1.sinaimg.cn/large/658dc60bgy1fng6cx29e0j20ky0li417.jpg)

![图2](https://wx2.sinaimg.cn/large/658dc60bgy1fng6cx8cckj20t90ju40v.jpg)

# Installation

## 1. 下载

```
git clone https://github.com/pandoraxm/laravel-markdown.git
```

## 2. composer安装

```
cd laravel_markdown

composer install
```

## 3. 修改env以及数据库配置

```
cp .env.example .env

vim .env
```

## 4. 生成key

```
php artisan key:generate

```

## 5. npm安装

```
npm install
```

# Usage
执行`artisan`命令运行

```
php artisan serve
```