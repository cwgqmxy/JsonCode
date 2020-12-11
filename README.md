# 应用方式

使用方式

```php
use JsonCode\JsonCodeInfo;

require "vendor/autoload.php";

$data=[
    'name'=>"willem",
    'age'=>"30",
    'qq'=>"1157818690@qq.com",
];
echo JsonCodeInfo::apply(true,$data,'success');
```

返回

```json
{
    data: {
        name: "willem",
        age: "30",
        qq: "1157818690@qq.com"
    },
    message: "success",
    status: 1
}
```

