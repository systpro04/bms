<script>
$(document).ready(function () {
    get_user_list();

    function get_user_list() {
        var user = $('#users').DataTable({
            "serverSide": true,
            "responsive": true,
            "ajax": {
                "url": '<?php echo base_url(); ?>User/user_list',
                "type": "POST",
            },
            "columns": [
                {
                    "data": "photo",
                    "render": function(data, type, row) {
                        var image = data ? data : '<?php echo base_url();?>assets/img/faces/11.jpg';
                        return `<img src="${image}" alt="User Photo" class="rounded-circle avatar-md mr-2">`;
                    }
                },
                { "data": "name" },
                { "data": "username" },
                { "data": "user_type" },
                { "data": "created" },
                {
                    render: function (data, type, row) {
                        return `
                            <div class="text-center">
                                <a class="modal-effect btn btn-sm btn-primary text-white" data-effect="effect-scale" data-toggle="modal" data-id="${row.id}" data-name="${row.name}" data-username="${row.username}" data-user_type="${row.user_type}">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </div>
                        `;
                    }
                }
            ],
            "columnDefs": [{ "targets": "_all", "className": "text-center" }],
            "lengthMenu": [[5, 25, 50, 100, 10000], [5, 25, 50, 100, "Max"]],
            "pageLength": 5,
        });

        $('#users tbody').on('click', '.modal-effect', function(e) {
            e.preventDefault();
            var effect = $(this).attr('data-effect');
            var id = $(this).data('id');
            var name = $(this).data('name');
            var username = $(this).data('username');
            var user_type = $(this).data('user_type');
            
            $('#edit').addClass(effect);
            $('#edit').modal({
                show: true
            });

            // Populate the modal fields
            $('#name').val(name);
            $('#username').val(username);
            $('#user_type').val(user_type);
            $('#id').val(id);
        });

        $('#submitForm').on('click', function(e) {
            e.preventDefault();

            var formData = $('#createForm').serialize();

            $.ajax({
                url: '<?php echo base_url(); ?>User/create_user',
                type: 'POST',
                data: formData,
                success: function(response) {
                    var res = JSON.parse(response);
                    if (res.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'User successfully created'
                        }).then(() => {
                            user.ajax.reload();
                            $('#create').modal('hide');
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error creating user',
                        });
                    }
                },
            });
        });


        $('#edit #update').on('click', function (e) {
            e.preventDefault();

            var id = $('#id').val();
            var name = $('#name').val();
            var username = $('#username').val();
            var user_type = $('#user_type').val();
            var password = $('#password').val();

            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to update this data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                didOpen: () => {
                    $('#edit').modal('hide');
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo base_url(); ?>User/update_user',
                        type: 'POST',
                        data: {
                            id: id,
                            name: name,
                            username: username,
                            user_type: user_type,
                            password: password
                        },
                        success: function (response) {
                            var res = JSON.parse(response);
                            if (res.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Successfully Updated'
                                }).then(() => {
                                    user.ajax.reload();
                                    $('#edit').modal('hide');
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Error Updating'
                                });
                            }
                        },
                    });
                } else {
                    $('#edit').modal('show');
                }
            });
        });
    }
});


</script>