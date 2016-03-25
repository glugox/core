# core

Magento 2 development home.

#install

In your project's composer.json file under 'require' add:
<br />
<code>
"glugox/core": "*"
</code>

Under 'repositories' add this repo so the composer can get these files:
<br />
<code>{
    "type": "vcs",
    "url": "https://github.com/glugox/core"
}
</code>

At the time of writing this, you will probably have to change the minimum stabillity to dev:
<br />
<code>
"minimum-stability": "dev"
</code>

At the end simply run:
<br />
<code>
composer update
</code>
