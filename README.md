Sylius plugin needs to extend a Sylius Entity.
Traits are the recommended way to do that, and it works great in sylius-standard.
But it doesn't work in Sylius/PluginSkeleton/tests/Application.

```
git clone git@github.com:robgwin/sylius-plugin-app-trait.git
cd sylius-plugin-app-trait
composer install
```

First commit is a straight copy of Sylius/PluginSkeleton:
```
git checkout 0c315b2
tests/Application/bin/console doctrine:database:create
tests/Application/bin/console doctrine:schema:create
```

Result:
```
[OK] Database schema created successfully!
```

Second commit adds App/Entity/OrderItem (just like sylius-standard) and adds a trait to it:
```
git checkout 26cee67
tests/Application/bin/console doctrine:database:drop --force
tests/Application/bin/console doctrine:database:create
tests/Application/bin/console doctrine:schema:create
```

Result:
```
The table with name 'acme_sylius_example_plugin_dev.sylius_order_item' already exists.
```
