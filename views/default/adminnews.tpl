видно
{foreach $news as $item name=news}
<a href="/admin/editnews/{$item["id"]}">{$item["title"]}</a>

{/foreach}


не видно
{foreach $hiddennews as $item name=hiddennews}
<a href="/admin/editnews/{$item["id"]}">{$item["title"]}</a>

{/foreach}