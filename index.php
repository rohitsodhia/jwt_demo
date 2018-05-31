<html>
<head>
	<script src="/node_modules/jwt-decode/build/jwt-decode.min.js"></script>
	<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
	<script>
		$(function () {
			$('form').submit(function () {
			    var token = $('#token').val();
			    try {
                    var decoded = jwt_decode(token);
                    $('pre').html(JSON.stringify(decoded, null, "\t"));
				} catch (error) {}
			    return false;
			});
		});
	</script>
	<style>
		form > * {
			vertical-align: middle;
		}
		textarea {
			width: 400px;
			height: 8em;
		}
	</style>
</head>
<body>
<form>
	<textarea id="token"></textarea> <button>Decode</button>
</form>
<pre></pre>
</body>
</html>