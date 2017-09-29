<style>



    .team-photo{
        background-image: url(http://www.arsenal-kyiv.com/uploads/media/team/0001/04/thumb_3643_team_big.jpeg);
    }

    .content-team-item-main-1-title a{
        color: white;
    }

    .team-photo-logo{
        background: linear-gradient(to right, coral 0%, rgba(0,0,0,0.35) 100%);

    }

    .player-item{
        background: coral;
    }

    .cat-item{

        background: coral;
    }
    .content-team-item-main-1-spacer{

        margin-bottom: -320px;
    }

    .team-photo-logo{
        color: #f77a4f;
        font-size: 350px;
    }
    }

</style>


<div class="team-page">



    <div class="team-page-content">


        <a href="https://www.arsenalkids.info/" class="ars-kids">

            <img src="/images/kids.png" alt="">

        </a>

        <div class="team-photo">



            <div class="team-photo-logo">

                <div class="content-team-item-main-1-title">ШКОЛА ФУТБОЛУ
                    <a href="/school/16">U-16</a>
                    <a href="/school/15">U-15</a>
                    <a href="/school/14">U-14</a>
                    <a href="/school/13">U-13</a>
                    <a href="/school/12">U-12</a>
                    <a href="/school/11">U-11</a>
                    <a href="/school/10">U-10</a>
                    <a href="/school/9">U-9</a>
                    <a href="/school/8">U-8</a>


                </div>
                <div class="content-team-item-main-1-spacer"></div>
                <br>
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


