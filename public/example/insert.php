<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>WebServiceLayer - Example</title>

    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../js/webservicelayer.insert.update.js"></script>

</head>
<body style="text-align: center; font-family: 'PT Sans Narrow', sans-serif; ">

<div>
    <div style="text-align: right;"><a href="https://github.com/limaedu/webservicelayer" target="_blank"><img src="http://webservicelayer.com/img/github.jpg" /></a></div>
    <div style="text-align: left; "><a href="http://webservicelayer.com" target="_blank">
            <img src="http://webservicelayer.com/img/logo_WSL.png" style="width: 100px;" /><a>
            <span style="font-weight: bold; font-size: 40px; color: #3498db; ">
                WebServiceLayer
            </span>
    </div>
</div>

<p>

    <br/>
    <br/>

    <br/><br/>Field: campaign &nbsp;&nbsp; <input type="text" id="campaign" name="campaign" value="">
    <br/><br/>Field: pr_name  &nbsp;&nbsp; <input type="text" id="pr_name" name="pr_name" value="">
    <br/><br/>Field: mp3_link &nbsp;&nbsp; <input type="text" id="mp3_link" name="mp3_link" value="http://webservicelayer.info/audios/destruti.mp3">
    <br/><br/>Field: yt_link  &nbsp;&nbsp; <input type="text" id="yt_link" name="yt_link" value="https://www.youtube.info/embed/aJzh0u1DcMk">

    <br/><br/>
    <br/><br/>

    <input type="button" id="insert_btn" value="INSERT">

    <br/><br/>
    <div id="statusMessage"></div>

</p>

</body>
</html>