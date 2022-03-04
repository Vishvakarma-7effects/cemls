<!DOCTYPE html>
<html>

<head>
	<title>abc</title>
</head>

<body>


	{{-- {{ dd($emailDataArr)}} --}}
	@if (isset($emailDataArr['user_created']) && $emailDataArr['user_created'] == '1')
		<h4>Account Created</h4>

		<p>Account using this email have been craeted and password is {{ $emailDataArr['password'] }}.</p>
	@else
		<h4>Your Invited</h4>
	@endif
	{{-- <h1>{{ $emailDataArr['type'] }}</h1> --}}
	<p>{{ $emailDataArr['message'] }}</p>

	<p>Thank you</p>
</body>

</html>
