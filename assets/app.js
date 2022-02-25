import './styles/app.scss';
import './styles/custom.css';
import 'datatables.net';
import 'datatables.net-bs4';
import './js/rotate-image.js';
import 'jquery-modal';
//import 'jquery-ui/external/jquery-1.12.1/jquery.js';

var xp = 0;
var dts = [];
var rty = 0;



$(document).on("click", "#sub_animal_button", function () {

    $.ajax({
        type: "POST",
        url: "save-sub-category.php",
        data: $("#frmsubanimals").serialize(),
        success: function (data) {
            alert(data)
            //$('#animals').DataTable().ajax.reload(null, false);
            //$(".close-modal").click();

        }
    });

    //alert("test");

});

///load trip list to datatable
$("#pages").DataTable({
    "ajax": "pagelist.json",
    "columns": [
        { "data": "order" },
        { "data": "title" },
        { "data": "description" },
        { "data": "url" },
        { "data": "createdat" },
        { "data": "updatedat" },
        { "data": "opts" }
    ]
});


///load trip list to datatable
$("#trips").DataTable({
    "ajax": "trips.json",
    "columns": [
        { "data": "trips" },
        { "data": "month" },
        { "data": "year" },
        { "data": "opts" }
    ]
});

///load category list to datatable
$("#animals").DataTable({
    "ajax": "animals.json",
    "columns": [
        { "data": "animal" }
    ]
});

///load location list to datatable
$("#location").DataTable({
    "ajax": "location.json",
    "columns": [
        { "data": "location" }
    ]
});

///load files to datatables
$("#tblFiles").DataTable({
    "ajax": "files.json",
    "columns": [
        { "data": "imageName" },
        { "data": "type" },
        { "data": "animal" },
        { "data": "location" },
        { "data": "year" },
        { "data": "description" },
        { "data": "trips" },
        { "data": "option" }
    ]
});
$("#tblpages").DataTable({
    "destroy": true,
    "responsive": true,
    "processing": false,
    "ordering": false,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false
});

//uploading photos

$(document).on('click', '#upload_files_button', function () {

    $("#upload_files_images").click();

});

// show preview of selected images
$(document).on('change', '#upload_files_images', function (e) {
    var files = e.target.files;
    var filesLength = files.length;
    for (var i = 0; i < filesLength; i++) {
        xp++;
        var f = files[i];
        var res_ext = files[i].name.split(".");
        var img_or_video = res_ext[res_ext.length - 1];
        var fileReader = new FileReader();
        fileReader.name = f.name;
        fileReader.onload = function (e) {
            //var file = e.target;
            $("#uploader").append('<div class="col-md-3 img-container"><img src="' + e.target.result + '" class="pic-view"><input type="hidden" name="rotation[]" class="rotation" value="0"><div class="btnsrotation"><button class="btn btn-success btn-sm rotate-left"  type="button">ROTATE LEFT</button> <button class="btn btn-success btn-sm rotate-right pull-right"   type="button">ROTATE RIGHT</button> </div><div class="bottombtns"> <button class="btn btn-danger btn-sm cancel_image btnxc cancel_fa' + xp + ' " deltsid="' + 0 + '"  type="button">REMOVE PHOTO</button> </div></div>');

        };  /*btn-remove-photo : previous remove btn class*/
        fileReader.readAsDataURL(f);
    }

    $("#btncancelupload").toggle();
    $("#upload_files_button").toggle();
    $("#btnUploadImages").toggle();
});

$(document).on("click", ".cancel_image", function (e) {
    $('.cancel_image').each(function () {
        var chk_id = $(this).attr('deltsid');
        if (chk_id == 0) { rty++; $(this).attr('deltsid', rty); }

    });
    var deltsid = $(this).attr('deltsid');
    dts.push(deltsid);
    $(this).parents(".img-container").remove();

});




