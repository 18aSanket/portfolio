

<br>
<br>
<br>
</div>
</div>
</div>

<footer  class="fixed-bottom ">Design & Developed By <span>Sanket S. Agre.</span></footer>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" ></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>

<script type="text/javascript">
    // data table

$(document).ready( function () {
$('.table').DataTable();
} );


// data table

// sidebar
$(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });


// sidebar
</script>




