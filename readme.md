
添加配置文件member.php位于根目录下extend目录里
```php
return [
    'baseurl'   =>  'baseurl',
    'request_key'       =>  'key'
];
```

例子：调用资产查询
```php
\sffi\Factory::Assets('http://YOU.DOMAIN.PATH','PLEASE INPUT YOU KEY')->query(1,'rmb');
```

- 会员（Member）
- 资产（Assets）
- 资产类型（AssetsType）
- 证件（Idcard）
