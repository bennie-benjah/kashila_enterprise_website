<script src="./assets/js/script.js"></script>

<!--
- ionicon link
-->

<script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        $("#newsletter-form").submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('subscribe') }}",
                method: "POST",
                data: {
                    email: $("input[name=email]").val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    toastr.success(response.message);
                    $("#newsletter-form")[0].reset();
                },
                error: function (xhr) {
                    toastr.error(xhr.responseJSON.message);
                }
            });
        });
    });
</script>
