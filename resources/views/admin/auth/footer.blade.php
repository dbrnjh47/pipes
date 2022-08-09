<footer class="footer">
    <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Copyright ©{{date("Y")}}. </font>
            </font><a href="/" target="_blank">
            </a>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Все права защищены.</font>
            </font>
        </span>
    </div>
</footer>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>