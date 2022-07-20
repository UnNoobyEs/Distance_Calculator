$(document).ready(function () {
    var token = '3d658956940762cd52c42dbddd07f93071b067c7';
    $(".address").suggestions({
        token: token,
        type: "ADDRESS",
        onSelect: function(suggestion) {
            console.log(suggestion);
        }
    });

});