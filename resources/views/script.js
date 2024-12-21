$('body').on('click', '#btn-edit-achievement', function() {
    let achievement_id = $(this).data('id');
    $.ajax({
        url: '/student-award-edit/${achievement_id}',
        type: "GET",
        cache: false,
        success: function(response){
            // fill data to form
            $('$achievement_id').val(response.data.id);
            $('$award_name').val(response.data.id);
            $('$categories').val(response.data.id);
            $('$finis_time').val(response.data.id);
            $('$description').val(response.data.id);

            // open modal
            $('#modal-edit-pencapaian').modal('show');
        }
    })
})
$('#update').click(function(e) {
    e.preventDefault();

    let achievement_id = $('#achievement_id').val();
    let award_name = $('#award_name').val();
    let categories = $('#categories').val();
    let finis_time = $('#finis_time').val();
    let description = $('#description').val();
    let token   = $("meta[name='csrf-token']").attr("content");

    $.ajax({
        url:'/posts/${post_id}',
        type : "PUT",
        cache: false,
        data : {
            "award_name" : award_name,
            "categories" : categories,
            "finis_time" : finis_time,
            "description" : description,
            "_token" : token
        },
        success:function(response){

        }
    })
})
