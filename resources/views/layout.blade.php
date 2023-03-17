<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('head')
</head>

<body class="overflow-x-hidden bg-partial scroll-smooth">
    @yield('content')

    <script src="https://kit.fontawesome.com/f7e5c3263d.js" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/jquery/jquery.min.js') }}" async></script>
    <script src="{{ asset('js/jquery/jquery-ui/jquery-ui.min.js') }}" async></script>
    <script src="{{ asset('js/jquery/jquery-form.min.js') }}" async></script>

    <script>
        window.onload = function() {
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
                        question: $(formIdContact).find("textarea[name=question]").val(),
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
        }
    </script>

    @yield('scripts')
</body>

</html>
