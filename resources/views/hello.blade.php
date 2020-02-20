<!DOCTYPE html>
<html>
<head>
	<title>Another world</title>
</head>
<body>
	<div class="flex-center full-height">
		<div class="content">
			<div class="title">
				<h1>Haller!</h1>
			</div>
			<div class="lists">
                <p>{{$front_end}}</p>
                @if(count($topics) >0)
                    @foreach($topics as $topic)
                        <li>{{$topic}}</li>
                    @endforeach
                @endif
                {{$count(topic)}}
				
                <ul>
					<li>test</li>
					<li>test</li>
					<li>test</li>
					<li>test</li>
				</ul>
				<a href="../">Back</a>
			</div>
		</div>
	</div>
	<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</body>
</html>