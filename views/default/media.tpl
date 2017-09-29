<style>

</style>


<div class="album-page">
    <div class="content-album-item-main-1-title">фото галерея</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    
    {foreach $albums as $item name=albums}
    <a href="/album/{$item['id']}" class="album-item">
        
        <img src="/images/albums/{$item['mainphoto']}" alt="">
        <div class="album-item-info">
            
            {$item['title']}
            
        </div>
        

        
    </a>
    {/foreach}

    <div class="content-album-item-main-1-title-2">Відео галерея</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    {foreach $videos as $item name=videos}
    <a href="/video/{$item['id']}" class="album-item">
        
        <img src="/images/videos/{$item['image']}" alt="">
        <div class="album-item-info-video">
            <i class="fa fa-youtube-play" aria-hidden="true"></i><br>
            {$item['title']}
            
        </div>
        

        
    </a>
    {/foreach}
    








</div>
</div>