<style>

</style>


<div class="album-page">


    

    


    <div id="album-content">
        <div class="album-gallery">
            {foreach $video as $item name=video}
            <iframe src="{$item['link']}" frameborder="0"></iframe>

            {/foreach}


        </div>
        

    </div>
    