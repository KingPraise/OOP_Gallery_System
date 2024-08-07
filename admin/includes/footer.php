</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".modal_thumbnails").click(function() {
        console.log("Image clicked!");
        $("#set_user_image").prop("disabled", false);

        $(this).addClass("selected");
        user_href = $("#user-id").prop("href");
        user_href_splitted = user_href.split("=");
        user_id = user_href_splitted[user_href_splitted.length - 1];

        image_src = $(this).prop("src");
        image_href_splitted = image_src.split("/");
        image_name = image_href_splitted[image_href_splitted.length - 1];

        photo_id = $(this).attr("data");

        console.log("Photo ID: ", photo_id);

        $.ajax({
            url: "includes/ajax_code.php",
            data: {
                photo_id: photo_id
            },
            type: "POST",
            success: function(data) {
                console.log("Server Response: ", data);
                $("#modal_sidebar").html(data);
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error: ", status, error);
                console.log("XHR: ", xhr);
            },
        });
    });

    $("#set_user_image").click(function() {
        console.log("Image Name: ", image_name);
        console.log("User ID: ", user_id);

        $.ajax({
            url: "includes/ajax_code.php",
            data: {
                image_name: image_name,
                user_id: user_id
            },
            type: "POST",
            success: function(data) {
                console.log("Server Response: ", data);
                $(".user_image_box a img").prop("src", data);
            },
            error: function(xhr, status, error) {
                console.log("AJAX Error: ", status, error);
                console.log("XHR: ", xhr);
            },
        });
    });

    $("#summernote").summernote();


    ///Edit Photo Js



    $(".info-box-header").click(function() {


        $(".inside").slideToggle("slow");

        $("#toggle").toggleClass("glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon ");



    });


    /***********Delete Functio***********/


    $(".delete_link").click(function() {

        return confirm("Are you sure you want to delete this item");

    });

});

google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Views', <?php echo  $session->count; ?>],
        ['Comments', <?php echo  Comment::count_all() ?>],
        ['Users', <?php echo User::count_all(); ?>],
        ['Photos', <?php echo  Photo::count_all() ?>],
    ]);

    var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'My Daily Activities',
        backgroundColor: 'transparent',
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
</script>

</body>

</html>