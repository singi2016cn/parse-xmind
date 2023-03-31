# parse xmind

解析xmind或类似文件，例如wps思维导图

> parse xmind or similar file,e.g. wps.pos

# 当前功能

- 解析 wps.pos 文件为树形对象结构，方便转换为其他格式

> wps.pos 本身内容是json格式，如果是需要json格式的，直接获取文件内容即可

# 开发

```
git clone
composer install
```

# 使用

```php
use Singi2016cn\ParseXmind\Wps\ProcessOnSchema;

$filePath = 'path_to_pos_file/xxx.pos';
$processOnSchema = new ProcessOnSchema($filePath);

// 使用$processOnSchema进行后续转换，$processOnSchema是树形对象结构
```

# 计划支持

- xmind 8
- xmind 2020

