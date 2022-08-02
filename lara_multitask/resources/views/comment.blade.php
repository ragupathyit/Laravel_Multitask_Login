<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style-with-prefix.css') }}">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container" style="max-width:900px; background-color:#d9d4c5; padding:5px; !important">
			<div class="row">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="50%"><h5>DASHBOARD</h5></td>
						<td align="right"><h5>Hi,
                            @if(Session::has('adminname'))
                                {{ Session::get('adminname') }}
                            @endif
                            @if(Session::has('customername'))
                                {{ Session::get('customername') }}
                            @endif
                            </h5>
                        </td>
					</tr>
				</table>
				<hr/>
				<form name="frm" method="post" action="{{ route('comments.store') }}">
                    @csrf
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td width="80%"><textarea name="comments" rows="4" cols="100"></textarea></td>
							<td align="center"><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
				<hr>
				<h5>COMMENTS</h5>
				<hr>
                <center>
                <table border="0" cellpadding="0" cellspacing="0" width="80%">
                    @forelse($lists as $row)
                    <tr height="80">
                        <td><img src="assets/images/samp.png" width="30" height="30"></td>
                        <td>
                            <b>{{ $row->usernames }}</b>
                            <br>
                            {{ $row->comment }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2">--Nil--</td>
                    </tr>
                    @endforelse
                </table>
                </center>
			</div>

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>
