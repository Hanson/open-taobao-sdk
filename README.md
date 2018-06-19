# open-taobao-sdk
淘宝开放平台SDK

## 安装

```
composer require hanson/open-taobao-sdk:dev-master -vvv
```

### 使用

```php
<?php

include __DIR__.'/../vendor/autoload.php';

$taobao = new \Hanson\Taobao\Taobao(['key' => 'your-key', 'secret' => 'your-secret']);

// 使用如下
$taobao->request('method', $params);

// 例子
print_r($taobao->request('taobao.tbk.item.get', ['fields' => 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick', 'q' => '便利贴']));

```
