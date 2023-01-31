<script>
        $(function () {
            $.ajax({
                url:'https://cdn.rage.mp/master/',
                type:'GET',
                success: function (response) {
                    let data = $.parseJSON(response);
                    $.each(data, function (index,value) {
                        console.log(index);
                        if (index == '74.208.139.18:22005'){
                            console.log(value.players);
                            $('#players').html(value.players);
                        }
                    });
                }
            });
        });

    </script>
