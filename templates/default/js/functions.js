function loadnews(){

    $.ajax({
        url : '/news/more/'+pagenumber,
        dataType : 'json',
        success : function (data) {
            document.getElementById("news-page-gallery").innerHTML += data;
            if  (pagenumber >= pagetotal){
                document.getElementById("show-more").style.display="none";
            }else{
                pagenumber = pagenumber + 1;}


        },
        error : function () {
            alert("error");
        }
    })

}





function saveCalendarChanges(){
    var id = $('#calendar-id').val();
    var date = $('#calendar-date').val();
    var place = $('#calendar-place').val();
    var team1 = $('#calendar-team1').val();
    var score1 = $('#calendar-score1').val();
    var team2 = $('#calendar-team2').val();
    var score2 = $('#calendar-score2').val();
    var day = $('#calendar-day').val();
    var month = $('#calendar-month').val();






    var postData = {id: id, date: date, place: place, team1: team1, score1: score1, team2: team2, score2: score2, day: day, month: month};

    $.ajax({
        type: 'POST',
        async: true,
        url: "/admin/savecalendarchanges",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(data['success']){
                alert ("done");
            }
        }
    });

}




function addalbumphoto() {
    if (document.getElementById("albumphoto").value != "") {
        var id = $('#albumid').val();
        var file_data = $('#albumphoto').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: '/admin/addalbumphoto/'+id,
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(php_script_response){

                alert("Фото завантажено");
                location.reload(true);
            }
        });
    }else {
        alert ("Оберіть фото для завантаження!")
    }
}


function addalbummainhoto(){
    if (document.getElementById("albummainphoto").value != "") {
        var id = $('#albummainid').val();
        var file_data = $('#albummainphoto').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: '/admin/addalbummainphoto/'+id,
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(php_script_response){

                alert("Фото завантажено");
                location.reload(true);
            }
        });
    }else {
        alert ("Оберіть фото для завантаження!")
    }
}