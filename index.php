<!DOCTYPE html>
<html>
<head>
    <title>Generating QR Code | Babaji Technical</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-danger">
            Generating QR Code | Babaji Technical
        </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="Email" id="Email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Size</label>
                    <select class="form-control" name="qrsize" id="qrsize">
                        <option value="100x100"> 100px X 100px</option>
                        <option value="200x200"> 200px X 200px</option>
                        <option value="300x300"> 300px X 300px</option>
                        <option value="400x400"> 400px X 400px</option>
                    </select>
                </div>
                <input type="button" name="submit" class="btn btn-danger" id="btnSubmit" value="Submit">
            </div>
            <div class="col-md-6">
                <img id="imgQRCode">
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnSubmit").click(function(){
                var name=$("#name").val();
                var email=$("#Email").val();
                var qrsize = $("#qrsize").val();
                var text = name+"~~"+email;
                var url="https://chart.googleapis.com/chart?";
                $("#imgQRCode").attr("src",url+"chs="+qrsize+"&cht=qr&chl="+text+"&choe=UTF-8");

            });
        });
    </script>
</body>
</html>