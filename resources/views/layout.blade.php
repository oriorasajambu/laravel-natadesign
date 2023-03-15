<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Playfair+Display:wght@400;500;600;700&display=swap">
    <script src="https://kit.fontawesome.com/f7e5c3263d.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('head')
</head>

<body class="overflow-x-hidden bg-partial scroll-smooth">
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            const formIdContact = "#formSendContact";
            $(formIdContact).submit(function(event) {
                $("#btnSendContact").prop('disabled', true);
                $("#default-button-contact").addClass('hidden');
                $("#loading-button-contact").removeClass('hidden');
                $("#loading-button-contact").addClass('inline-flex');
                let formData = {
                    name: $(formIdContact).find("input[name=name]").val(),
                    email: $(formIdContact).find("input[name=email]").val(),
                    question: $(formIdContact).find("input[name=question]").val(),
                }

                $.ajax({
                    method: 'POST',
                    url: "{{ route('send.contact') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    success: function(data) {
                        $("#btnSendContact").removeAttr('disabled');
                        $("#loading-button-contact").removeClass('inline-flex');
                        $("#loading-button-contact").addClass('hidden');
                        $("#default-button-contact").removeClass('hidden');
                        if (data.code == 200 && data.success) {
                            //TODO Show Notif Success
                            $(formIdContact).each(function() {
                                this.reset();
                            });
                        } else {
                            //TODO Show Notif Failed
                        }
                    }
                });

                event.preventDefault();
            });
        })
    </script>

    @yield('scripts')
</body>

</html>
