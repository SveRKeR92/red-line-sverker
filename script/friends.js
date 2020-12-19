$('button').click(function (e) {
    e.preventDefault();
});

getFriends();

function deletefriend(id) {

    let data = {"friend_user_id": id};

    $.ajax({
        url: "../Functions.php?function=deleteInFriendList",
        method: "POST",
        data: data,
        success:function(response){
            getFriends();
        }
    });
}

function getFriends(){
    $.ajax({
        url: "../Functions.php?function=friendsList",
        method: "GET",
        dataType: "json",
        success:function(response){
            // location.href= "../Public/profil.php";
            // console.log(response);
            $("#friendsList").empty();
            let friends = response
            $("#friendsList").append('<h2>Mes amis</h2>');
            $("#friendsList").append('<hr>');
            friends.forEach((item, index) => {
                $("#friendsList").append("<li>"+ (index + 1) + " - " + item["pseudo"] + " </li><button onclick='deletefriend(" + item["user_id"] + ")'>Supprimer</button><br>");
            });
            $('#friendsList').append('<a href="add.php">Ajouter des amis</a>');
        }
    });
}