<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <style>
        .ui-autocomplete {
            position: absolute;
            cursor: default;
            z-index: 1001 !important
        }
    </style>
    <title>Document</title>
</head>

<body>

    <input type="text" id="nickname" autocomplete="off" />

    <script type="text/javascript">
        $(function() {


        });

        var local_source = [{
                authername: "ابوهرير"
            },
            {
                authername: "hello"
            },
            {
                authername: "google"
            }
        ];

        // Single Select
        $("#nickname").autocomplete({
            source: function(request, response) {
                // Fetch data
                $.ajax({
                    url: "<?= base_url() ?>home/get_auther",
                    type: 'post',
                    dataType: "json",
                    data: {
                        query: request.term
                    },
                    success: function(data) {
                        console.log(data);
                        response(data);
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                // Set selection
                $('#auther_name').val(ui.item.authername); // display the selected text
                return false;
            },
            focus: function(event, ui) {
                $('#auther_name').val(ui.item.authername); // display the selected text
                return false;
            },
            autoFocus: false
        });
    </script>

</body>

</html>