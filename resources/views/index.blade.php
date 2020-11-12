<!DOCTYPE html>
<html>
<head><title>唐詩查詢</title></head>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
    $("#sel").on("change", function(){
        var target_url = "/api/poem/" + this.value;
        $.ajax({
            url: target_url,
            success: function( result ) {
                var target_html = "";
                for (var i=0; i<result.length; i++) {
                    target_html =   target_html + "<strong>" + 
                                    result[i]['title'] + "</strong><br/>" + 
                                    result[i]['content'] + "<br/>";
                }
                $( "#poem" ).html( target_html );
            }
        });
    });
    });
</script>
<body>
    <h2>圖表示範</h2>
    <hr>
 
    <hr>
<h2>唐詩查詢</h2><hr>
詩人：
<select id="sel">
@foreach ($authors as $author)
<option value='{{$author->id}}'>{{ $author->name }}</option>
@endforeach
</select>
<hr>
<div id="poem">尚未選擇</div>

</body>
</html>
