<style>

    .team-photo{
        background-image: url(http://www.arsenal-kyiv.com/uploads/media/team/0001/04/thumb_3643_team_big.jpeg);
    }

    .content-team-item-main-1-title a{
        color: white;
    }



    .content-team-item-main-1-spacer{

        margin-bottom: calc(185px - 7vw);
    }

    .team-photo-logo{
        color: white;
        font-size: 15vw;
    }

</style>


<div class="team-page">



    <!--
<div class="add-menu">

<ul>
<li class="title">КОМАНДА</li>
<li class="spacer"></li>
<li class="sort"><a href="/team/1">АРСЕНАЛ-КИЇВ</a></li>
<li class="sort"><a href="/team/2">U-19</a></li>


</ul>

</div>
-->

    <div class="team-page-content">

        <div class="team-photo">



            <div class="team-photo-logo">

                <div class="content-team-item-main-1-title">КОМАНДИ

                    <a href="/team/1">АРСЕНАЛ-КИЇВ</a>
                    <a href="/team/2">U-19</a>

                </div>
                <div class="content-team-item-main-1-spacer"></div>

                {foreach $tm as $item name=tm}
                {$item['name']}
                {/foreach}

            </div>

        </div>

        <span><ul class="team-menu">


            СКЛАД КОМАНДИ


            </ul>
        </span>

        <div id="team-line-id" class="team-line">

            <div class="cat-item">
                <i class="fa fa-users" aria-hidden="true"></i>
                {foreach $tm as $item name=tm}
                {$item['name']}
                {/foreach}

            </div>


            {foreach $stf as $item name=stf}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>



                <div class="player-item-name">{$item['surname']}  {$item['name']}</div>

                <div class="position">
                    {$item['position']}
                </div>

            </a>

            {/foreach}


        </div>


        <div class="team-line">

            <div class="cat-item">
                <i class="fa fa-child" aria-hidden="true"></i>
                ВОРОТАРІ

            </div>
            {foreach $gk as $item name=gk}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>







        <div class="team-line">

            <div class="cat-item">
                <i class="fa fa-shield" aria-hidden="true"></i>
                ЗАХИСНИКИ

            </div>
            {foreach $def as $item name=def}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>








        <div class="team-line">

            <div class="cat-item">
                <i class="fa fa-user" aria-hidden="true"></i>
                ПІВЗАХИСНИКИ

            </div>
            {foreach $semdef as $item name=semdef}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                   <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>







        <div class="team-line">

            <div class="cat-item">
                <i class="fa fa-futbol-o" aria-hidden="true"></i>
                НАПАДНИКИ

            </div>
            {foreach $atack as $item name=atack}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>





    </div>
</div>


