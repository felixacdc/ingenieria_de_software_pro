<!-- jQuery 2.0.2 -->
{!!Html::script('js/jquery.min.js')!!}
<!-- Bootstrap -->
{!!Html::script("js/bootstrap.min.js")!!}
<!-- AdminLTE App -->
{!!Html::script('js/AdminLTE/app.js')!!}
{!!Html::script("js/jquery.introLoader.pack.min.js")!!}

<script type="text/javascript">
$(document).ready(function() {
    $("#element").introLoader({
        animation: {
            name: 'cssLoader',
            options: {
                exitFx:'slideUp',
                ease: "easeInOutCirc",
                style: 'ocean',
                delayBefore: 1000,
                exitTime: 500
            }
        }
    });
});
</script>
